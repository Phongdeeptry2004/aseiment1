<?php
require "./env.php";
require "./config.php";
require_once __DIR__ . "/vendor/autoload.php";
// require_once "./app/Controllers/BaseControllers.php";

use App\Controllers\BaseController;
use App\Controllers\CategoryController;
use App\Controllers\ChuongController;
use App\Controllers\HomeController;
use App\Controllers\ListController;
use App\Controllers\TaiKhoanController;
use App\Controllers\TruyenController;
use App\Controllers\UserController;
use App\Models\TruyenModel;
use App\Models\ChuongModel;
use App\Router;
// use App\Controller;

// Instantiate the router
$router = new Router();

// Define routes
Router::get("/home",[HomeController::class,'index']);
Router::get("/",[HomeController::class,'index']);
Router::get("/truyen",[TruyenController::class,'gioithieutruyen']);
Router::get("/chuong",[ChuongController::class,'Chuong']);
Router::get("/sang-tac",[ListController::class,'List']);
Router::get("/danh-sach",[ListController::class,'List']);
//admin
// list truyen
Router::get('/admin', [HomeController::class, 'adminIndex']);
Router::get("/admin/list",[ListController::class,'ListAdmin']);
Router::get("/admin/addtruyen",[ListController::class,'create']);
Router::post("/admin/addtruyen",[ListController::class,'store']);
Router::get("/admin/edittruyen",[ListController::class,'edit']);
Router::post("/admin/edittruyen",[ListController::class,'update']);
Router::get("/admin/deletetruyen",[ListController::class,'delete']);
//user
Router::get("/admin/user",[UserController::class,'listuser']);
Router::get("/admin/adduser",[UserController::class,'create']);
Router::post("/admin/adduser",[UserController::class,'store']);
Router::get("/admin/edituser",[UserController::class,'edit']);
Router::post("/admin/edituser",[UserController::class,'update']);
Router::get("/admin/deleteuser",[UserController::class,'delete']);
//category
Router::get("/admin/category",[CategoryController::class,"list"]);
Router::get("/admin/editcategory",[CategoryController::class,"edit"]);
Router::post("/admin/editcategory",[CategoryController::class,"update"]);
Router::get("/admin/addcategory",[CategoryController::class,"create"]);
Router::post("/admin/addcategory",[CategoryController::class,"store"]);
Router::get("/admin/deletecategory",[CategoryController::class,"delete"]);
//login 
Router::get("/login",[TaiKhoanController::class,"FromLogin"]);
Router::post("/login",[TaiKhoanController::class,"Login"]);
Router::get("/register",[TaiKhoanController::class,"FromRegister"]);
Router::post("/register",[TaiKhoanController::class,"Register"]);
Router::get("/logout",[TaiKhoanController::class,"logout"]);

// Resolve the current route
$router->resolve(); 
