<?php
namespace App\Controller;
class BaseController {
    public function view($path, $data=[]){
        include_once "app/view/$path.php";
        
    }
}
