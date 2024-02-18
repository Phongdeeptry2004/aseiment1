<?php 
namespace App\Controllers;

use App\Models\ChuongModel;
use App\Models\TruyenModel;
use App\Models\LichSuModel;
Class LichSuController extends BaseController{
    public function lichsu(){
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
        $this->view("/view/headder",[]);
        $this->view("/view/user/lichsu/lichsu",['LsCookie'=>$LsCookie,'LSTK'=>$LSTK]);
        $this->view("/view/footer",[]);
    }
    public static function xoa(){
        $id=$_GET['id'];
        LichSuModel::delete("MaLichSu",$id);
        setcookie("Message","Xoá dữ liệu thành công",time()+1);
        header('Location: '.ROOT_PATH .'lich-su-doc');
    }
}