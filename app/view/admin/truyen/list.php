
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
        <td><a href="<?php ROOT_PATH?>deletetruyen?id=<?=$value->MaTruyen?>">Xoá</a></td>
        <td><a href="<?php ROOT_PATH?>chuongtruyen?id=<?=$value->MaTruyen?>">Chi Tiết</a></td>
    </tr>
<?php endforeach ?>
</table>