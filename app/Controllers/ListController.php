<?php 
namespace App\Controllers;
use App\Models\DanhmucModel;
use App\Models\TruyenModel;
Class ListController extends BaseController{
    public function List(){
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $Truyen =TruyenModel::find("MaDanhMuc",$id);
        }else{
            $Truyen=TruyenModel::all();
        }
        $data=(array)$Truyen;
        $this->view("/view/headder",[]);
        $this->view("/view/list",(array)$Truyen);
        $this->view("/view/footer",[]);
    }
    public function ListAdmin(){
        $Truyen=TruyenModel::all();
        $this->view("/view/headder",[]);
        $this->view("/view/admin/truyen/list",(array)$Truyen);
        $this->view("/view/footer",[]);
    }
    public function create(){
        $theloai=DanhmucModel::all();
        $this->view("/view/headder",[]);
        $this->view("/view/admin/truyen/add",(array)$theloai);
        $this->view("/view/footer",[]);
    }
    public function store(){
        $data=$_POST;
        $file=$_FILES['img'];
        $image=$_FILES['name'];
        move_uploaded_file($file['tmp_name'], "img/path/".$image);
        $data['img']=$image;
        $truyen= new TruyenModel();
        $truyen->add($data);
        header('Location: '.ROOT_PATH .'listadmin');

    }
}