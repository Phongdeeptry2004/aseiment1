<?php 
 use App\Models\ChuongModel;

$c = new ChuongModel();
$array = $c->getChapterBeforeAndAfter($data['MaTruyen']);

function getChapterBeforeAndAfter($chapters, $currentChapterId)
{
    // Sắp xếp mảng theo SoChuong từ thấp đến cao
    usort($chapters, function ($a, $b) {
        return $a->SoChuong - $b->SoChuong;
    });

    $chapters = array_values($chapters); // Đảm bảo mảng có index bắt đầu từ 0
    $result = array(
        'previousChapter' => null,
        'nextChapter' => null
    );

    foreach ($chapters as $key => $chapter) {
        if ($chapter->MaChuong == $currentChapterId) {

            // Nếu là chương hiện tại
            if ($key > 0) {
                // Lấy mã chương trước nếu có
                $result['previousChapter'] = $chapters[$key - 1]->MaChuong;
            }

            if ($key < count($chapters) - 1) {
                // Lấy mã chương sau nếu có
                $result['nextChapter'] = $chapters[$key + 1]->MaChuong;
            }

            break;
        }
    }
    return $result;
}
$currentChapterId = $_GET['ma-chuong']; // Giả sử mã chương được truyền qua tham số GET

// Lấy mảng giá trị từ mảng đối tượng
$values = array_values($array);

// Tìm vị trí của mã chương hiện tại trong mảng giá trị
$position = array_search($currentChapterId, array_column($values, 'MaChuong'));

// Kiểm tra xem $currentChapterId có phải là giá trị đầu tiên của mảng không
$isFirst = ($position === 0);

// Kiểm tra xem $currentChapterId có phải là giá trị cuối cùng của mảng không
$isLast = ($position === count($values) - 1);

// Sử dụng hàm với mã chương hiện tại
$result = getChapterBeforeAndAfter($values, $currentChapterId);
?>
<link rel="stylesheet" href="css/icons/font-awesome/css/fontawesome-all.css">

<body>
    <style>
        body {
            background: inherit;
        }

        #footer {
            display: none;
        }
    </style>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Trang chủ - Cổng Light Novel - Đọc Light Novel</title>
        <meta name="description" content="Đọc Light Novel online, bình luận Light Novel. Thư viện Light Novel Tiếng Việt lớn nhất, chất lượng cao, cập nhật liên tục, nhiều chức năng hỗ trợ việc đọc truyện dễ dàng.">
        <meta name="theme-color" content="#000">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/favicon.png?v=3">
        <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon.png?v=3">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png?v=3">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png?v=3">


        <link rel="stylesheet" href="css/interface.css?id=9dd805f5b3fe086964a7">
        <link rel="stylesheet" href="css/tailwind.css?id=de66df19c9f6c325eb24">
        <link rel="stylesheet" href="css/all.min.css" />
        <script src="js/plugins.js?id=e21645b96ee550503766"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-34864968-3');
        </script>
    </head>

    <main id="mainpart" class="reading-page style-4">
        <section id="rd-side_icon" class="none force-block-l">
            <a class="rd_sd-button_item rd_top-left" href="<?php echo ROOT_PATH ?>chuong?ma-chuong=<?php echo $result['previousChapter'] ?>" <?php echo $isFirst ? 'disabled' : '' ?>><i class="fas fa-backward"></i></a>
            <a class="rd_sd-button_item" href="<?php ROOT_PATH ?>truyen?id=<?php echo $data['MaTruyen'] ?>"><i class="fas fa-home"></i></a>
            <a id="rd-setting_icon" data-affect="#" class="rd_sd-button_item"><i class="fas fa-font"></i></a>
            <a id="rd-info_icon" data-affect="#rd_sidebar.chapters" class="rd_sd-button_item"><i class="fas fa-info"></i></a>
            <a id="rd-bookmark_icon" data-affect="#rd_sidebar.bookmarks" class="rd_sd-button_item"><i class="fas fa-bookmark"></i></a>
            <a class="rd_sd-button_item rd_top-right" href="<?php echo ROOT_PATH ?>chuong?ma-chuong=<?php echo $result['nextChapter'] ?>" <?php echo $isLast ? 'disabled' : '' ?>><i class="fas fa-forward"></i></a>
        </section>
        <section id="chapters" class="rd_sidebar rdtoggle">
            <main class="rdtoggle_body">
                <header class="rd_sidebar-header clear">
                    <a class="img" href="/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to" style="background: url('https://i.docln.net/lightnovel/covers/s15056-001147c0-398e-46da-a310-ac11a8836fcb-m.jpg') no-repeat"></a>
                    <div class="rd_sidebar-name">
                        <h5><a href="/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta">&quot;Cậu
                                không thể hôn được,...</a></h5>
                        <small><i class="fas fa-pen"></i>Sakuragi Sakura</small>
                        <small><i class="fas fa-paint-brush"></i>Chigusa Minori</small>
                    </div>
                </header>
                <ul id="chap_list" class="unstyled">
                        <li>
                            <a href="/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c113038-minh-hoa">
                                <i class="fas fa-picture-o" aria-hidden="true" title="Có chứa ảnh"></i>
                                Minh họa
                            </a>
                        </li>
                </ul>
            </main>
            <div class="black-click"></div>
        </section>
        <section id="bookmarks" class="rd_sidebar rdtoggle">
            <main class="rdtoggle_body">
                <div class="rd_sidebar-header">
                    <h2 class="rd_s-name"><i class="fas fa-bookmark"></i><a href="/bookmark" style="color: white;">
                            Bookmarks</a></h2>
                </div>
                <ul id="bookmarks_list" class="unstyled">
                    <li>Bạn phải đăng nhập để sử dụng bookmark</li>
                </ul>
            </main>
            <div class="black-click"></div>
        </section>
        <section id="setting" class="rdtoggle">
            <section class="re_set-in basic-section clear rdtoggle_body">
                <header class="sect-header"><span class="sect-title">Tùy chỉnh</span></header>
                <main class="sect-body">
                    <div class="set-list set-color clear">
                        <label class="font-bold">Màu nền</label>
                        <div class="set-input clear justify-center">
                            <span data-color="#fff" data-id="0" style="background-color: #fff"></span>
                            <span data-color="#e6f0e6" data-id="1" style="background-color: #e6f0e6"></span>
                            <span data-color="#e3f5fa" data-id="2" style="background-color: #e3f5fa"></span>
                            <span data-color="#f6f4ec" data-id="3" style="background-color: #f6f4ec"></span>
                            <span data-color="#eae4d3" data-id="4" style="background-color: #eae4d3"></span>
                            <span data-color="#f5e9ef" data-id="5" style="background-color: #f5e9ef"></span>
                            <span data-color="#222222" data-id="6" style="background-color: #222222"></span>
                        </div>
                    </div>
                    <div class="set-list set-font-family clear">
                        <label class="font-bold">Font chữ</label>
                        <div class="set-slide set-input justify-center">
                            <select>
                                <option>Times New Roman</option>
                                <option>Merriweather</option>
                                <option>Lora</option>
                                <option>Roboto</option>
                                <option>Noto Sans</option>
                                <option>Nunito</option>
                            </select>
                        </div>
                    </div>
                    <div class="set-list set-font clear">
                        <label class="font-bold">Kích cỡ chữ</label>
                        <div class="set-slide set-input justify-center">
                            <span class="set-slide_button set-smaller"><i class="fas fa-chevron-left"></i></span>
                            <input class="set-slide_input" disabled value="16px" type="text">
                            <span class="set-bigger set-slide_button"><i class="fas fa-chevron-right"></i></span>
                        </div>
                    </div>
                    <div class="set-list set-margin clear">
                        <label class="font-bold">Bản lề</label>
                        <div class="set-slide set-input justify-center">
                            <span class="set-slide_button set-smaller"><i class="fas fa-chevron-left"></i></span>
                            <input class="set-slide_input" disabled value="20px" type="text">
                            <span class="set-bigger set-slide_button"><i class="fas fa-chevron-right"></i></span>
                        </div>
                    </div>
                    <div class="set-list set-text-align clear">
                        <label class="font-bold">Kiểu căn chỉnh</label>
                        <div class="set-input clear justify-center font-medium text-2xl flex flex-row gap-10">
                            <span data-align="text-left" class="p-1"><i class="fas fa-align-left"></i></span>
                            <span data-align="text-center" class="p-1"><i class="fas fa-align-center"></i></span>
                            <span data-align="text-right" class="p-1"><i class="fas fa-align-right"></i></span>
                            <span data-align="text-justify" class="p-1"><i class="fas fa-align-justify"></i></span>
                        </div>
                    </div>
                </main>
            </section>
            <div class="black-click"></div>
        </section>
        <div class="container">
            <div class="row">
                <div class="reading-content col-12 col-lg-10 offset-lg-1" style="word-wrap: break-word;">
                    <div id="bookmark_top" class="block d-lg-none"><i class="fas fa-bookmark"></i></div>
                    <span class="save_bookmark" style="position: absolute; top: 9999px; display: none"><i class="fas fa-bookmark"></i></span>
                    <div class="title-top" style="padding-top: 20px">
                        <h2 class="title-item text-xl font-bold" align="center">Vol 1</h2>
                        <h4 class="title-item text-base font-bold" align="center">Ngoại truyện Bookwalker: Nếu cậu bảo
                            là hợp với tớ...</h4>
                        <h6 class="title-item font-bold" align="center">
                            <a href="https://docln.net/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to#chapter-comments" style="text-decoration: underline">11 Bình luận</a> -
                            Độ dài: 535 từ - Cập nhật:
                            <time class="topic-time timeago" title="19-10-2023 01:25:12" datetime="2023-10-19T01:25:12+07:00"></time>
                        </h6>
                    </div>
                    <div style="text-align: center; margin: 20px auto -20px auto;">
                    </div>
                    <pre>
                    <div id="chapter-content" class="long-text no-select text-justify">
                        <?php
                        echo $data['NoiDungChuong'];
                        ?>
                    </div>
                <section class="rd-basic_icon row">
                    <a href="<?php echo ROOT_PATH ?>chuong?ma-chuong=<?php echo $result['previousChapter'] ?>" class="dark:text-black col text-center" <?php echo $isFirst ? 'disabled' : '' ?>><i class="fas fa-backward"></i></a>
                    <!-- Liên kết về trang chủ -->
                    <a href="<?php echo ROOT_PATH ?>truyen?id=<?php echo $data['MaTruyen'] ?>" class="dark:text-black col text-center"><i class="fas fa-home"></i></a>
                    <a href="<?php echo ROOT_PATH ?>chuong?ma-chuong=<?php echo $result['nextChapter'] ?>" class="dark:text-black col text-center" <?php echo $isLast ? 'disabled' : '' ?>><i class="fas fa-forward"></i></a>
                </section>
                    
                </div>
                <div class="col-12 col-lg-10 offset-lg-1">
                    <section id="chapter-comments"
                        class="basic-section dark:bg-[#1f1f1f] dark:text-white dark:border dark:border-[#1f1f1f]">
                        <header class="sect-header tab-list dark:bg-[#2a2a2a] dark:border-[#2a2a2a]">
                            <span class="sect-title tab-title" data-tab-index="1">Bình luận <span
                                    class="comments-count">(11)</span></span>
                        </header>
                        <main id="fbcmt_root" class="sect-body">
                            <span style="padding: 10px; display: inline-block;">Báo cáo bình luận không phù hợp ở <a
                                    href="/thao-luan/619-bao-cao-binh-luan" style="color: blue">đây</a></span>
                            <div id="tab-content-1" class="tab-content clear">
                                <section class="ln-comment">
                                    <header>
                                        <h3 class="text-lg font-bold dark:text-white">11 Bình luận </h3>

                                    </header>
                                    <main class="ln-comment-body">
                                        <div class="ln-comment_sign-in long-text">
                                            Bạn phải <a href="/login">đăng nhập</a> hoặc <a href="/register">tạo tài
                                                khoản</a> để bình luận.
                                        </div>
                                        <!-- start comment -->
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2346011" class="ln-comment-item mt-3 clear"
                                                data-comment="2346011" data-parent="2346011">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i.docln.net/lightnovel/users/ua151167-db802754-7bfa-4db1-8b2d-5ddf826a1d95.jpg"
                                                                class="w-full rounded-full" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                        <div class="flex min-w-0 flex-col px-2">
                                                            
                                                            <div class="flex align-top justify-between">
                                                                <div
                                                                    class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                    <div class="self-center">
                                                                        <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                            href="/thanh-vien/151167">Việt Dũng✔️</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ln-comment-content long-text">
                                                                Team đùi là chân ái🗿
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to?comment_id=2346011#ln-comment-2346011"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="18-01-2024 19:13:55"
                                                                        datetime="2024-01-18T19:13:55+07:00">
                                                                        18-01-2024 19:13:55
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end commnet -->
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2302556" class="ln-comment-item mt-3 clear"
                                                data-comment="2302556" data-parent="2302556">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i.docln.net/lightnovel/users/ua150785-871f1ee4-30a4-4863-9209-abee9868aac1.jpg"
                                                                class="w-full rounded-full" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                        <div class="flex min-w-0 flex-col px-2">
                                                            <div class="flex align-top justify-between">
                                                                <div
                                                                    class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                    <div class="self-center">
                                                                        <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                            href="/thanh-vien/150785">Cương Wibu</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ln-comment-content long-text">
                                                                Đừng dối lòng nào main đàn ông ai cx thích đùi cả chỉ
                                                                chia làm 2 cái 1 là thích nhiều. 2 là thích rất nhiều
                                                                nên cứ thừa nhận thoải mái đê
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to?comment_id=2302556#ln-comment-2302556"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="27-10-2023 18:28:36"
                                                                        datetime="2023-10-27T18:28:36+07:00">
                                                                        27-10-2023 18:28:36
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold">2</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2298876" class="ln-comment-item mt-3 clear"
                                                data-comment="2298876" data-parent="2298876">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i.docln.net/lightnovel/users/ua127527-e083a23e-8282-4481-abda-530c65346229.jpg"
                                                                class="w-full rounded-full" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                        <div class="flex min-w-0 flex-col px-2">
                                                            <div class="flex align-top justify-between">
                                                                <div
                                                                    class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                    <div class="self-center">
                                                                        <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                            href="/thanh-vien/127527">YêuđọcLightnovel</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ln-comment-content long-text">
                                                                TFNC
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to?comment_id=2298876#ln-comment-2298876"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="20-10-2023 21:48:17"
                                                                        datetime="2023-10-20T21:48:17+07:00">
                                                                        20-10-2023 21:48:17
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2298725" class="ln-comment-item mt-3 clear"
                                                data-comment="2298725" data-parent="2298725">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i.docln.net/lightnovel/users/ua172687-5643f14d-ffa9-4d15-af73-e61e783dba52.jpg"
                                                                class="w-full rounded-full" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                        <div class="flex min-w-0 flex-col px-2">
                                                            <div class="flex align-top justify-between">
                                                                <div
                                                                    class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                    <div class="self-center">
                                                                        <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                            href="/thanh-vien/172687">Tojirikikuta</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ln-comment-content long-text">
                                                                thoi đừng có dối lòng nữa người aexD
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to?comment_id=2298725#ln-comment-2298725"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="20-10-2023 16:15:22"
                                                                        datetime="2023-10-20T16:15:22+07:00">
                                                                        20-10-2023 16:15:22
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold">1</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2298110" class="ln-comment-item mt-3 clear"
                                                data-comment="2298110" data-parent="2298110">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i.docln.net/lightnovel/users/ua84489-959922cd-e0e8-49bd-a1d3-be2cde1d7f2b.jpg"
                                                                class="w-full rounded-full" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                        <div class="flex min-w-0 flex-col px-2">
                                                            <div class="flex align-top justify-between">
                                                                <div
                                                                    class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                    <div class="self-center">
                                                                        <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                            href="/thanh-vien/84489">hoanbeo1123</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ln-comment-content long-text">
                                                                oigioioi Thanks for a New Chapter<br>
                                                                Ảnh màu quá mlem lưỡi to <img
                                                                    src="https://i.pinimg.com/550x/71/d6/62/https://docln.net/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to/71d662f68b96216b70e81a9fccf7ee91.jpg"
                                                                    alt="https://docln.net/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to/71d662f68b96216b70e81a9fccf7ee91.jpg">
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to?comment_id=2298110#ln-comment-2298110"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="19-10-2023 15:32:40"
                                                                        datetime="2023-10-19T15:32:40+07:00">
                                                                        19-10-2023 15:32:40
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2298097" class="ln-comment-item mt-3 clear"
                                                data-comment="2298097" data-parent="2298097">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i.docln.net/lightnovel/users/ua87573-ce6eaf8a-53e9-4e5b-b545-9c8c0a0bc3d1.jpg"
                                                                class="w-full rounded-full" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                        <div class="flex min-w-0 flex-col px-2">
                                                            <div class="flex align-top justify-between">
                                                                <div
                                                                    class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                    <div class="self-center">
                                                                        <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                            href="/thanh-vien/87573">okakoro</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ln-comment-content long-text">
                                                                Ai cũng thích đùi<br>
                                                                K riêng j ông<br>
                                                                Đàn ông chê đùi là bede🐧
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to?comment_id=2298097#ln-comment-2298097"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="19-10-2023 15:18:52"
                                                                        datetime="2023-10-19T15:18:52+07:00">
                                                                        19-10-2023 15:18:52
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold">1</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2298016" class="ln-comment-item mt-3 clear"
                                                data-comment="2298016" data-parent="2298016">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i.docln.net/lightnovel/users/ua164982-9cbadbc9-8664-4943-8b20-117267d2f78a.jpg"
                                                                class="w-full rounded-full" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                        <div class="flex min-w-0 flex-col px-2">
                                                            <div class="flex align-top justify-between">
                                                                <div
                                                                    class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                    <div class="self-center">
                                                                        <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                            href="/thanh-vien/164982">Chilamotreaderquaduong</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ln-comment-content long-text">
                                                                Uwuuuu ngol quá<br>
                                                                Thanks trans
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to?comment_id=2298016#ln-comment-2298016"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="19-10-2023 12:15:08"
                                                                        datetime="2023-10-19T12:15:08+07:00">
                                                                        19-10-2023 12:15:08
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2297829" class="ln-comment-item mt-3 clear"
                                                data-comment="2297829" data-parent="2297829">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i.docln.net/lightnovel/users/ua155346-42caf46a-cfe8-4117-be5e-128ff0744f8d.jpg"
                                                                class="w-full rounded-full" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                        <div class="flex min-w-0 flex-col px-2">
                                                            <div class="flex align-top justify-between">
                                                                <div
                                                                    class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                    <div class="self-center">
                                                                        <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                            href="/thanh-vien/155346">Kizune Mirasú</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ln-comment-content long-text">
                                                                Ngại j bro, ai cx thích đùi 🐧
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to?comment_id=2297829#ln-comment-2297829"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="19-10-2023 02:12:18"
                                                                        datetime="2023-10-19T02:12:18+07:00">
                                                                        19-10-2023 02:12:18
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold">1</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ln-comment-reply">
                                                <div id="ln-comment-2297832" class="ln-comment-item mt-3 clear"
                                                    data-comment="2297832" data-parent="2297829">
                                                    <div class="flex gap-1 max-w-full">
                                                        <div class="w-[50px]">
                                                            <div class="mx-1 my-1">
                                                                <img src="https://i.docln.net/lightnovel/users/ua151874-0f765c57-0dc7-468b-9807-1dd60229478f.jpg"
                                                                    class="w-full rounded-full" />
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                            <div class="flex min-w-0 flex-col px-2">
                                                                <div class="flex align-top justify-between">
                                                                    <div
                                                                        class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                        <div class="self-center">
                                                                            <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                                href="/thanh-vien/151874">qtheok</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ln-comment-content long-text">
                                                                    yep🐧
                                                                </div>
                                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                                <div
                                                                    class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                    <a href="/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to?comment_id=2297829&amp;reply_id=2297832#ln-comment-2297832"
                                                                        class="text-slate-500">
                                                                        <time class="timeago"
                                                                            title="19-10-2023 02:36:56"
                                                                            datetime="2023-10-19T02:36:56+07:00">
                                                                            19-10-2023 02:36:56
                                                                        </time>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                                        <span class="likecount font-semibold"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2297823" class="ln-comment-item mt-3 clear"
                                                data-comment="2297823" data-parent="2297823">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i2.docln.net/ln/users/avatars/u160088-d133915b-4c76-4250-978d-abc95d246ff4.jpg"
                                                                class="w-full rounded-full" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                        <div class="flex min-w-0 flex-col px-2">
                                                            <div class="flex align-top justify-between">
                                                                <div
                                                                    class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                    <div class="self-center">
                                                                        <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                            href="/thanh-vien/160088">Nguoz</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ln-comment-content long-text">
                                                                Đăng giờ linh dữ
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to?comment_id=2297823#ln-comment-2297823"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="19-10-2023 02:01:00"
                                                                        datetime="2023-10-19T02:01:00+07:00">
                                                                        19-10-2023 02:01:00
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2297807" class="ln-comment-item mt-3 clear"
                                                data-comment="2297807" data-parent="2297807">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i2.docln.net/ln/users/avatars/u114008-d44150f5-2132-4775-8598-92594469eb1a.jpg"
                                                                class="w-full rounded-full" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                        <div class="flex min-w-0 flex-col px-2">
                                                            <div class="flex align-top justify-between">
                                                                <div
                                                                    class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                    <div class="self-center">
                                                                        <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                            href="/thanh-vien/114008">MiuđựcVN</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ln-comment-content long-text">
                                                                tem
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c121006-ngoai-truyen-bookwalker-neu-cau-bao-la-hop-voi-to?comment_id=2297807#ln-comment-2297807"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="19-10-2023 01:29:17"
                                                                        datetime="2023-10-19T01:29:17+07:00">
                                                                        19-10-2023 01:29:17
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln-comment-page">
                                        </div>
                                    </main>
                                    <script>
                                        var token = 'praZ05kQFfv2gooLYZSboYjepMSfK0WGVAbDjrqc';
                                        var comment_type = 'chapter';
                                        var comment_typeid = '121006';
                                    </script>
                                </section>
                            </div>
                        </main>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <script>
        token = 'praZ05kQFfv2gooLYZSboYjepMSfK0WGVAbDjrqc';

        function turnoffall() {
            $(".rdtoggle").removeClass("on");
            $(".rdtoggle_body").removeClass("animation fade-in-left-big fade-in-down");
            $("html").removeClass("overflow-hiden");
        }

        function rdtoggle(classicon, effect) {
            if ($(classicon).hasClass("on")) {
                turnoffall();
            } else {
                turnoffall();
                $(classicon).addClass("on");
                $("html").addClass("overflow-hiden");
                $(classicon + " .rdtoggle_body").addClass("animation " + effect);
            }
        };

        $("#rd-setting_icon").on('click', function () {
            rdtoggle("#setting", "fade-in-down");
        });

        $("#rd-info_icon").on('click', function () {
            rdtoggle("#chapters", "fade-in-left-big");
        });

        $("#rd-bookmark_icon").on('click', function () {
            rdtoggle("#bookmarks", "fade-in-left-big");
        });

        $(".black-click").on('click', function () {
            turnoffall();
            $("#rd-side_icon").hide();
            $("#bookmark_top").removeClass("on");
        });

        var bgcolor = Cookies.get('color') || (Cookies.get('night_mode') ? 6 : 4);
        var fontfamily = Cookies.get('fontfamily') || '';
        var fontsize = Cookies.get('font') || 18;
        var margin = Cookies.get('margin') || 0;
        var textAlign = Cookies.get('textAlign') || 'text-justify';

        function setcolor(alter = true) {
            var switcher = $(".set-color .set-input span").eq(bgcolor);
            switcher.addClass("current");

            if (alter) {
                for (var i = 0; i < $(".set-color .set-input span").length; i++) {
                    $("#mainpart").removeClass('style-' + i);
                    $("#mainpart").removeClass('dark');
                }
                $("#mainpart").addClass('style-' + bgcolor);

                // Manually hardcoded to dark
                if (bgcolor == 6) {
                    $("#mainpart").addClass('dark');
                }
            }
        }

        // This creates unsmooth experience so we only use it for select box
        function setfontfamily() {
            $('.set-font-family select option').filter(function () {
                return fontfamily.split(',')[0].indexOf($(this).text()) != -1;
            }).attr('selected', true);
        }

        function setfontstyle(alter = true) {
            $(".set-font input.set-slide_input").val(fontsize + "px");

            if (alter) {
                $("div#chapter-content").css("font-size", fontsize + "px");

                var lineheight = +fontsize + 10;
                $("#chapter-content").css("line-height", lineheight + "px");
            }
        }

        function setmargin() {
            $(".set-margin input.set-slide_input").val(margin + "px");
            $("#chapter-content").css({
                'padding-left': margin + "px",
                'padding-right': margin + "px"
            });
        }

        function setTextAlign(alter = true) {
            var switcher = $(".set-text-align .set-input span[data-align='" + textAlign + "']");
            switcher.addClass("current");

            if (alter) {
                $(".set-text-align .set-input span").each(function () {
                    $("#chapter-content").removeClass($(this).attr('data-align'));
                });

                $("#chapter-content").addClass(textAlign);
            }
        }

        setcolor(false);
        setfontfamily();
        setfontstyle(false);
        setmargin();
        setTextAlign(true);

        //1px = 0.0625rem;
        //16px = 1rem (default);

        $(".set-color .set-input span").click(function () {
            bgcolor = $(this).data("id");
            $(".set-color .set-input span").removeClass("current");
            setcolor();
            Cookies.set('color', bgcolor, { expires: 365 });
        });

        $('.set-font-family select').on('change', function () {
            fontfamily = "'" + $('option:selected', this).text() + "', " + '\'Times New Roman\', Georgia, serif';

            $('div#chapter-content').css('font-family', fontfamily);

            Cookies.set('fontfamily', fontfamily, { expires: 365 });
        });

        $(".set-font .set-slide_button.set-smaller").click(function () {
            fontsize = fontsize - 2;
            if (fontsize < 0) fontsize = 0;
            setfontstyle();
            Cookies.set('font', fontsize, { expires: 365 });
        });

        $(".set-font .set-slide_button.set-bigger").click(function () {
            fontsize = +fontsize + 2;
            setfontstyle();
            Cookies.set('font', fontsize, { expires: 365 });
        });

        $(".set-margin .set-slide_button.set-smaller").click(function () {
            margin = margin - 20;
            if (margin < 0) margin = 0;
            setmargin();
            Cookies.set('margin', margin, { expires: 365 });
        });

        $(".set-margin .set-slide_button.set-bigger").click(function () {
            margin = +margin + 20;
            setmargin();
            Cookies.set('margin', margin, { expires: 365 });
        });

        $(".set-text-align .set-input span").click(function () {
            textAlign = $(this).data("align");
            $(".set-text-align .set-input span").removeClass("current");
            setTextAlign();
            Cookies.set('textAlign', textAlign, { expires: 365 });
        });

        $("#bookmarks_list li").each(function () {
            var linepr = $(this).data("line");
            var preview = $(".reading-content p#" + linepr).text();

            var shortText = preview.trim().substring(0, 30) + "...";
            $(this).find(".pos_bookmark small").text(shortText);
        });

        $('div#chapter-content').html(
            $('div#chapter-content').html().replace(
                /\[note(\d+)\]/gi,
                '<span id="anchor-note$1" class="note-icon none-print inline note-tooltip" data-tooltip-content="#note$1 .note-content" data-note-id="note$1"><i class="fas fa-sticky-note"></i></span><a id="anchor-note$1" class="inline-print none" href="#note$1">[note]</a>'
            )
        )

        tippy('.note-tooltip', {
            delay: 50,
            maxWidth: 240,
            interactive: true,
            content(ref) {
                const selector = ref.getAttribute('data-tooltip-content');
                const template = document.querySelector(selector);
                return template ? template.innerHTML : 'Đặt sai ID của note';
            }
        });

        isLoggedIn = 0;
        series_id = parseInt('15056');
        chapter_id = parseInt('121006');

        readingObject = {
            series_id: series_id,
            series_title: '&quot;Cậu không thể hôn được, phải chứ?&quot; Khi tôi khiến cô bạn thuở nhỏ luôn trêu chọc mình hiểu chuyện, cô ấy đột nhiên trở nên dễ thương hơn nhiều',
            series_url: $('i.fa-home').first().parent().attr('href'),
            series_cover: $('.rd_sidebar-header a.img').css('background-image'),
            chapter_title: $('ul.sub-chap_list li.current a').text().trim(),
            chapter_url: $('ul.sub-chap_list li.current a').attr('href'),
            book_title: $('ul#chap_list > li.current a').text(),
            book_url: $('ul#chap_list > li.current a').attr('href'),
            read_time: +new Date() / 1000 | 0,
        };
    </script>
    <script src="js/app.js?id=b8198cd1707d7a5e169b"></script>
    <script src="js/livewire.js?id=f121a5df" data-csrf="praZ05kQFfv2gooLYZSboYjepMSfK0WGVAbDjrqc"
        data-update-uri="/livewire/update" data-navigate-once="true"></script>
    <script type="text/javascript"
        src="//absorbedscholarsvolatile.com/d5/6b/4b/d56b4bd6c3d2c1e161c4ab3c78c27670.js"></script>
    <footer id="footer">
        <div class="container">

            <span class="right">Liên hệ: <a href="mailto:contact@hako.vn" target="_blank"
                    style="color: #5fff46">contact@hako.vn</a></span>
            <span>© 2016 - 2024 Cổng Light Novel - Đọc Light Novel</span>
        </div>
    </footer>
    <div x-data x-show="$store.toast.on" @click="$store.toast.hide()"
        class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md fixed w-3/4 md:w-1/2 z-20 inset-x-0 bottom-10 mx-auto"
        role="alert" style="display: none">
        <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                </svg></div>
            <div>
                <p class="font-bold capitalize">Chú ý</p>
                <p class="text-sm" x-text="$store.toast.message"></p>
            </div>
        </div>
    </div>
</body>