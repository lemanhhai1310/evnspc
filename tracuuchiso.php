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
                <ul id="component-tab-left" class="uk-switcher">
                    <li id="chiso">
                        <div class="uk-width-2-3@ms">
                            <h3 class="title_c uk-text-uppercase uk-margin">tra cứu chỉ số</h3>
                            <div class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                                <div class="uk-width-1-1">
                                    <div class="uk-margin">
                                        <div class="uk-form-label" for="form-stacked-text">Chọn năm</div>
                                        <div class="uk-grid uk-flex-between">
                                            <div class="uk-width-1-3">
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
                                                <button type="submit" class="uk-button uk-button-primary btn-send-contact">tra cứu</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <ul class="tab_acc tab_tracuu uk-subnav uk-subnav-pill uk-margin-remove" uk-switcher>
                                <li class="uk-padding-remove uk-active"><a href="#">Biểu đồ</a></li>
                                <li class="uk-padding-remove"><a href="#">Chỉ số</a></li>
                            </ul>

                            <div class="uk-switcher uk-margin">
                                <div>
                                    <div>
                                        <canvas id="chart-1"></canvas>
                                    </div>
                                    <div class="uk-width-1-1 uk-flex uk-flex-right uk-margin">
                                        <a href="#" class="uk-button uk-button-primary btn-send-contact">xem lịch sử thanh toán</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-overflow-auto">
                                        <table class="uk-table uk-table-small uk-table-middle uk-table-divider table2">
                                            <thead>
                                            <tr>
                                                <th>Mã khách hàng</th>
                                                <th>BCS</th>
                                                <th>Điện tiêu thụ (KWh)</th>
                                                <th>Tháng</th>
                                                <th>Năm</th>
                                                <th>Thao tác</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>P112221</td>
                                                <td>KT</td>
                                                <td>443</td>
                                                <td>12</td>
                                                <td>2018</td>
                                                <td><a href="#" class="uk-button uk-button-primary btn-send-contact">xem công tơ</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="tiendien">
                        <div class="uk-width-2-3@ms">
                            <h3 class="title_c uk-text-uppercase uk-margin">tra cứu tiền điện</h3>
                            <div class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                                <div class="uk-width-1-1">
                                    <div class="uk-margin">
                                        <div class="uk-form-label" for="form-stacked-text">Chọn năm</div>
                                        <div class="uk-grid uk-flex-between">
                                            <div class="uk-width-1-3">
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
                                                <button type="submit" class="uk-button uk-button-primary btn-send-contact">tra cứu</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <ul class="tab_acc tab_tracuu uk-subnav uk-subnav-pill uk-margin-remove" uk-switcher>
                                <li class="uk-padding-remove uk-active"><a href="#">Biểu đồ</a></li>
                                <li class="uk-padding-remove"><a href="#">Chỉ số</a></li>
                            </ul>

                            <div class="uk-switcher uk-margin">
                                <div>
                                    <div>
                                        <canvas id="chart-2"></canvas>
                                    </div>
                                    <div class="uk-width-1-1 uk-flex uk-flex-right uk-margin">
                                        <a href="#" class="uk-button uk-button-primary btn-send-contact">xem lịch sử thanh toán</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-overflow-auto">
                                        <table class="uk-table uk-table-small uk-table-middle uk-table-divider table2">
                                            <thead>
                                            <tr>
                                                <th>Mã khách hàng</th>
                                                <th>BCS</th>
                                                <th>Số tiền (VNĐ)</th>
                                                <th>Tháng</th>
                                                <th>Năm</th>
                                                <th>Thao tác</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>P112221</td>
                                                <td>KT</td>
                                                <td>1.050.382</td>
                                                <td>12</td>
                                                <td>2018</td>
                                                <td><a href="#" class="uk-button uk-button-primary btn-send-contact">xem công tơ</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-width-2-3@ms">
                            <h3 class="title_c uk-text-uppercase uk-margin">hóa đơn tiền điện</h3>
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
                    </li>
                    <li>
                        <div class="uk-width-2-3@ms">
                            <h3 class="title_c uk-text-uppercase uk-margin">thông tin nợ tiền điện</h3>
                            <div class="uk-alert-success box_alert" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <p><span>THÔNG BÁO!</span> Hiện tại quý khách không còn nợ tiền điện</p>
                            </div>
                            <div class="uk-alert-danger box_alert" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <p><span>THÔNG BÁO!</span> Hiện tại quý khách đang còn nợ tiền điện tháng 12/2018</p>
                            </div>
                            <div class="uk-overflow-auto">
                                <table class="uk-table uk-table-small uk-table-middle uk-table-divider table2">
                                    <thead>
                                    <tr>
                                        <th>Kỳ</th>
                                        <th>Tháng</th>
                                        <th>Sản lượng (KWh)</th>
                                        <th>Thành tiền (VNĐ)</th>
                                        <th>Tiền thuế (VNĐ)</th>
                                        <th>Tổng tiền (VNĐ)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>12</td>
                                        <td>546</td>
                                        <td>1.050.382</td>
                                        <td>123.310</td>
                                        <td>1.356.406</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-width-2-3@ms">
                            <h3 class="title_c uk-text-uppercase uk-margin">thông tin thanh toán tiền điện</h3>
                            <div class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                                <div class="uk-width-1-1">
                                    <div class="uk-margin">
                                        <div class="uk-form-label" for="form-stacked-text">Chọn năm</div>
                                        <div class="uk-grid uk-flex-between">
                                            <div class="uk-width-1-3">
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
                                                <button type="submit" class="uk-button uk-button-primary btn-send-contact">tra cứu</button>
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
                                        <th>Kỳ</th>
                                        <th>Tháng</th>
                                        <th>Sản lượng (KWh)</th>
                                        <th>Thành tiền (VNĐ)</th>
                                        <th>Tiền thuế (VNĐ)</th>
                                        <th>Tổng tiền (VNĐ)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>12</td>
                                        <td>546</td>
                                        <td>1.050.382</td>
                                        <td>123.310</td>
                                        <td>1.356.406</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-width-2-3@ms">
                            <h3 class="title_c uk-text-uppercase uk-margin">lịch ngừng giảm cung cấp điện</h3>
                            <div class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                                <div class="uk-width-1-3@s">
                                    <div class="uk-margin">
                                        <div class="uk-form-label" for="form-stacked-text">Công ty Điện lực</div>
                                        <div class=" uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                            <select>
                                                <option value="">Chọn công ty Điện lực</option>
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
                                        <div class="uk-form-label" for="form-stacked-text">Công ty Điện lực</div>
                                        <div class=" uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                            <select>
                                                <option value="">Chọn điện lực</option>
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
                                        <div class="uk-form-label" for="form-stacked-text">Mã khách hàng</div>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="email" placeholder="P112221">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-1-3@s">
                                    <div class="uk-margin">
                                        <div class="uk-form-label" for="form-stacked-text">Từ ngày</div>
                                        <div class="uk-form-controls">
                                            <input class="uk-input today" id="form-stacked-text" type="text" placeholder="dd-mm-yyyy">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@s">
                                    <div class="uk-margin">
                                        <div class="uk-form-label" for="form-stacked-text">Đến ngày</div>
                                        <div class="uk-grid uk-flex-between">
                                            <div class="uk-width-1-2">
                                                <div class="uk-form-controls">
                                                    <input class="uk-input today" id="form-stacked-text" type="text" placeholder="dd-mm-yyyy">
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="uk-button uk-button-primary btn-send-contact">tìm kiếm</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $(function() {
                                    $('.form1 .default').datepicker({
                                        autoclose: true,
                                        startDate: "today",
                                    });

                                    $('.form1 .today').datepicker({
                                        autoclose: true,
                                        startDate: "today",
                                        format: "dd-mm-yyyy",
                                        todayHighlight: true
                                    });

                                    $('.form1 .past-enabled').datepicker({
                                        autoclose: true,
                                        format: "dd-mm-yyyy",
                                    });
                                    $('.form1 .format').datepicker({
                                        autoclose: true,
                                        format: "dd-mm-yyyy",
                                    });

                                    $('.form1 .autoclose').datepicker();

                                    $('.form1 .disabled-week').datepicker({
                                        autoclose: true,
                                        daysOfWeekDisabled: "0"
                                    });

                                    $('.form1 .highlighted-week').datepicker({
                                        autoclose: true,
                                        daysOfWeekHighlighted: "0"
                                    });

                                    $('.form1 .mnth').datepicker({
                                        autoclose: true,
                                        minViewMode: 1,
                                        format: "mm/yy"
                                    });

                                    $('.form1 .multidate').datepicker({
                                        multidate: true,
                                        multidateSeparator: " , "
                                    });

                                    $('.form1 .input-daterange').datepicker({
                                        autoclose: true
                                    });

                                    $('.form1 .inline-calendar').datepicker();

                                    $('.datetimepicker').datetimepicker({
                                        showClose: true
                                    });

                                    $('.datetimepicker1').datetimepicker({
                                        format: 'LT',
                                        showClose: true
                                    });

                                    $('.datetimepicker2').datetimepicker({
                                        inline: true,
                                        sideBySide: true
                                    });

                                    $('.datetimepicker3').datetimepicker();

                                });

                                $(function() {
                                    // .daterange1
                                    $(".daterange1").daterangepicker({
                                        "buttonClasses": "button button-rounded button-mini nomargin",
                                        "applyClass": "button-color",
                                        "cancelClass": "button-light"
                                    });

                                    // .daterange2
                                    $(".daterange2").daterangepicker({
                                        "opens": "center",
                                        timePicker: true,
                                        timePickerIncrement: 30,
                                        locale: {
                                            format: 'MM/DD/YYYY h:mm A'
                                        },
                                        "buttonClasses": "button button-rounded button-mini nomargin",
                                        "applyClass": "button-color",
                                        "cancelClass": "button-light"
                                    });

                                    // .daterange3
                                    $(".daterange3").daterangepicker({
                                            singleDatePicker: true,
                                            showDropdowns: true
                                        },
                                        function(start, end, label) {
                                            var years = moment().diff(start, 'years');
                                            alert("You are " + years + " years old.");
                                        });

                                    // reportrange
                                    function cb(start, end) {
                                        $(".reportrange span").html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                                    }
                                    cb(moment().subtract(29, 'days'), moment());

                                    $(".reportrange").daterangepicker({
                                        "buttonClasses": "button button-rounded button-mini nomargin",
                                        "applyClass": "button-color",
                                        "cancelClass": "button-light",
                                        ranges: {
                                            'Today': [moment(), moment()],
                                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                                        }
                                    }, cb);

                                    // .daterange4
                                    $(".daterange4").daterangepicker({
                                        autoUpdateInput: false,
                                        locale: {
                                            cancelLabel: 'Clear'
                                        },
                                        "buttonClasses": "button button-rounded button-mini nomargin",
                                        "applyClass": "button-color",
                                        "cancelClass": "button-light"
                                    });

                                    $(".daterange4").on('apply.daterangepicker', function(ev, picker) {
                                        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                                    });

                                    $(".daterange4").on('cancel.daterangepicker', function(ev, picker) {
                                        $(this).val('');
                                    });

                                });

                            </script>
                        </div>
                    </li>
                    <li>
                        <div class="uk-width-2-3@ms">
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
                    </li>
                    <li>
                        <div class="uk-width-2-3@ms">
                            <h3 class="title_c uk-text-uppercase uk-margin">điểm thu tiền điện</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14892.710718371312!2d105.78794855!3d21.065564549999998!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1550861727296" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <div class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-margin">
                                        <div class="uk-form-label" for="form-stacked-text" hidden>Mã khách hàng</div>
                                        <div class=" uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                            <select>
                                                <option value="">Chọn công ty điện lực</option>
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
                                <div class="uk-width-1-2@s">
                                    <div class="uk-margin">
                                        <div class="uk-form-label" for="form-stacked-text" hidden>Chọn năm</div>
                                        <div class=" uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                            <select>
                                                <option value="">Chọn điện lực</option>
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
                            <hr>
                            <div class="uk-height-max-small uk-overflow-auto">
                                <ul class="uk-list uk-list-bullet list5">
                                    <li>Ngân hàng Nông Nghiệp và Phát triển Nông thôn huyện Ninh Hải</li>
                                    <li>Vinmart</li>
                                    <li>Thế giới di động</li>
                                    <li>Ngân hàng Nông Nghiệp và Phát triển Nông thôn huyện Ninh Hải</li>
                                    <li>Vinmart</li>
                                    <li>Thế giới di động</li>
                                    <li>Ngân hàng Nông Nghiệp và Phát triển Nông thôn huyện Ninh Hải</li>
                                    <li>Vinmart</li>
                                    <li>Thế giới di động</li>
                                    <li>Ngân hàng Nông Nghiệp và Phát triển Nông thôn huyện Ninh Hải</li>
                                    <li>Vinmart</li>
                                    <li>Thế giới di động</li>
                                </ul>
                            </div>
                            <hr>
                            <h3 class="title2 uk-text-uppercase uk-margin-small" style="color: #17479B">thông tin điểm thu</h3>
                            <table class="uk-table table1">
                                <tbody>
                                <tr>
                                    <td>Địa chỉ:</td>
                                    <td>51 Lê Đại Hành, HBT, HN</td>
                                </tr>
                                <tr>
                                    <td>Điện thoại:</td>
                                    <td>0989.172.546</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>hai.lemanh.1310@gmail.com</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                    <li>
                        <div class="uk-width-2-3@ms">
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
                    </li>
                    <li>

                    </li>
                    <li>
                        <div class="uk-width-2-3@ms">
                            <h3 class="title_c uk-text-uppercase uk-margin">theo dõi tiến độ cấp điện</h3>
                            <div class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                                <div class="uk-width-1-3@s">
                                    <div class="uk-margin">
                                        <div class="uk-form-label" for="form-stacked-text">Công ty điện lực</div>
                                        <div class=" uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                            <select>
                                                <option value="">Chọn công ty điện lực</option>
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
                                        <div class="uk-form-label" for="form-stacked-text">Điện lực</div>
                                        <div class=" uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                            <select>
                                                <option value="">Chọn điện lực</option>
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
                                        <div class="uk-form-label" for="form-stacked-text">Mã yêu cầu</div>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-flex uk-flex-right uk-margin">
                                <a href="#" class="uk-button uk-button-primary btn-send-contact">tìm kiếm</a>
                            </div>
                        </div>
                    </li>
                    <li>

                    </li>
                </ul>
            </div>
            <div class="uk-width-1-3@m uk-flex-first@m">
                <?php include('sidebar-tracuu.php'); ?>
            </div>
        </div>
    </div>
</div>
<script>
    var barChartData1 = {
        labels: ["T1", "T12", "T3", "T4", "T5", "T6", "T7", "T8", "T9", "T10", "T11", "T12"],
        datasets: [{
            label: '2017',
            backgroundColor: window.chartColors.grey,
            stack: 'Stack 0',
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }, {
            label: '2018',
            backgroundColor: window.chartColors.info,
            stack: 'Stack 1',
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }]

    };
    var ctx1 = document.getElementById("chart-1").getContext("2d");
    var config1 = {
        type: 'bar',
        data: barChartData1,
        options: {
            title:{
                display:true,
                text:"THỐNG KÊ SẢN LƯỢNG"
            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    };
    window.myBar1 = new Chart(ctx1, config1);
    UIkit.util.on('#chiso', 'show', function () {
        // var barChartData1 = {
        //     labels: ["T1", "T12", "T3", "T4", "T5", "T6", "T7", "T8", "T9", "T10", "T11", "T12"],
        //     datasets: [{
        //         label: '2017',
        //         backgroundColor: window.chartColors.grey,
        //         stack: 'Stack 0',
        //         data: [
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor()
        //         ]
        //     }, {
        //         label: '2018',
        //         backgroundColor: window.chartColors.info,
        //         stack: 'Stack 1',
        //         data: [
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor()
        //         ]
        //     }]
        //
        // };
        // var ctx1 = document.getElementById("chart-1").getContext("2d");
        // var config1 = {
        //     type: 'bar',
        //     data: barChartData1,
        //     options: {
        //         title:{
        //             display:true,
        //             text:"THỐNG KÊ SẢN LƯỢNG"
        //         },
        //         tooltips: {
        //             mode: 'index',
        //             intersect: false
        //         },
        //         responsive: true,
        //         scales: {
        //             xAxes: [{
        //                 stacked: true,
        //             }],
        //             yAxes: [{
        //                 stacked: true
        //             }]
        //         }
        //     }
        // };
        // var myBar1 = new Chart(ctx1, config1);
    });

    var barChartData2 = {
        labels: ["T1", "T12", "T3", "T4", "T5", "T6", "T7", "T8", "T9", "T10", "T11", "T12"],
        datasets: [{
            label: '2017',
            backgroundColor: window.chartColors.grey,
            stack: 'Stack 0',
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }, {
            label: '2018',
            backgroundColor: window.chartColors.yellow,
            stack: 'Stack 1',
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }]

    };
    var ctx2 = document.getElementById("chart-2").getContext("2d");
    var config2 = {
        type: 'bar',
        data: barChartData2,
        options: {
            title:{
                display:true,
                text:"THỐNG KÊ SẢN LƯỢNG"
            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    };
    window.myBar2 = new Chart(ctx2, config2);
    UIkit.util.on('#tiendien', 'show', function () {
        // var barChartData2 = {
        //     labels: ["T1", "T12", "T3", "T4", "T5", "T6", "T7", "T8", "T9", "T10", "T11", "T12"],
        //     datasets: [{
        //         label: '2017',
        //         backgroundColor: window.chartColors.grey,
        //         stack: 'Stack 0',
        //         data: [
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor()
        //         ]
        //     }, {
        //         label: '2018',
        //         backgroundColor: window.chartColors.yellow,
        //         stack: 'Stack 1',
        //         data: [
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor(),
        //             randomScalingFactor()
        //         ]
        //     }]
        //
        // };
        // var ctx2 = document.getElementById("chart-2").getContext("2d");
        // var config2 = {
        //     type: 'bar',
        //     data: barChartData2,
        //     options: {
        //         title:{
        //             display:true,
        //             text:"THỐNG KÊ SẢN LƯỢNG"
        //         },
        //         tooltips: {
        //             mode: 'index',
        //             intersect: false
        //         },
        //         responsive: true,
        //         scales: {
        //             xAxes: [{
        //                 stacked: true,
        //             }],
        //             yAxes: [{
        //                 stacked: true
        //             }]
        //         }
        //     }
        // };
        // window.myBar2 = new Chart(ctx2, config2);
    });
</script>
<?php include('footer.php'); ?>
