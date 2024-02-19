<?php
// Check if there is a deletion message cookie

use App\Models\TruyenModel;

if (isset($_COOKIE['Message'])) {
    // Display the deletion message
    echo '<div id="successMessage" class="success-message">' . $_COOKIE['Message'] . '</div>';


    // Additional styling for the success message
    echo '<style>.success-message { color: green; margin: 10px 0; }</style>';

    // JavaScript code to remove the message after a set duration
    echo '<script>
            setTimeout(function() {
                var successMessage = document.getElementById("successMessage");
                successMessage.parentNode.removeChild(successMessage);
            }, 5000); // Adjust the duration in milliseconds (here set to 5000 ms or 5 seconds)
          </script>';
}
?>
<table class="table" border="1">
    <tr>
        <th>Mã Truyện</th>
        <th>Tiêu Đề</th>
        <th>Ảnh</th>
        <th>Sửa</th>
        <th>Xoá</th>
        <th>Chi Tiết</th>
    </tr>

    <?php
    $ThongTin=json_decode($_COOKIE['TaiKhoan']);
    $sotruyen=TruyenModel::demTruyen($ThongTin->MaNguoiDung);
    // Nếu mảng chỉ chứa một truyện
    if ($sotruyen[0]->SoTruyen==='1') {
        extract($data);
        $t = array($Truyen);
            foreach ($t as $truyenItem) : ?>
                <tr>
                    <td><?= $truyenItem->MaTruyen ?></td>
                    <td><?= $truyenItem->TieuDe ?></td>
                    <td><img src="<?= ROOT_PATH ?>img/<?= $truyenItem->img ?>" width="60px" alt=""></td>
                    <td><a href="<?= ROOT_PATH ?>action/edittruyen?id=<?= $truyenItem->MaTruyen ?>">Sửa</a></td>
                    <td><a href="<?= ROOT_PATH ?>action/deletetruyen?id=<?= $truyenItem->MaTruyen ?>" onclick="return confirmDelete()">Xoá</a></td>
                    <td><a href="<?= ROOT_PATH ?>action/chuongtruyen?id=<?= $truyenItem->MaTruyen ?>">Chi Tiết</a></td>
                </tr>
            <?php endforeach; ?>
    <?php
    } elseif($sotruyen[0]->SoTruyen>1) { // Nếu mảng chứa nhiều truyện
        foreach ($data['Truyen'] as $truyenItem) : ?>
            <tr>
                <td><?= $truyenItem->MaTruyen ?></td>
                <td><?= $truyenItem->TieuDe ?></td>
                <td><img src="<?= ROOT_PATH ?>img/<?= $truyenItem->img ?>" width="60px" alt=""></td>
                <td><a href="<?= ROOT_PATH ?>action/edittruyen?id=<?= $truyenItem->MaTruyen ?>">Sửa</a></td>
                <td><a href="<?= ROOT_PATH ?>action/deletetruyen?id=<?= $truyenItem->MaTruyen ?>" onclick="return confirmDelete()">Xoá</a></td>
                <td><a href="<?= ROOT_PATH ?>action/chuongtruyen?id=<?= $truyenItem->MaTruyen ?>">Chi Tiết</a></td>
            </tr>
        <?php
        endforeach;
    }
    ?>
</table>

<script>
    function confirmDelete() {
        return confirm("Bạn có chắc chắn muốn xoá người dùng này?");
    }
</script>