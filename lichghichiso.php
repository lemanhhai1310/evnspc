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
                <h3 class="title_c uk-text-uppercase uk-margin">lịch ghi chỉ số</h3>
                <div class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Mã khách hàng</div>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="tel" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-2-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Chọn năm</div>
                            <div class="uk-grid uk-flex-between">
                                <div class="uk-width-1-2@s">
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
                                <div>
                                    <button type="submit" class="uk-button uk-button-primary btn-send-contact">tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="uk-overflow-auto">
                    <table class="uk-table uk-table-small uk-table-middle uk-table-divider table2">
                        <thead>
                        <tr>
                            <th>Trạng thái</th>
                            <th>Kỳ</th>
                            <th>Tháng</th>
                            <th>Năm</th>
                            <th>Ngày ghi chỉ số</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Đã ghi</td>
                            <td>1</td>
                            <td>12</td>
                            <td>2018</td>
                            <td>05/12/2018</td>
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