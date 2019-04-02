<?php include('header.php'); ?>
<div class="block_g uk-section-large uk-background-cover" style="background-image: url('imgs/bg/1-23.jpg')">
    <div class="uk-container">
        <h1 class="title uk-text-uppercase uk-h2 uk-text-white">dịch vụ trực tuyến</h1>
        <ul class="uk-breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><span>Dịch vụ trực tuyến</span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small bg-white">
    <div class="uk-container">
        <div class="uk-grid" uk-margin>
            <div class="uk-width-2-3@m">
                <h3 class="title_c uk-text-uppercase uk-margin">giải đáp kiến nghị khách hàng</h3>
                <div class="uk-alert-success font1" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>Trung tâm chăm sóc khách hàng - Tổng công ty điện lực Miền Nam Trân trọng cảm ơn ý kiến - góp ý và yêu cầu của quý khách hàng</p>
                </div>
                <div class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Họ tên quý khách hàng</div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Điện thoại</div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="tel" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Email</div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="email" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Tiêu đề</div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Nội dung</div>
                            <div class="uk-form-controls">
                                <textarea class="uk-textarea" rows="6" placeholder="" style="max-height: 126px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Quý khách vui lòng nhập mã xác nhận dưới đây</div>
                            <div>
                                <div class="g-recaptcha" data-sitekey="6LdpbZIUAAAAAGYFTJf9pzUifgrHM4F9B6RoDbcT"></div>
                            </div>
                            <style>
                                .g-recaptcha>div{
                                    margin-left: 0;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-flex uk-flex-right">
                    <a href="#" class="uk-button uk-button-primary btn-send-contact">tiếp theo</a>
                </div>
            </div>
            <div class="uk-width-1-3@m uk-flex-first@m">
                <?php include('sidebar-left.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>