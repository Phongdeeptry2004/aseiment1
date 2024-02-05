<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="NoIndex, NoFollow">
    <title>Bảng điều khiển</title>
    <link rel="shortcut icon" href="<?= ROOT_PATH ?>img/favicon.png">
    <link href="<?= ROOT_PATH ?>css/app.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" type="4fa4d48513266ca2bda21aed-text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js" type="4fa4d48513266ca2bda21aed-text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha256-BtbhCIbtfeVWGsqxk1vOHEYXS6qcvQvLMZqjtpWUEx8=" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" type="4fa4d48513266ca2bda21aed-text/javascript"></script>
    <link href="<?= ROOT_PATH ?>css/action.css" rel="stylesheet">
    
</head>

<body>
    <nav class="navbar navbar-default" style="z-index: 999">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= ROOT_PATH ?>admin">Bảng điều khiển</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">
                    <li><a href="<?= ROOT_PATH ?>" target="_blank"><i class="fas fa-home"></i><span class="hidden-md hidden-lg"> Cổng Light Novel</span></a></li>
                    <li><a href="<?= ROOT_PATH ?>admin/list" style="color: red">Danh Sách Truyện</a></li>
                    <li> <a href="<?= ROOT_PATH ?>admin/user"style="color: #10b591">User</a></li>
                    <li> <a href="<?= ROOT_PATH ?>admin/category" style="color: #e3953e">Thể Loại</a></li>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: #1389c6">Sáng tác <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/series/index?type=original&amp;of=self">OLN đã đăng</a></li>
                            <li><a href="https://docln.net/action/series/index?type=original&amp;of=shared">OLN tham gia</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Thảo luận <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/page/create">Thêm thảo luận</a></li>
                            <li><a href="https://docln.net/action/page/mypages">Thảo luận của bạn</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tiện ích <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/genre">Thể loại</a></li>
                            <li><a href="https://docln.net/action/page_category">Thư viện</a></li>
                            <li><a href="https://docln.net/action/image">Minh họa</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nhóm dịch <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/group/mygroups">Nhóm của bạn</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"> </span><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a>Phongdeeptry2993</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="https://docln.net/action/profile">Đổi Thông Tin</a></li>
                            <li><a href="https://docln.net/action/password">Đổi Mật Khẩu</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="https://docln.net/action/email">Đổi Email</a></li>
                            <li><a href="https://docln.net/action/username">Đổi Username</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="https://docln.net/logout">Thoát</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>