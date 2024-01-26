<?php 
namespace App\Controllers;
use App\Models\TruyenModel;
Class ListController extends BaseController{
    public function List(){
        $Truyen=TruyenModel::all();
        $data=(array)$Truyen;
        $this->view("/view/headder",[]);
        $this->view("/view/list",$Truyen);
        $this->view("/view/footer",[]);
    }

}