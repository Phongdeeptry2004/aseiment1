<?php use App\Models\ChuongModel;
use App\Models\TruyenModel;

        if(isset($_GET['id'])){
            $idtruyen=$_GET['id'];
        }else{
            echo "Không nghịch link nhá ";
            exit();
        }
        $chuong=ChuongModel::where("MaTruyen","=",$idtruyen)->andOderbyASC("SoChuong")->get();
        $sotu=TruyenModel::demchu($idtruyen);
        // var_dump($chuong);
        if(count($chuong)>0){
        $time=ChuongModel::where("MaTruyen","=",$idtruyen)->andOderbyDESC("ThoiDiemXuatBan")->get();
        $ngaycapnhat=date('Y-m-d\TH:i:sP', strtotime($time[0]->ThoiDiemXuatBan));   
        }else{
        $ngaycapnhat="Chưa có";   

        }
 ?>
<div class="container">
    <div class="row d-block clearfix">
        <div class="col-12 col-lg-12 float-left">
            <section class="feature-section at-series clear">
                <main class="section-body">
                    <div class="top-part">
                        <div class="row">
                            <div class="left-column col-12 col-md-3">
                                <div class="series-cover">
                                    <div class="series-type">
                                        <span>Truyện dịch</span>
                                    </div>
                                    <div class="a6-ratio">
                                        <div class="content img-in-ratio" style="background-image: url('img/<?php echo $data['img'] ?>')">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-9 flex flex-col">
                                <div class="flex-1">
                                    <div class="series-name-group">
                                        <span class="series-name">
                                            <a href="index.php?action=matruyen&matruyen=<?php echo $data['MaTruyen'] ?>"><?php echo $data['TieuDe'] ?></a>
                                        </span>
                                    </div>
                                    <div class="series-information mb-0 flex flex-col">
                                        <div class="series-gernes" x-data="{ more: false }">
                                            <a class="series-gerne-item" href="https://docln.net/the-loai/comedy">Comedy</a>
                                            <a class="series-gerne-item" href="https://docln.net/the-loai/harem">Harem</a>
                                            <a class="series-gerne-item" href="https://docln.net/the-loai/romance">Romance</a>
                                            <a class="series-gerne-item" href="https://docln.net/the-loai/school-life">School Life</a>
                                            <a class="series-gerne-item" href="https://docln.net/the-loai/slice-of-life">Slice of
                                                Life</a>
                                            <a class="series-gerne-item" href="https://docln.net/the-loai/web-novel">Web Novel</a>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-name">Tác giả:</span>
                                            <span class="info-value "><a href="https://docln.net/tac-gia/Kuroneko%20Doragon">Kuroneko
                                                    Doragon</a></span>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-name">Họa sĩ:</span>
                                            <span class="info-value"><a href="https://docln.net/hoa-si/Monoto">Monoto</a></span>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-name">Tình trạng:</span>
                                            <span class="info-value">
                                                <a href="https://docln.net/truyen-dang-tien-hanh">Đang tiến
                                                    hành</a>
                                            </span>
                                        </div>
                                        <a x-data="{ lastRead: (JSON.parse(localStorage.getItem('reading_series')) || []).filter(x => x['series_id'] == 16873) }" x-show="lastRead.length" class="self-center md:self-start rounded-full bg-[#d9534f] mt-3 mb-3 px-4 py-2 text-sm font-semibold text-white hover:!text-red-400 shadow-sm hover:bg-red-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#d43f3a] justify-center" :href="lastRead[0] ? lastRead[0]['chapter_url'] : '#'" style="display: none">Đọc tiếp</a>
                                    </div>
                                </div>
                                <div class="side-features flex-none">
                                    <div class="row">
                                        <div class="col-4 col-md feature-item width-auto-xl">
                                            <a id="collect" class="side-feature-button button-follow follow" href="https://docln.net/login">
                                                <span class="block feature-value"><i class="far fa-heart"></i></span>
                                                <span class="block feature-name"> <?php echo $data['LuotThich'] ?> </span>
                                            </a>
                                        </div>
                                        <div class="col-4 col-md feature-item width-auto-xl">
                                            <div class="series-rating rated">
                                                <a href="https://docln.net/truyen/16873/danh-gia">
                                                    <label for="open-rating" class="side-feature-button button-rate">
                                                        <span class="block feature-value"><i class="far fa-star"></i></span>
                                                        <span class="block feature-name">Đánh giá</span>
                                                    </label>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md feature-item width-auto-xl">
                                            <a href="#series-comments" class="side-feature-button">
                                                <span class="block feature-value"><i class="fas fa-comments"></i></span>
                                                <span class="block feature-name">Bàn luận</span>
                                            </a>
                                        </div>
                                        <div class="col-4 col-md feature-item width-auto-xl">
                                            <label for="open-sharing" class="side-feature-button">
                                                <span class="block feature-value"><i class="fas fa-share-alt"></i></span>
                                                <span class="block feature-name">Chia sẻ</span>
                                            </label>
                                            <input type="checkbox" id="open-sharing" />
                                            <div class="sharing-box">
                                                <a x-data href="#" class="sharing-item" @click.prevent="window.navigator.clipboard.writeText('<?php echo ROOT_PATH?>truyen?id=<?php echo $data['MaTruyen'] ?>'); $store.toast.show('Copy thành công!')">Link
                                                    rút gọn</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-part">
                        <div class="row">
                            <div class="col-12">
                                <div class="row statistic-list">
                                    <div class="col-12 col-md-3 statistic-item block-wide at-mobile">
                                        <div class="statistic-name">Lần cuối</div>
                                        <div class="statistic-value"><time class="timeago" title="18/01/2023 10:03:55" datetime="<?php echo $ngaycapnhat ?>">Đang chạy...</time></div>
                                    </div>
                                    <div class="col-4 col-md-3 statistic-item">
                                        <div class="statistic-name">Số từ</div>
                                        <div class="statistic-value"><?php if($sotu[0]->TongSoTu !=0){ echo $sotu[0]->TongSoTu; }else{echo 0;}?></div>
                                    </div>
                                    <div class="col-4 col-md-3 statistic-item">
                                        <div class="statistic-name">Đánh giá</div>
                                        <div class="statistic-value">0 / <small>0</small></div>
                                    </div>
                                    <div class="col-4 col-md-3 statistic-item">
                                        <div class="statistic-name">Lượt xem</div>
                                        <div class="statistic-value">25.374</div>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-wrapper other-facts col-12">

                            </div>
                            <div class="summary-wrapper col-12">
                                <div class="series-summary">
                                    <h4 class="font-bold">Tóm tắt</h4>
                                    <div class="summary-content">
                                        <?php echo $data['MoTa'] ?>
                                    </div>
                                    <div class="summary-more none more-state">
                                        <div class="see_more">Xem thêm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </section>
        </div>
        <div id="rd-sidebar" class="col-12 col-lg-12 float-right">
            <div class="row top-group">
                <div class="col-12 no-push push-3-m col-md-6 no-push-l col-lg-12">
                </div>
            </div>
            <section id="list-vol" class="none list_vol-section">
                <div class="list-volume-wrapper basic-section">
                    <header class="sect-header"><span class="sect-title">Mục lục</span></header>
                    <span class="list-vol_off">
                        <i class="fas fa-times"></i>
                    </span>
                    <ol class="list-volume unstyled no-margin no-padding">
                        <li data-scrollTo="#volume_23120"><span class="list_vol-order"></span><span class="list_vol-title">Chương</span></li>
                    </ol>
                </div>
            </section>
        </div>
        <div class="col-12 col-lg-12 float-left">
            <div style="text-align: center; margin: 0 auto 10px auto;">
            </div>
            <section class="volume-list at-series basic-section volume-mobile gradual-mobile ">
                <header id="volume_23120" class="sect-header">
                    <span class="mobile-icon"><i class="fas fa-chevron-down"></i></span>
                    <span class="sect-title">
                        Chương 
                    </span>
                </header>
                <main class="d-lg-block">
                    <div class="row">

                        <div class="col-12 col-md-12">
                            <ul class="list-chapters at-series">
                                <?php

                                if ($chuong != null) :
                                    foreach ($chuong as $key) : ?>
                                        <li class>
                                            <div class="chapter-name">
                                                <a href="<?php ROOT_PATH?>chuong?ma-chuong=<?php echo $key->MaChuong ?>" title="<?php echo $key->TieuDeChuong ?>"><?php echo $key->TieuDeChuong ?></a>
                                            </div>
                                            <div class="chapter-time"><?php echo $key->ThoiDiemXuatBan ?></div>
                                        </li>
                                <?php endforeach;
                                endif;
                                ?>

                            </ul>
                        </div>
                    </div>
                </main>
            </section>

            <section id="series-comments" class="basic-section">
                <header class="sect-header tab-list">
                    <span class="sect-title tab-title" data-tab-index="1">Tổng bình luận <span class="comments-count">(103)</span></span>
                </header>
                <main id="fbcmt_root" class="comment-wrapper d-lg-block clear">
                    <span style="padding: 10px; display: inline-block;">Báo cáo bình luận không phù hợp ở <a href="/thao-luan/619-bao-cao-binh-luan" style="color: blue">đây</a></span>
                    <div id="tab-content-1" class="tab-content clear">
                        <section class="ln-comment">
                            <main class="ln-comment-body">
                                <div class="ln-comment_sign-in long-text">
                                    Bạn phải <a href="/login">đăng nhập</a> hoặc <a href="/register">tạo tài
                                        khoản</a> để bình luận.
                                </div>
                                <!-- start comment -->
                                <div class="ln-comment-group">
                                    <div id="ln-comment-2343587" class="ln-comment-item mt-3 clear" data-comment="2343587" data-parent="2343587">
                                        <div class="flex gap-1 max-w-full">
                                            <div class="w-[50px]">
                                                <div class="mx-1 my-1">
                                                    <!-- avatar người dùng -->
                                                    <img src="https://i2.docln.net/ln/users/avatars/u173017-ef4b6219-34db-4bb7-9061-cf3c9471f8aa.jpg" class="w-full rounded-full" />
                                                </div>
                                            </div>
                                            <div class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ring-2 ring-cyan-500 dark:ring-cyan-900">
                                                <div class="flex min-w-0 flex-col px-2">
                                                    <div class="flex align-top justify-between">
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                            <div class="self-center">
                                                                <a class="font-bold leading-6 md:leading-7 ln-username " href="/thanh-vien/tên người dung">Tên Người dùng</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                                        nội dung comment
                                                    </div>
                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit text-slate-500">
                                                        <time>
                                                            16-01-2024 11:59:43
                                                        </time>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end commnet  -->
                                <div class="ln-comment-page">
                                    <div class="pagination-footer">
                                        <div class="pagination_wrap">
                                            <a href class="paging_item paging_prevnext prev  disabled ">Trước</a>
                                            <a href="https://docln.net/truyen/16873-ban-thuo-nho-tro-thanh-than-tuong-noi-tieng-nhung-co-gai-de-thuong-dang-ung-ho-toi?page=2" class="paging_item paging_prevnext next">Sau</a>
                                        </div>
                                    </div>
                                </div>
                            </main>
                            <script>
                                var token = 'Y5fty94ZhGkdoX987eRk6NgUTxy4grERQLFLEjqk';
                                var comment_type = 'series';
                                var comment_typeid = '16873';
                            </script>
                        </section>
                    </div>
                </main>
            </section>
        </div>
    </div>
</div>