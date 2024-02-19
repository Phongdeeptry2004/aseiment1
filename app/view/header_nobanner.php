<!DOCTYPE html>
<html lang="vi" class="light">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang chủ - Cổng Light Novel - Đọc Light Novel</title>
    <meta name="description" content="Đọc Light Novel online, bình luận Light Novel. Thư viện Light Novel Tiếng Việt lớn nhất, chất lượng cao, cập nhật liên tục, nhiều chức năng hỗ trợ việc đọc truyện dễ dàng.">
    <meta name="theme-color" content="#000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png?v=3">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon.png?v=3">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png?v=3">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png?v=3">

    <link rel="stylesheet" href="<?= ROOT_PATH ?>css/icons/font-awesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>css/interface.css?id=9dd805f5b3fe086964a7">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>css/tailwind.css?id=de66df19c9f6c325eb24">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>css/all.min.css" />
    <script src="js/plugins.js?id=e21645b96ee550503766"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-34864968-3');
    </script>
</head>

<body>
    <div id="page-top"></div>
    <div data-scrollto="#page-top" class="backtoTop"><i class="fas fa-angle-double-up"></i></div>
    <div id="navbar" class="headroom">
        <div class="container">
            <div id="sidenav-icon" class="none-xl">
                <div class="sidenav-icon-content">
                    <span class="sidenav-icon_white"></span>
                    <span class="sidenav-icon_white"></span>
                    <span class="sidenav-icon_white"></span>
                </div>
                <ul class="navbar-menu none hidden-block at-mobile unstyle">
                    <div class="navbar-search block none-m in-navbar-menu">
                        <form class action="/tim-kiem" method="get">
                            <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords" value>
                            <button class="search-submit" type="submit" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <li><a class="nav-menu_item" href="<?php ROOT_PATH ?>sang-tac"><span class>Sáng tác</span></a></li>
                    <li><a class="nav-menu_item" href="<?php ROOT_PATH ?>thao-luan"><span class>Thảo luận</span></a></li>
                    <li><a class="nav-menu_item" href="<?php ROOT_PATH ?>danh-sach"><span class>Danh sách</span></a></li>
                    <li class="nav-has-submenu">
                        <a class="nav-menu_item">
                            <span class>Hướng dẫn</span>
                            <i class="fas fa-chevron-down dropdown-icon" style="float: right; margin-top: 6px"></i>
                        </a>
                        <ul class="nav-submenu list-unstyled none">
                            <li><a href="/thao-luan/368-huong-dan-dang-truyen"><span>Đăng truyện</span></a></li>
                            <li><a href="/thao-luan/2-gioi-thieu-cong-light-novel"><span>Giới thiệu</span></a></li>
                            <li><a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi"><span>Góp ý - Báo
                                        lỗi</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="navbar-logo-wrapper">
                <a href="<?php ROOT_PATH ?>home" class="navbar-logo" style="background-image: url('img/logo-9.png')" title="Trang chủ"></a>
            </div>
            <?php

            use App\Models\TaiKhoanModel;

            if (isset($_COOKIE['TaiKhoan'])) {
                $data = json_decode($_COOKIE['TaiKhoan']);
                $tk = TaiKhoanModel::find("MaNguoiDung", $data->MaNguoiDung);
            ?>
                <div id="navbar-user">
                    <div class="nav-user_icon">
                        <div class="nav-user_avatar">
                            <img src="<?= ROOT_PATH ?>img/<?= $tk->Avatar ? $tk->Avatar : 'noava.png' ?>" alt="Your avatar">
                        </div>
                        <div class="at-user_avatar"></div>
                        <ul class="account-sidebar hidden-block unstyled none">
                            <li>
                                <a href="<?= ROOT_PATH ?>thanh-vien?id=<?= $tk->MaNguoiDung ?>"><i class="fas fa-user"></i><span>Tài khoản</span></a>
                            </li>
                            <li>
                                <a href="<?= ROOT_PATH ?>lich-su-doc"><i class="fas fa-history"></i><span>Lịch sử</span></a>
                            </li>

                            <!-- <li>
                                <a href="/bookmark"><i class="fas fa-bookmark"></i><span>Đánh dấu</span></a>
                            </li>
                            <li>
                                <a href="/ke-sach"><i class="fas fa-heart"></i><span>Kệ sách</span></a>
                            </li>
                            <li>
                                <a href="/tin-nhan"><i class="fas fa-envelope"></i><span>Tin nhắn</span>
                                    <div class="at-user_list"></div>
                                </a>
                            </li>-->
                            </li>
                            <hr class="none block-l">
                            <li>
                                <div class="nightmode-toggle">
                                    <i class="fas fa-moon"></i><span>Nền tối</span>
                                    <div class="toggle-icon"><i class="fas fa-toggle-on"></i></div>
                                </div>
                            </li>
                            <li>
                                <a href="<?= ROOT_PATH ?><?php if($tk->Role=='admin'){echo 'admin';}else{echo'action';} ?>"><i class="fas fa-cog"></i><span>Hệ thống</span></a>
                            </li>
                            <li>
                                <a href="<?= ROOT_PATH ?>logout"><i class="fas fa-sign-out-alt"></i><span>Thoát</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php } else { ?>
                <div id="navbar-user" class="guest">
                    <a class="login-link" href="<?php ROOT_PATH ?>login">Đăng nhập</a>
                    <div id="guest-menu">
                        <div class="icon">
                            <span class="white-point"></span>
                            <span class="white-point"></span>
                            <span class="white-point"></span>
                        </div>
                        <ul class="nav-submenu hidden-block unstyled none">
                            <li>
                                <div class="nightmode-toggle li-inner">
                                    <span><i class="fas fa-moon"></i>Nền tối</span>
                                    <div class="toggle-icon">
                                        <i class="fa fa-toggle-off"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="li-inner" href="/lich-su-doc"><i class="fas fa-history"></i><span>Lịch
                                        sử</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

            <?php } ?>
            <div class="navbar-mainblock">
                <div class="navbar-search none block-m">
                    <form class action="/tim-kiem" method="get">
                        <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords" value>
                        <button class="search-submit" type="submit" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <ul class="navbar-menu at-navbar none d-xl-block unstyled">
                    <li><a class="nav-menu_item" href="<?php ROOT_PATH ?>sang-tac"><i class="fas fa-pen-nib menu-icon"></i><span class>Sáng tác</span></a></li>
                    <li><a class="nav-menu_item" href="<?php ROOT_PATH ?>thao-luan"><i class="fas fa-users menu-icon"></i><span class>Thảo luận</span></a></li>
                    <li><a class="nav-menu_item" href="<?php ROOT_PATH ?>danh-sach"><i class="fas fa-th-list menu-icon"></i><span class>Danh sách</span></a></li>
                    <li class="nav-has-submenu">
                        <a class="nav-menu_item">
                            <i class="fas fa-question menu-icon"></i><span class>Hướng dẫn</span>
                            <i class="fas fa-chevron-down dropdown-icon"></i>
                            <i class="fas fa-chevron-right dropdown-icon"></i>
                        </a>
                        <ul class="nav-submenu hidden-block unstyled none">
                            <li><a href="/thao-luan/368-huong-dan-dang-truyen"><span>Đăng truyện</span></a></li>
                            <li><a href="/thao-luan/2-gioi-thieu-cong-light-novel"><span>Giới thiệu</span></a></li>
                            <li><a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi"><span>Góp ý - Báo
                                        lỗi</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <main id="mainpart" class="at-index">