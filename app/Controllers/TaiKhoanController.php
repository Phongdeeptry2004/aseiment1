<?php

namespace App\Controllers;

use App\Models\TaiKhoanModel;
use App\Models\TruyenModel;

class TaiKhoanController extends BaseController
{
    // public function List()
    // {
    //     if (isset($_GET['id'])) {
    //         $id = $_GET['id'];
    //         $TaiKhoan = TaiKhoanModel::find("MaNguoiDung", $id);
    //         $message = $_COOKIE['message'] ?? "";
    //     } else {
    //         $TaiKhoan = TaiKhoanModel::all();
    //         $message = $_COOKIE['message'] ?? "";
    //     }
    //     $data = (array)$TaiKhoan;
    //     $this->view("/view/headder", []);
    //     $this->view("/view/user/taikhoan/login", (array)$TaiKhoan);
    //     $this->view("/view/footer", []);
    // }
    public function Login()
    {
        if (isset($_POST["TenDangNhap"]) && isset($_POST['MatKhau'])) {
            $username = trim($_POST["TenDangNhap"]);
            $password = trim($_POST['MatKhau']);


            $user = TaiKhoanModel::where('TenDangNhap', '=', $username)->get();
            // var_dump($user);
            // var_dump($password,$username);
            // var_dump(password_verify($password, $user[0]->MatKhau));
            // die;
            if ($user && $password === $user[0]->MatKhau) {
                // Password is correct
                $userArray = [
                    "MaNguoiDung" => $user[0]->MaNguoiDung,
                    "TenDangNhap" => $user[0]->TenDangNhap,
                    // You may choose not to store the password in the cookie for security reasons
                ];

                setcookie('TaiKhoan', json_encode($userArray), time() + 3600, "/");
                header("Location: " . ROOT_PATH);
                exit;
            } else {
                // Username or password is incorrect
                setcookie('Eror', "Sai tài khoản hoặc mật khẩu", time() + 5);
                header("Location: " . ROOT_PATH . "login");
                exit;
            }
        }
    }


    public function Logout()
    {
        setcookie('TaiKhoan', '', time() - 3600, '/'); // set cookie expired when close browser 
        header("Location: " . ROOT_PATH);
    }
    public function FromLogin()
    {
        $allTK = TaiKhoanModel::all();
        $this->view('/view/user/taikhoan/login', []);
    }
    public function FromRegister()
    {
        $this->view('view/user/taikhoan/register', []);
    }
    public function Register()
    {
        $data = $_POST;
        $repass = array_pop($data); //lấy giá trị của phần tử cuối cùng của mảng

        // Check if the required fields are set
        if (empty($data['TenDangNhap']) || empty($data['Email']) || empty($data['MatKhau']) || empty($repass)) {
            // Handle the case where some required fields are empty
            setcookie('Eror', "Vui lòng điền đầy đủ thông tin đăng ký.", time() + 5);
            header("Location: " . ROOT_PATH . "register"); // Redirect back to the registration page
            exit;
        }
        // Check if the password and confirmation match
        if ($data['MatKhau'] !== $repass) {
            setcookie('Eror', "Mật khẩu và xác nhận mật khẩu không khớp.", time() + 5);
            header("Location: " . ROOT_PATH . "register"); // Redirect back to the registration page
            exit;
        }
        // Check if the username already exists
        $existingUser = TaiKhoanModel::where('TenDangNhap', "=", $data['TenDangNhap'])->get();
        if ($existingUser) {
            setcookie('Eror', "Tên đăng nhập đã tồn tại. Vui lòng chọn một tên khác.", time() + 5);
            header("Location: " . ROOT_PATH . "register"); // Redirect back to the registration page
            exit;
        }

        // If everything is valid, proceed with user registration
        $newUser = new TaiKhoanModel();
        $newUser->add($data);

        setcookie("DangKyTC", "Đăng ký thành công. Vui lòng đăng nhập.", time() + 5);
        header("Location: " . ROOT_PATH . "login"); // Redirect to the login page
        exit;
    }

    public function info()
    {
        $MND = $_GET['id'];
        $userinfo = TaiKhoanModel::find("MaNguoiDung", $MND);
        var_dump($userinfo);
        $listTruyen=TruyenModel::find("MaNguoiDang",$userinfo->MaNguoiDung);
        $this->view("/view/header_nobanner", []);
        $this->view('view/user/userinfo/info', ["ThongTin" => $userinfo,"Truyen"=>$listTruyen]);
        $this->view("/view/footer", []);
    }
}
