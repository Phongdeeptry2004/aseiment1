<?php
require "./env.php";
require "./config.php";
require_once __DIR__ . "/vendor/autoload.php";
// require_once "./app/Controllers/BaseControllers.php";

use App\Controllers\ChuongController;
use App\Controllers\HomeController;
use App\Controllers\ListController;
use App\Controllers\TruyenController;
use App\Models\TruyenModel;
use App\Models\ChuongModel;
use App\Router;
// use App\Controller;

// Instantiate the router
$router = new Router();

// Define routes
Router::get("/home",[HomeController::class,'index']);
Router::get("/truyen",[TruyenController::class,'gioithieutruyen']);
Router::get("/chuong",[ChuongController::class,'Chuong']);
Router::get("/sang-tac",[ListController::class,'List']);
Router::get("/danh-sach",[ListController::class,'List']);

// Resolve the current route
$router->resolve(); 
