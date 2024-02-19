<?php

namespace App\Controllers;

use App\Models\LichSuModel;
use App\Models\TruyenModel;

class HomeController extends BaseController
{
    public function index()
    {
        $Truyen = TruyenModel::all();
        if (isset($_COOKIE['TaiKhoan'])) {
            setcookie('lichsu',"",time()-3600,'/');  // xóa cookie lịch sử truyện đã đọc khi vào tr
            $MaNguoiDung=json_decode($_COOKIE['TaiKhoan'])->MaNguoiDung;
            $LSTK=LichSuModel::getAll($MaNguoiDung);
        }else{
            $LSTK="";
        }
        if (isset($_COOKIE['lichsu'])) {
            $lichsu = get_object_vars(json_decode($_COOKIE['lichsu']));
            $allLS = LichSuModel::Alltruyen();
            // Tạo một mảng để lưu kết quả
            $result = [];

            // Vòng lặp dựa vào ChapDocGanNhat của mảng thứ hai
            foreach ($lichsu as $key => $obj) {
                // Tìm kiếm đối tượng có MaChuong tương ứng trong mảng thứ nhất
                $found = array_filter($allLS, function ($item) use ($obj) {
                    return $item["MaTruyen"] == $obj->MaTruyen && $item["MaChuong"] == $obj->ChapDocGanNhat;
                });

                // Nếu tìm thấy, thêm vào kết quả
                if (!empty($found)) {
                    $result[$key] = reset($found);
                }
            }
            $LsCookie=$result;
        }else{
            $LsCookie="";
        }
        $this->view("/view/headder", []);
        $this->view("/view/noibat_thaoluan_lichsu", ['LsCookie'=>$LsCookie,'LsTK'=>$LSTK]);
        $this->view("/view/moinhat_binhluan", ['Truyen'=>$Truyen,'LsCookie'=>$LsCookie,'LSTK'=>$LSTK]);
        $this->view("/view/footer", []);
    }
    public function adminIndex()
    {
        $this->view('/view/admin/layout/header', []);
        $this->view('/view/admin/layout/home', []);
        $this->view('/view/admin/layout/footer', []);
    }
    public function action(){
        $this->view("/view/user/layout/header", []);
        $this->view('/view/user/taikhoan/action', []);
        $this->view("/view/user/layout/footer", []);
    }
}
