<?php 
namespace App\Controllers;

use App\Models\ChuongModel;
use App\Models\TruyenModel;
Class ChuongController extends BaseController{
    public function GetChuong(){
        
        $idchuong=$_GET['ma-chuong'];
        // echo $idtruyen;
        $lichsu=new TruyenController();
        $lichsu->LichSu();
        $data=ChuongModel::find('MaChuong',$idchuong);
        $this->view("/view/chuongtruyen",(array)$data);
        $this->view("/view/footer",[]);
    }
    public function listchuong(){
        $MaTruyen=$_GET['id'];
        $Chuong=ChuongModel::getChuong("Matruyen",$MaTruyen);
        $this->view('/view/user/layout/header', []);
        $this->view("/view/user/chuong/list",['Chuong'=>$Chuong,'MaTruyen'=>$MaTruyen]);
        $this->view("/view/footer",[]);

    }
    public function themchuong(){
        $MaTruyen=$_GET['id'];
        $Truyen=TruyenModel::find('Matruyen',$MaTruyen);
        $Chuong=ChuongModel::find("MaTruyen",$MaTruyen);
        $this->view('/view/user/layout/header', []);
        $this->view("/view/user/chuong/add",['MaTruyen'=>$MaTruyen, 'Truyen' => $Truyen,'Chuong'=>$Chuong]);
        $this->view("/view/footer",[]);
    }
    public function them(){
        $data=$_POST;
        $c=new ChuongModel();
        $c->add($data);
        header('Location: '.ROOT_PATH."action/chuongtruyen?id=".$data['MaTruyen']);
        die;
    }
    public function xoa(){
        $id=$_GET['id'];
        $MaTruyen=$_GET['matruyen'];
        ChuongModel::delete("MaChuong",$id);
        setcookie("Message","Xoá dữ liệu thành công",time()+1);
        header('Location: '.ROOT_PATH."action/chuongtruyen?id=".$MaTruyen);

    }
}