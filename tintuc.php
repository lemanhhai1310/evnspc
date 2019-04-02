<?php include('header.php'); ?>
<div class="block_g uk-section-large uk-background-cover" style="background-image: url('imgs/bg/3-25.jpg')">
    <div class="uk-container">
        <h1 class="title uk-text-uppercase uk-h2 uk-text-white">tin tức</h1>
        <ul class="uk-breadcrumb">
            <li><a href=".">Trang chủ</a></li>
            <li><span>Tin tức</span></li>
        </ul>
    </div>
</div>
<div class="uk-section bg-white">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-2-3@m">
                <?php for ($j = 1; $j <= 5; $j++) { ?>
                <div class="uk-card card4 uk-margin">
                    <img src="imgs/tin1.gif" alt="">
                    <div class="uk-card-body uk-padding-small uk-padding-remove-left uk-padding-remove-right">
                        <h3 class="uk-card-title"><a href="tintuc_detail.html">MERIDIAN OF RAMPS TYPEWRITER LIVE-EDGE</a></h3>
                        <time>2 tháng 1, 2019</time>
                        <p class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <a href="tintuc_detail.html">XEM THÊM <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <?php } ?>
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