<?php 
namespace App\Controllers;
use App\Models\DanhmucModel;
use App\Models\TruyenModel;
Class ListController extends BaseController{
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
    public function ListAdmin(){
        $Truyen=TruyenModel::all();
        $this->view("/view/admin/layout/header",[]);
        $this->view("/view/admin/truyen/list",(array)$Truyen);
        $this->view("/view/admin/layout/footer",[]);
    }
    public function create(){
        $theloai=DanhmucModel::all();
        $this->view("/view/admin/layout/header",[]);
        $this->view("/view/admin/truyen/add",(array)$theloai);
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
        header('Location: '.ROOT_PATH .'admin/list');
        die;
    }
    //form sửa truyen
    public function edit(){
        $ma=$_GET["id"];
        $truyen=TruyenModel::find("MaTruyen",$ma);
        $theloai=DanhmucModel::all();
        $this->view("/view/admin/layout/header",[]);
        $this->view('/view/admin/truyen/edit',['truyen'=>$truyen,"DanhMuc"=>$theloai]);
        $this->view("/view/admin/layout/footer",[]);

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
        header('Location: '.ROOT_PATH .'admin/edittruyen?id='.$data['MaTruyen']);
        die();
    }
    public function delete(){
        $id=$_GET['id'];
        TruyenModel::delete("MaTruyen",$id);
        setcookie("Message","Xoá dữ liệu thành công",time()+1);
        header('Location: '.ROOT_PATH .'admin/list');

    }
}