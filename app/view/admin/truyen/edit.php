<div class="container mt-5">
    <h2>Sửa</h2>

    <form action="xuly_themtruyen.php" method="post">
        <div class="form-group">
            <label for="tieuDe">Tiêu Đề:</label>
            <input type="text" class="form-control" id="tieuDe" name="tieuDe" required>
        </div>

        <div class="form-group">
            <label for="maTacGia">Mã Tác Giả:</label>
            <input type="text" class="form-control" id="maTacGia" name="maTacGia">
        </div>

        <div class="form-group">
            <label for="maDanhMuc">Mã Danh Mục:</label>
            <input type="text" class="form-control" id="maDanhMuc" name="maDanhMuc">
        </div>

        <div class="form-group">
            <label for="moTa">Mô Tả:</label>
            <textarea class="form-control" id="moTa" name="moTa" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="luotXem">Lượt Xem:</label>
            <input type="number" class="form-control" id="luotXem" name="luotXem">
        </div>

        <div class="form-group">
            <label for="luotThich">Lượt Thích:</label>
            <input type="number" class="form-control" id="luotThich" name="luotThich">
        </div>

        <div class="form-group">
            <label for="danhGia">Đánh Giá:</label>
            <input type="number" class="form-control" id="danhGia" name="danhGia">
        </div>

        <div class="form-group">
            <label for="img">Ảnh:</label>
            <input type="text" class="form-control" id="img" name="img">
        </div>

        <button type="submit" class="btn btn-primary">Thêm Truyện</button>
    </form>
</div>