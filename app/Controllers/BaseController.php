<?php
namespace App\Controllers;
class BaseController {
    public function view($path, $data=[]){
        
        include_once "app/$path.php";
        
    }
}
