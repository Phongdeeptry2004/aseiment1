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
    <th>Tên Truyện</th>
    <th>Tên Danh Mục</th>
    <th>
        <a href="<?php ROOT_PATH?>addcategory">Thêm Danh Mục</a>
    </th>
</tr>
<?php foreach ($data['danhmuc'] as $value) : ?>
    <tr>
        <td><?= $value->TieuDe ?></td>
        <td><?= $value->TenDanhMuc ?></td>
        <td><a href="<?=ROOT_PATH?>admin/editcategory?id=<?=$value->MaDanhMuc?>">Sửa</a></td>
        <td><a href="<?=ROOT_PATH?>admin/deletecategory?id=<?=$value->MaDanhMuc?>"  onclick="return confirmDelete()">Xoá</a></td>
    </tr>

<?php endforeach ?>
</table>
<script>
    function confirmDelete() {
        return confirm("Bạn có chắc chắn muốn xoá người dùng này?");
    }
</script>