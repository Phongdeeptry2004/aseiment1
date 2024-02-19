<?php

namespace App\Controllers;

use App\Models\ChuongModel;
use App\Models\TruyenModel;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function listuser()
    {
        $data = UserModel::all();
        $this->view("/view/admin/layout/header", []);
        $this->view("/view/admin/nguoidung/list", (array)$data);
        $this->view("/view/admin/layout/footer", []);
    }
    public function create()
    {
        $this->view("/view/admin/layout/header", []);
        $this->view("/view/admin/nguoidung/add", []);
        $this->view("/view/admin/layout/footer", []);
    }
    public function store()
    {
        $data = $_POST;
        $file = $_FILES['Avatar'];
        $image = "avatar/" . $file['name'];
        move_uploaded_file($file['tmp_name'], "img/" . $image);
        $data['Avatar'] = $image;
        $truyen = new UserModel();
        $truyen->add($data);
        header('Location: ' . ROOT_PATH . 'admin/user');
        die;
    }
    //form sửa truyen
    public function edit()
    {
        $ma = $_GET["id"];
        $user = UserModel::find("MaNguoiDung", $ma);
        $id=json_decode($_COOKIE['TaiKhoan'])->MaNguoiDung;
        $listTruyen=TruyenModel::find("MaNguoiDang",$id);
        $this->view("/view/admin/layout/header", []);
        $this->view('/view/admin/nguoidung/edit', ['user' => $user,"Truyen"=>$listTruyen]);
        $this->view("/view/admin/layout/footer", []);
    }
    public function update()
    {
        $data = $_POST;
        $file = $_FILES['Avatar'];
        if ($file['size'] > 0) {
            $image = "avatar/" . $file['name'];
            move_uploaded_file($file['tmp_name'], "img/" . $image);
            $data['Avatar'] = $image;
        }
        $truyen = new UserModel();
        $truyen->update($data['MaNguoiDung'], $data);
        header('Location: ' . ROOT_PATH . 'admin/edituser?id=' . $data['MaNguoiDung']);
        die();
    }
    public function delete()
    {
        $id = $_GET['id'];
        UserModel::delete("MaNguoiDung", $id);
        setcookie("Message", "Xoá dữ liệu thành công", time() + 1);
        header('Location: ' . ROOT_PATH . 'admin/user');
    }

}
