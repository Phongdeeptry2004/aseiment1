<?php 
namespace App\Controllers;
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

}