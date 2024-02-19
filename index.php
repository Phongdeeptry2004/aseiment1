<?php
require "./env.php";
require "./config.php";
require_once __DIR__ . "/vendor/autoload.php";
// require_once "./app/Controllers/BaseControllers.php";

use App\Controllers\BaseController;
use App\Controllers\CategoryController;
use App\Controllers\ChuongController;
use App\Controllers\HomeController;
use App\Controllers\LichSuController;
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
// Router::get("/chuong",[TruyenController::class,'LichSu']);
Router::get("/chuong",[ChuongController::class,'GetChuong']);
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
//user admin
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
//Lịch sử
Router::get("/lich-su-doc",[LichSuController::class,"lichsu"]);
Router::get("/xoa-lich-su",[LichSuController::class,"xoa"]);
// action user :
Router::get("/action",[HomeController::class,"action"]);
Router::get("/action/list",[TruyenController::class,"listtruyen"]);
Router::get("/action/tai-khoan",[UserController::class,"action"]);
Router::get("/action/addtruyen",[TruyenController::class,'create']);
Router::post("/action/addtruyen",[TruyenController::class,'store']);
Router::get("/action/edittruyen",[TruyenController::class,'edit']);
Router::post("/action/edittruyen",[TruyenController::class,'update']);
Router::get("/action/deletetruyen",[TruyenController::class,'delete']);
Router::get("/action/chuongtruyen",[ChuongController::class,'listchuong']);
Router::get("/action/chuongtruyen/add",[ChuongController::class,'themchuong']);
Router::post("/action/chuongtruyen/add",[ChuongController::class,'them']);
Router::get("/action/chuongtruyen/delete",[ChuongController::class,'xoa']);
Router::get("/action/chuongtruyen/update",[ChuongController::class,'sua']);
Router::post("/action/chuongtruyen/update",[ChuongController::class,'update']);

Router::get("/thanh-vien",[TaiKhoanController::class,"info"]);

// Resolve the current route
$router->resolve(); 
