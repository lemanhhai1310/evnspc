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
        <h1 class="title uk-text-uppercase uk-h2 uk-text-white">xác nhận tài khoản</h1>
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
                        <h3 class="title_forgot_pass uk-text-uppercase">xác nhận tài khoản</h3>
                        <p class="desc_forgot">Quý khách vui lòng kiểm tra điện thoại để lấy mã OTP xác nhận đăng ký tài khoản</p>
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
                            <span class="uk-form-icon uk-icon" uk-icon=""><i class="fa fa-barcode" aria-hidden="true"></i></span>
                            <input class="uk-input" type="text" placeholder="Mã khách hàng">
                        </div>
                    </div>
                    <div class="error1">* Mã khách hàng không đúng</div>
                    <div class="uk-margin-small">
                        <div class="uk-position-relative">
                            <span class="uk-form-icon uk-icon" uk-icon=""><img src="imgs/icon_xacnhantaikhoan/icon_phone.svg" alt=""></span>
                            <input class="uk-input" type="text" placeholder="Điện thoại">
                        </div>
                    </div>
                    <div class="uk-margin-small">
                        <div class="uk-position-relative">
                            <span class="uk-form-icon uk-icon" uk-icon=""><img src="imgs/icon_xacnhantaikhoan/icon_otp.svg" alt=""></span>
                            <input class="uk-input" type="text" placeholder="Mã OTP">
                        </div>
                    </div>
                    <button class="uk-button uk-button-primary uk-width-1-1 btn-send-contact">xác nhận</button>
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