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
            <div class="uk-width-1-3@m uk-flex-first@m">
                <?php include('sidebar-tracuu.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>