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
                <h3 class="title_c uk-text-uppercase uk-margin">thanh toán trực tuyến</h3>
                <div class="uk-alert-success box_alert" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p><span uk-icon="info"></span> <span>CHÚ Ý!</span> Dịch vụ này chỉ áp dụng cho những khách hàng đã có tài khoản Internet Banking. Đối với những khách hàng chưa đăng ký tài khoản Internet Banking, vui lòng đến tại quầy giao dịch của ngân hàng để làm thủ tục nhận tên đăng nhập và mật khẩu</p>
                </div>
                <form class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Mã khách hàng <sup class="uk-text-danger">*</sup></div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Điện thoại <sup class="uk-text-danger">*</sup></div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="tel" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Email <sup class="uk-text-danger">*</sup></div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="email" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Vui lòng chọn ngân hàng cần thanh toán</div>
                            <div class="uk-card uk-card-body uk-padding-small card8">
                                <div class="uk-grid uk-grid-small uk-child-width-1-4@m uk-flex-center" uk-margin>
                                    <?php for ($j = 1; $j <= 29; $j++) { ?>
                                    <div>
                                        <label class="uk-text-center bank1 uk-flex uk-flex-column-reverse uk-flex-center uk-flex-middle uk-height-1-1">
                                            <input class="uk-radio" type="radio" name="radio2">
                                            <div class="uk-card bg-white uk-box-shadow-hover-medium uk-height-1-1 uk-flex uk-flex-middle uk-flex-center uk-padding-small">
                                                <img src="imgs/bank/img<?php echo $j; ?>.jpg" alt="">
                                            </div>
                                        </label>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
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