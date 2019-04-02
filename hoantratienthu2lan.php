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
                <h3 class="title_c uk-text-uppercase uk-margin">hoàn trả tiền thu 2 lần</h3>
                <h3 class="title2 uk-text-uppercase uk-margin-small">thông tin khách hàng</h3>
                <div class="uk-card uk-card-body uk-padding-small card8">
                    <table class="uk-table table1">
                        <tbody>
                        <tr>
                            <td class="uk-table-shrink uk-text-nowrap">Tên đăng nhập</td>
                            <td style="opacity: 0;">11</td>
                            <td class="uk-table-expand">nkchung</td>
                        </tr>
                        <tr>
                            <td class="uk-table-shrink uk-text-nowrap">Mã khách hàng</td>
                            <td></td>
                            <td class="uk-table-expand">P112221</td>
                        </tr>
                        <tr>
                            <td class="uk-table-shrink uk-text-nowrap">Tên khách hàng</td>
                            <td></td>
                            <td class="uk-table-expand">Lê Mạnh Hải</td>
                        </tr>
                        <tr>
                            <td class="uk-table-shrink uk-text-nowrap">Địa chỉ</td>
                            <td></td>
                            <td class="uk-table-expand">51 Lê Đại Hành, HBT, HN</td>
                        </tr>
                        <tr>
                            <td class="uk-table-shrink uk-text-nowrap">Số điện thoại</td>
                            <td></td>
                            <td class="uk-table-expand">0947.520.793</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <h3 class="title2 uk-text-uppercase uk-margin-small">thông tin người yêu cầu</h3>
                <a href="#" class="link_hd">Click vào đây để xem hướng dẫn thực hiện</a>
                <?php include('steps.php'); ?>
                <div class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Họ tên người yêu cầu <sup class="uk-text-danger">*</sup></div>
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
                            <div class="uk-form-label" for="form-stacked-text">Địa chỉ <sup class="uk-text-danger">*</sup></div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Nhóm yêu cầu dịch vụ</div>
                            <div class=" uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">Hợp đồng mua bán điện</option>
                                    <option value="1">Option 01</option>
                                    <option value="2">Option 02</option>
                                    <option value="3">Option 03</option>
                                    <option value="4">Option 04</option>
                                </select>
                                <button class="uk-button uk-button-default uk-width-1-1 uk-text-capitalize uk-padding-small uk-padding-remove-top uk-padding-remove-bottom" type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Loại yêu cầu dịch vụ</div>
                            <div class=" uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">Thay đổi công suất sử dụng</option>
                                    <option value="1">Option 01</option>
                                    <option value="2">Option 02</option>
                                    <option value="3">Option 03</option>
                                    <option value="4">Option 04</option>
                                </select>
                                <button class="uk-button uk-text-truncate uk-button-default uk-width-1-1 uk-text-capitalize uk-padding-small uk-padding-remove-top uk-padding-remove-bottom" type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-2-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Nội dung yêu cầu dịch vụ điện</div>
                            <div class="uk-form-controls">
                                <textarea class="uk-textarea" rows="6" placeholder="" style="max-height: 126px;"></textarea>
                            </div>
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