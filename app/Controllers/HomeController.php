<?php 
namespace App\Controllers;
use App\Models\TruyenModel;
Class HomeController extends BaseController{
    public function index(){
        $Truyen=TruyenModel::all();
        $this->view("/view/headder",[]);
        $this->view("/view/noibat_thaoluan_lichsu",[]);
        $this->view("/view/moinhat_binhluan",$Truyen);
        $this->view("/view/footer",[]);
    }
    public function adminIndex(){
        return $this->view('/clients/home',[]);
    }
    
}
