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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" type="908e5f26ecc23db3528f92ee-text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js" type="908e5f26ecc23db3528f92ee-text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha256-BtbhCIbtfeVWGsqxk1vOHEYXS6qcvQvLMZqjtpWUEx8=" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" type="908e5f26ecc23db3528f92ee-text/javascript"></script>
    <link href="<?= ROOT_PATH ?>css/action.css?" rel="stylesheet">
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
                <a class="navbar-brand" href="https://docln.net/action">Bảng điều khiển</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   <li><a href="<?= ROOT_PATH ?>login">Đăng nhập</a></li>
                    <li><a href="<?= ROOT_PATH ?>register">Đăng ký</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Đăng ký</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            <input type="hidden" name="Role" value="user">
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Tên đăng nhập</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="TenDangNhap" value>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Địa chỉ E-Mail</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="Email" value>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Mật khẩu</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="MatKhau">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Xác nhận mật khẩu</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="XacNhanMatKhau">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php
                                if (isset($_COOKIE['Eror'])) {
                                    echo "<div id='error-message' class='alert alert-danger d-none'>" . $_COOKIE['Eror'] . "</div>";
                                }
                                if(isset($_COOKIE['DangKyTC'])) echo "<div id='error-message' class='alert d-none'>" . $_COOKIE['DangKyTC'] . "</div>";
                                ?>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-btn fa-user"></i> Đăng ký
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= ROOT_PATH ?>js/livewire.js" ></script>
    <script src="<?= ROOT_PATH ?>js/rocket-loader.min.js"  defer></script>
</body>

</html>