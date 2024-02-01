
<table border="1" class="table">
<tr>
    <th>Tên Đăng Nhập</th>
    <th>Pass</th>
    <th>Email</th>
    <th>
        <a href="<?php ROOT_PATH?>adminuser/add">Thêm Tài Khoản</a>
    </th>
</tr>
<?php foreach ($data as $value) : ?>
    <tr>
        <td><?= $value->TenDangNhap ?></td>
        <td><?= $value->MatKhau ?></td>
        <td><?= $value->Email ?></td>
        <td><a href="<?php ROOT_PATH?>adminuser/edit?id=<?=$value->MaTruyen?>">Sửa</a></td>
        <td><a href="<?php ROOT_PATH?>adminuser/delete?id=<?=$value->MaTruyen?>">Xoá</a></td>
    </tr>

<?php endforeach ?>
</table>