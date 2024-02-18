<div class="container">
    <div class="row">
        <div class="col-12 col-lg-9">
            <section class="index-section thumb-section-flow last-chapter translation three-row">
                <header class="section-title">
                    <span class="sts-bold">Chương</span><span class="sts-empty">mới nhất</span>
                </header>
                <main class="row">
                    <?php

                    use App\Models\TruyenModel;

                    $t = new TruyenModel();
                    $Truyen = $t->all();
                    foreach ($Truyen as $item) :
                    ?>
                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                            <div class="thumb-wrapper ln-tooltip">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="img/<?php echo $item->img ?>">
                                    </div>
                                </div>
                                </a>
                                <div class="thumb-detail">
                                    <div class="thumb_attr chapter-title" title="Tên Chương">
                                        <a href="<?php ROOT_PATH ?>truyen?id=<?php echo $item->MaTruyen ?>" title="Tên Chương">Tên chương1</a>
                                    </div>
                                    <div class="thumb_attr volume-title"><?php echo $item->TieuDe ?>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb_attr series-title"><a href="<?php ROOT_PATH ?>truyen?id=<?php echo $item->MaTruyen ?>" title="<?php echo $item->TieuDe ?>"><?php echo $item->TieuDe ?></a></div>
                        </div>
                    <?php endforeach ?>
                    <div class="thumb-item-flow col-4 col-lg-2 see-more">
                        <div class="thumb-wrapper">
                            <div class="a6-ratio">
                                <div class="content img-in-ratio" style="background-image: url('img/nocover.jpg');"></div>
                            </div>
                            <a href="<?php ROOT_PATH ?>danh-sach">
                                <div class="thumb-see-more">
                                    <div class="see-more-inside">
                                        <div class="see-more-content">
                                            <div class="see-more-icon"><i class="fas fa-arrow-circle-right"></i>
                                            </div>
                                            <div class="see-more-text">Xem thêm</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </main>
            </section>
        </div>
        <div class="col-12 col-lg-3">
            <div class="d-none d-lg-block">
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
                        } elseif (isset($_COOKIE['lichsu'])) {
                            foreach ($LsCookie as $item) {
                                echo '<div class="row ml-1 mb-3">
                                        <div class="col-2 col-md-1 col-lg-2 a6-ratio">
                                            <div class="img-contain-ratio content" style="background-image: url('.ROOT_PATH.'img/' . $item["img"] . ');"></div>
                                        </div>
                                        <div class="col-8 col-md-9 col-lg-8">
                                            <a class="text-truncate block font-weight-bold" href="' . ROOT_PATH . 'truyen?id=' . $item["MaTruyen"] . '">' . $item["TieuDe"] . '</a>
                                            <a class="text-truncate block" href="' . ROOT_PATH . 'chuong?ma-chuong=' . $item['MaChuong'] . '">' . $item["TieuDeChuong"] . '</a>
                                        </div>
                                    </div>';
                            }
                        }
                        ?>
                    </main>
                </section>
            </div>
            <section id="recent-comments" class="index-section">
                <header class="section-title">
                    <span class="sts-bold">Bình luận</span><span class="sts-empty">gần đây</span>
                </header>
                <main class="sect-body pr-5">
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/787-tensei-shitara-kendeshita?comment_id=2346044&amp;reply_id=2346416#ln-comment-2346416">Tensei
                                    Shitara Kendeshita</a></span>
                            <div class="comment-content">
                                Ok nha trans
                            </div>
                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/158526">
                                        <img src="https://i.docln.net/lightnovel/users/ua158526-fa9ca7cb-9e18-4e8d-b649-433f23f3f7d5.jpg" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/787-tensei-shitara-kendeshita?comment_id=2346044&amp;reply_id=2346416#ln-comment-2346416" rel="nofollow" class="comment-user_name strong">Coffee đen</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/787-tensei-shitara-kendeshita?comment_id=2346044&amp;reply_id=2346416#ln-comment-2346416">
                                        <time class="timeago" title="19-01-2024 12:05:01" datetime="2024-01-19T12:05:01+07:00">
                                            19-01-2024 12:05:01
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/15461-bang-mot-cach-nao-do-dan-my-nhan-hang-s-lai-de-cap-den-toi?comment_id=2346014&amp;reply_id=2346407#ln-comment-2346407">Không
                                    biết bằng cách nào, dàn mỹ nhân hạng S lại đề cập đến tôi</a></span>
                            <div class="comment-content">
                                Mấy cái này thì tôi biết. Có những bộ bám rất sát với wn. Nên ý tôi muốn hỏi là
                                bộ này có khác gì nh...
                            </div>
                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/63677">
                                        <img src="https://i.docln.net/lightnovel/users/ua63677-d44286b4-52f8-45dc-819a-4dd66a70dce7.jpg" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/15461-bang-mot-cach-nao-do-dan-my-nhan-hang-s-lai-de-cap-den-toi?comment_id=2346014&amp;reply_id=2346407#ln-comment-2346407" rel="nofollow" class="comment-user_name strong">Hạ Diệp Sư</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/15461-bang-mot-cach-nao-do-dan-my-nhan-hang-s-lai-de-cap-den-toi?comment_id=2346014&amp;reply_id=2346407#ln-comment-2346407">
                                        <time class="timeago" title="19-01-2024 11:22:24" datetime="2024-01-19T11:22:24+07:00">
                                            19-01-2024 11:22:24
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/7534-ending-maker?comment_id=2346405#ln-comment-2346405">Ending
                                    Maker</a></span>
                            <div class="comment-content">
                                Code vs sisioth(con quỷ kiếm hệ gió) ngang khúc mới hấp thụ đá rắn xong là ở
                                chap mấy mn nhỉ .-. Bên...
                            </div>
                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/76940">
                                        <img src="https://i.docln.net/lightnovel/users/ua76940-1b8b12a2-f6dc-4e81-a544-9bb3716858c5.jpg" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/7534-ending-maker?comment_id=2346405#ln-comment-2346405" rel="nofollow" class="comment-user_name strong">Ngô Khánh Ân</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/7534-ending-maker?comment_id=2346405#ln-comment-2346405">
                                        <time class="timeago" title="19-01-2024 10:52:50" datetime="2024-01-19T10:52:50+07:00">
                                            19-01-2024 10:52:50
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/8960-im-the-evil-lord-of-an-intergalactic-empire?comment_id=2346401#ln-comment-2346401">Ta
                                    là chúa tể độc ác của Đế Quốc liên thiên hà!</a></span>
                            <div class="comment-content">
                                Bản manga theo ln nên có bé hủ vui cực
                            </div>
                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/32540">
                                        <img src="https://docln.net/img/noava.png" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/8960-im-the-evil-lord-of-an-intergalactic-empire?comment_id=2346401#ln-comment-2346401" rel="nofollow" class="comment-user_name strong">Lê Trần Nam An</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/8960-im-the-evil-lord-of-an-intergalactic-empire?comment_id=2346401#ln-comment-2346401">
                                        <time class="timeago" title="19-01-2024 10:26:30" datetime="2024-01-19T10:26:30+07:00">
                                            19-01-2024 10:26:30
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/11586-shimotsuki-wa-mob-ga-suki?comment_id=2346054&amp;reply_id=2346400#ln-comment-2346400">Shimotsuki
                                    wa Mob ga Suki</a></span>
                            <div class="comment-content">
                                @Nguoz: :) lỡ quen r
                            </div>
                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/108952">
                                        <img src="https://i.docln.net/lightnovel/users/ua108952-d0fd99e4-edc5-4fbb-8573-0324bca66566.jpg" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/11586-shimotsuki-wa-mob-ga-suki?comment_id=2346054&amp;reply_id=2346400#ln-comment-2346400" rel="nofollow" class="comment-user_name strong">Đang bị lag</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/11586-shimotsuki-wa-mob-ga-suki?comment_id=2346054&amp;reply_id=2346400#ln-comment-2346400">
                                        <time class="timeago" title="19-01-2024 10:24:05" datetime="2024-01-19T10:24:05+07:00">
                                            19-01-2024 10:24:05
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/13897-maryoku-cheat-na-majo-ni-narimashita-souzou-mahou-de-kimama-na-isekai-seikatsu?comment_id=2345536&amp;reply_id=2346394#ln-comment-2346394">Maryoku
                                    Cheat na Majo ni Narimashita ~ Souzou Mahou de Kimama na Isekai Seikatsu
                                    ~</a></span>
                            <div class="comment-content">
                                hallo :v
                            </div>
                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/127520">
                                        <img src="https://i.docln.net/lightnovel/users/ua127520-e2d6defb-5409-45b6-bbdc-1b91fb98b428.jpg" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/13897-maryoku-cheat-na-majo-ni-narimashita-souzou-mahou-de-kimama-na-isekai-seikatsu?comment_id=2345536&amp;reply_id=2346394#ln-comment-2346394" rel="nofollow" class="comment-user_name strong">Vanmaxohp</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/13897-maryoku-cheat-na-majo-ni-narimashita-souzou-mahou-de-kimama-na-isekai-seikatsu?comment_id=2345536&amp;reply_id=2346394#ln-comment-2346394">
                                        <time class="timeago" title="19-01-2024 09:54:30" datetime="2024-01-19T09:54:30+07:00">
                                            19-01-2024 09:54:30
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/3311-nhan-vat-phu-tieu-thuyet?comment_id=2346385#ln-comment-2346385">The
                                    Novel &#039;s Extra</a></span>
                            <div class="comment-content">
                                chương 92 manhwa bên này tầm chap bn nhỉ
                            </div>
                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/115903">
                                        <img src="https://docln.net/img/noava.png" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/3311-nhan-vat-phu-tieu-thuyet?comment_id=2346385#ln-comment-2346385" rel="nofollow" class="comment-user_name strong">Baoln6327</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/3311-nhan-vat-phu-tieu-thuyet?comment_id=2346385#ln-comment-2346385">
                                        <time class="timeago" title="19-01-2024 09:14:27" datetime="2024-01-19T09:14:27+07:00">
                                            19-01-2024 09:14:27
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/16911-death-note-l-change-the-world?comment_id=2345889&amp;reply_id=2346382#ln-comment-2346382">Death
                                    Note – L: Change The WorLd</a></span>
                            <div class="comment-content">
                                @Loy: Tôi vừa nhận ra death note op thế nào
                            </div>
                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/175989">
                                        <img src="https://docln.net/img/noava.png" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/16911-death-note-l-change-the-world?comment_id=2345889&amp;reply_id=2346382#ln-comment-2346382" rel="nofollow" class="comment-user_name strong">thiên địa vãng lai</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/16911-death-note-l-change-the-world?comment_id=2345889&amp;reply_id=2346382#ln-comment-2346382">
                                        <time class="timeago" title="19-01-2024 08:52:24" datetime="2024-01-19T08:52:24+07:00">
                                            19-01-2024 08:52:24
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/8960-im-the-evil-lord-of-an-intergalactic-empire?comment_id=2346381#ln-comment-2346381">Ta
                                    là chúa tể độc ác của Đế Quốc liên thiên hà!</a></span>
                            <div class="comment-content">
                                thợ lặn chuyên nghiệp đã quay về bờ, liệu anh ấy có lặn tiếp trong thời gian tới
                                không ?
                            </div>
                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/175989">
                                        <img src="https://docln.net/img/noava.png" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/8960-im-the-evil-lord-of-an-intergalactic-empire?comment_id=2346381#ln-comment-2346381" rel="nofollow" class="comment-user_name strong">thiên địa vãng lai</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/8960-im-the-evil-lord-of-an-intergalactic-empire?comment_id=2346381#ln-comment-2346381">
                                        <time class="timeago" title="19-01-2024 08:50:51" datetime="2024-01-19T08:50:51+07:00">
                                            19-01-2024 08:50:51
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/14855-ore-wa-nandodemo-omae-o-tsuiho-suru?comment_id=2346091&amp;reply_id=2346379#ln-comment-2346379">Tôi
                                    sẽ trục xuất em, lần nữa, và lần nữa</a></span>
                            <div class="comment-content">
                                gì z bro-
                            </div>
                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/12377">
                                        <img src="https://i.docln.net/lightnovel/users/ua12377-9ad49449-37da-4bd6-b86f-1940dadb621c.jpg" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/14855-ore-wa-nandodemo-omae-o-tsuiho-suru?comment_id=2346091&amp;reply_id=2346379#ln-comment-2346379" rel="nofollow" class="comment-user_name strong">Karlken</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/14855-ore-wa-nandodemo-omae-o-tsuiho-suru?comment_id=2346091&amp;reply_id=2346379#ln-comment-2346379">
                                        <time class="timeago" title="19-01-2024 08:49:46" datetime="2024-01-19T08:49:46+07:00">
                                            19-01-2024 08:49:46
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                </main>
            </section>
        </div>
    </div>
</div>