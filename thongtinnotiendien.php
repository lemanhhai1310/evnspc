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
            <div class="uk-width-1-3@m uk-flex-first@m">
                <?php include('sidebar-tracuu.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>