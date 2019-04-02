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
                <h3 class="title_c uk-text-uppercase uk-margin">xử lý mất điện</h3>
                <form class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Họ tên người yêu cầu</div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Điện thoại liên hệ</div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="tel" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Email liên hệ</div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="email" placeholder="">
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
                    <div class="uk-width-1-1">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Nội dung yêu cầu dịch vụ điện</div>
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
                </form>
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