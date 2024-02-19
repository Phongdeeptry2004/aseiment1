<?php extract($data);
?>
<table class="table">
    <tr>
        <th>Tên Truyện</th>
        <th>Chương Số</th>
        <th>Ngày Đăng</th>
        <th>Tên Chương</th>
        <th>Chức Năng</th>
    </tr>
    <?php
    if (is_array($Chuong)) {
        foreach ($Chuong as $item) {
            echo '<tr>';
            echo '<td>' . $item->TenTruyen . '</td>';
            echo '<td>' . $item->SoChuong . '</td>';
            echo '<td>' . $item->ThoiDiemXuatBan . '</td>';
            echo '<td>' . $item->TieuDeChuong . '</td>';
            echo '<td ><a onclick="return confirmDelete()" href="' . ROOT_PATH . 'action/chuongtruyen/delete?id=' . $item->MaChuong . '&matruyen='.$item->MaTruyen.'">Xoá</a> <br>  <a href="' . ROOT_PATH . 'action/chuongtruyen/update?id=' . $item->MaChuong . '">Sửa</a></td>';
            echo '</tr>';
        }
    } elseif (is_object($Chuong)) {
        echo '<tr>';
        echo '<td>' . $Chuong->TenTruyen . '</td>';
        echo '<td>' . $Chuong->SoChuong . '</td>';
        echo '<td>' . $Chuong->ThoiDiemXuatBan . '</td>';
        echo '<td>' . $Chuong->TieuDeChuong . '</td>';
        echo '<td ><a href="' . ROOT_PATH . 'action/chuongtruyen/delete?id=' . $Chuong->MaChuong . '">Xoá</a> <br>  <a href="' . ROOT_PATH . 'action/chuongtruyen/update?id=' . $Chuong->MaChuong . '">Sửa</a></td>';
        echo '</tr>';
    }

    ?>
    <tr><a class="btn-primary" href="<?= ROOT_PATH ?>action/chuongtruyen/add?id=<?= $MaTruyen ?>">Thêm</a></tr>
</table>
<script>
    function confirmDelete() {
        return confirm("Bạn có chắc chắn muốn xoá người dùng này?");
    }
</script>