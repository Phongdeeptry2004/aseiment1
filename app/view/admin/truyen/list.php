
<?php
// Check if there is a deletion message cookie
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
    <th>Tên Truyện</th>
    <th>Hình ảnh </th>
    <th>
        <a href="<?php ROOT_PATH?>admin/addtruyen">Thêm Truyện</a>
    </th>
</tr>
<?php foreach ($data as $value) : ?>
    <tr>
        <td><?= $value->MaTruyen ?></td>
        <td><?= $value->TieuDe ?></td>
        <td><img src="<?=ROOT_PATH?>img/<?= $value->img ?>" width="60px" alt=""></td>
        <td><a href="<?php ROOT_PATH?>edittruyen?id=<?=$value->MaTruyen?>">Sửa</a></td>
        <td><a href="<?php ROOT_PATH?>deletetruyen?id=<?=$value->MaTruyen?>"onclick="return confirmDelete()" >Xoá</a></td>
        <td><a href="<?php ROOT_PATH?>chuongtruyen?id=<?=$value->MaTruyen?>">Chi Tiết</a></td>
    </tr>
<?php endforeach ?>
</table>
<script>
    function confirmDelete() {
        return confirm("Bạn có chắc chắn muốn xoá người dùng này?");
    }
</script>