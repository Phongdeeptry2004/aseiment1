<?php 
namespace App\Controllers;
use App\Models\TruyenModel;
Class HomeController extends BaseController{
    public function index(){
        $Truyen=TruyenModel::all();
        $this->view("/view/headder",[]);
        $this->view("/view/list",$Truyen);
        $this->view("/view/footer",[]);
    }
    public function adminIndex(){
        return $this->view('/clients/home',[]);
    }
    public function detail(){
        // $id=$_GET['id'];
        $truyen=TruyenModel::find('MaTruyen',$id);
        foreach ($truyen as $key => $value) {
            echo $key ." : ";
            echo $value ."<br>";
        }
    }
}
