<?php extract($data);
var_dump($Chuong);
?>
<div class="container mt-5">
    <h2 class="mb-4">Thêm Chương cho truyện <strong><?= $Truyen->TieuDe ?></strong></h2>
    <div class="row">
        <img class="col-md-4" src="<?= ROOT_PATH ?>img/<?= $Truyen->img ?>" alt="">
        <div class="col-md-8">
            <h3>Các Chương Hiện Có trong Truyện</h3>
            <table class='table'>
                <tr>
                    <th>Chương</th>
                    <th>Tiêu Đề</th>
                </tr>
                <?php
                if (is_array($Chuong)) {
                    foreach ($Chuong as $key) { ?>
                        <tr>
                        <td><a href="<?=ROOT_PATH?>chuong?ma-chuong=<?=$key->MaChuong?>"><?= $key->SoChuong ?></a></td>
                            <td><?= $key->TieuDeChuong ?></td>
                        </tr>
                    <?php }
                } elseif (is_object($Chuong)) { ?>
                        <tr>
                        <td><a href="<?=ROOT_PATH?>chuong?ma-chuong=<?=$Chuong->MaChuong?>"><?= $Chuong->SoChuong ?></a></td>
                            <td><?= $Chuong->TieuDeChuong ?></td>
                        </tr>

                <?php
                }

                ?>
            </table>
        </div>
    </div>
    <form action="<?=ROOT_PATH?>action/chuongtruyen/add" method="post">
        <input type="hidden" value="<?= $MaTruyen ?>" name="MaTruyen">
        <div class="form-group">
            <label for="maTruyen">Chương Số:</label>
            <input type="text" class="form-control" id="maTruyen" name="SoChuong" required>
        </div>

        <div class="form-group">
            <label for="tieuDe">Tiêu Đề Chương:</label>
            <input type="text" class="form-control" id="tieuDe" name="TieuDeChuong" required>
        </div>

        <div class="form-group">
            <label for="noiDung">Nội Dung Chương:</label>
            <textarea class="form-control" id="noiDung" name="NoiDungChuong" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Thêm Chương</button>
    </form>
</div>