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
        var_dump($MaTruyen);
        if (isset($_COOKIE['TaiKhoan'])) {
            $lichsu = new LichSuModel();
            $TaiKhoan = json_decode($_COOKIE["TaiKhoan"]);
            $allLS = $lichsu->where("MaNguoiDung","=",$TaiKhoan->MaNguoiDung)->andWhere("MaTruyen","=",$MaTruyen)->get();
            $data = [
                "MaNguoiDung" => $TaiKhoan->MaNguoiDung,
                "MaTruyen" => $MaTruyen,
                "ChapDocGanNhat" => $MaChuong
            ];
            // var_dump($allLS);
            if ($allLS!=null) {
                $lichsu->update($allLS[0]->MaLichSu,$data);
            } else {
                $lichsu->add($data);
            }
        } else {
            if (isset($_COOKIE['lichsu'])) {
            }
            $d = [
                "MaTruyen" => $MaTruyen,
                "ChapDocGanNhat" => $MaChuong
            ];
            $data = json_encode($d);
            setcookie('lichsu', $data, time() + 360000);
        }
    }
    
}
