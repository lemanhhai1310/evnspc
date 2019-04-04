<?php include('header.php'); ?>
<div class="bg-white">
    <div class="uk-container uk-container-small">
        <div class="uk-padding-remove" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <img src="imgs/ads1.jpg" alt="">
        </div>
    </div>
</div>
<div class="bg-white">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
            <div>
                <img src="imgs/banner1.png" alt="">
            </div>
            <div>
                <div class="box_banner">
                    <h1 class="title">
                        <span>Đảm bảo</span>
                        <br>
                        <span>nguồn điện</span>
                        <br>
                        <span>cho tương lai</span>
                        <br>
                        <span>tươi sáng</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block1 uk-section uk-background-bottom-left uk-background-contain" style="background-image: url('imgs/bg-cot.jpg')">
    <div class="uk-container">
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-1-5@m">
                <div class="box_1">
                    <h2 class="title uk-h2 uk-text-uppercase">dịch vụ <br> khách hàng <br> evnspc</h2>
                    <div class="desc">Đáp ứng đầy đủ nhu cầu về điện của khách hàng với chất lượng và dịch vụ ngày càng tốt hơn.</div>
                </div>
            </div>
            <div class="uk-width-expand@m">
                <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-child-width-1-3@l uk-grid-small" uk-grid>
                    <div>
                        <a href="capdienhaap1.html" class="uk-link-reset">
                            <div class="uk-card uk-card-body bg-white card1 uk-box-shadow-hover-medium">
                                <h3 class="uk-card-title">ĐĂNG KÝ <br> MUA ĐIỆN</h3>
                                <p class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed</p>
                                <div class="icon uk-background-contain" style="background-image: url('imgs/icon/icon-white-1.svg')"></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="lichngunggiamcungcapdien.html" class="uk-link-reset">
                            <div class="uk-card uk-card-body bg-white card1 uk-box-shadow-hover-medium">
                                <h3 class="uk-card-title">LỊCH NGỪNG GIẢM <br>
                                    CUNG CẤP ĐIỆN</h3>
                                <p class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed</p>
                                <div class="icon uk-background-contain" style="background-image: url('imgs/icon/icon-white-2.svg')"></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="tracuuchiso.html" class="uk-link-reset">
                            <div class="uk-card uk-card-body bg-white card1 uk-box-shadow-hover-medium">
                                <h3 class="uk-card-title">TRA CỨU CHỈ SÔ <br>
                                    & HÓA ĐƠN</h3>
                                <p class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed</p>
                                <div class="icon uk-background-contain" style="background-image: url('imgs/icon/icon-white-3.svg')"></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="lichghichiso.html" class="uk-link-reset">
                            <div class="uk-card uk-card-body bg-white card1 uk-box-shadow-hover-medium">
                                <h3 class="uk-card-title">LỊCH GHI <br>
                                    CHỈ SỐ</h3>
                                <p class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed</p>
                                <div class="icon uk-background-contain" style="background-image: url('imgs/icon/icon-white-4.svg')"></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="thanhtoantructuyen.html" class="uk-link-reset">
                            <div class="uk-card uk-card-body bg-white card1 uk-box-shadow-hover-medium">
                                <h3 class="uk-card-title">THANH TOÁN <br>
                                    TRỰC TUYẾN</h3>
                                <p class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed</p>
                                <div class="icon uk-background-contain" style="background-image: url('imgs/icon/icon-white-5.svg')"></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="thongtingiabandien.html" class="uk-link-reset">
                            <div class="uk-card uk-card-body bg-white card1 uk-box-shadow-hover-medium">
                                <h3 class="uk-card-title">THÔNG TIN <br>
                                    GIÁ BÁN ĐIỆN</h3>
                                <p class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed</p>
                                <div class="icon uk-background-contain" style="background-image: url('imgs/icon/icon-white-6.svg')"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-small block2">
    <div class="uk-container">
        <div class="uk-child-width-1-2 uk-child-width-1-4@l uk-flex-middle" uk-grid>
            <div>
                <div class="box_2">
                    <h2 class="title uk-h2 uk-text-uppercase">đơn vị <br> thành viên</h2>
                </div>
            </div>
            <div class="uk-width-expand@l">
                <div uk-slider="autoplay: true; autoplay-interval: 1000">

                    <div class="uk-position-relative">

                        <div class="uk-slider-container uk-light">
                            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m uk-grid-medium" uk-grid>
                                <?php for ($j = 1; $j <= 4; $j++) { ?>
                                    <li>
                                        <img class="img1" src="imgs/img<?php echo $j; ?>.png" alt="">
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


                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>