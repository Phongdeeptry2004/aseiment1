<?php 
namespace App\Controllers;
use App\Models\TruyenModel;
Class HomeController extends BaseController{
    public function index(){
        $Truyen=new TruyenModel();
        $data=$Truyen->all();
        $this->view("headder",[]);
        $this->view("list",$data);
        $this->view("footer",[]);
    }
}
