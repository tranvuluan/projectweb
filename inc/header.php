<?php
ob_start();
$filepath = realpath(dirname(__FILE__));
include_once $filepath . '/../lib/session.php';

?>

<?php
Session::init();
Session::checkUserLogin();

?>


<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>

<body>
    <!--Header-->
    <!-- Banner (logo,slogan) -->
    <div class="_top">
        <div class="row">
            <div class="_left">
                <div class="phone" style="padding-left: 15px;">
                    <div style="margin-right: 2px;" style="display: inline;" class="fa fa-phone my"></div>
                    (+84) 99999999
                </div>
                <div class="email">
                    <div style="margin-right: 2px;" class="fa fa-envelope my"></div>
                    sachdao@gmail.com
                </div>
            </div>
            <div class="_middle">
                <div>Free shipping on all orders over 150k <a href="#" style="padding: 2px 6px 3px 6px; text-decoration: none; background-color: #b48b33; font-size: 16px; color: white;border-radius: 10px;">Shop
                        Now!</a></div>
            </div>
            <div class="_right">
                <a href="#">
                    <div class="fa fa-facebook"></div>
                </a>
                <a href="#">
                    <div class="fa fa-instagram"></div>
                </a>
                <a href="#">
                    <div class="fa fa-twitter"></div>
                </a>
                <a href="#">
                    <div class="fa fa-globe"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="logo"><img class="imagesachdao" src="image/logo-ngang.png" alt=""></div>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="index.php" title="Trang chủ">Trang chủ</a></li>
                    <li><a href="congnghethongtin.php" title="Sách CNTT">Sách bán chạy<i class="fa fa-angle-down" style="padding-left: 5px;" aria-hidden="true"></i></a>
                        <!-- menu con sổ xuống cấp 1 -->
                        <ul>
                            <li><a href="congnghethongtin.php" title="Ngôn ngữ lập trình C/C++, JS, Python,...">Ngôn
                                    ngữ lập trình</a></li>
                            <li><a href="congnghethongtin.php" title="Lập trình Web ">Lập trình Web & AI</a></li>
                            <li>
                                <a href="congnghethongtin.php" title="Thiết kế đồ hoạ">Thiết kế đồ hoạ</a>
                            </li>
                            <li><a href="ngoaingu.php" title="Ngoại ngữ">Ngoại ngữ</a>
                            </li>
                            <li><a href="selfhelp.php" title="Al">Phát triển bản thân</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="khuyenmai.php" title="Khuyến mãi">Khuyễn mãi</a>
                        <!--  -->
                    </li>
                    <li><a href="contact.php" title="Liện hệ">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
        <div class="search-bag" style="font-size: 18px; color: white;">
            <?php
            if (isset($_SESSION['userLogin']) == true) {
            ?>
                <div class="user" style="margin-right: 10px; position:relative">
                    <a href="#" class="fa fa-user-o topfa" style="padding-right: 5px;"></a>
                    <span style="font-size: 16px;"><?php echo $_SESSION['fullname'] ?>
                    </span>
                    <i class="ml-2 fa fa-caret-down" style="cursor:pointer;" data-toggle="dropdown"></i>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Thông tin tài khoản</a>
                        <a class="dropdown-item" href="?action=logout">Đăng xuất</a>
                        <?php
                        if (isset($_GET['action']) == 'logout' && $_GET['action'] == 'logout') {
                            session::destroy();
                            header('Location:index.php');
                        }
                        ?>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div id="btnLogin" class="user" style="margin-right: 10px;" data-toggle="modal" data-target="#modelId">
                    <a href="#" class="fa fa-user-o topfa" style="padding-right: 5px;"></a>
                    <span style="font-size: 16px;">Login/Register</span>
                </div>
            <?php } ?>

            <div class="_find-bag" style="padding-left: 20px;">
                <a href="#" href="" class="fa fa-search topfa" style="margin-left: 10px;"></a>
                <a href="cart.php" class="fa fa-shopping-bag topfa" data-toggle="tooltip" title="Giỏ hàng" style="margin-left: 30px;">
                    <div class="count top"><?php (isset($_SESSION['cart'])) ? print count($_SESSION['cart']) : print 0 ?></div>
                </a>
            </div>
        </div>
    </div>
    <!-- Kết thúc header -->

    <!-- Modal -->
    <div class="modal fade modalLogin" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 420px;padding: 1rem;">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -7px; margin-right:2px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-title text-center">
                        <h4>Login</h4>
                        <span id="spanlogin" style="color:red; padding-bottom:5px; display: inline-block;"></span>
                    </div>
                    <div class="d-flex flex-column">
                        <form id="formLoginUser">
                            <div id="fg_fullname" class="form-group d-none">
                                <label>Họ tên</label>
                                <input type="fullname" class="form-control" id="fullname">
                            </div>
                            <div class="form-group">
                                <label>Tên đăng nhập</label>
                                <input type="email" class="form-control" id="username">
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="form-group d-none" id="fg_repassword">
                                <label>Xác nhận mật khẩu</label>
                                <input type="password" class="form-control" id="repassword">
                            </div>
                            <div id="fg_phone" class="form-group d-none">
                                <label>Số điện thoại</label>
                                <input type="phone" class="form-control" id="phone">
                            </div>
                            <button id="btnlogin" type="button" class="btn btn-info btn-block btn-round" onclick="requestAjaxToLogin()">Login</button>
                            <button id="btnregister" type="button" class="btn btn-info btn-block btn-round d-none" onclick="requestAjaxToRegister(this)">Register</button>
                        </form>

                        <div class="text-center text-muted delimiter">or use a social network</div>
                        <div class="d-flex justify-content-center social-buttons">
                            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </button>
                            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                <i class="fa fa-linkedin"></i>
                            </button>
                            </di>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <div class="signup-section">Not a member yet? <a href="#a" class="text-info" onclick="toRegister()"> Sign Up</a>.</div>
                    <div id="footer_signin" class="btn btn-primary w-100 d-none" onclick="toSignIn()">Sign In</div>
                </div>
            </div>
        </div>
    </div>