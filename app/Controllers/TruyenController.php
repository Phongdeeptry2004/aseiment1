<?php 
namespace App\Controllers;
use App\Models\ChuongModel;
use App\Models\TruyenModel;
Class TruyenController extends BaseController{
    public function gioithieutruyen(){
        $idtruyen=$_GET['id'];
        // echo $idtruyen;
        $data=TruyenModel::find('MaTruyen',$idtruyen);
        $this->view("/view/header_nobanner",[]);
        $this->view("/view/gioithieutruyen",(array)$data);
        $this->view("/view/footer",[]);
    }
    


}