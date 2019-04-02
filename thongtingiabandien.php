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
                <h3 class="title_c uk-text-uppercase uk-margin">thông tin giá bán điện</h3>
                <div class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                    <div class="uk-width-1-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Ngành dịch vụ</div>
                            <div class=" uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">Giá bán lẻ điện sinh hoạt</option>
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
                    <div class="uk-width-2-3@s">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Nhóm dịch vụ</div>
                            <div class="uk-grid uk-flex-between">
                                <div class="uk-width-1-2@s">
                                    <div class=" uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                        <select>
                                            <option value="">Sinh hoạt bậc thang</option>
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
                                    <button type="submit" class="uk-button uk-button-primary btn-send-contact">tra cứu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-overflow-auto">
                    <table class="uk-table uk-table-divider table3">
                        <thead>
                        <tr>
                            <th>Mô tả</th>
                            <th>Price / Kwh (widthout VAT)</th>
                            <th>Unit</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>SHBT - SHBT - For the first 50kwh</td>
                            <td>1.549</td>
                            <td>VNĐ</td>
                        </tr>
                        <tr>
                            <td>SHBT - SHBT - Give kwh from 51 to 100</td>
                            <td>1.600</td>
                            <td>VNĐ</td>
                        </tr>
                        <tr>
                            <td>SHBT - SHBT - Give kwh from 101 to 200</td>
                            <td>1.858</td>
                            <td>VNĐ</td>
                        </tr>
                        <tr>
                            <td>SHBT - SHBT - Give kwh from 201 to 300</td>
                            <td>2.340</td>
                            <td>VNĐ</td>
                        </tr>
                        <tr>
                            <td>SHBT - SHBT - Give kwh from 301 to 400</td>
                            <td>2.615</td>
                            <td>VNĐ</td>
                        </tr>
                        <tr>
                            <td>SHBT - SHBT - Give kwh from 401 to 500</td>
                            <td>2.701</td>
                            <td>VNĐ</td>
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