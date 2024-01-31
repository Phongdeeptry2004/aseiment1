<div class="container mt-5">
    <h2>Thêm Truyện Mới</h2>

    <form action="<?=ROOT_PATH?>listadmin/add" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label for="tieuDe">Tiêu Đề:</label>
            <input type="text" class="form-control" id="tieuDe" name="TieuDe" required>
        </div>

        <div class="form-group">
            <label for="maTacGia">Mã Tác Giả:</label>
            <input type="text" class="form-control" id="MaTacGia" name="maTacGia">
        </div>

        <div class="form-group">
            <label for="maDanhMuc">Mã Danh Mục:</label>
            <select class="form-control" id="maDanhMuc" name="MaDanhMuc">
            <?php foreach($data as $key):?>
                <option  value="<?=$key->MaDanhMuc?>"><?=$key->TenDanhMuc?></option> 
            <?php endforeach?>
            </select>
        </div>

        <div class="form-group">
            <label for="moTa">Mô Tả:</label>
            <textarea class="form-control" id="moTa" name="MoTa" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="luotXem">Lượt Xem:</label>
            <input type="number" class="form-control" id="LuotXem" name="luotXem">
        </div>

        <div class="form-group">
            <label for="luotThich">Lượt Thích:</label>
            <input type="number" class="form-control" id="LuotThich" name="luotThich">
        </div>

        <div class="form-group">
            <label for="danhGia">Đánh Giá:</label>
            <input type="number" class="form-control" id="DanhGia" name="danhGia">
        </div>

        <div class="form-group">
            <label for="img">Ảnh:</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>

        <button type="submit" class="btn btn-primary">Thêm Truyện</button>
    </form>
</div>