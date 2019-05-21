<?php include('header.php'); ?>
<div class="block_g uk-section-large uk-background-cover" style="background-image: url('imgs/bg/2-24.jpg')">
    <div class="uk-container">
        <h1 class="title uk-text-uppercase uk-h2 uk-text-white">thông tin hỗ trợ</h1>
        <ul class="uk-breadcrumb">
            <li><a href=".">Trang chủ</a></li>
            <li><span>Chính sách bảo mật</span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small bg-white">
    <div class="uk-container">
        <div class="uk-grid" uk-margin>
            <div class="uk-width-1-1">
                <h3 class="title_c uk-text-uppercase uk-margin-large">CHÍNH SÁCH BẢO MẬT</h3>
                <div class="uk-card uk-card-default hai1">
                    <div class="uk-padding-small uk-card-header">
                        <h5>THÔNG TIN CÁC TIÊU CHUẨN DỊCH VỤ</h5>
                    </div>
                    <div class="uk-card-body uk-padding-small">
                        <h3 class="title_dvtc uk-text-uppercase uk-margin"><span>nội dung</span></h3>
                        <ul class="box11" uk-accordion>
                            <?php
                            $cars = array
                            (
                                array(
                                    'title' => 'XÁC ĐỊNH DỰ ÁN ĐMTMN',
                                    'desc' => array(
                                        '- Dự án ĐMTMN là dự án điện mặt trời lắp đặt trên mái nhà hoặc gắn với công trình xây dựng do tổ chức hoặc cá nhân làm chủ đầu tư (sau đây gọi là chủ đầu tư) có đấu nối và bán điện lên lưới điện của EVN.',
                                        '- Các dự án điện mặt trời lắp đặt trên mặt đất, mặt nước ... không gắn với mái nhà hoặc công trình xây dựng không thuộc phạm vi hướng dẫn của văn bản này.',
                                    ),
                                    'open' => true,
                                ),
                                array(
                                    'title' => 'CƠ CHẾ MUA BÁN ĐIỆN VÀ GIÁ MUA ĐIỆN CỦA DỰ ÁN ĐMTMN',
                                    'desc' => array(
                                        '- Dự án ĐMTMN là dự án điện mặt trời lắp đặt trên mái nhà hoặc gắn với công trình xây dựng do tổ chức hoặc cá nhân làm chủ đầu tư (sau đây gọi là chủ đầu tư) có đấu nối và bán điện lên lưới điện của EVN.',
                                        '- Các dự án điện mặt trời lắp đặt trên mặt đất, mặt nước ... không gắn với mái nhà hoặc công trình xây dựng không thuộc phạm vi hướng dẫn của văn bản này.',
                                    ),
                                    'open' => false,
                                ),
                                array(
                                    'title' => 'PHÂN CẤP KÝ KẾT VÀ THỰC HIỆN HỢP ĐỒNG MUA ĐIỆN TỪ DỰ ÁN ĐMTMN',
                                    'desc' => array(
                                        '- Dự án ĐMTMN là dự án điện mặt trời lắp đặt trên mái nhà hoặc gắn với công trình xây dựng do tổ chức hoặc cá nhân làm chủ đầu tư (sau đây gọi là chủ đầu tư) có đấu nối và bán điện lên lưới điện của EVN.',
                                        '- Các dự án điện mặt trời lắp đặt trên mặt đất, mặt nước ... không gắn với mái nhà hoặc công trình xây dựng không thuộc phạm vi hướng dẫn của văn bản này.',
                                    ),
                                    'open' => false,
                                ),
                            );
                            foreach ($cars as $k => $v) { ?>
                            <li class="<?php if($v['open']){echo 'uk-open';} ?>">
                                <a class="uk-accordion-title uk-text-uppercase" href="#">0<?= $k +1; ?>. <?= $v['title'] ?></a>
                                <div class="uk-accordion-content uk-padding-small uk-margin-remove">
                                    <?php foreach ($v['desc'] as $k1 => $v1) { ?>
                                        <p><?= $v1; ?></p>
                                    <?php } ?>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                        <h3 class="title_dvtc uk-text-uppercase uk-margin"><span>lưu đồ</span></h3>
                        <ul class="box11" uk-accordion>
                            <?php
                            $cars = array
                            (
                                array(
                                    'title' => 'TIẾP NHẬN VÀ GIẢI QUYẾT YÊU CẦU BÁN ĐIỆN TỪ DỰ ÁN ĐMTMN CỦA CHỦ ĐẦU TƯ',
                                    'desc' => array(
                                        '- Dự án ĐMTMN là dự án điện mặt trời lắp đặt trên mái nhà hoặc gắn với công trình xây dựng do tổ chức hoặc cá nhân làm chủ đầu tư (sau đây gọi là chủ đầu tư) có đấu nối và bán điện lên lưới điện của EVN.',
                                        '- Các dự án điện mặt trời lắp đặt trên mặt đất, mặt nước ... không gắn với mái nhà hoặc công trình xây dựng không thuộc phạm vi hướng dẫn của văn bản này.',
                                    ),
                                    'open' => false,
                                ),
                                array(
                                    'title' => 'THANH TOÁN TIỀN ĐIỆN ĐỐI VỚI DỰ ÁN ĐMTMN',
                                    'desc' => array(
                                        '- Dự án ĐMTMN là dự án điện mặt trời lắp đặt trên mái nhà hoặc gắn với công trình xây dựng do tổ chức hoặc cá nhân làm chủ đầu tư (sau đây gọi là chủ đầu tư) có đấu nối và bán điện lên lưới điện của EVN.',
                                        '- Các dự án điện mặt trời lắp đặt trên mặt đất, mặt nước ... không gắn với mái nhà hoặc công trình xây dựng không thuộc phạm vi hướng dẫn của văn bản này.',
                                    ),
                                    'open' => false,
                                ),
                            );
                            foreach ($cars as $k => $v) { ?>
                                <li class="<?php if($v['open']){echo 'uk-open';} ?>">
                                    <a class="uk-accordion-title uk-text-uppercase" href="#">0<?= $k +1; ?>. <?= $v['title'] ?></a>
                                    <div class="uk-accordion-content uk-padding-small uk-margin-remove">
                                        <?php foreach ($v['desc'] as $k1 => $v1) { ?>
                                            <p><?= $v1; ?></p>
                                        <?php } ?>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                        <h3 class="title_dvtc uk-text-uppercase uk-margin"><span>VĂN BẢN THAM KHẢO</span></h3>
                        <ul class="box11 c1 uk-list">
                            <?php
                            $cars = array
                            (
                                array(
                                    'title' => 'Quyết định 11/2017/QĐ-TTg ngày 11 tháng 4 năm 2017 của Thủ tướng Chính phủ về việc "Quyết định Về cơ chế khuyến khích phát triển các dự án điện mặt trời tại Việt Nam',
                                    'open' => false,
                                ),
                                array(
                                    'title' => 'Thông tư 16/2017/TT-BCT ngày 12 tháng 9 năm 2017 của Bộ Công Thương về việc "Quy định về phát triển dự án và Hợp đồng mua bán điện mẫu áp dụng cho các dự án điện mặt trời',
                                    'open' => false,
                                ),
                            );
                            foreach ($cars as $k => $v) { ?>
                                <li>
                                    <a class="uk-accordion-title uk-position-relative" href="#">0<?= $k +1; ?>. <?= $v['title'] ?> <span class="uk-position-top-right" uk-icon="download"></span></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>