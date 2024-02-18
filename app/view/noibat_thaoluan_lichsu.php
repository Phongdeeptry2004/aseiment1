<div class="container" style="margin-bottom: 40px;">
    <div class="row">
        <div class="col-12 col-lg-9">
            <div class="daily-recent_views">
                <header class="title">
                    <span class="top-tab_title title-active"><i class="fas fa-trophy"></i> Nổi bật</span>
                    <span class="top-tab_title"><a href="https://docln.net/danh-sach?truyendich=1&amp;sapxep=topthang">Top
                            tháng</a></span>
                    <span class="top-tab_title"><a href="https://docln.net/danh-sach?truyendich=1&amp;sapxep=top">Toàn
                            t/gian</a></span>
                </header>
                <main class="row slider d-block">
                    <?php

                    use App\Models\TruyenModel;

                    $t = new TruyenModel();
                    $Truyen = $t->where("LuotXem", ">=", "100")->andOderbyDESClimit("LuotXem", 8)->get();
                    // $Truyen=$t->all();
                    foreach ($Truyen as $item) :
                    ?>
                        <div class="popular-thumb-item mr-1">
                            <div class="thumb-wrapper">
                                <a href="<?php ROOT_PATH ?>truyen?id=<?php echo $item->MaTruyen ?>" title="Bạn thuở nhỏ trở thành thần tượng nổi tiếng ~ Những cô gái dễ thương đang hỗ trợ tôi ~">
                                    <div class="a6-ratio">
                                        <div class="content img-in-ratio" style="background-image: url('img/<?php echo $item->img ?>')">
                                        </div>
                                    </div>
                                </a>
                                <div class="thumb-detail">
                                    <div class="thumb_attr series-title" title="<?php echo $item->TieuDe ?>">
                                        <a href="<?php ROOT_PATH ?>truyen?id=<?php echo $item->MaTruyen ?>" title="<?php echo $item->TieuDe ?>"><?php echo $item->TieuDe ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </main>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <section class="last-topics index-section">
                <header class="section-title">
                    <a href="https://docln.net/thao-luan"><span class="sts-bold">Thảo</span><span class="sts-empty">Luận</span></a>
                </header>
                <main>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #1ee865; margin-right: 4px;"></i>
                                <a href="/thao-luan/2263-hoi-truyen-tu-az-goc-8-nham-cho-dich-gia-20?comment_id=2345309&amp;reply_id=2346409#ln-comment-2346409" title="Hỏi Truyện từ A&gt;Z. Góc 8 nhảm cho dịch giả 2.0">
                                    Hỏi Truyện từ A&gt;Z. Góc 8 nhảm cho dịch giả 2.0
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="19-01-2024 11:39:17" datetime="2024-01-19T11:39:17+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #eb1d57; margin-right: 4px;"></i>
                                <a href="/thao-luan/2715-bang-j-dien-ra-sau-24-gio?comment_id=2346007&amp;reply_id=2346408#ln-comment-2346408" title="BẢNG J - ĐANG DIỄN RA">
                                    BẢNG J - ĐANG DIỄN RA
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="19-01-2024 11:27:25" datetime="2024-01-19T11:27:25+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #1ee865; margin-right: 4px;"></i>
                                <a href="/thao-luan/2266-thao-luan-cho-tac-gia-oln?comment_id=2346032&amp;reply_id=2346201#ln-comment-2346201" title="Thảo luận cho tác giả OLN">
                                    Thảo luận cho tác giả OLN
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="18-01-2024 22:50:21" datetime="2024-01-18T22:50:21+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #eb1d57; margin-right: 4px;"></i>
                                <a href="/thao-luan/7-xin-nhan-quyen-chinh-sua-series-tai-day?comment_id=2321743&amp;reply_id=2346081#ln-comment-2346081" title="Xin nhận quyền chỉnh sửa series tại đây">
                                    Xin nhận quyền chỉnh sửa series tại đây
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="18-01-2024 20:46:00" datetime="2024-01-18T20:46:00+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #28e1e8; margin-right: 4px;"></i>
                                <a href="/thao-luan/2716-zamecia?comment_id=2346052#ln-comment-2346052" title="Zamecia!">
                                    Zamecia!
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="18-01-2024 20:06:27" datetime="2024-01-18T20:06:27+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #e01bb4; margin-right: 4px;"></i>
                                <a href="/thao-luan/2703-dien-bien-tung-ngay-cua-giai-dau-oln?comment_id=2344803&amp;reply_id=2345716#ln-comment-2345716" title="[OLN tranh tài] - Diễn biến từng ngày">
                                    [OLN tranh tài] - Diễn biến từng ngày
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="18-01-2024 01:36:30" datetime="2024-01-18T01:36:30+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #1ee865; margin-right: 4px;"></i>
                                <a href="/thao-luan/85-de-xuat-lnwn-cho-cac-trans?comment_id=2345583#ln-comment-2345583" title="Đề xuất LN/WN cho các trans">
                                    Đề xuất LN/WN cho các trans
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="17-01-2024 22:07:33" datetime="2024-01-17T22:07:33+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #eb1d57; margin-right: 4px;"></i>
                                <a href="/thao-luan/1610-trang-yeu-cau-xoa-truyentapchuong?comment_id=2345503#ln-comment-2345503" title="Trang yêu cầu xóa truyện/tập/chương">
                                    Trang yêu cầu xóa truyện/tập/chương
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="17-01-2024 20:57:12" datetime="2024-01-17T20:57:12+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #1ee865; margin-right: 4px;"></i>
                                <a href="/thao-luan/2515-quan-bong-da-hako-chuyen-phuc-vu-dan-bong-da?comment_id=2345148#ln-comment-2345148" title="Quán Bóng Đá Hako - Chuyên phục vụ dân bóng đá.">
                                    Quán Bóng Đá Hako - Chuyên phục vụ dân bóng đá.
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="16-01-2024 23:49:39" datetime="2024-01-16T23:49:39+07:00"></time>
                            </div>
                        </div>
                    </div>
                </main>
            </section>
            <div class="d-lg-none" style="margin-top: 20px">
                <section id="reading-history" class="index-section" x-data="{ storage: (JSON.parse(localStorage.getItem('reading_series')) || []).slice(0,4) }">
                    <header class="section-title">
                        <a href="<?= ROOT_PATH ?>lich-su-doc">
                            <span class="sts-bold">Truyện</span><span class="sts-empty">vừa đọc</span>
                        </a>
                    </header>
                    <main class="sect-body">
                        <?php
                        extract($data);
                        if (isset($_COOKIE['TaiKhoan'])) {
                            foreach ($LSTK as $item) {
                                echo '<div class="row ml-1 mb-3">
                                        <div class="col-2 col-md-1 col-lg-2 a6-ratio">
                                            <div class="img-contain-ratio content" style="background-image: url('.ROOT_PATH.'img/' . $item["img"] . ');"></div>
                                        </div>
                                        <div class="col-8 col-md-9 col-lg-8">
                                            <a class="text-truncate block font-weight-bold" href="' . ROOT_PATH . 'truyen?id=' . $item["MaTruyen"] . '">' . $item["TieuDe"] . '</a>
                                            <div class="small mb-3 text-truncate">' . $item["TieuDeChuong"] . '</div>
                                            <a class="text-truncate block" href="' . ROOT_PATH . 'chuong?ma-chuong=' . $item['ChapDocGanNhat'] . '">Chapter ' . $item["ChapDocGanNhat"] . '</a>
                                        </div>
                                    </div>';
                            }
                        }elseif (isset($_COOKIE['lichsu'])) {
                            foreach ($LsCookie as $item) {
                                echo '<div class="row ml-1 mb-3">
                                        <div class="col-2 col-md-1 col-lg-2 a6-ratio">
                                            <div class="img-contain-ratio content" style="background-image: url(img/'.$item["img"] . ');"></div>
                                        </div>
                                        <div class="col-8 col-md-9 col-lg-8">
                                            <a class="text-truncate block font-weight-bold" href="' . ROOT_PATH . 'truyen?id=' . $item["MaTruyen"] . '">' . $item["TieuDe"] . '</a>
                                            <div class="small mb-3 text-truncate">' . $item["TieuDeChuong"] . '</div>
                                            <a class="text-truncate block" href="' . ROOT_PATH . 'chuong?ma-chuong=' . $item['MaChuong'] . '">' . $item["TieuDeChuong"] . '</a>
                                        </div>
                                    </div>';
                            }
                            
                        }
                        ?>
                    </main>
                </section>
            </div>
        </div>
    </div>
</div>