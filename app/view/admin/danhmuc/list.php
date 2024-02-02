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
<table border="1" class="table">
<tr>
    <th>Tên Đăng Nhập</th>
    <th>Pass</th>
    <th>Email</th>
    <th>Kinh Nghiệm</th>
    <th>Cấp Độ</th>
    <th>Vai Trò</th>
    <th>Ảnh Đại Diện</th>
    <th>
        <a href="<?php ROOT_PATH?>adduser">Thêm Tài Khoản</a>
    </th>
</tr>
<?php foreach ($data as $value) : ?>
    <tr>
        <td><?= $value->TenDangNhap ?></td>
        <td><?= $value->MatKhau ?></td>
        <td><?= $value->Email ?></td>
        <td><?= $value->Exp ?></td>
        <td><?= $value->Level ?></td>
        <td><?= $value->Role ?></td>
        <td><img width="50px" src="<?=ROOT_PATH?>img/<?=$value->Avatar ?>" alt="Không có ảnh đại diện"></td>
        <td><a href="<?php ROOT_PATH?>edituser?id=<?=$value->MaNguoiDung?>">Sửa</a></td>
        <td><a href="<?php ROOT_PATH?>deleteuser?id=<?=$value->MaNguoiDung?>"  onclick="return confirmDelete()">Xoá</a></td>
    </tr>

<?php endforeach ?>
</table>
<script>
    function confirmDelete() {
        return confirm("Bạn có chắc chắn muốn xoá người dùng này?");
    }
</script>