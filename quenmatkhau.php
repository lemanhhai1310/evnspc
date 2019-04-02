<?php
if(isset($_POST['submit'])){
    $name;
    $captcha;
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    if(isset($_POST['g-recaptcha-response'])){
        $captcha = $_POST['g-recaptcha-response'];
    }
    if(!$captcha){
        echo '<h2>Hay xac nhan CAPTCHA</h2>';
    }else{
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdpbZIUAAAAAC418yirgJnDPAFqzhDa3mvXEkDk&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success == false){
            echo '<h2>SPAM!</h2>';
        }else{
            echo '<h2>'.$name.' Khong phai robot :)</h2>';
        }
    }
}
?>
<?php include('header.php'); ?>
<div class="block_g uk-section-large uk-background-cover" style="background-image: url('imgs/bg/2-14.jpg')">
    <div class="uk-container">
        <h1 class="title uk-text-uppercase uk-h2 uk-text-white">quên mật khẩu</h1>
        <ul class="uk-breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><span>Tài khoản</span></li>
        </ul>
    </div>
</div>
<div class="uk-section bg-white">
    <div class="uk-container">
        <div class="uk-grid uk-flex-center">
            <div class="uk-width-2-5@s">
                <form class="form_acc">
                    <div class="uk-margin">
                        <h3 class="title_forgot_pass uk-text-uppercase">lấy lại mật khẩu</h3>
                        <p class="desc_forgot">Quý khách vui lòng điền tên đăng nhập vào hình thức lấy lại mật khẩu</p>
                    </div>
                    <div class="uk-margin-small">
                        <div class="uk-position-relative">
                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                            <input class="uk-input" type="text" placeholder="Tên đăng nhập">
                        </div>
                    </div>
                    <div class="error1">* Tên đăng nhập không đúng</div>
                    <div class="uk-margin-small">
                        <div class="uk-position-relative">
                            <span class="uk-form-icon" uk-icon="icon: unlock"></span>
                            <input id="password-field1" class="uk-input" type="password" placeholder="Mật khẩu" value="hailemanh1310">
                            <span toggle="#password-field1" class="fa fa-eye toggle-password uk-position-center-right unlock_pass" style="right: 15px;"></span>
                        </div>
                    </div>
                    <div class="error1">* Mã khách hàng không đúng</div>
                    <div class="uk-margin">
                        <div>Quý Khách hàng vui lòng lựa chọn hình thức xác nhận
                            tài khoản đăng ký</div>
                    </div>
                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label onclick="sodienthoai()"><input class="uk-radio" type="radio" name="radio2" checked> Điện thoại</label>
                        <label onclick="email()"><input class="uk-radio" type="radio" name="radio2"> Email</label>
                    </div>
                    <script>
                        function sodienthoai() {
                            $('#sdt').show();
                            $('#email').hide();
                        }
                        function email() {
                            $('#sdt').hide();
                            $('#email').show();
                        }
                    </script>
                    <div class="uk-margin" id="sdt">
                        <div class="uk-position-relative">
                            <span class="uk-form-icon" uk-icon="icon: receiver"></span>
                            <input class="uk-input" type="tel" placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="uk-margin" style="display: none" id="email">
                        <div class="uk-position-relative">
                            <span class="uk-form-icon" uk-icon="icon: mail"></span>
                            <input class="uk-input" type="tel" placeholder="Email">
                        </div>
                    </div>
                    <button class="uk-button uk-button-primary uk-width-1-1 btn-send-contact">Đăng nhập</button>
                    <div class="uk-margin uk-text-center">
                        <a href="account.html">Quay lại trang đăng nhập</a>
                    </div>
                </form>
                <script>
                    $(".toggle-password").click(function() {
                        $(this).toggleClass("fa-eye fa-eye-slash");
                        var input = $($(this).attr("toggle"));
                        if (input.attr("type") == "password") {
                            input.attr("type", "text");
                        } else {
                            input.attr("type", "password");
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>