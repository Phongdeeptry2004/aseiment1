<?php
require "./env.php";
require "./config.php";
require_once __DIR__ . "/vendor/autoload.php";
// require_once "./app/Controllers/BaseControllers.php";


use App\Controllers\HomeController;
use App\Models\TruyenModel;
use App\Models\ChuongModel;
use App\Router;
// use App\Controller;

// Instantiate the router
$router = new Router();

// Define routes
Router::get("/home",[HomeController::class,'index']);

// Resolve the current route
$router->resolve(); 
