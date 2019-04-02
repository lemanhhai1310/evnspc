<?php include('header.php'); ?>
<div class="block_g uk-section-large uk-background-cover" style="background-image: url('imgs/bg/1-23.jpg')">
    <div class="uk-container">
        <h1 class="title uk-text-uppercase uk-h2 uk-text-white">tài khoản</h1>
        <ul class="uk-breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><span>Tài khoản</span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small bg-white">
    <div class="uk-container">
        <div class="uk-grid" uk-margin>
            <div class="uk-width-2-3@m">
                <h3 class="title_c uk-text-uppercase uk-margin">thay đổi mật khẩu</h3>
                <div class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Mật khẩu cũ</div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="password" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Mật khẩu mới</div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="password" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Nhập lại mật khẩu</div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="password" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Địa chỉ</div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-flex uk-flex-right uk-margin">
                    <a href="#" class="uk-button uk-button-primary btn-send-contact">cập nhật</a>
                </div>
            </div>
            <div class="uk-width-1-3@m uk-flex-first@m">
                <?php include('sidebar-taikhoan.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>