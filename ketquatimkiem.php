<?php include('header.php'); ?>
<div class="block_g uk-section-large uk-background-cover" style="background-image: url('imgs/bg/1-01.jpg')">
    <div class="uk-container">
        <h1 class="title uk-text-uppercase uk-h2 uk-text-white">kết quả tìm kiếm</h1>
        <ul class="uk-breadcrumb">
            <li><a href=".">Trang chủ</a></li>
            <li><span>Tìm kiếm</span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small bg-white">
    <div class="uk-container">
        <div class="uk-grid" uk-margin>
            <div class="uk-width-2-3@m">
                <h3 class="title_c kqtk uk-text-uppercase uk-margin">Khoảng 10 kết quả</h3>
                <?php for ($j = 1; $j <= 3; $j++) { ?>
                <hr>
                <div class="uk-card card11">
                    <h3 class="uk-card-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <time>10/10/2018</time>
                    <p class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    <img src="imgs/news1.jpg" alt="">
                </div>
                <?php } ?>
            </div>
            <div class="uk-width-1-3@m uk-flex-first@m">
                <?php include('sidebar-ketquatimkiem.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>