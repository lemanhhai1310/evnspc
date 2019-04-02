<?php include('header.php'); ?>
<div class="block_g uk-section-large uk-background-cover" style="background-image: url('imgs/bg/3-25.jpg')">
    <div class="uk-container">
        <h1 class="title uk-text-uppercase uk-h2 uk-text-white">tin tức</h1>
        <ul class="uk-breadcrumb">
            <li><a href=".">Trang chủ</a></li>
            <li><a href="tintuc.html">Tin tức</a></li>
            <li><span>'Quái thú' của TT Trump rời Nội Bài, qua cầu Nhật Tân để về Hà Nội</span></li>
        </ul>
    </div>
</div>
<div class="uk-section bg-white">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-2-3@m">
                <article>
                    <div class="article_header uk-margin">
                        <h1 class="uk-margin-small">'Quái thú' của TT Trump rời Nội Bài, qua cầu Nhật Tân để về Hà Nội</h1>
                        <time>2 tháng 1, 2019</time>
                    </div>
                    <img src="https://znews-photo.zadn.vn/w660/Uploaded/znguhv/2019_02_23/46f4daee30e9d2b78bf8dung_zing.jpg" alt="">
                    <p>- Đoàn xe của tổng thống Mỹ gồm nhiều chiếc, nổi bật nhất là Cadillac One, biệt danh là The Beast (quái thú), siêu xe chống đạn dành riêng cho chủ nhân Nhà Trắng. Qua mỗi đời tổng thống, Cơ quan Mật vụ Mỹ sẽ đặt hàng General Motors sản xuất mẫu The Beast mới.</p>
                    <p>- Tổng thống Mỹ Donald Trump dự kiến gặp nhà lãnh đạo Triều Tiên Kim Jong Un tại Hà Nội vào ngày 27-28/2. Đây là cuộc gặp thứ hai của họ, sự kiện được thế giới theo dõi sát sao.</p>
                    <p>- Công tác hậu cần chuẩn bị cho chuyến đi của Tổng thống Trump đã được tiến hành trong những ngày qua. Nhiều chuyến bay chở hàng với các máy bay vận tải quân sự C-17 Globemaster và C-130 Hercules đã liên tục đáp xuống Nội Bài.</p>
                </article>
                <hr>
                <div class="uk-flex uk-flex-middle uk-flex-between">
                    <span class="title_article">Chia sẻ bài viết</span>
                    <div class="social_article uk-inline">
                        <a href="#"><i class="fa fa-2x fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-2x fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <hr>
                <div class="title_article uk-text-uppercase uk-margin-bottom">tin liên quan</div>
                <div uk-slider>

                    <div class="uk-position-relative">

                        <div class="uk-slider-container uk-light">
                            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m uk-grid-medium" uk-grid>
                                <?php for ($j = 1; $j <= 5; $j++) { ?>
                                <li>
                                    <div class="uk-card uk-transition-toggle card10">
                                        <div class="uk-inline-clip uk-width-1-1" tabindex="1">
                                            <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url('imgs/news<?php echo $j; ?>.jpg'); padding-top: 70%;"></div>
                                        </div>
                                        <div class="uk-card-body uk-padding-small">
                                            <h3 class="uk-card-title"><a href="tintuc_detail.html">Chủ tịch Triều Tiên Kim Jong Un thăm chính thức VN trong vài ngày tới</a></h3>
                                            <time>2 tháng 1, 2019</time>
                                            <p>Chủ tịch Triều Tiên Kim Jong Un sẽ có chuyến thăm hữu nghị chính thức Việt Nam trong những ngày sắp tới, theo thông cáo của Bộ Ngoại giao.</p>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>

                        <div class="uk-hidden@s uk-light">
                            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>

                        <div class="uk-visible@s">
                            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin" hidden></ul>

                </div>
            </div>
            <div class="uk-width-1-3@m">
                <div class="uk-margin">
                    <form class="uk-search uk-search-default uk-width-1-1 uk-box-shadow-medium">
                        <span class="uk-search-icon-flip" uk-search-icon></span>
                        <input class="uk-search-input" type="search" placeholder="Tìm kiếm thông tin...">
                    </form>
                </div>
                <div class="uk-card uk-card-default card3">
                    <div class="uk-card-header uk-padding-small">
                        Thể loại
                    </div>
                    <div class="uk-card-body bg-white uk-padding-small">
                        <ul class="uk-list uk-list-divider">
                            <li><a href="#">Thông tin Trung tâm CSKH EVN SPC</a></li>
                            <li><a href="#">Thông tin ngành điện</a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-margin">
                    <h3 class="title2 uk-text-uppercase uk-margin-small">tin tức mới nhất</h3>
                    <?php for ($j = 1; $j <= 5; $j++) { ?>
                    <div class="uk-card uk-grid-collapse news1 uk-grid uk-flex-middle">
                        <div class="uk-width-auto@s width1 uk-first-column">
                            <div class="uk-inline-clip uk-width-1-1" tabindex="2">
                                <div class="uk-background-cover box_img uk-border-circle" style="background-image: url('imgs/news<?php echo $j; ?>.jpg'); padding-top: 100%;"></div>
                            </div>
                        </div>
                        <div class="uk-width-expand@s">
                            <div class="uk-card-body uk-padding-small">
                                <h3 class="uk-card-title"><a href="#">Meridian of ramps typewriter live-edge</a></h3>
                                <span class="date">2 tháng 1, 2019</span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="uk-margin">
                    <h3 class="title2 uk-text-uppercase uk-margin-small">tags</h3>
                    <a href="#" class="uk-button uk-button-default tag1">Điện</a>
                    <a href="#" class="uk-button uk-button-default tag1">EVN</a>
                    <a href="#" class="uk-button uk-button-default tag1">Trung tâm CSKH</a>
                    <a href="#" class="uk-button uk-button-default tag1">Tin tức</a>
                    <a href="#" class="uk-button uk-button-default tag1">EVN SPC</a>
                    <a href="#" class="uk-button uk-button-default tag1">Ngành điện</a>
                    <a href="#" class="uk-button uk-button-default tag1">Điện</a>
                    <a href="#" class="uk-button uk-button-default tag1">EVN</a>
                    <a href="#" class="uk-button uk-button-default tag1">Trung tâm CSKH</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>