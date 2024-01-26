<?php 
namespace App\Controllers;
use App\Models\TruyenModel;
Class TruyenController extends BaseController{
    public function gioithieutruyen(){
        // $idtruyen=$_GET['id'];
        // echo $idtruyen;
        // $data=TruyenModel::find('MaTuyen',$idtruyen);
        $this->view("/view/headder",[]);
        $this->view("/view/gioithieutruyen",[]);
        $this->view("/view/footer",[]);
    }
}