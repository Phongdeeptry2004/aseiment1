<?php 
namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\TruyenModel;

Class CategoryController extends BaseController{
    public function list(){
        $d=new CategoryModel();
        $danhmuc= $d->allWithJoin();
        $this->view("/view/admin/layout/header",[]);
        $this->view("/view/admin/danhmuc/list",['danhmuc'=>$danhmuc]);
        $this->view("/view/admin/layout/footer",[]);
    }
    public function edit(){
        $ma=$_GET["id"];
        $theloai=CategoryModel::all();
        $truyen=TruyenModel::all();
        $d=new CategoryModel();
        $danhmuc = $d->allWithJoinid($ma);
        $this->view("/view/admin/layout/header",[]);
        $this->view('/view/admin/danhmuc/edit',['danhmuc'=>$danhmuc,'theloai'=>$theloai,'truyen'=>$truyen]);
        $this->view("/view/admin/layout/footer",[]);

    }
    public function update(){
        $data=$_POST; 
        $truyen= new CategoryModel();
        $truyen->update($data['MaDanhMuc'],$data);
        header('Location: '.ROOT_PATH .'admin/editcategory?id='.$data['MaDanhMuc']);
        die();
    }
    public function create(){
        $theloai=CategoryModel::all();
        $truyen=TruyenModel::all();
        $this->view("/view/admin/layout/header",[]);
        $this->view("/view/admin/danhmuc/add",['theloai'=>$theloai,'truyen'=>$truyen]);
        $this->view("/view/admin/layout/footer",[]);
    
    }
    public function store(){
        $data=$_POST;
        $truyen= new CategoryModel();
        $truyen->add($data);
        header('Location: '.ROOT_PATH .'admin/category');
        die;
    }
    public function delete(){
        $id=$_GET['id'];
        CategoryModel::delete("MaDanhMuc",$id);
        setcookie("Message","Xoá dữ liệu thành công",time()+1);
        header('Location: '.ROOT_PATH .'admin/category');

    }

}
