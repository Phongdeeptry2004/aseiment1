<?php

namespace App;

class Router
{
    protected static $routes = [];
    //method get: dùng để gọi ddeens đường dẫn $path theo phương thức GET

    public static function get($path, $callback)
    {
        static::$routes['get'][$path] = $callback;
    }
    //method get: dùng để gọi ddeens đường dẫn $path theo phương thức POST

    public static function post($path, $callback)
    {
        static::$routes['post'][$path] = $callback;
    }
    //Hàm kiểm tra xem yêu cầu hiện
    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
    //Method Resolve : để giải quyết các đường dẫ được truyền vào $routes
    public function resolve()
    {
        $method = $this->getMethod();
        $path = str_replace(URI, "/", $_SERVER['REQUEST_URI']);
        //tìm vị trí của dấu hỏi chấm

        $position=strpos($path, "?");
        //cắt bỏ phần tham số
        if($position){ 
        $path=substr($path,0,$position);
        }
        // echo $path;
        $callback = false;
        if (isset(static::$routes[$method][$path])) {
            $callback = static::$routes[$method][$path];
        }
        // var_dump($callback);
        if ($callback === false) {
            // Handle case when route is not found (404 Not Found)
            http_response_code(404);
            echo "404 Not Found  ";
            die;
        }
        if (is_callable($callback)) {
            return $callback();
        }
        if (is_array($callback)) {
            $callback[0] = new $callback[0];
            return call_user_func($callback);
        }
    }
}
