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
                        <h5>THÔNG TIN CHÍNH SÁCH BẢO MẬT</h5>
                    </div>
                    <div class="uk-card-body uk-padding-small">
                        <dl class="uk-description-list list_hai1">
                            <?php
                            $cars = array
                            (
                                array(
                                    'title' => 'Chính sách bảo mật',
                                    'desc' => 'Trang web cskh.evnspc.vn cam kết sẽ bảo mật những thông tin mang tính riêng tư của bạn.Bạn vui lòng đọc bản “Chính sách bảo mật” dưới đây để hiểu hơn những cam kết mà chúng tôi thực hiện, nhằm tôn trọng và bảo vệ quyền lợi của người truy cập.',
                                ),
                                array(
                                    'title' => '1. Mục đích và phạm vi thu thập',
                                    'desc' => 'Để truy cập và sử dụng một số dịch vụ tại trang web cskh.evnspc.vn, bạn có thể sẽ được yêu cầu đăng ký với chúng tôi thông tin cá nhân (Tên đăng nhập, Mật khẩu, Mã khách hàng sử dụng điện).Mọi thông tin khai báo phải đảm bảo tính chính xác và hợp pháp.Trang web cskh.evnspc.vn không chịu mọi trách nhiệm liên quan đến pháp luật của thông tin khai báo.
Chúng tôi cũng có thể thu thập thông tin về số lần viếng thăm, bao gồm số trang bạn xem, số links (liên kết) bạn click và những thông tin khác liên quan đến việc kết nối đến trang web cskh.evnspc.vn. Chúng tôi cũng thu thập các thông tin mà trình duyệt Web (Browser) bạn sử dụng mỗi khi truy cập vào trang cskh.evnspc.vn, bao gồm: địa chỉ IP, loại Browser, ngôn ngữ sử dụng, thời gian và những địa chỉ mà Browser truy xuất đến.',
                                ),
                                array(
                                    'title' => '2. Phạm vi sử dụng thông tin',
                                    'desc' => 'Trang web cskh.evnspc.vn thu thập và sử dụng thông tin cá nhân bạn với mục đích phù hợp và hoàn toàn tuân thủ nội dung của “Chính sách bảo mật” này. Khi cần thiết, chúng tôi có thể sử dụng những thông tin này để liên hệ trực tiếp với bạn dưới các hình thức như: Gởi thư ngỏ, thư cảm ơn, gửi tin nhắn SMS, thông tin về kỹ thuật và bảo mật…',
                                ),
                                array(
                                    'title' => '3. Thời gian lưu trữ thông tin',
                                    'desc' => 'Trang web cskh.evnspc.vn thu thập và sử dụng thông tin cá nhân bạn với mục đích phù hợp và hoàn toàn tuân thủ nội dung của “Chính sách bảo mật” này. Khi cần thiết, chúng tôi có thể sử dụng những thông tin này để liên hệ trực tiếp với bạn dưới các hình thức như: Gởi thư ngỏ, thư cảm ơn, gửi tin nhắn SMS, thông tin về kỹ thuật và bảo mật…',
                                ),
                                array(
                                    'title' => '4. Địa chỉ của đơn vị thu thập và quản lý thông tin cá nhân',
                                    'desc' => array(
                                        'Đơn vị: Chi nhánh Tổng Công ty Điện lực miền Nam TNHH – Trung tâm Chăm sóc Khách hàng',
                                        'Địa chỉ đăng ký kinh doanh: 12 Thi Sách, Phường Bến Nghé, Quận 1, Thành phố Hồ Chí Minh, Việt Nam.',
                                        'Tổng đài chăm sóc khách hàng: 19001006 - 19009000 (phục vụ 24/7)',
                                        'Điện thoại văn phòng: 028.39826011 (giờ hành chính).',
                                    ),
                                ),
                                array(
                                    'title' => '5.Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá nhân',
                                    'desc' => array(
                                        'Khách hàng có thể tiếp cận và chỉnh sửa dữ liệu cá nhân (mật khẩu, email, số điện thoại, thông tin Khách hàng sử dụng điện...) dựa vào yêu cầu của khách hàng bằng cách hình thức sau:',
                                        '- Gọi điện thoại đến Tổng đài chăm sóc khách hàng 19001006 - 19009000, bằng nghiệp vụ chuyên môn xác định thông tin cá nhân và nhân viên tổng đài sẽ hỗ trợ chỉnh sửa thay người dùng.',
                                        '- Đăng nhập vào website với tài khoản đã đăng ký để thay đổi thông tin dữ liệu cá nhân.',
                                    ),
                                ),
                                array(
                                    'title' => '6. Cam kết bảo mật thông tin cá nhân khách hàng',
                                    'desc' => 'Thông tin cá nhân của thành viên trên trang web cskh.evnspc.vn được trang web cskh.evnspc.vn cam kết bảo mật tuyệt đối theo chính sách bảo vệ thông tin cá nhân của trang cskh.evnspc.vn. Việc thu thập và sử dụng thông tin của mỗi thành viên chỉ được thực hiện khi có sự đồng ý của khách hàng đó trừ những trường hợp pháp luật có quy định khác.
Không sử dụng, không chuyển giao, cung cấp hay tiết lộ cho bên thứ ba nào về thông tin cá nhân của thành viên khi không có sự cho phép đồng ý từ thành viên.
Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu cá nhân thành viên, trang web cskh.evnspc.vn sẽ có trách nhiệm thông báo vụ việc cho cơ quan chức năng điều tra xử lý kịp thời và thông báo cho thành viên được biết.
Ban quản lý cskh.evnspc.vn yêu cầu các cá nhân khi đăng kýlà thành viên, phải cung cấp đúng thông tin Mã khách hàng sử dụng điện để lấy được đầy đủ thông tin Khách hàng sử dụng điện có liên quan như: Họ và tên, địa chỉ liên lạc, email, số chứng minh nhân dân, điện thoại, số tài khoản, số thẻ thanh toán…., và chịu trách nhiệm về tính pháp lý của những thông tin trên. Ban quản lý cskh.evnspc.vn không chịu trách nhiệm cũng như không giải quyết mọi khiếu nại có liên quan đến quyền lợi của Thành viên đó nếu xét thấy tất cả thông tin cá nhân của thành viên đó cung cấp khi đăng ký ban đầu là không chính xác.',
                                ),
                            );
                            foreach ($cars as $k => $v) { ?>
                                <dt><?= $v['title'] ?></dt>
                                <dd>
                                    <?php if (is_array($v['desc'])){
                                        foreach ($v['desc'] as $k1 => $v1) { ?>
                                            <div><?= $v1 ?></div>
                                        <?php } ?>
                                    <?php }else{ ?>
                                        <?= $v['desc'] ?>
                                    <?php } ?>
                                </dd>
                            <?php } ?>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>