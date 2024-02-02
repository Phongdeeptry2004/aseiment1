<?php 
namespace App\Controllers;
use App\Models\CategoryModel;
Class CategoryController extends BaseController{
    public function list(){
        $danhmuc=CategoryModel::all();
        $this->view("/view/admin/layout/headder",[]);
        $this->view("/view/admin/danhmuc/list",['danhmuc'=>$danhmuc]);
        $this->view("/view/admin/layout/footer",[]);
    }

}
