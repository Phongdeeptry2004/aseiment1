<?php 
namespace App\Controllers;

use App\Models\ChuongModel;
use App\Models\TruyenModel;
Class ChuongController extends BaseController{
    public function Chuong(){
        
        $idchuong=$_GET['ma-chuong'];
        // echo $idtruyen;
        $data=ChuongModel::find('MaChuong',$idchuong);
        $this->view("/view/chuongtruyen",(array)$data);
        $this->view("/view/footer",[]);
    }
}