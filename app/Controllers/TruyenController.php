<?php

namespace App\Controllers;

use App\Models\ChuongModel;
use App\Models\LichSuModel;
use App\Models\TruyenModel;

class TruyenController extends BaseController
{
    public function gioithieutruyen()
    {
        $idtruyen = $_GET['id'];
        // echo $idtruyen;
        $data = TruyenModel::find('MaTruyen', $idtruyen);
        $this->view("/view/header_nobanner", []);
        $this->view("/view/gioithieutruyen", (array)$data);
        $this->view("/view/footer", []);
    }
    public function LichSu()
    {
        $MaChuong = $_GET['ma-chuong'];
        $MaTruyen = ChuongModel::find("MaChuong", $MaChuong)->MaTruyen;
        if (isset($_COOKIE['TaiKhoan'])) {
            $lichsu = new LichSuModel();
            $TaiKhoan = json_decode($_COOKIE["TaiKhoan"]);
            $allLS = $lichsu->where("MaNguoiDung","=",$TaiKhoan->MaNguoiDung)->andWhere("MaTruyen","=",$MaTruyen)->get();
            $data = [
                "MaNguoiDung" => $TaiKhoan->MaNguoiDung,
                "MaTruyen" => $MaTruyen,
                "ChapDocGanNhat" => $MaChuong
            ];
            if ($allLS!=null) {
                $lichsu->update($allLS[0]->MaLichSu,$data);
            } else {
                $lichsu->add($data);
            }
        } 
        if (isset($_COOKIE['lichsu'])) {
            $existingData = json_decode($_COOKIE['lichsu'], true);
    
            if (isset($existingData[$MaTruyen])) {
                // Nếu đã đọc truyện này trước đó, cập nhật thông tin
                $existingData[$MaTruyen]['ChapDocGanNhat'] = $MaChuong;
            } else {
                // Nếu chưa đọc truyện này trước đó, thêm mới thông tin
                $existingData[$MaTruyen] = [
                    'MaTruyen' => $MaTruyen,
                    'ChapDocGanNhat' => $MaChuong
                ];
            }
    
            $updatedData = json_encode($existingData);
            setcookie('lichsu', $updatedData, time() + 360000);
        } else {
            // Nếu chưa có cookie lịch sử, tạo mới và thêm thông tin đầu tiên
            $data = [
                $MaTruyen => [
                    'MaTruyen' => $MaTruyen,
                    'ChapDocGanNhat' => $MaChuong
                ]
            ];
    
            $data = json_encode($data);
            setcookie('lichsu', $data, time() + 360000);
        }
    }
    public function getLS(){
        
    }
    
}
