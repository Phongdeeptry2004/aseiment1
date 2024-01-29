<form method="get">
        <main id="mainpart" class="browser-page">
            <div style="text-align: center; margin: 0 auto 10px auto;">
            </div>
            <div class="container">
                <div class="page-breadcrumb">
                    <span class="breadcrum-level"><a href="https://docln.net"><i class="fas fa-home"></i></a></span>
                    <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                    <span class="breadcrum-level"><a href="https://docln.net/danh-sach">Danh sách</a></span>
                </div>
            </div>
            <div class="container">
                <div class="row d-block clear">
                    <div class="col-12 none d-lg-block col-lg-3 float-right filters-wrapper">
                        <div class="none-l pad-bottom-20 text-right pad-top-20">
                            <span class="js-off-filters-wrapper button button-red">Tắt bộ lọc</span>
                        </div>
                        <section class="sub-index-style">
                            <div class="title-wrapper">
                                <div class="section-title">Chữ cái</div>
                            </div>
                            <div class="browse-alphabet">
                                <a class="alphabet_item  current " href="https://docln.net/danh-sach">Tất cả</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/khac">#</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/a">A</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/b">B</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/c">C</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/d">D</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/e">E</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/f">F</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/g">G</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/h">H</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/i">I</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/j">J</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/k">K</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/l">L</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/m">M</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/n">N</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/o">O</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/p">P</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/q">Q</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/r">R</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/s">S</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/t">T</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/u">U</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/v">V</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/w">W</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/x">X</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/y">Y</a>
                                <a class="alphabet_item " href="https://docln.net/danh-sach/z">Z</a>
                            </div>
                        </section>
                        <section class="sub-index-style filter-section">
                            <div class="title-wrapper">
                                <div class="section-title">Phân loại</div>
                            </div>
                            <div class="section-content">
                                <ul class="filter-type unstyled">
                                    <li><input type="checkbox" name="truyendich" value="1" checked> Truyện dịch</li>
                                    <li><input type="checkbox" name="sangtac" value="1"> Truyện sáng tác</li>
                                    <li><input type="checkbox" name="convert" value="1"> Convert</li>
                                </ul>
                                <div class="submit-wrapper">
                                    <input type="submit" class="button bg-green-600 text-white hover:bg-green-700"
                                        value="Áp dụng">
                                </div>
                            </div>
                        </section>
                        <section class="sub-index-style filter-section">
                            <div class="title-wrapper">
                                <div class="section-title">Tình trạng</div>
                            </div>
                            <div class="section-content">
                                <ul class="filter-type unstyled">
                                    <li><input type="checkbox" name="dangtienhanh" value="1" checked> Đang tiến hành
                                    </li>
                                    <li><input type="checkbox" name="tamngung" value="1" checked> Tạm ngưng</li>
                                    <li><input type="checkbox" name="hoanthanh" value="1" checked> Đã hoàn thành</li>
                                </ul>
                                <div class="submit-wrapper">
                                    <input type="submit" class="button bg-green-600 text-white hover:bg-green-700"
                                        value="Áp dụng">
                                </div>
                            </div>
                        </section>
                        <section class="sub-index-style">
                            <div class="title-wrapper">
                                <div class="section-title">Phân loại</div>
                            </div>
                            <?php 
                            use App\Models\DanhmucModel;
                            $danhmuc=new DanhmucModel();
                            $alldanhmuc=$danhmuc->all();
                            foreach ($alldanhmuc as $value):                            
                            ?>
                            <div class="section-content">
                                <ul class="filter-type unstyled clear">
                                    <li class="filter-type_item"><a href="<?php ROOT_PATH ?>danh-sach?id=<?php echo $value->MaDanhMuc ?>"><?php echo $value->TenDanhMuc ?></a>
                                </ul>
                            </div>
                            <?php 
                            endforeach;
                            ?>
                        </section>
                    </div>
                    <div class="col-12 float-left col-lg-9">
                        <section class="thumb-section-flow">
                            <header class="filter-container pad-bottom-10">

                                <select name="sapxep" onchange="this.form.submit()" class="block inline-m">
                                    <option value="tentruyen">A - Z</option>
                                    <option value="tentruyenza">Z - A</option>
                                    <option value="capnhat">Mới cập nhật</option>
                                    <option value="truyenmoi">Truyện mới</option>
                                    <option value="theodoi">Theo dõi</option>
                                    <option value="top">Top toàn thời gian</option>
                                    <option value="topthang">Top tháng</option>
                                    <option value="sotu">Số từ</option>
                                </select>
                                <div class="text-right inline-block-m right-m none-l">
                                    <span class="button button-green js-call-filters-wrapper"><i class="fas fa-filter"
                                            style="margin-right: 10px;"></i>Bộ lọc</span>
                                </div>
                            </header>
                            <main class="row">

                                <!-- start truyện -->
                                <?php
                            foreach ($data as $item) :
                                ?>
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_<?php echo $item->MaTruyen ?>">
                                        <a href="<?php ROOT_PATH?>truyen?id=<?php echo $item->MaTruyen ?>"
                                            title="<?php echo $item->TieuDe?>">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="img/<?php echo $item->img ?>">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="<?php echo $item->TieuDe?>"><a
                                                    href="<?php ROOT_PATH?>truyen?id=<?php echo $item->MaTruyen ?>"
                                                    title="<?php echo $item->TieuDe?>"><?php echo $item->TieuDe?></a></div>
                                            <div class="thumb_attr volume-title">tên vol</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="<?php ROOT_PATH?>truyen?id=<?php echo $item->MaTruyen ?>"
                                            title="<?php echo $item->TieuDe?>">
                                            <?php echo $item->TieuDe?> 
                                        </a></div>
                                </div>
                                <div style="display: none">
                                    <div id="series_<?php echo $item->MaTruyen ?>">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                            <?php echo $item->TieuDe?>
                                            </p>
                                            <p>
                                            <div>Lượt xem :<?php echo $item->LuotXem?></div>
                                            <div>Lượt thích: <?php echo $item->LuotThich?></div>
                                            </p>
                                            <?php echo $item->MoTa ?>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                endforeach;
                            ?>
                                <!-- end truyện  -->
                            </main>
                            <div class="pagination-footer">
                                <div class="pagination_wrap">

                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;amp%3Bsapxep=topthang&amp;page=1"
                                        class="paging_item paging_prevnext prev  disabled ">Đầu</a>
                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;amp%3Bsapxep=topthang&amp;page=1"
                                        class="paging_item page_num  current ">1</a>
                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;amp%3Bsapxep=topthang&amp;page=2"
                                        class="paging_item page_num ">2</a>
                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;amp%3Bsapxep=topthang&amp;page=3"
                                        class="paging_item page_num ">3</a>
                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;amp%3Bsapxep=topthang&amp;page=4"
                                        class="paging_item page_num ">4</a>
                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;amp%3Bsapxep=topthang&amp;page=5"
                                        class="paging_item page_num ">5</a>

                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;amp%3Bsapxep=topthang&amp;page=68"
                                        class="paging_item paging_prevnext next ">Cuối</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </form>
    <script>
        $(document).ready(function () {
            $('.js-call-filters-wrapper').on('click', function () {
                $('.filters-wrapper').toggle();
                $('html').toggleClass('overflow-hiden');
            });
            $('.js-off-filters-wrapper').on('click', function () {
                $('.filters-wrapper').hide();
                $('html').removeClass('overflow-hiden');
            });

            tippy('.ln-tooltip', {
                delay: 50,
                maxWidth: 500,
                interactive: false,
                touch: ['hold', 1000],
                placement: 'right',
                ignoreAttributes: true,
                content(ref) {
                    const selector = ref.getAttribute('data-tooltip-content');
                    const template = document.querySelector(selector);
                    return template.innerHTML;
                },
                onShow(instance) {
                    tippyHideAll({ exclude: instance });
                }
            });
        });
    </script>
    <script src="js/app.js?id=b8198cd1707d7a5e169b"></script>
    <script src="js/livewire.js?id=f121a5df" data-csrf="JoNcZmuuKY5zfGqNxWzSaNqi7i9s4OyOIq0SDmrU"
        data-update-uri="/livewire/update" data-navigate-once="true"></script>
    <script type="text/javascript" src="js/d56b4bd6c3d2c1e161c4ab3c78c27670.js"></script>
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