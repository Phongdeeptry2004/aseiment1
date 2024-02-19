<?php

use App\Models\TruyenModel;

extract($data);
$sotruyen = TruyenModel::demTruyen($ThongTin->MaNguoiDung);
?>
<main id="mainpart" class="profile-page">
    <div class="profile-feature-wrapper">
        <div class="container">
            <div class="profile-feature">
                <div class="profile-cover">
                    <div class="fourone-ratio">
                        <div class="content img-in-ratio" style="background-image: url('');"></div>
                    </div>
                    <div id="profile-changer_cover" class="profile-changer none block-m">
                        <div class="p-c_wrapper">
                            <i class="fas fa-camera"></i>
                            <span class="p-c_text">Yêu cầu 1200 x 300 px</span>
                        </div>
                    </div>
                    <input type="file" id="user_cover_file" style="display: none">
                    <input type="file" id="user_avatar_file" style="display: none">
                </div>
                <div class="profile-nav">
                    <div class="profile-ava-wrapper">
                        <div class="profile-ava">
                            <img src="<?= ROOT_PATH ?>img/<?= $ThongTin->Avatar ? $ThongTin->Avatar : 'noava.png' ?>">
                        </div>
                    </div>
                    <!-- <div class="profile-function at-desktop none block-m">
                            <a href="https://docln.net/tin-nhan/moi?to=Phongdeeptry2993" class="button to-contact button-green"><i class="fas fa-paper-plane"></i> Liên hệ</a>
                        </div> -->
                    <div class="profile-intro">

                        <h3 class="profile-intro_name text-lg font-bold ">
                            <?= $ThongTin->TenDangNhap ?>
                        </h3>
                        <div class="flex flex-wrap gap-x-2 gap-y-2 align-middle pt-1 justify-center md:justify-start">
                        </div>
                    </div>
                    <!-- <div class="profile-function at-mobile none-m">
<a href="https://docln.net/tin-nhan/moi?to=Phongdeeptry2993" class="button to-contact button-green"><i class="fas fa-paper-plane"></i> Liên hệ</a>
</div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <section class="basic-section clear">
                    <ul class="statistic-top row">
                        <div class="mb-5 flex flex-col flex-1 mx-5">
                            <div class="flex justify-between mb-1">
                                <span class="text-sm capitalize font-medium text-blue-700 dark:text-white">mới isekai</span>
                                <span class="text-sm capitalize font-medium text-blue-700 dark:text-white">học nghề</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 relative">
                                <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center h-5 leading-none rounded-full" style="width: 0%"></div>
                                <div class="w-full flex absolute top-0 left-0 justify-between p-0.5 text-white">
                                    <div class="text-xs ml-0.5">Lên cấp</div>
                                    <div class="text-xs">0,00%</div>
                                    <div class="text-xs mr-0.5">Bước 1</div>
                                </div>
                            </div>
                            <div class="text-xs mt-2 mx-auto">
                                Cấp 0 (0,00 / 31,25)
                            </div>
                            <div class="text-base mt-2">
                                Thử nghiệm, chưa dùng chính thức.
                                <span class="text-sm block text-center mt-5">
                                    Mới Isekai • Học Nghề • Nhà Mạo Hiểm • Chuyên Gia • Đại Sư • Thách Đấu • Quán Quân • Truyền Kỳ • Sử Thi • Thần Thoại • Vô Địch • Phi Thăng • Thánh Vực • Thần Vực • Hằng Tinh • Thiên Hà • Đại Vũ Trụ • Đa Vũ Trụ • Siêu Việt • Toàn Trí • Toàn Năng
                                </span>
                            </div>
                        </div>
                    </ul>
                    <ul class="statistic-top row">
                        <li class="col-6">
                            <div class="statistic-value">
                                <?= $sotruyen[0]->SoTruyen ?>
                            </div>
                            <div class="statistic-name">Truyện đã đăng</div>
                        </li>
                        <!-- <li class="col-6">
                            <div class="statistic-value">0</div>
                            <div class="statistic-name">Đang theo dõi</div>
                        </li> -->
                        <li class="col-6">
                            <div class="statistic-value"><a href="<?= ROOT_PATH ?>/lich-su-binh-luan">0</a></div>
                            <div class="statistic-name">Bình luận</div>
                        </li>
                    </ul>
                    <!-- <main class="sect-body">
                        <div class="profile-info-item">
                            <span class="info-name"><i class="fas fa-calendar"></i> Tham gia: </span><span class="info-value"></span>
                        </div>
                    </main> -->
                </section>
            </div>
            <div class="col-12 col-md-12 col-lg-9 col-xl-9">
                <section class="profile-showcase">
                    <header><span class="number"><?= $sotruyen[0]->SoTruyen ?></span><span class="showcase-title">Truyện đã đăng</span></header>
                    <div class="row">
                        <?php
                        if ($sotruyen[0]->SoTruyen === '1') {
                            extract($data);
                            $t = array($Truyen);
                            foreach ($t as $truyenItem) :
                                $ngaycapnhat = date('Y-m-d\TH:i:sP', strtotime($truyenItem->ThoiDiemTao))
                        ?>

                                <div class="col-12 col-md-6">
                                    <div class="showcase-item">
                                        <div class="row">
                                            <div class="series-cover col-4">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio" style="background-image: url('<?= ROOT_PATH ?>img/<?= $truyenItem->img ?>')">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="series-info">
                                                    <div class="series-type-wrapper">
                                                        <small class="series-type type-translation">Truyện dịch</small>
                                                    </div>
                                                    <h5 class="series-name text-base font-bold"><a href="<?= ROOT_PATH ?>truyen?id=<?= $truyenItem->MaTruyen ?>"><?= $truyenItem->TieuDe ?></a>
                                                    </h5>
                                                </div>
                                                <div class="series-status">
                                                    <div class="status-item">
                                                        <span class="status-name">Tình trạng:</span>
                                                        <span class="status-value"><?= $truyenItem->TinhTrangDich ?></span>
                                                    </div>
                                                    <div class="status-item">
                                                        <span class="status-name">Lần cuối:</span>
                                                        <span class="status-value"><time class="timeago" title="<?= $truyenItem->ThoiDiemTao ?>" datetime="<?= $ngaycapnhat ?>"></time>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;
                        } elseif ($sotruyen[0]->SoTruyen > 1) { // Nếu mảng chứa nhiều truyện
                            foreach ($data['Truyen'] as $truyenItem) :
                                $ngaycapnhat = date('Y-m-d\TH:i:sP', strtotime($truyenItem->ThoiDiemTao))
                            ?>
                                <div class="col-12 col-md-6">
                                    <div class="showcase-item">
                                        <div class="row">
                                            <div class="series-cover col-4">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio" style="background-image: url('<?= ROOT_PATH ?>img/<?= $truyenItem->img ?>')">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="series-info">
                                                    <div class="series-type-wrapper">
                                                        <small class="series-type type-translation">Truyện dịch</small>
                                                    </div>
                                                    <h5 class="series-name text-base font-bold"><a href="<?= ROOT_PATH ?>truyen?id=<?= $truyenItem->MaTruyen ?>"><?= $truyenItem->TieuDe ?></a>
                                                    </h5>
                                                </div>
                                                <div class="series-status">
                                                    <div class="status-item">
                                                        <span class="status-name">Tình trạng:</span>
                                                        <span class="status-value"><?= $truyenItem->TinhTrangDich ?></span>
                                                    </div>
                                                    <div class="status-item">
                                                        <span class="status-name">Lần cuối:</span>
                                                        <span class="status-value"><time class="timeago" title="<?= $truyenItem->ThoiDiemTao ?>" datetime="<?= $ngaycapnhat ?>"></time>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php
                            endforeach;
                        }
                        ?>
                    </div>
                </section>
            </div>
        </div>
    </div>