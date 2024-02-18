 <main wire:snapshot="{&quot;data&quot;:{&quot;paginators&quot;:[{&quot;page&quot;:1},{&quot;s&quot;:&quot;arr&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;hU83rmlLrQe2WGk3nvQT&quot;,&quot;name&quot;:&quot;pub.user.read-history&quot;,&quot;path&quot;:&quot;lich-su-doc&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;vi&quot;},&quot;checksum&quot;:&quot;7bf1049192fc0e933ca980fb03673f131210a4c7529f4c66e8bfefa1903191bd&quot;}" wire:effects="{&quot;url&quot;:{&quot;paginators.page&quot;:{&quot;as&quot;:&quot;page&quot;,&quot;use&quot;:&quot;push&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null}}}" wire:id="hU83rmlLrQe2WGk3nvQT" id="mainpart" class="browserpage">
     <header class="page-title">
         <div class="page-name_wrapper">
             <div class="container">
                 <span class="page-name"><i class="fas fa-circle"></i>Truyện đã đọc</span>
             </div>
         </div>
     </header>
     <div style="text-align: center; margin: 0 auto 10px auto;">
     </div>
     <div class="container">
         <section class="browse-section">
             <main class="sect-body row">

                 <?php
                    extract($data);
                    if (isset($_COOKIE['TaiKhoan'])) {
                        foreach ($LSTK as $item) {
                            echo '<div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                             <div class="thumb-wrapper ln-tooltip">
                                 <a href="' . ROOT_PATH . 'truyen?id="' . $item['MaTruyen'] . '" title="' . $item["TieuDeChuong"] . '">
                                     <div class="a6-ratio">
                                         <div class="content img-in-ratio lazyload" data-bg="' . ROOT_PATH . 'img/' . $item["img"] . '"></div>
                                     </div>
                                 </a>
                                 <div class="thumb-detail">
                                     <div class="thumb_attr chapter-title" title="' . $item["TieuDeChuong"] . '">
                                         <a href="' . ROOT_PATH . 'chuong?ma-chuong=' . $item["ChapDocGanNhat"] . '">' . $item["TieuDeChuong"] . '</a>
                                     </div>
                                     <a href="'.ROOT_PATH.'xoa-lich-su?id='.$item["MaLichSu"].'" class="thumb_title text-center pad-top-10" style="cursor: pointer" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\')"><i class="fas fa-times"></i> Xóa</a>
                                     </div>
                             </div>
                             <div class="thumb_attr series-title">
                                 <a href="' . ROOT_PATH . 'truyen?id=' . $item["MaTruyen"] . '">' . $item["TieuDe"] . '</a>
                             </div>
                         </div>';
                        }
                    } elseif (isset($_COOKIE['lichsu'])) {
                        foreach ($LsCookie as $item) {
                            echo '<div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                             <div class="thumb-wrapper ln-tooltip">
                                 <a href="' . ROOT_PATH . 'truyen?id="' . $item['MaTruyen'] . '" title="' . $item["TieuDeChuong"] . '">
                                     <div class="a6-ratio">
                                         <div class="content img-in-ratio lazyload" data-bg="' . ROOT_PATH . 'img/' . $item["img"] . '"></div>
                                     </div>
                                 </a>
                                 <div class="thumb-detail">
                                     <div class="thumb_attr chapter-title" title="' . $item["TieuDeChuong"] . '">
                                         <a href="' . ROOT_PATH . 'chuong?ma-chuong=' . $item["MaChuong"] . '">' . $item["TieuDeChuong"] . '</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="thumb_attr series-title">
                                 <a href="' . ROOT_PATH . 'truyen?id=' . $item["MaTruyen"] . '">' . $item["TieuDe"] . '</a>
                             </div>
                         </div>';
                        }
                    }
                    ?>
             </main>
         </section>
     </div>