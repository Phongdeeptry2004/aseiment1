<?php 
namespace App\Controllers;
use App\Models\ChuongModel;
use App\Models\TruyenModel;
use App\Models\UserModel;

Class UserController extends BaseController{
    public function listuser(){
        $data=UserModel::all();
        $this->view("/view/header_nobanner",[]);
        $this->view("/view/admin/nguoidung/list",(array)$data);
        $this->view("/view/footer",[]);
    }
    


}