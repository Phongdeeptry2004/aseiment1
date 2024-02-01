<div class="container mt-5">
    <h2>Thêm Truyện Mới</h2>

    <form method="post" action="<?=ROOT_PATH?>listadmin/add" enctype="multipart/form-data">
        <div class="form-group">
            <label for="tieuDe">Tiêu Đề:</label>
            <input type="text" class="form-control"  style="width: 100%" id="tieuDe" name="TieuDe" required>
        </div>

        <div class="form-group">
            <label for="maTacGia">Mã Tác Giả:</label>
            <input type="text" class="form-control"  style="width: 100%" id="MaTacGia" name="MaTacGia">
        </div>

        <div class="form-group">
            <label for="maDanhMuc">Mã Danh Mục:</label>
            <select class="input-sm" id="maDanhMuc" name="MaDanhMuc" style="width: 100%">
                                        <?php foreach ($data as $key) : ?>
                                            <option value="<?= $key->MaDanhMuc ?>"><?= $key->TenDanhMuc ?></option>
                                        <?php endforeach ?>
                                    </select>
        </div>
        <div class="form-group">
        <!-- <label for="TheLoai">Thể Loại:</label>
            <select class="input-sm" name="" id="select-genre"  style="width: 100%">
                                        <option value="1">Action</option>
                                        <option value="2">Adapted to Anime</option>
                                        <option value="3">Adapted to Drama CD</option>
                                        <option value="4">Adapted to Manga</option>
                                        <option value="5">Adult</option>
                                        <option value="6">Adventure</option>
                                        <option value="7">Age Gap</option>
                                        <option value="8">Boys Love</option>
                                        <option value="9">Character Growth</option>
                                        <option value="10">Chinese Novel</option>
                                        <option value="11">Comedy</option>
                                        <option value="12">Cooking</option>
                                        <option value="13">Different Social Status</option>
                                        <option value="14">Drama</option>
                                        <option value="15">Ecchi</option>
                                        <option value="16">English Novel</option>
                                        <option value="17">Fantasy</option>
                                        <option value="18">Female Protagonist</option>
                                        <option value="19">Game</option>
                                        <option value="20">Gender Bender</option>
                                        <option value="21">Harem</option>
                                        <option value="22">Historical</option>
                                        <option value="23">Horror</option>
                                        <option value="24">Incest</option>
                                        <option value="25">Isekai</option>
                                        <option value="26">Josei</option>
                                        <option value="27">Korean Novel</option>
                                        <option value="28">Magic</option>
                                        <option value="29">Martial Arts</option>
                                        <option value="30">Mature</option>
                                        <option value="31">Mecha</option>
                                        <option value="32">Military</option>
                                        <option value="33">Misunderstanding</option>
                                        <option value="34">Mystery</option>
                                        <option value="35">Netorare</option>
                                        <option value="36">One shot</option>
                                        <option value="37">Otome Game</option>
                                        <option value="38">Parody</option>
                                        <option value="39">Psychological</option>
                                        <option value="40">Reverse Harem</option>
                                        <option value="41">Romance</option>
                                        <option value="42">School Life</option>
                                        <option value="43">Science Fiction</option>
                                        <option value="44">Seinen</option>
                                        <option value="45">Shoujo</option>
                                        <option value="46">Shoujo ai</option>
                                        <option value="47">Shounen</option>
                                        <option value="48">Shounen ai</option>
                                        <option value="49">Slice of Life</option>
                                        <option value="50">Slow Life</option>
                                        <option value="51">Sports</option>
                                        <option value="52">Super Power</option>
                                        <option value="53">Supernatural</option>
                                        <option value="54">Suspense</option>
                                        <option value="55">Tragedy</option>
                                        <option value="56">Wars</option>
                                        <option value="57">Web Novel</option>
                                        <option value="58">Workplace</option>
                                        <option value="59">Yuri</option>
                                    </select>
        </div> -->
        <div class="form-group">
            <label for="moTa">Mô Tả:</label>
            <textarea class="form-control" id="moTa" style="width: 100%" name="MoTa" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="luotXem">Lượt Xem:</label>
            <input type="number" class="form-control"   style="width: 100%"id="LuotXem" name="luotXem">
        </div>

        <div class="form-group">
            <label for="luotThich">Lượt Thích:</label>
            <input type="number" class="form-control"  style="width: 100%"id="LuotThich" name="luotThich">
        </div>

        <div class="form-group">
            <label for="danhGia">Đánh Giá:</label>
            <input type="number" class="form-control" style="width: 100%" id="DanhGia" name="danhGia">
        </div>

        <div class="form-group">
            <label for="img">Ảnh:</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>

        <button type="submit" class="btn btn-primary">Thêm Truyện</button>
    </form>
</div>


<!--


 -->

