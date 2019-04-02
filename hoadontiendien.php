<?php include('header.php'); ?>
<div class="block_g uk-section-large uk-background-cover" style="background-image: url('imgs/bg/1-23.jpg')">
    <div class="uk-container">
        <h1 class="title uk-text-uppercase uk-h2 uk-text-white">tra cứu</h1>
        <ul class="uk-breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><span>Tra cứu</span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small bg-white">
    <div class="uk-container">
        <div class="uk-grid" uk-margin>
            <div class="uk-width-2-3@m">
                <h3 class="title_c uk-text-uppercase uk-margin">tra cứu tiền điện</h3>
                <div class="uk-alert-success box_alert" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p><span uk-icon="info"></span> Tổng số hóa đơn trong kỳ 1 tháng 3 là: <span>1 hóa đơn</span></p>
                </div>
                <div class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Kỳ</div>
                            <div class=" uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">1</option>
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
                    </div>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Tháng</div>
                            <div class=" uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">3</option>
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
                    </div>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Năm</div>
                            <div class=" uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">2018</option>
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
                    </div>
                </div>
                <div class="uk-width-1-1 uk-flex uk-flex-right uk-margin">
                    <a href="#" class="uk-button uk-button-primary btn-send-contact">tra cứu</a>
                </div>
                <div class="uk-overflow-auto">
                    <table class="uk-table uk-table-small uk-table-middle uk-table-divider table2">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th class="uk-text-truncate">Mã khách hàng</th>
                            <th>ID hóa đơn</th>
                            <th>Seri-Ký hiệu</th>
                            <th>Tổng tiền</th>
                            <th>Loại hóa đơn</th>
                            <th>Xem thể hiện</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>P112221</td>
                            <td>36700419</td>
                            <td class="uk-text-truncate">0107974-AA/18E</td>
                            <td>946,394</td>
                            <td>Tiền điện</td>
                            <td>
                                <a href="#" class="uk-button uk-button-primary btn-send-contact" style="min-width: inherit; padding: 0 10px; line-height: 32px;"><span uk-icon="search"></span></a>
                                <a href="#" class="uk-button uk-button-primary btn-send-contact" style="min-width: inherit; padding: 0 10px; line-height: 32px;"><span uk-icon="download"></span></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="uk-width-1-3@m uk-flex-first@m">
                <?php include('sidebar-tracuu.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>