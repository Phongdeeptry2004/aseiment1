<?php

namespace App\Controllers;

use App\Models\ChuongModel;
use App\Models\LichSuModel;
use App\Models\TruyenModel;
use App\Models\DanhmucModel;


class TruyenController extends BaseController
{
    public function gioithieutruyen()
    {
        $idtruyen = $_GET['id'];
        // echo $idtruyen;
        $data = TruyenModel::find('MaTruyen', $idtruyen);
        $this->view("/view/headder", []);
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
    public function listtruyen(){
        $id=json_decode($_COOKIE['TaiKhoan'])->MaNguoiDung;
        $listTruyen=TruyenModel::find("MaNguoiDang",$id);
        $this->view("/view/user/layout/header", []);
        $this->view('/view/user/taikhoan/truyen/list', ["Truyen"=>$listTruyen]);
        $this->view("/view/user/layout/footer", []);
    }
    public function List(){
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $Truyen =TruyenModel::find("MaDanhMuc",$id);
            $message=$_COOKIE['message']??"";
        }else{
            $Truyen=TruyenModel::all();
            $message=$_COOKIE['message']??"";
        }
        $data=(array)$Truyen;
        $this->view("/view/headder",[]);
        $this->view("/view/list",(array)$Truyen);
        $this->view("/view/footer",[]);
    }
    public function create(){
        $theloai=DanhmucModel::all();
        $this->view("/view/user/layout/header",[]);
        $this->view("/view/user/taikhoan/truyen/add",(array)$theloai);
        $this->view("/view/admin/layout/footer",[]);
    
    }
    public function store(){
        $data=$_POST;
        $file=$_FILES['img'];
        $image="path/".$file['name'];        
        move_uploaded_file($file['tmp_name'], "img/".$image);
        $data['img']=$image;
        $truyen= new TruyenModel();
        $truyen->add($data);
        header('Location: '.ROOT_PATH .'action/list');
        die;
    }
    //form sửa truyen
    public function edit(){
        $ma=$_GET["id"];
        $truyen=TruyenModel::find("MaTruyen",$ma);
        $theloai=DanhmucModel::all();
        $this->view("/view/user/layout/header",[]);
        $this->view('/view/user/taikhoan/truyen/edit',['truyen'=>$truyen,"DanhMuc"=>$theloai]);
        $this->view("/view/user/layout/footer",[]);

    }
    public function update(){
        $data=$_POST;
        $file=$_FILES['img'];
        if($file['size']>0){
            $image="path/".$file['name'];
            move_uploaded_file($file['tmp_name'], "img/".$image);
            $data['img']=$image;
        }  
        $truyen= new TruyenModel();
        $truyen->update($data['MaTruyen'],$data);
        header('Location: '.ROOT_PATH .'action/edittruyen?id='.$data['MaTruyen']);
        die();
    }
    public function delete(){
        $id=$_GET['id'];
        TruyenModel::delete("MaTruyen",$id);
        setcookie("Message","Xoá dữ liệu thành công",time()+1);
        header('Location: '.ROOT_PATH .'admin/list');

    }
    
}
