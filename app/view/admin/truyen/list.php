
<table border="1">
<tr>
    <th>Mã Truyện</th>
    <th>Tên Truyện</th>
    <th>Hình ảnh </th>
    <th>
        <a href="<?php ROOT_PATH?>listAdmin/add">Thêm Truyện</a>
    </th>
</tr>
<?php foreach ($data as $value) : ?>
    <tr>
        <td><?= $value->MaTruyen ?></td>
        <td><?= $value->TieuDe ?></td>
        <td><img src="img/<?= $value->img ?>" width="60px" alt=""></td>
        <td><a href="<?php ROOT_PATH?>truyen/edit?id=<?=$value->MaTruyen?>">Sửa</a></td>
        <td><a href="<?php ROOT_PATH?>truyen/delete?id=<?=$value->MaTruyen?>">Xoá</a></td>
    </tr>

<?php endforeach ?>
</table>