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
                <h3 class="title_c uk-text-uppercase uk-margin">thay đổi hợp đồng mua bán điện</h3>
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
                <form>
                    <ul class="uk-subnav uk-subnav-pill" hidden uk-switcher>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                    <ul class="uk-switcher uk-margin">
                        <li>
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
                                <a href="#" uk-switcher-item="next" class="uk-button uk-button-primary btn-send-contact">tiếp theo</a>
                            </div>
                        </li>
                        <li>
                            <ul class="block_steps uk-grid-collapse uk-grid uk-flex uk-flex-middle uk-flex-around uk-child-width-1-3 uk-margin-medium-top uk-margin-large-bottom">
                                <li>
                                    <div class="box_step uk-text-center uk-position-relative uk-position-z-index">
                                        <i class="fa fa-3x fa-info-circle" aria-hidden="true"></i>
                                        <span class="uk-position-bottom uk-text-truncate uk-visible@s">Nhập dữ liệu</span>
                                    </div>
                                </li>
                                <li class="uk-active">
                                    <div class="box_step uk-text-center uk-position-relative uk-position-z-index">
                                        <i class="fa fa-3x fa-picture-o" aria-hidden="true"></i>
                                        <span class="uk-position-bottom uk-text-truncate uk-visible@s">Thêm hình đính kèm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="box_step uk-text-center uk-position-relative uk-position-z-index">
                                        <i class="fa fa-3x fa-check-circle-o" aria-hidden="true"></i>
                                        <span class="uk-position-bottom uk-text-truncate uk-visible@s">Xác nhận đăng ký</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                                <div class="uk-width-1-1">
                                    <div class="uk-form-label" for="form-stacked-text">Hình chụp các giấy tờ liên quan</div>
                                    <div hidden class="uk-card card7 uk-card-body uk-padding-small">
                                        <div class="js-upload uk-placeholder uk-text-center uk-height-small uk-flex uk-flex-middle uk-flex-center">
                                            <div>
                                                <span uk-icon="icon: cloud-upload"></span>
                                                <span class="uk-text-middle">Kéo và thả file vào đây hoặc</span>
                                                <div uk-form-custom>
                                                    <input type="file" multiple>
                                                    <span class="uk-link">Chọn file...</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input id="input-3" name="input2[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" data-show-preview="true">

                                    <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>

                                    <script >
                                        $(document).ready(function() {
                                            $("#input-5").fileinput({showCaption: false});

                                            $("#input-6").fileinput({
                                                showUpload: false,
                                                maxFileCount: 10,
                                                mainClass: "input-group-lg",
                                                showCaption: true
                                            });

                                            $("#input-8").fileinput({
                                                mainClass: "input-group-md",
                                                showUpload: true,
                                                previewFileType: "image",
                                                browseClass: "btn btn-success",
                                                browseLabel: "Pick Image",
                                                browseIcon: "<i class=\"icon-picture\"></i> ",
                                                removeClass: "btn btn-danger",
                                                removeLabel: "Delete",
                                                removeIcon: "<i class=\"icon-trash\"></i> ",
                                                uploadClass: "btn btn-info",
                                                uploadLabel: "Upload",
                                                uploadIcon: "<i class=\"icon-upload\"></i> "
                                            });

                                            $("#input-9").fileinput({
                                                previewFileType: "text",
                                                allowedFileExtensions: ["txt", "md", "ini", "text"],
                                                previewClass: "bg-warning",
                                                browseClass: "btn btn-primary",
                                                removeClass: "btn btn-secondary",
                                                uploadClass: "btn btn-secondary",
                                            });

                                            $("#input-10").fileinput({
                                                showUpload: false,
                                                layoutTemplates: {
                                                    main1: "{preview}\n" +
                                                        "<div class=\'input-group {class}\'>\n" +
                                                        "   <div class=\'input-group-append\'>\n" +
                                                        "       {browse}\n" +
                                                        "       {upload}\n" +
                                                        "       {remove}\n" +
                                                        "   </div>\n" +
                                                        "   {caption}\n" +
                                                        "</div>"
                                                }
                                            });

                                            $("#input-11").fileinput({
                                                maxFileCount: 10,
                                                allowedFileTypes: ["image", "video"]
                                            });

                                            $("#input-12").fileinput({
                                                showPreview: false,
                                                allowedFileExtensions: ["zip", "rar", "gz", "tgz"],
                                                elErrorContainer: "#errorBlock"
                                            });
                                        });

                                    </script>


                                    <script>

                                        var bar = document.getElementById('js-progressbar');

                                        UIkit.upload('.js-upload', {

                                            url: '',
                                            multiple: true,

                                            beforeSend: function () {
                                                console.log('beforeSend', arguments);
                                            },
                                            beforeAll: function () {
                                                console.log('beforeAll', arguments);
                                            },
                                            load: function () {
                                                console.log('load', arguments);
                                            },
                                            error: function () {
                                                console.log('error', arguments);
                                            },
                                            complete: function () {
                                                console.log('complete', arguments);
                                            },

                                            loadStart: function (e) {
                                                console.log('loadStart', arguments);

                                                bar.removeAttribute('hidden');
                                                bar.max = e.total;
                                                bar.value = e.loaded;
                                            },

                                            progress: function (e) {
                                                console.log('progress', arguments);

                                                bar.max = e.total;
                                                bar.value = e.loaded;
                                            },

                                            loadEnd: function (e) {
                                                console.log('loadEnd', arguments);

                                                bar.max = e.total;
                                                bar.value = e.loaded;
                                            },

                                            completeAll: function () {
                                                console.log('completeAll', arguments);

                                                setTimeout(function () {
                                                    bar.setAttribute('hidden', 'hidden');
                                                }, 1000);

                                                alert('Upload Completed');
                                            }

                                        });

                                    </script>
                                </div>
                            </div>
                            <div hidden class="uk-grid-small uk-grid-collapse uk-grid uk-margin" uk-grid="">
                                <div class="uk-width-expand">
                                    <input class="uk-input" type="text" placeholder="Chọn tập tin">
                                </div>
                                <div class="uk-width-auto">
                                    <button type="submit" class="uk-button uk-button-default">tìm kiếm</button>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-between">
                                <a href="#" uk-switcher-item="previous" class="uk-button uk-button-primary btn-send-contact">trở về trước</a>
                                <a href="#" uk-switcher-item="next" class="uk-button uk-button-primary btn-send-contact">tiếp theo</a>
                            </div>
                        </li>
                        <li>
                            <ul class="block_steps uk-grid-collapse uk-grid uk-flex uk-flex-middle uk-flex-around uk-child-width-1-3 uk-margin-medium-top uk-margin-large-bottom">
                                <li>
                                    <div class="box_step uk-text-center uk-position-relative uk-position-z-index">
                                        <i class="fa fa-3x fa-info-circle" aria-hidden="true"></i>
                                        <span class="uk-position-bottom uk-text-truncate uk-visible@s">Nhập dữ liệu</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="box_step uk-text-center uk-position-relative uk-position-z-index">
                                        <i class="fa fa-3x fa-picture-o" aria-hidden="true"></i>
                                        <span class="uk-position-bottom uk-text-truncate uk-visible@s">Thêm hình đính kèm</span>
                                    </div>
                                </li>
                                <li class="uk-active">
                                    <div class="box_step uk-text-center uk-position-relative uk-position-z-index">
                                        <i class="fa fa-3x fa-check-circle-o" aria-hidden="true"></i>
                                        <span class="uk-position-bottom uk-text-truncate uk-visible@s">Xác nhận đăng ký</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                                <div class="uk-width-1-1">
                                    <div class="g-recaptcha" data-sitekey="6LdpbZIUAAAAAGYFTJf9pzUifgrHM4F9B6RoDbcT"></div>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-between">
                                <a href="#" uk-switcher-item="previous" class="uk-button uk-button-primary btn-send-contact">trở về trước</a>
                                <a href="thongbao.html" class="uk-button uk-button-primary btn-send-contact">tiếp theo</a>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="uk-width-1-3@m uk-flex-first@m">
                <?php include('sidebar-left.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>