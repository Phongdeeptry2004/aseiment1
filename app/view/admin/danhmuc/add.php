<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tài Khoản</div>
                <div class="panel-body">
                    <form method="post" action="<?= ROOT_PATH ?>admin/adduser" enctype="multipart/form-data">
                        <div class="form-group clearfix required">
                            <label class="col-md-2 control-label pt-7 text-right">Tên Đăng Nhập</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="TenDangNhap">
                            </div>
                        </div>
                        <div class="form-group clearfix required">
                            <label class="col-md-2 control-label pt-7 text-right">Mật Khẩu</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="MatKhau" vlue>
                            </div>
                        </div>
                        <div class="form-group clearfix required">
                            <label class="col-md-2 control-label pt-7 text-right">Email</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="Email">
                            </div>
                        </div>
                        <div class="form-group clearfix required">
                            <label class="col-md-2 control-label text-right">Kinh Nghiệm</label>
                            <div class="col-md-8">
                                <input type="number" name="Exp" max="100" min="0" id="">
                            </div>
                        </div>
                        <div class="form-group clearfix required">
                            <label class="col-md-2 control-label text-right">Cấp Độ</label>
                            <div class="col-md-8">
                                <input type="number" name="Level" max="10" min="0" >
                            </div>
                        </div> 
                        <div class="form-group clearfix required">
                            <label class="col-md-2 control-label text-right">Vai Trò</label>
                            <div class="col-md-8">
                                <select name="Role" id="">
                                    <option value="User">Người dùng</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group clearfix required">
                            <label class="col-md-2 control-label text-right">Ảnh đại diện</label>
                            <div class="col-md-8">
                                <input type="file" name='Avatar'>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Thêm Tài Khoản
                                </button>
                                <a href="javascript: history.back()" class="btn btn-warning">
                                    Quay lại
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>