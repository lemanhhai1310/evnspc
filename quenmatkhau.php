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
        <h1 class="title uk-text-uppercase uk-h2 uk-text-white">tài khoản</h1>
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

                    <div class="uk-margin-small">
                        <div class="uk-position-relative">
                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                            <input class="uk-input" type="text" placeholder="Tên đăng nhập">
                        </div>
                    </div>
                    <div class="error1">* Tên đăng nhập chỉ bao gồm các chữ từ a-z và các số từ 0-9</div>
                    <div class="uk-margin-small">
                        <div class="uk-position-relative">
                            <span class="uk-form-icon" uk-icon=""><i class="fa fa-barcode" aria-hidden="true"></i></span>
                            <input class="uk-input" type="text" placeholder="Mã khách hàng">
                        </div>
                    </div>
                    <div class="error1">* Mã khách hàng không đúng</div>
                    <div class="uk-margin-small">
                        <div class="uk-position-relative">
                            <span class="uk-form-icon" uk-icon="icon: unlock"></span>
                            <input id="password-field1" class="uk-input" type="password" placeholder="Mật khẩu" value="hailemanh1310">
                            <span toggle="#password-field1" class="fa fa-eye toggle-password uk-position-center-right unlock_pass" style="right: 15px;"></span>
                        </div>
                    </div>
                    <div class="uk-margin-small">
                        <div class="uk-position-relative">
                            <span class="uk-form-icon" uk-icon="icon: unlock"></span>
                            <input id="password-field2" class="uk-input" type="password" placeholder="Nhập lại Mật khẩu" value="hailemanh1310">
                            <span toggle="#password-field2" class="fa fa-eye toggle-password uk-position-center-right unlock_pass" style="right: 15px;"></span>
                        </div>
                    </div>
                    <div class="uk-margin-small">
                        <div class="uk-position-relative">
                            <span class="uk-form-icon" uk-icon="icon: receiver"></span>
                            <input class="uk-input" type="tel" placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="uk-margin-small">
                        <div class="uk-position-relative">
                            <span class="uk-form-icon" uk-icon="icon: mail"></span>
                            <input class="uk-input" type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="error1">* Vui lòng điền đầy đủ thông tin</div>
                    <div class="uk-margin">
                        <div>Quý Khách hàng vui lòng lựa chọn hình thức xác nhận
                            tài khoản đăng ký</div>
                    </div>
                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid uk-flex-center">
                        <label><input class="uk-radio" type="radio" name="radio2" checked> Điện thoại</label>
                        <label><input class="uk-radio" type="radio" name="radio2"> Email</label>
                    </div>
                    <button class="uk-button uk-button-primary uk-width-1-1 btn-send-contact">Đăng nhập</button>
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