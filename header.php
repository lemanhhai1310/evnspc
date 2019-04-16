<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ - EVN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="shortcut icon" href="imgs/favicon-19.png">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.0.3/css/uikit.min.css">
    <link rel="stylesheet" href="assets/jquery-ui-1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/jquery-ui-1.12.1/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="assets/Semantic-UI-master/dist/semantic.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <!-- Date & Time Picker CSS -->
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/timepicker.css">
    <link rel="stylesheet" href="css/daterangepicker.css">

    <!-- Bootstrap File Upload CSS -->
    <link rel="stylesheet" href="css/components/bs-filestyle.css" type="text/css" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/forgot_pass.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.3.1.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit.min.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit-icons.min.js"></script>
    <script src="assets/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="assets/Semantic-UI-master/dist/semantic.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!--Charts JS-->
    <script src="js/chart.js"></script>
    <script src="js/chart-utils.js"></script>

    <!-- Date & Time Picker JS -->
    <script src="js/components/moment.js"></script>
    <script src="js/components/datepicker.js"></script>
    <script src="js/components/timepicker.js"></script>

    <!-- Include Date Range Picker -->
    <script src="js/components/daterangepicker.js"></script>

    <!-- Bootstrap File Upload Plugin -->
    <script src="js/components/bs-filestyle.js"></script>

    <script src="js/jquery.buttonLoader.js"></script>
    <script src="js/functions.js"></script>
    <script>
        $( function() {
            var availableTags = [
                "Python",
                "Ruby",
                "Scala",
                "Scheme",
                "Tra cứu tiền điện",
            ];
            $( "#tags" ).autocomplete({
                source: availableTags
            });
        } );
    </script>
</head>
<body>
<section id="root" class="uk-height-viewport uk-offcanvas-content">
<?php include('menu_mobile1.php'); ?>
<header id="header-uk">
    <div class="top">
        <div class="uk-container">
            <div class="uk-flex uk-flex-middle uk-flex-between">
                <div class="support">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    Hỗ trợ trực tuyến 24/7:
                    <span>19001006 - 19009000</span>
                </div>
                <div>
                    <div class="uk-inline uk-visible@m">
                        <div class="ui fluid search selection dropdown bg-transparent border-0 uk-text-white">
                            <input type="hidden" name="country">
                            <i class="dropdown icon"></i>
                            <div class="default text uk-text-white"><img
                                        src="imgs/flag/vietnam.svg" alt=""></div>
                            <div class="menu">
                                <div style="white-space: nowrap" class="item" data-value="vn"><img
                                            src="imgs/flag/vietnam.svg" alt=""></div>
                                <div style="white-space: nowrap" class="item" data-value="england"><img
                                            src="imgs/flag/united-kingdom.svg" alt=""></div>
                            </div>
                        </div>
                        <script>
                            $('.ui.dropdown').dropdown();
                        </script>
                    </div>
                    <div class="social_h uk-inline uk-visible@m">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom bg-white uk-box-shadow-small uk-position-z-index" style="z-index: 1000;" uk-sticky>
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="."><img src="imgs/logo-04.svg" alt=""></a>
                </div>

                <div class="uk-navbar-right nav-overlay uk-visible@m">

                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="about.html">Giới thiệu</a>
                            <div class="uk-navbar-dropdown uk-margin-remove">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="about.html">Trung tâm CSKH EVNSPC</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="thongtinhotro.html">Thông tin hỗ trợ</a>
                            <div class="uk-navbar-dropdown uk-margin-remove">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="thongtinhuongdanthutucvedien.html">Hướng dẫn thủ tục</a></li>
                                    <li>
                                        <a href="thongtinhuongdanthanhtoantiendien.html">Hướng dẫn thanh toán tiền điện <span uk-icon="chevron-right"></span></a>
                                        <ul class="uk-nav uk-navbar-dropdown-nav right-out uk-width-medium bg-white">
                                            <li><a href="thongtinhuongdanthutucvedien.html">Hướng dẫn thủ tục</a></li>
                                            <li><a href="thongtinhuongdanthanhtoantiendien.html">Hướng dẫn thanh toán tiền điện</a></li>
                                            <li><a href="thongtinhoidap.html">Hỏi đáp</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="thongtinhoidap.html">Hỏi đáp</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="dichvutructuyen.html">dịch vụ trực tuyến</a>
                            <div class="uk-navbar-dropdown uk-margin-remove">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="capdienhaap1.html">Dịch vụ cấp điện mới</a></li>
                                    <li><a href="#">Dịch vụ trong QT thực hiện HĐMBĐ</a></li>
                                    <li><a href="#">Các dịch vụ hỗ trợ</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="tracuu.html">tra cứu</a>
                            <div class="uk-navbar-dropdown uk-margin-remove">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="tracuuchiso.php">Tra cứu chỉ số</a></li>
                                    <li><a href="tracuuchiso.php#tiendien">Tra cứu tiền điện</a></li>
                                    <li><a href="tracuuchiso.php">Hóa đơn tiền điện</a></li>
                                    <li><a href="tracuuchiso.php">Thông tin nợ tiền điện</a></li>
                                    <li><a href="tracuuchiso.php">Thông tin thanh toán tiền điện</a></li>
                                    <li><a href="tracuuchiso.php">Lịch ngừng giảm cung cấp điện</a></li>
                                    <li><a href="tracuuchiso.php">Lịch ghi chỉ số</a></li>
                                    <li><a href="tracuuchiso.php">Điểm thu tiền điện</a></li>
                                    <li><a href="tracuuchiso.php">Thông tin giá bán điện</a></li>
                                    <li><a href="#">Thông tin phụ tải theo ngày</a></li>
                                    <li><a href="tracuuchiso.php">Theo dõi tiến độ cấp điện</a></li>
                                    <li><a href="#">Theo dõi tiến độ các dịch vụ khác</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="tintuc.html">tin tức</a>
                            <div class="uk-navbar-dropdown uk-margin-remove">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="tintuc.html">Thông tin Trung tâm CSKH</a></li>
                                    <li><a href="tintuc.html">Thông tin ngành điện</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="lienhe.html">liên hệ</a></li>
                    </ul>


                </div>
                <div class="uk-navbar-right nav-overlay tool">
                    <ul class="uk-navbar-nav">
                        <li>
                            <a class="uk-navbar-toggle" href="#" uk-search-icon></a>
                            <div class="uk-navbar-dropdown search1" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav">

                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-expand">
                                        <form class="uk-search uk-search-navbar uk-width-1-1" hidden>
                                            <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                                        </form>
                                        <form action="ketquatimkiem.html" class="uk-search uk-search-default uk-width-1-1">
                                            <span uk-search-icon></span>
                                            <input id="tags" class="uk-search-input border-0" type="search" placeholder="Tìm kiếm">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="account.html"><span uk-icon="user"></span></a>
                            <div class="uk-navbar-dropdown uk-padding-remove">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">XIN CHÀO P112221</a></li>
                                    <li><a class="uk-text-truncate" href="thongtintaikhoan.html">Thông tin tài khoản</a></li>
                                    <li><a class="uk-text-truncate" href="thongtinlienhe.html">thay đổi thông tin tài khoản</a></li>
                                    <li><a class="uk-text-truncate" href="thaydoimatkhau.html">thay đổi mật khẩu</a></li>
                                    <li><a href="#" class="uk-flex uk-flex-middle uk-flex-between uk-text-truncate" style="display: flex;">đăng xuất <span uk-icon="sign-out"></span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="uk-hidden@m"><a href="#my-id" class="pr-0 uk-navbar-toggle" uk-toggle><span uk-icon="menu"></span></a></li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
</header>