<!doctype html>
<html lang="en">

<head>
    <title>Sách phát triển bản thân</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cntt.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="js/homejs.js"></script>
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
                <div>Free shipping on all orders over 150k <a href="#"
                        style="padding: 2px 6px 3px 6px; text-decoration: none; background-color: #b48b33; font-size: 16px; color: white;border-radius: 10px;">Shop
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
                    <li><a href="index.html" title="Trang chủ">Trang chủ</a></li>
                    <li><a href="congnghethongtin.html" title="Sách CNTT">Sách bán chạy<i class="fa fa-angle-down"
                                style="padding-left: 5px;" aria-hidden="true"></i></a>
                        <!-- menu con sổ xuống cấp 1 -->
                        <ul>
                            <li><a href="congnghethongtin.html" title="Ngôn ngữ lập trình C/C++, JS, Python,...">Ngôn
                                    ngữ lập trình</a></li>
                            <li><a href="congnghethongtin.html" title="Lập trình Web ">Lập trình Web & AI</a></li>
                            <li>
                                <a href="congnghethongtin.html" title="Thiết kế đồ hoạ">Thiết kế đồ hoạ</a>
                            </li>
                            <li><a href="ngoaingu.html" title="Ngoại ngữ">Ngoại ngữ</a>
                            </li>
                            <li><a href="selfhelp.html" title="Al">Phát triển bản thân</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="khuyenmai.html" title="Khuyến mãi">Khuyễn mãi</a>
                        <!--  -->
                    </li>
                    <li><a href="blog.html" title="Blog">Blog</a>
                    </li>
                    <li><a href="contact.html" title="Liện hệ">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
        <div class="search-bag" style="font-size: 18px; color: white;">
            <div class="user" style="margin-right: 10px;">
                <a href="#" class="fa fa-user-o topfa" style="padding-right: 5px;"></a>
                <span style="font-size: 16px;">Login/Registry</span>
            </div>
            |
            <div class="_find-bag" style="padding-left: 20px;">
                <a href="#" href="" class="fa fa-search topfa" style="margin-left: 10px;"></a>
                <a href="cart.html" class="fa fa-shopping-bag topfa" data-toggle="tooltip" title="Giỏ hàng"
                    style="margin-left: 30px;">
                    <div class="count top">3</div>
                </a>
            </div>
        </div>
    </div>
    <!-- Kết thúc header -->

    <!-- Nội dung -->
    <div class="cntt-link">
        <span><a href="index.html">Trang chủ</a> / <a href="#">SÁCH PHÁT TRIỂN BẢN THÂN</a></span>
    </div>
    <div class="cntt-content-block">
        <div class="cntt-content_left">
            <div class="left_danhmuc">
                <span>DANH MỤC SẢN PHẨM</span>
            </div>
            <div class="left_content-block">
                <ul>
                    <li id="ngonngulaptrinh" onclick="showListBook(this, id,0)">
                        <a data-id="ngonngulaptrinh" class="activeClick" href="#"><i class="fa fa-hand-o-right"
                                aria-hidden="true"></i>
                            <span>Tiếng Anh</span></a>
                    </li>
                    <li id="laptrinhweb" onclick="showListBook(this, id,1)">
                        <a data-id="laptrinhweb" class="" href="#"><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            <span>Tiếng Việt</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="cntt-content_right ngonngulaptrinh">
            <div class="right-content_top">
                <div class="_title">
                    <span>TIẾNG ANH</span>
                </div>
                <div class="filter_content">
                    <button id="phobien1" onclick="filter(this, id)"
                        class="btn btn-outline-info btn-sm filter active click">Phổ biến</button>
                    <button id="moinhat1" onclick="filter(this, id)" class="btn btn-outline-info btn-sm filter">Mới
                        nhất</button>
                    <button id="banchay1" onclick="filter(this, id)" class="btn btn-outline-info btn-sm filter">Bán
                        chạy</button>
                </div>
            </div>
            <!-- Block sách -->
            <div class="right-content_books phobien1">
                <ul>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="1"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="The Alchemist|30000|75000|image/DanhMuc/SelfHelp/EN/1.Al.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/1.Al.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="The Alchemist|30000|75000|image/DanhMuc/SelfHelp/EN/1.Al.jpg"
                                href="details.html">
                                <h6 class="name" data-index="1">The Alchemist</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">75000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="2"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="The little soul and the sun|50000|75000|image/DanhMuc/SelfHelp/EN/2.little.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/2.little.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="The little soul and the sun|50000|75000|image/DanhMuc/SelfHelp/EN/2.little.jpg"
                                href="details.html">
                                <h6 class="name" data-index="2">The little soul and the sun </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">75000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="3"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="YOU are a BADASS|50000|100000|image/DanhMuc/SelfHelp/EN/3.You.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/3.You.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="YOU are a BADASS|50000|100000|image/DanhMuc/SelfHelp/EN/3.You.jpg"
                                href="details.html">
                                <h6 class="name" data-index="3">YOU are a BADASS </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">100000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="4"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="The 7 Habits of highly effective people|60000|100000|image/DanhMuc/SelfHelp/EN/4.high.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/4.high.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="The 7 Habits of highly effective people|60000|100000|image/DanhMuc/SelfHelp/EN/4.high.jpg"
                                href="details.html">
                                <h6 class="name" data-index="4">The 7 Habits of highly effective people </h6>
                                <h5 class="price">60000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">100000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="5"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="MAKE YOUR BED|65000|70000|image/DanhMuc/SelfHelp/EN/5.make.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/5.make.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="MAKE YOUR BED|65000|70000|image/DanhMuc/SelfHelp/EN/5.make.jpg"
                                href="details.html">
                                <h6 class="name" data-index="5">MAKE YOUR BED</h6>
                                <h5 class="price">65000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">70000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="6"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CAN'T HURT ME |60000|70000|image/DanhMuc/SelfHelp/EN/6.can.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/6.can.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CAN'T HURT ME |60000|70000|image/DanhMuc/SelfHelp/EN/6.can.jpg"
                                href="details.html">
                                <h6 class="name" data-index="6">CAN'T HURT ME </h6>
                                <h5 class="price">60000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">70000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="7"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="The Subtle Art Of Not Giving A F*ck - Mark Manson|60000|100000|image/DanhMuc/SelfHelp/EN/7.The Subtle.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/7.The Subtle.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="The Subtle Art Of Not Giving A F*ck - Mark Manson|60000|100000|image/DanhMuc/SelfHelp/EN/7.The Subtle.jpg"
                                href="details.html">
                                <h6 class="name" data-index="7">The Subtle Art Of Not Giving A F*ck - Mark Manson</h6>
                                <h5 class="price">60000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">100000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="8"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="LIMITLESS|80000|100000|image/DanhMuc/SelfHelp/EN/8.limit.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/8.limit.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="LIMITLESS|80000|100000|image/DanhMuc/SelfHelp/EN/8.limit.jpg"
                                href="details.html">
                                <h6 class="name" data-index="8">LIMITLESS</h6>
                                <h5 class="price">80000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">100000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="9"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Think & Grow rich - Napoleon Hill|75000|100000|image/DanhMuc/SelfHelp/EN/9.Think.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/9.Think.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Think & Grow rich - Napoleon Hill|75000|100000|image/DanhMuc/SelfHelp/EN/9.Think.jpg"
                                href="details.html">
                                <h6 class="name" data-index="9">Think & Grow rich - Napoleon Hill</h6>
                                <h5 class="price">75000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">100000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="10"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="BEST SELF be you, only matter|75000|100000|image/DanhMuc/SelfHelp/EN/10.best.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/10.best.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="BEST SELF be you, only matter|75000|100000|image/DanhMuc/SelfHelp/EN/10.best.jpg"
                                href="details.html">
                                <h6 class="name" data-index="10">BEST SELF be you, only matter</h6>
                                <h5 class="price">75000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">100000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="11"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="EMTY OUT THE NEGATIVE|60000|80000|image/DanhMuc/SelfHelp/EN/11.emty.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/11.emty.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="EMTY OUT THE NEGATIVE|60000|80000|image/DanhMuc/SelfHelp/EN/11.emty.jpg"
                                href="details.html">
                                <h6 class="name" data-index="11">EMTY OUT THE NEGATIVE</h6>
                                <h5 class="price">60000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="12"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="UNFU*K YOURSELF - Gary John Bishop|50000|90000|image/DanhMuc/SelfHelp/EN/12.un.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/12.un.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="UNFU*K YOURSELF - Gary John Bishop|50000|90000|image/DanhMuc/SelfHelp/EN/12.un.jpg"
                                href="details.html">
                                <h6 class="name" data-index="12">UNFU*K YOURSELF - Gary John Bishop</h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">90000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- MỚI NHẤT -->
            <div class="right-content_books moinhat1 hidden">
                <ul>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="1"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="The Alchemist|30000|75000|image/DanhMuc/SelfHelp/EN/1.Al.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/1.Al.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="The Alchemist|30000|75000|image/DanhMuc/SelfHelp/EN/1.Al.jpg"
                                href="details.html">
                                <h6 class="name" data-index="1">The Alchemist</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">75000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="2"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="The little soul and the sun|50000|75000|image/DanhMuc/SelfHelp/EN/2.little.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/2.little.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="The little soul and the sun|50000|75000|image/DanhMuc/SelfHelp/EN/2.little.jpg"
                                href="details.html">
                                <h6 class="name" data-index="2">The little soul and the sun </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">75000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="3"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="YOU are a BADASS|50000|100000|image/DanhMuc/SelfHelp/EN/3.You.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/3.You.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="YOU are a BADASS|50000|100000|image/DanhMuc/SelfHelp/EN/3.You.jpg"
                                href="details.html">
                                <h6 class="name" data-index="3">YOU are a BADASS </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">100000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="4"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="The 7 Habits of highly effective people|60000|100000|image/DanhMuc/SelfHelp/EN/4.high.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/4.high.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="The 7 Habits of highly effective people|60000|100000|image/DanhMuc/SelfHelp/EN/4.high.jpg"
                                href="details.html">
                                <h6 class="name" data-index="4">The 7 Habits of highly effective people </h6>
                                <h5 class="price">60000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">100000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="5"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="MAKE YOUR BED|65000|70000|image/DanhMuc/SelfHelp/EN/5.make.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/5.make.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="MAKE YOUR BED|65000|70000|image/DanhMuc/SelfHelp/EN/5.make.jpg"
                                href="details.html">
                                <h6 class="name" data-index="5">MAKE YOUR BED</h6>
                                <h5 class="price">65000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">70000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="6"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CAN'T HURT ME |60000|70000|image/DanhMuc/SelfHelp/EN/6.can.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/6.can.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CAN'T HURT ME |60000|70000|image/DanhMuc/SelfHelp/EN/6.can.jpg"
                                href="details.html">
                                <h6 class="name" data-index="6">CAN'T HURT ME </h6>
                                <h5 class="price">60000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">70000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!--BÁN CHẠY-->
            <div class="right-content_books banchay1 hidden">
                <ul>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="1"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="The Alchemist|30000|75000|image/DanhMuc/SelfHelp/EN/1.Al.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/1.Al.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="The Alchemist|30000|75000|image/DanhMuc/SelfHelp/EN/1.Al.jpg"
                                href="details.html">
                                <h6 class="name" data-index="1">The Alchemist</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">75000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="2"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="The little soul and the sun|50000|75000|image/DanhMuc/SelfHelp/EN/2.little.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/2.little.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="The little soul and the sun|50000|75000|image/DanhMuc/SelfHelp/EN/2.little.jpg"
                                href="details.html">
                                <h6 class="name" data-index="2">The little soul and the sun </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">75000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="3"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="YOU are a BADASS|50000|100000|image/DanhMuc/SelfHelp/EN/3.You.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/3.You.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="YOU are a BADASS|50000|100000|image/DanhMuc/SelfHelp/EN/3.You.jpg"
                                href="details.html">
                                <h6 class="name" data-index="3">YOU are a BADASS </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">100000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="4"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="The 7 Habits of highly effective people|60000|100000|image/DanhMuc/SelfHelp/EN/4.high.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/4.high.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="The 7 Habits of highly effective people|60000|100000|image/DanhMuc/SelfHelp/EN/4.high.jpg"
                                href="details.html">
                                <h6 class="name" data-index="4">The 7 Habits of highly effective people </h6>
                                <h5 class="price">60000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">100000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="5"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="MAKE YOUR BED|65000|70000|image/DanhMuc/SelfHelp/EN/5.make.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/5.make.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="MAKE YOUR BED|65000|70000|image/DanhMuc/SelfHelp/EN/5.make.jpg"
                                href="details.html">
                                <h6 class="name" data-index="5">MAKE YOUR BED</h6>
                                <h5 class="price">65000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">70000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="6"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CAN'T HURT ME |60000|70000|image/DanhMuc/SelfHelp/EN/6.can.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/6.can.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CAN'T HURT ME |60000|70000|image/DanhMuc/SelfHelp/EN/6.can.jpg"
                                href="details.html">
                                <h6 class="name" data-index="6">CAN'T HURT ME </h6>
                                <h5 class="price">60000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">70000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="7"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="The Subtle Art Of Not Giving A F*ck - Mark Manson|60000|100000|image/DanhMuc/SelfHelp/EN/7.The Subtle.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/EN/7.The Subtle.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="The Subtle Art Of Not Giving A F*ck - Mark Manson|60000|100000|image/DanhMuc/SelfHelp/EN/7.The Subtle.jpg"
                                href="details.html">
                                <h6 class="name" data-index="7">The Subtle Art Of Not Giving A F*ck - Mark Manson</h6>
                                <h5 class="price">60000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">100000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--TIẾNG VIỆT-->
        <div class="cntt-content_right laptrinhweb hidden">

            <div class="right-content_top">
                <div class="_title">
                    <span>TIẾNG VIỆT</span>
                </div>
                <div class="filter_content">
                    <button id="phobien2" onclick="filter(this, id)"
                        class="btn btn-outline-info btn-sm filter active click">Phổ biến</button>
                    <button id="moinhat2" onclick="filter(this, id)" class="btn btn-outline-info btn-sm filter">Mới
                        nhất</button>
                    <button id="banchay2" onclick="filter(this, id)" class="btn btn-outline-info btn-sm filter">Bán
                        chạy</button>
                </div>
            </div>
            <!-- Block sách -->
            <div class="right-content_books phobien2">
                <ul>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="13"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="nếu đã hiểu nhau rồi, sao trông anh lạ thế ?|60000|70000|image/DanhMuc/SelfHelp/VN/1.Alan.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/1.Alan.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="nếu đã hiểu nhau rồi, sao trông anh lạ thế ?|60000|70000|image/DanhMuc/SelfHelp/VN/1.Alan.jpg"
                                href="details.html">
                                <h6 class="name" data-index="13">nếu đã hiểu nhau rồi, sao trông anh lạ thế ?</h6>
                                <h5 class="price">60000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">70000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="14"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="ĐÁNH THỨC CON NGƯỜI PHI THƯỜNG TRONG BẠN |70000|80000|image/DanhMuc/SelfHelp/VN/2.Awaken.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/2.Awaken.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ĐÁNH THỨC CON NGƯỜI PHI THƯỜNG TRONG BẠN |70000|80000|image/DanhMuc/SelfHelp/VN/2.Awaken.jpg"
                                href="details.html">
                                <h6 class="name" data-index="14">ĐÁNH THỨC CON NGƯỜI PHI THƯỜNG TRONG BẠN </h6>
                                <h5 class="price">70000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="15"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="UNG THƯ KHÔNG PHẢI LÀ CHẾT|70000|80000| image/DanhMuc/SelfHelp/VN/3.Cancer.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/3.Cancer.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="UNG THƯ KHÔNG PHẢI LÀ CHẾT|70000|80000| image/DanhMuc/SelfHelp/VN/3.Cancer.jpg"
                                href="details.html">
                                <h6 class="name" data-index="15">UNG THƯ KHÔNG PHẢI LÀ CHẾT</h6>
                                <h5 class="price">70000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="16"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CHIẾN LƯỢC KINH DOANH |50000|60000|image/DanhMuc/SelfHelp/VN/4.chienluoc.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/4.chienluoc.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CHIẾN LƯỢC KINH DOANH |50000|60000|image/DanhMuc/SelfHelp/VN/4.chienluoc.jpg"
                                href="details.html">
                                <h6 class="name" data-index="16">CHIẾN LƯỢC KINH DOANH </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="17"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Đắc Nhân Tâm|50000|60000|image/DanhMuc/SelfHelp/VN/5.dnt.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/5.dnt.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Đắc Nhân Tâm|50000|60000|image/DanhMuc/SelfHelp/VN/5.dnt.png"
                                href="details.html">
                                <h6 class="name" data-index="17">Đắc Nhân Tâm </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="18"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Đắc Nhân Tâm|50000|60000|image/DanhMuc/SelfHelp/VN/6.Ice.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/6.Ice.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ĐỘT PHÁ TRƯỚC KHI BỊ ĐÁ|50000|60000|image/DanhMuc/SelfHelp/VN/6.Ice.jpg"
                                href="details.html">
                                <h6 class="name" data-index="18">ĐỘT PHÁ TRƯỚC KHI BỊ ĐÁ </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="19"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="KHÉO ĂN NÓI BÁN HÀNG THÀNH CÔNG|50000|60000|image/DanhMuc/SelfHelp/VN/7.kheoannoi.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/7.kheoannoi.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="KHÉO ĂN NÓI BÁN HÀNG THÀNH CÔNG|50000|60000|image/DanhMuc/SelfHelp/VN/7.kheoannoi.jpg"
                                href="details.html">
                                <h6 class="name" data-index="19">KHÉO ĂN NÓI BÁN HÀNG THÀNH CÔNG </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="20"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CUỘC SỐNG BÍ MẬT CỦA CÁC NHÀ VĂN|45000|60000|image/DanhMuc/SelfHelp/VN/8.bimat.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/8.bimat.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CUỘC SỐNG BÍ MẬT CỦA CÁC NHÀ VĂN|45000|60000|image/DanhMuc/SelfHelp/VN/8.bimat.png"
                                href="details.html">
                                <h6 class="name" data-index="20">CUỘC SỐNG BÍ MẬT CỦA CÁC NHÀ VĂN </h6>
                                <h5 class="price">45000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="21"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="LÊ LA QUÁN XÁ QUÊ NHÀ|22000|55000|image/DanhMuc/SelfHelp/VN/9.lela.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/9.lela.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="LÊ LA QUÁN XÁ QUÊ NHÀ|22000|55000|image/DanhMuc/SelfHelp/VN/9.lela.jpg"
                                href="details.html">
                                <h6 class="name" data-index="21">LÊ LA QUÁN XÁ QUÊ NHÀ </h6>
                                <h5 class="price">22000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">55000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="22"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="NGHỀ TAY TRÁI HÁI RA TIỀN|22000|55000|image/DanhMuc/SelfHelp/VN/10.nghetaytrai.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/10.nghetaytrai.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="NGHỀ TAY TRÁI HÁI RA TIỀN|22000|55000|image/DanhMuc/SelfHelp/VN/10.nghetaytrai.jpg"
                                href="details.html">
                                <h6 class="name" data-index="22">NGHỀ TAY TRÁI HÁI RA TIỀN </h6>
                                <h5 class="price">22000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">55000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="23"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="ỨNG DỤNG CÔNG NGHỆ LÀM CHỦ CUỘC SỐNG|30000|75000|image/DanhMuc/SelfHelp/VN/11.udcn.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/11.udcn.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ỨNG DỤNG CÔNG NGHỆ LÀM CHỦ CUỘC SỐNG|30000|75000|image/DanhMuc/SelfHelp/VN/11.udcn.jpg"
                                href="details.html">
                                <h6 class="name" data-index="23">ỨNG DỤNG CÔNG NGHỆ LÀM CHỦ CUỘC SỐNG </h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">75000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="24"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="MUỐN LÀM NỮ HOÀNG ĐỪNG YÊU NHƯ HẦU GÁI|50000|75000|image/DanhMuc/SelfHelp/VN/12.Queen.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/12.Queen.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="MUỐN LÀM NỮ HOÀNG ĐỪNG YÊU NHƯ HẦU GÁI|50000|75000|image/DanhMuc/SelfHelp/VN/12.Queen.jpg"
                                href="details.html">
                                <h6 class="name" data-index="24">MUỐN LÀM NỮ HOÀNG ĐỪNG YÊU NHƯ HẦU GÁI </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">75000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!--MỚI NHẤT-->
            <div class="right-content_books moinhat2 hidden">
                <ul>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="13"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="nếu đã hiểu nhau rồi, sao trông anh lạ thế ?|60000|70000|image/DanhMuc/SelfHelp/VN/1.Alan.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/1.Alan.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="nếu đã hiểu nhau rồi, sao trông anh lạ thế ?|60000|70000|image/DanhMuc/SelfHelp/VN/1.Alan.jpg"
                                href="details.html">
                                <h6 class="name" data-index="13">nếu đã hiểu nhau rồi, sao trông anh lạ thế ?</h6>
                                <h5 class="price">60000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">70000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="14"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="ĐÁNH THỨC CON NGƯỜI PHI THƯỜNG TRONG BẠN |70000|80000|image/DanhMuc/SelfHelp/VN/2.Awaken.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/2.Awaken.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ĐÁNH THỨC CON NGƯỜI PHI THƯỜNG TRONG BẠN |70000|80000|image/DanhMuc/SelfHelp/VN/2.Awaken.jpg"
                                href="details.html">
                                <h6 class="name" data-index="14">ĐÁNH THỨC CON NGƯỜI PHI THƯỜNG TRONG BẠN </h6>
                                <h5 class="price">70000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="15"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="UNG THƯ KHÔNG PHẢI LÀ CHẾT|70000|80000| image/DanhMuc/SelfHelp/VN/3.Cancer.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/3.Cancer.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="UNG THƯ KHÔNG PHẢI LÀ CHẾT|70000|80000| image/DanhMuc/SelfHelp/VN/3.Cancer.jpg"
                                href="details.html">
                                <h6 class="name" data-index="15">UNG THƯ KHÔNG PHẢI LÀ CHẾT</h6>
                                <h5 class="price">70000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="16"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CHIẾN LƯỢC KINH DOANH |50000|60000|image/DanhMuc/SelfHelp/VN/4.chienluoc.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/4.chienluoc.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CHIẾN LƯỢC KINH DOANH |50000|60000|image/DanhMuc/SelfHelp/VN/4.chienluoc.jpg"
                                href="details.html">
                                <h6 class="name" data-index="16">CHIẾN LƯỢC KINH DOANH </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="17"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Đắc Nhân Tâm|50000|60000|image/DanhMuc/SelfHelp/VN/5.dnt.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/5.dnt.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Đắc Nhân Tâm|50000|60000|image/DanhMuc/SelfHelp/VN/5.dnt.png"
                                href="details.html">
                                <h6 class="name" data-index="17">Đắc Nhân Tâm </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="18"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Đắc Nhân Tâm|50000|60000|image/DanhMuc/SelfHelp/VN/6.Ice.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/6.Ice.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ĐỘT PHÁ TRƯỚC KHI BỊ ĐÁ|50000|60000|image/DanhMuc/SelfHelp/VN/6.Ice.jpg"
                                href="details.html">
                                <h6 class="name" data-index="18">ĐỘT PHÁ TRƯỚC KHI BỊ ĐÁ </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!--BAN CHAY-->
            <div class="right-content_books banchay2 hidden">
                <ul>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="13"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="nếu đã hiểu nhau rồi, sao trông anh lạ thế ?|60000|70000|image/DanhMuc/SelfHelp/VN/1.Alan.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/1.Alan.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="nếu đã hiểu nhau rồi, sao trông anh lạ thế ?|60000|70000|image/DanhMuc/SelfHelp/VN/1.Alan.jpg"
                                href="details.html">
                                <h6 class="name" data-index="13">nếu đã hiểu nhau rồi, sao trông anh lạ thế ?</h6>
                                <h5 class="price">60000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">70000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="14"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="ĐÁNH THỨC CON NGƯỜI PHI THƯỜNG TRONG BẠN |70000|80000|image/DanhMuc/SelfHelp/VN/2.Awaken.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/2.Awaken.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ĐÁNH THỨC CON NGƯỜI PHI THƯỜNG TRONG BẠN |70000|80000|image/DanhMuc/SelfHelp/VN/2.Awaken.jpg"
                                href="details.html">
                                <h6 class="name" data-index="14">ĐÁNH THỨC CON NGƯỜI PHI THƯỜNG TRONG BẠN </h6>
                                <h5 class="price">70000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="15"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="UNG THƯ KHÔNG PHẢI LÀ CHẾT|70000|80000| image/DanhMuc/SelfHelp/VN/3.Cancer.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/3.Cancer.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="UNG THƯ KHÔNG PHẢI LÀ CHẾT|70000|80000| image/DanhMuc/SelfHelp/VN/3.Cancer.jpg"
                                href="details.html">
                                <h6 class="name" data-index="15">UNG THƯ KHÔNG PHẢI LÀ CHẾT</h6>
                                <h5 class="price">70000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="16"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CHIẾN LƯỢC KINH DOANH |50000|60000|image/DanhMuc/SelfHelp/VN/4.chienluoc.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/4.chienluoc.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CHIẾN LƯỢC KINH DOANH |50000|60000|image/DanhMuc/SelfHelp/VN/4.chienluoc.jpg"
                                href="details.html">
                                <h6 class="name" data-index="16">CHIẾN LƯỢC KINH DOANH </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="17"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Đắc Nhân Tâm|50000|60000|image/DanhMuc/SelfHelp/VN/5.dnt.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/5.dnt.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Đắc Nhân Tâm|50000|60000|image/DanhMuc/SelfHelp/VN/5.dnt.png"
                                href="details.html">
                                <h6 class="name" data-index="17">Đắc Nhân Tâm </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="18"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Đắc Nhân Tâm|50000|60000|image/DanhMuc/SelfHelp/VN/6.Ice.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/6.Ice.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ĐỘT PHÁ TRƯỚC KHI BỊ ĐÁ|50000|60000|image/DanhMuc/SelfHelp/VN/6.Ice.jpg"
                                href="details.html">
                                <h6 class="name" data-index="18">ĐỘT PHÁ TRƯỚC KHI BỊ ĐÁ </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="19"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="KHÉO ĂN NÓI BÁN HÀNG THÀNH CÔNG|50000|60000|image/DanhMuc/SelfHelp/VN/7.kheoannoi.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/SelfHelp/VN/7.kheoannoi.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="KHÉO ĂN NÓI BÁN HÀNG THÀNH CÔNG|50000|60000|image/DanhMuc/SelfHelp/VN/7.kheoannoi.jpg"
                                href="details.html">
                                <h6 class="name" data-index="19">KHÉO ĂN NÓI BÁN HÀNG THÀNH CÔNG </h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Add Items to LocalStorage -->
    <script>
        var dsSanPham = localStorage.getItem('listItemToCart');
        if (dsSanPham == null)
            dsSanPham = new Array();
        else
            dsSanPham = JSON.parse(localStorage.getItem('listItemToCart'));

    </script>

    <!-- Bars Bottom -->
    <div class="bars-bottom">
        <div class="bars-bottom_content">
            <div class="_content_item">
                <div class="_icon fa fa-truck"></div>
                <div class="_description">
                    <b>FREE SHIP</b>
                    <br>
                    Miễn phí vận chuyển đơn hàng từ 150.000đ
                </div>
            </div>
            <div class="_content_item">
                <div class="_icon fa fa-money"></div>
                <div class="_description">
                    <b>GIAO HÀNG COD</b>
                    <br>
                    Giao hàng và thu tiền tại nhà toàn quốc
                </div>
            </div>
            <div class="_content_item">
                <div class="_icon fa fa-smile-o"></div>
                <div class="_description">
                    <b>ĐỔI TRẢ TẠI NHÀ</b>
                    <br>
                    Xử lý mọi khiếu nại sau bán hàng
                </div>
            </div>
            <div class="_content_item">
                <div class="_icon fa fa-phone"></div>
                <div class="_description">
                    <b>HỖ TRỢ TƯ VẤN 24/7</b>
                    <br>
                    Hotline CSKH (+84) 99999999
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-2">
                    <img class="logo_footer" src="image/logo.jpg" alt="">
                </div>
                <div class="col-sm-6 col-md-4">
                    <h6>About</h6>
                    <p class="text-justify">sachdao.com <i>NHÀ SÁCH DẠO</i> chuyên trang cung cấp sách hay rẻ chất lượng
                        nhất đến học sinh, bạn đọc cả nước. Giao hàng tại nhà toàn quốc, thanh toán cho nhân viên giao
                        hàng (Ship COD).</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a href="#">Sách công nghệ thông tin</a></li>
                        <li><a href="#">Sách ngoại ngữ</a></li>
                        <li><a href="#">Sách phát triển bản thân</a></li>
                        <li><a href="#">Sách luyện thi THPT</a></li>
                        <li><a href="#">Khuyến mãi</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Contact</h6>
                    <ul class="footer-links">
                        <li><i class="fa fa-map-marker"></i>69/96 Trần Duy Hưng, Hồ Chí Minh</li>
                        <li><i class="fa fa-phone"></i>(+84) 99999999</a></li>
                        <li><i class="fa fa-user-circle"></i>CEO & Founder: <a
                                href="https://www.facebook.com/luan.luan23082001">@Little Stupid</a></li>
                        <li><iframe style="width: 200px; height: 120px; margin-top: 10px;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8902985331238!2d105.78692641424541!3d21.03707499287183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab36199716e1%3A0xf875e5d1636b181c!2zTmjDoCBTw6FjaCBOZ3V54buFbiBWxINuIEPhu6s!5e0!3m2!1svi!2s!4v1607339743873!5m2!1svi!2s"
                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container" style="margin-left: 200px;">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2020 by
                        <a href="#">SGU Team</a>.
                    </p>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Quick view -->
    <div class="quick-view-modal">
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Thông tin sản phẩm
                        </h5>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="modal-body-image">
                            <img src="image/SaleOFF/Slide-right/duongvaolaptrinhPython.jpg" alt="">
                        </div>
                        <div class="modal-body-info">
                            <h5 class="info-name">Introduction to Machine Learning with Python: A Guide for
                                Data
                                Scientists 1st Edition</h5>
                            <h4 class="info-price" style="color: #C73736; display: inline-block;">
                                35đ
                            </h4>
                            <h6 class="info-origin-price"
                                style="text-decoration: line-through;display: inline-block; margin-left: 5px;">100</h6>

                            <br>
                            <br>
                            <form>
                                <form>
                                    <h6>Số lượng</h6>
                                    <input id="quantity" type="number" value="1" min="1" onchange="changeValueDetails()"
                                        style="width: 50px;">
                                </form>
                            </form>
                            <br>
                            <a href="cart.html">
                                <div class="btn btn-danger" onclick="addToCartFromQuickView()">Mua ngay</div>
                            </a>
                            <a>
                                <div class="btn btn-danger" onclick="addToCartFromQuickView()">Thêm vào giỏ hàng</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Quick View -->
    <script>
        var object = new Object();
        var temp;
        var originPrice;
        function quickview(element) {
            var item_name = document.querySelectorAll('.item .name');
            var item_price = document.querySelectorAll('.item .price');
            var item_origin_price = document.querySelectorAll('.item .origin-price');
            var item_image = document.querySelectorAll('.item img');


            var item_btnsearch = document.querySelectorAll('.item .fa-search-plus');
            var x = element.getAttribute('data-index');

            /*Phần QuickView*/
            var name = document.getElementsByClassName('info-name')[0];
            var price = document.getElementsByClassName('info-price')[0];
            var origin_price = document.getElementsByClassName('info-origin-price')[0];
            var image = document.querySelectorAll('.modal-body-image img')[0];
            var quantity = document.getElementById('quantity').value = 1;
            for (var i = 0; i < item_name.length; i++) {
                if (item_name[i].getAttribute('data-index') == x) {
                    name.innerText = item_name[i].innerText;
                    price.innerText = item_price[i].innerText;
                    origin_price.innerText = item_origin_price[i].innerText;
                    var item_src_image = item_image[i].getAttribute('src');    // get src-image (từ item)
                    image.setAttribute('src', item_src_image);
                    // set Object to Cart
                    var objectTitle = item_name[i].innerText;
                    var formatPrice = item_price[i].innerText.replace('đ', '');
                    var objectPrice = formatPrice;
                    var objectImage = item_src_image;
                    object = createObject(objectTitle, objectPrice, objectImage);
                }
            }
            console.log(object);
            temp = document.getElementsByClassName('info-origin-price')[0].innerText;
            temp = temp.replace('đ', '');
            originPrice = parseFloat(temp);
        }
        /*Push object to cart and goto cart by buttom "Mua ngay"*/
        function addToCartFromQuickView() {
            dsSanPham.push(object);
            var jsonDS = JSON.stringify(dsSanPham);
            localStorage.setItem('listItemToCart', jsonDS);
            alert('Đã thêm sách ' + object.title + ' vào giỏ hàng');
            location.reload();
        }

        function changeValueDetails() {
            var x = document.getElementById('quantity').value;
            var y = object.price;
            var valueChange = parseFloat(y) * x;
            var valueChangeSpan = originPrice * x;
            var del_price = document.getElementsByClassName('info-price')[0].innerText = valueChange + "đ";
            var del_origin_price = document.getElementsByClassName('info-origin-price')[0].innerText = valueChangeSpan + "đ";
        }
    </script>

    <!-- Phone -->
    <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle tuychinh"></div>
            <div class="hotline-phone-ring-circle-fill tuychinh"></div>
            <div class="hotline-phone-ring-img-circle tuychinh">
                <a href="tel:0868486575" class="pps-btn-img">
                    <i class="fa fa-phone" style="font-size: 18px; color: white;"></i>
                </a>
            </div>
        </div>
        <div class="hotline-bar tuychinh">
            <a href="tel:0868486575">
                <span class="text-hotline">099.999.999</span>
            </a>
        </div>
    </div>
    <div class="cart">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a href="cart.html" class="pps-btn-img">
                    <i class="fa fa-shopping-cart" style="font-size: 20px; color: white;" aria-hidden="true"></i>
                    <div id="count" class="count bottom">3</div>
                </a>
            </div>
        </div>
    </div>

    <!-- JS xử lý count cart -->
    <script>
        var count = 0;
        countCart = localStorage.getItem('listItemToCart');
        if (countCart != null) {
            count = JSON.parse(countCart).length;
        }
        console.log(count);
        var countElement = document.getElementsByClassName('count');
        for (var i = 0; i < countElement.length; i++) {
            countElement[i].innerText = count;
        }
    </script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>