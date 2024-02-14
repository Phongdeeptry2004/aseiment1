<?php

namespace App\Controllers;

use App\Models\TaiKhoanModel;

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
        $allTK = TaiKhoanModel::all();
        $userArray = []; // Khởi tạo mảng để lưu tên người dùng và mật khẩu

        if (isset($_POST["TenDangNhap"]) && isset($_POST['MatKhau'])) {
            $TenDangNhap = $_POST["TenDangNhap"];
            foreach ($allTK as $tk) {
                if ($TenDangNhap == $tk->TenDangNhap && $_POST['MatKhau'] == $tk->MatKhau) {
                    // Lưu tên người dùng và mật khẩu vào mảng
                    $userArray["MaNguoiDung"] = $tk->MaNguoiDung;
                    $userArray["TenDangNhap"] = $tk->TenDangNhap;
                    $userArray["MatKhau"] = $tk->MatKhau;
                    setcookie('TaiKhoan', json_encode($userArray), time() + 3600, "/");
                    header("Location: " . ROOT_PATH);
                } else {
                    setcookie('Eror', "Sai tài khoản hoặc mật khẩu", time() + 5);
                    header("Location: " . ROOT_PATH . "login");
                }
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
    $d = $_POST;
    $RePass = array_pop($d); // Xóa phần tử cuối của mảng
    $alltk = TaiKhoanModel::all();
    foreach ($alltk as $value) {
        var_dump(($value->TenDangNhap == $d['TenDangNhap']));
        if ($value->TenDangNhap == $d['TenDangNhap']) {
            return; // Tên đăng nhập đã tồn tại, không thêm tài khoản mới
        } else {
            if ($d['MatKhau'] != $RePass) {
                return; // Mật khẩu không khớp, không thêm tài khoản mới
            } else {
                $store = new TaiKhoanModel();
                $store->add($d); // Thêm tài khoản vào cơ sở dữ liệu
                setcookie("DangKyTC", "Đăng Ký Thành Công Vui Lòng Đăng Nhập", time() + 5);
                // header("Location:" . ROOT_PATH . "login"); // Chuyển hướng đến trang đăng nhập
                return;
            }
        }
    }
}

}
