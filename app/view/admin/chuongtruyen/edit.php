<?php
$danhmuc=$data['danhmuc'][0];
$theloai=$data['theloai'];
$truyen=$data['truyen'];
var_dump($danhmuc);
?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Danh Mục</div>
                <div class="panel-body">
                    <form method="post" action="<?= ROOT_PATH ?>admin/editcategory" enctype="multipart/form-data">
                        <input type="hidden" name="MaDanhMuc" value="<?=$_GET['id']?>">
                        <div class="form-group clearfix required">
                            <label class="col-md-2 control-label pt-7 text-right">Tên Truyện</label>
                            <div class="col-md-8">
                                <div class="form-control" ><?=$danhmuc->TieuDe?></div>
                                <div class="">Sửa thành</div>
                                <select name="MaTruyen" id="">
                                    <option value="">Chọn</option>
                                    <?php 
                                    foreach($truyen as $values):
                                    ?>
                                    <option value="<?=$values->MaTruyen?>"><?=$values->TieuDe?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group clearfix required">
                            <label class="col-md-2 control-label pt-7 text-right">Tên Danh Mục</label>
                            <div class="col-md-8">
                                <div><?=$danhmuc->TenDanhMuc?></div>
                            <select name="TenDanhMuc" id=" ">
                                <option value="">Chọn</option>
                                <?php foreach($theloai as $values):
                                ?>
                                <option value="<?=$values->TenDanhMuc?>"><?=$values->TenDanhMuc?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Sửa Tài Khoản
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