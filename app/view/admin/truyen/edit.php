    <?php extract($data);
    // print_r($truyen);
    ?>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Series</div>
                        <div class="panel-body">
                            <form method="post" action="<?= ROOT_PATH ?>admin/edittruyen" enctype="multipart/form-data">
                                <input type="hidden" name="MaNguoiDang" value='1'><!-- sau có tài khoản thì thêm id người dùng vào -->
                                <input type="hidden" name="MaTruyen" value='<?=$truyen->MaTruyen?>'>
                                <div class="form-group clearfix required">
                                    <label class="col-md-2 control-label pt-7 text-right">Tiêu đề</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control"value='<?=$truyen->TieuDe?>' name="TieuDe" value>
                                    </div>
                                </div>
                                <div class="form-group clearfix required">
                                    <label class="col-md-2 control-label pt-7 text-right">Tác giả</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="TacGia" value="<?=$truyen->TacGia ?>">
                                    </div>
                                </div>
                                <div class="form-group clearfix required">
                                    <label class="col-md-2 control-label pt-5 text-right">Loại truyện</label>
                                    <div class="col-md-10">
                                        <select class="input-sm" name="MaTheLoai" id="select-type">
                                            <option value="1">Truyện dịch</option>
                                            <option value="2">Truyện convert</option>
                                            <option value="3">Truyện sáng tác</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-7 text-right">Thể loại</label>
                                <div class="col-md-10">
                                    <select class="input-sm" name="genres[]" style="width: 100%">
                                        <option value="1">Action</option>
                                        
                                    </select>
                                </div>
                            </div> -->
                                <div class="form-group clearfix required">
                                    <label class="col-md-2 control-label text-right">Tóm tắt</label>
                                    <div class="col-md-8">
                                        <textarea id="LN_Series_Summary" class="form-control" name="MoTa"><?=$truyen->MoTa?></textarea>
                                    </div>
                                </div>
                                <div class="form-group clearfix required">
                                    <label class="col-md-2 control-label text-right">Ảnh bìa</label>
                                    <div class="col-md-8">
                                        <img src="<?=ROOT_PATH?>img/<?=$truyen->img?>" alt="Truyện không có ảnh">
                                        <input type="file" name='img'>
                                    </div>
                                </div>
                                <div class="form-group clearfix required">
                                    <label class="col-md-2 control-label pt-5 text-right">Tình trạng dịch</label>
                                    <div class="col-md-10">
                                        <select class="input-sm" name="TinhTrangDich">
                                            <option value="Đang Tiến Hành">Đang tiến hành</option>
                                            <option value="Tạm Ngưng">Tạm ngưng</option>
                                            <option value="Đã Hoàn Thành">Đã hoàn thành</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-2">
                                        <button type="submit" class="btn btn-primary">
                                            Sửa Truyện
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
       