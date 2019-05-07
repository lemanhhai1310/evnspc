<?php include('header.php'); ?>
<div class="block_g uk-section-large uk-background-cover" style="background-image: url('imgs/bg/2-24.jpg')">
    <div class="uk-container">
        <h1 class="title uk-text-uppercase uk-h2 uk-text-white">thông tin hỗ trợ</h1>
        <ul class="uk-breadcrumb">
            <li><a href=".">Trang chủ</a></li>
            <li><a href="thongtinhotro.html">Thông tin hỗ trợ</a></li>
            <li><span>Hướng dẫn thủ tục</span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small bg-white">
    <div class="uk-container">
        <div class="uk-grid" uk-margin>
            <div class="uk-width-1-1">
                <h3 class="title_c uk-text-uppercase uk-margin-large">thanh toán trực tuyến</h3>
                <div class="uk-card uk-card-default card9">
                    <ul class="tab_hd uk-subnav uk-subnav-pill uk-child-width-expand uk-margin-remove" uk-switcher>
                        <li class="uk-padding-remove uk-active"><a href="#">THANH TOÁN TIỀN ĐIỆN VÀ DỊCH VỤ KHÁCH</a></li>
                        <li class="uk-padding-remove"><a href="#">THANH TOÁN CHI PHÍ CẤP ĐIỆN</a></li>
                    </ul>

                    <div class="uk-switcher uk-padding">
                        <div>
                            <div class="uk-margin-small"><a href="#">Nhập mã khách hàng sử dụng điện</a></div>
                            <div class="uk-margin-large-bottom" uk-grid>
                                <div class="uk-width-2-3">
                                    <form class="form_acc">
                                        <div class="uk-margin-small">
                                            <div class="uk-position-relative">
                                                <span class="uk-form-icon uk-icon" uk-icon=""><i class="fa fa-barcode" aria-hidden="true"></i></span>
                                                <input class="uk-input" type="text" placeholder="Mã khách hàng">
                                            </div>
                                        </div>
                                        <button class="uk-button uk-button-primary btn-send-contact uk-text-truncate"><span uk-icon="search"></span> tìm kiếm thông tin</button>
                                    </form>
                                </div>
                            </div>
                            <div class="uk-margin-small"><a href="#">Chọn các dịch vụ cần thanh toán</a></div>
                            <div class="uk-overflow-auto">
                                <table class="uk-table uk-table-divider table1_thanhtoan">
                                    <thead>
                                    <tr>
                                        <th>Chọn</th>
                                        <th>Mã Khách Hàng</th>
                                        <th>Số Tiền</th>
                                        <th>Số Tiền</th>
                                        <th>Tổng Tiền</th>
                                        <th>Loại Dịch Vụ</th>
                                        <th>Thanh Toán</th>
                                        <th>Chi Tiết</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <label><input class="uk-checkbox" type="checkbox"></label>
                                        </td>
                                        <td>(Mã Khách Hàng)</td>
                                        <td>000.000.000</td>
                                        <td>000.000</td>
                                        <td>000.000.000</td>
                                        <td>Loại Dịch Vụ</td>
                                        <td>Thanh Toán</td>
                                        <td><a href="#modal-center" uk-toggle><img src="imgs/thanhtoantructuyen/Vector.png" alt=""></a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label><input class="uk-checkbox" type="checkbox"></label>
                                        </td>
                                        <td>(Mã Khách Hàng)</td>
                                        <td>000.000.000</td>
                                        <td>000.000</td>
                                        <td>000.000.000</td>
                                        <td>Loại Dịch Vụ</td>
                                        <td>Thanh Toán</td>
                                        <td><a href="#modal-center" uk-toggle><img src="imgs/thanhtoantructuyen/Vector.png" alt=""></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="uk-width-1-1">
                                <a href="#" class="uk-button uk-button-primary btn-send-contact">thanh toán</a>
                            </div>
                            <div id="modal-center" class="uk-flex-top modal1_thanhtoan" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <div class="uk-margin">
                                        <button class="uk-button uk-button-primary btn-send-contact"><span uk-icon="print"></span> in thông tin hóa đơn</button>
                                    </div>
                                    <img src="imgs/thanhtoantructuyen/image.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>