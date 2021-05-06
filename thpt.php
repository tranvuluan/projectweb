<!doctype html>
<html lang="en">

<head>
    <title>Sách luyện thi THPT</title>
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
        <span><a href="index.html">Trang chủ</a> / <a href="#">SÁCH LUYỆN THI THPT</a></span>
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
                            <span>Toán - Lý - Hoá</span></a>
                    </li>
                    <li id="laptrinhweb" onclick="showListBook(this, id,1)">
                        <a data-id="laptrinhweb" class="" href="#"><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            <span>Văn - Sử - Địa</span></a>
                    </li>
                    <li id="thietkedohoa" onclick="showListBook(this, id,2)">
                        <a data-id="thietkedohoa" class="" href="#"><i class="fa fa-hand-o-right"
                                aria-hidden="true"></i>
                            <span>Sinh học - Tiếng Anh</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="cntt-content_right ngonngulaptrinh">
            <div class="right-content_top">
                <div class="_title">
                    <span>TOÁN - LÝ - HOÁ</span>
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
                                        data-cart="Toán lớp 10 |30000|60000|image/DanhMuc/THPT/Toan-ly-hoa/1.toan.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/1.toan.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Toán lớp 10 |30000|60000|image/DanhMuc/THPT/Toan-ly-hoa/1.toan.jpg"
                                href="details.html">
                                <h6 class="name" data-index="1">Toán hình học lớp 10 </h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
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
                                        data-cart="Lý lớp 10 |35000|55000|image/DanhMuc/THPT/Toan-ly-hoa/1.ly.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/1.ly.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Lý lớp 10 |35000|55000|image/DanhMuc/THPT/Toan-ly-hoa/1.ly.jpg"
                                href="details.html">
                                <h6 class="name" data-index="2">Các thủ thuật giải Vật Lý lớp 10 </h6>
                                <h5 class="price">35000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">55000đ
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
                                        data-cart="CÔNG PHÁ LÝ THUYẾT HÓA|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/1.hoa.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/1.hoa.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ LÝ THUYẾT HÓA|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/1.hoa.jpg"
                                href="details.html">
                                <h6 class="name" data-index="3">CÔNG PHÁ LÝ THUYẾT HÓA 1</h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="4"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CÔNG PHÁ TOÁN 1|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/2.toan.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/2.toan.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ TOÁN 1|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/2.toan.jpg"
                                href="details.html">
                                <h6 class="name" data-index="4">CÔNG PHÁ TOÁN 1</h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="5"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CÔNG PHÁ VẬT LÍ 1|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/2.ly.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/2.ly.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ VẬT LÝ 1|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/2.ly.png"
                                href="details.html">
                                <h6 class="name" data-index="5">CÔNG PHÁ VẬT LÍ 1</h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="6"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CÔNG PHÁ HÓA 2|30000|60000|image/DanhMuc/THPT/Toan-ly-hoa/2.hoa.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/2.hoa.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ HÓA 2|30000|60000|image/DanhMuc/THPT/Toan-ly-hoa/2.hoa.jpg"
                                href="details.html">
                                <h6 class="name" data-index="6">CÔNG PHÁ HÓA 2</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
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
                                        data-cart="CÂU HỎI BÀI TẬP TRẮC NGHIỆM TOÁN 10|25000|50000|image/DanhMuc/THPT/Toan-ly-hoa/3.toan.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/3.toan.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÂU HỎI BÀI TẬP TRẮC NGHIỆM TOÁN 10|25000|50000|image/DanhMuc/THPT/Toan-ly-hoa/3.toan.jpg"
                                href="details.html">
                                <h6 class="name" data-index="7">CÂU HỎI BÀI TẬP TRẮC NGHIỆM TOÁN 10</h6>
                                <h5 class="price">25000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
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
                                        data-cart="CÔNG PHÁ VẬT LÍ 2|35000|60000|image/DanhMuc/THPT/Toan-ly-hoa/3.ly.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/3.ly.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ VẬT LÍ 2|35000|60000|image/DanhMuc/THPT/Toan-ly-hoa/3.ly.png"
                                href="details.html">
                                <h6 class="name" data-index="8">CÔNG PHÁ VẬT LÍ 2</h6>
                                <h5 class="price">35000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
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
                                        data-cart="Tư Duy Hóa Học NAP 4.0 Hữu cơ 6-7-8|35000|70000|image/DanhMuc/THPT/Toan-ly-hoa/3.hoa.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/3.hoa.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tư Duy Hóa Học NAP 4.0 Hữu cơ 6-7-8|35000|70000|image/DanhMuc/THPT/Toan-ly-hoa/3.hoa.png"
                                href="details.html">
                                <h6 class="name" data-index="9">Tư Duy Hóa Học NAP 4.0 Hữu cơ 6-7-8</h6>
                                <h5 class="price">35000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">70000đ
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
                                        data-cart="MEGA Thỏa sức - 39 chinh phục kì thi THPT Quốc gia Toán Học|35000|70000|image/DanhMuc/THPT/Toan-ly-hoa/4.toan.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/4.toan.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="MEGA Thỏa sức - 39 chinh phục kì thi THPT Quốc gia Toán Học|35000|70000|image/DanhMuc/THPT/Toan-ly-hoa/4.toan.png"
                                href="details.html">
                                <h6 class="name" data-index="10">MEGA Thỏa sức - 39 chinh phục kì thi THPT Quốc gia Toán
                                    Học</h6>
                                <h5 class="price">35000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">70000đ
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
                                        data-cart="CÔNG PHÁ VẬT LÝ 3|45000|100000|image/DanhMuc/THPT/Toan-ly-hoa/4.ly.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/4.ly.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ VẬT LÝ 3|45000|100000|image/DanhMuc/THPT/Toan-ly-hoa/4.ly.jpg"
                                href="details.html">
                                <h6 class="name" data-index="11">CÔNG PHÁ VẬT LÝ 3</h6>
                                <h5 class="price">45000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">100000đ
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
                                        data-cart="Tư Duy Hóa Học NAP 4.0 Hữu cơ 8-9-10|45000|80000|image/DanhMuc/THPT/Toan-ly-hoa/4.hoa.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/4.hoa.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tư Duy Hóa Học NAP 4.0 Hữu cơ 8-9-10|45000|80000|image/DanhMuc/THPT/Toan-ly-hoa/4.hoa.png"
                                href="details.html">
                                <h6 class="name" data-index="12">Tư Duy Hóa Học NAP 4.0 Hữu cơ 8-9-10</h6>
                                <h5 class="price">45000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!--MỚI NHẤT-->
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
                                        data-cart="Toán lớp 10 |30000|60000|image/DanhMuc/THPT/Toan-ly-hoa/1.toan.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/1.toan.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Toán lớp 10 |30000|60000|image/DanhMuc/THPT/Toan-ly-hoa/1.toan.jpg"
                                href="details.html">
                                <h6 class="name" data-index="1">Toán hình học lớp 10 </h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
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
                                        data-cart="Lý lớp 10 |35000|55000|image/DanhMuc/THPT/Toan-ly-hoa/1.ly.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/1.ly.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Lý lớp 10 |35000|55000|image/DanhMuc/THPT/Toan-ly-hoa/1.ly.jpg"
                                href="details.html">
                                <h6 class="name" data-index="2">Các thủ thuật giải Vật Lý lớp 10 </h6>
                                <h5 class="price">35000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">55000đ
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
                                        data-cart="CÔNG PHÁ LÝ THUYẾT HÓA|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/1.hoa.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/1.hoa.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ LÝ THUYẾT HÓA|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/1.hoa.jpg"
                                href="details.html">
                                <h6 class="name" data-index="3">CÔNG PHÁ LÝ THUYẾT HÓA 1</h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="4"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CÔNG PHÁ TOÁN 1|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/2.toan.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/2.toan.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ TOÁN 1|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/2.toan.jpg"
                                href="details.html">
                                <h6 class="name" data-index="4">CÔNG PHÁ TOÁN 1</h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="5"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CÔNG PHÁ VẬT LÍ 1|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/2.ly.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/2.ly.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ VẬT LÝ 1|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/2.ly.png"
                                href="details.html">
                                <h6 class="name" data-index="5">CÔNG PHÁ VẬT LÍ 1</h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="6"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CÔNG PHÁ HÓA 2|30000|60000|image/DanhMuc/THPT/Toan-ly-hoa/2.hoa.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/2.hoa.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ HÓA 2|30000|60000|image/DanhMuc/THPT/Toan-ly-hoa/2.hoa.jpg"
                                href="details.html">
                                <h6 class="name" data-index="6">CÔNG PHÁ HÓA 2</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
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
                                        data-cart="Toán lớp 10 |30000|60000|image/DanhMuc/THPT/Toan-ly-hoa/1.toan.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/1.toan.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Toán lớp 10 |30000|60000|image/DanhMuc/THPT/Toan-ly-hoa/1.toan.jpg"
                                href="details.html">
                                <h6 class="name" data-index="1">Toán hình học lớp 10 </h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
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
                                        data-cart="Lý lớp 10 |35000|55000|image/DanhMuc/THPT/Toan-ly-hoa/1.ly.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/1.ly.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Lý lớp 10 |35000|55000|image/DanhMuc/THPT/Toan-ly-hoa/1.ly.jpg"
                                href="details.html">
                                <h6 class="name" data-index="2">Các thủ thuật giải Vật Lý lớp 10 </h6>
                                <h5 class="price">35000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">55000đ
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
                                        data-cart="CÔNG PHÁ LÝ THUYẾT HÓA|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/1.hoa.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/1.hoa.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ LÝ THUYẾT HÓA|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/1.hoa.jpg"
                                href="details.html">
                                <h6 class="name" data-index="3">CÔNG PHÁ LÝ THUYẾT HÓA 1</h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="4"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CÔNG PHÁ TOÁN 1|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/2.toan.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/2.toan.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ TOÁN 1|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/2.toan.jpg"
                                href="details.html">
                                <h6 class="name" data-index="4">CÔNG PHÁ TOÁN 1</h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="5"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CÔNG PHÁ VẬT LÍ 1|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/2.ly.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/2.ly.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ VẬT LÝ 1|22000|55000|image/DanhMuc/THPT/Toan-ly-hoa/2.ly.png"
                                href="details.html">
                                <h6 class="name" data-index="5">CÔNG PHÁ VẬT LÍ 1</h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="6"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CÔNG PHÁ HÓA 2|30000|60000|image/DanhMuc/THPT/Toan-ly-hoa/2.hoa.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/2.hoa.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ HÓA 2|30000|60000|image/DanhMuc/THPT/Toan-ly-hoa/2.hoa.jpg"
                                href="details.html">
                                <h6 class="name" data-index="6">CÔNG PHÁ HÓA 2</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">60000đ
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
                                        data-cart="CÂU HỎI BÀI TẬP TRẮC NGHIỆM TOÁN 10|25000|50000|image/DanhMuc/THPT/Toan-ly-hoa/3.toan.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Toan-ly-hoa/3.toan.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÂU HỎI BÀI TẬP TRẮC NGHIỆM TOÁN 10|25000|50000|image/DanhMuc/THPT/Toan-ly-hoa/3.toan.jpg"
                                href="details.html">
                                <h6 class="name" data-index="7">CÂU HỎI BÀI TẬP TRẮC NGHIỆM TOÁN 10</h6>
                                <h5 class="price">25000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="cntt-content_right laptrinhweb hidden">
            <div class="right-content_top">
                <div class="_title">
                    <span>VĂN - SỬ - ĐỊA</span>
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
                                        data-cart="CHIẾN LƯỢC LUYỆN THI THPT QUỐC GIA 2019 NGỮ VĂN|45000|80000|image/DanhMuc/THPT/Van-su-dia/1.nv.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/1.nv.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CHIẾN LƯỢC LUYỆN THI THPT QUỐC GIA 2019 NGỮ VĂN|45000|80000|image/DanhMuc/THPT/Van-su-dia/1.nv.jpg"
                                href="details.html">
                                <h6 class="name" data-index="13">CHIẾN LƯỢC LUYỆN THI THPT QUỐC GIA 2019 NGỮ VĂN</h6>
                                <h5 class="price">45000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
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
                                        data-cart="ĐỘT PHÁ MÔN NGỮ VĂN KÌ THI THPT QUỐC GIA|50000|80000|image/DanhMuc/THPT/Van-su-dia/2.nv.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/2.nv.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ĐỘT PHÁ MÔN NGỮ VĂN KÌ THI THPT QUỐC GIA|50000|80000|image/DanhMuc/THPT/Van-su-dia/2.nv.png"
                                href="details.html">
                                <h6 class="name" data-index="14">ĐỘT PHÁ MÔN NGỮ VĂN KÌ THI THPT QUỐC GIA</h6>
                                <h5 class="price">50000đ</h5>
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
                                        data-cart="NXB GIÁO DỤC- BỘ ĐỀ LUYỆN THI 2019 MÔN NGỮ VĂN -A5|35000|50000|image/DanhMuc/THPT/Van-su-dia/3.nv.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/3.nv.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="NXB GIÁO DỤC- BỘ ĐỀ LUYỆN THI 2019 MÔN NGỮ VĂN -A5|35000|50000|image/DanhMuc/THPT/Van-su-dia/3.nv.jpg"
                                href="details.html">
                                <h6 class="name" data-index="15">NXB GIÁO DỤC- BỘ ĐỀ LUYỆN THI 2019 MÔN NGỮ VĂN -A5</h6>
                                <h5 class="price">35000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
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
                                        data-cart="ĐỘT PHÁ 8+ KÌ THI THPT QUỐC GIA MÔN LỊCH SỬ -B5|45000|80000|image/DanhMuc/THPT/Van-su-dia/1.ls.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/1.ls.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ĐỘT PHÁ 8+ KÌ THI THPT QUỐC GIA MÔN LỊCH SỬ -B5|45000|80000|image/DanhMuc/THPT/Van-su-dia/1.ls.png"
                                href="details.html">
                                <h6 class="name" data-index="16">ĐỘT PHÁ 8+ KÌ THI THPT QUỐC GIA MÔN LỊCH SỬ -B5</h6>
                                <h5 class="price">45000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
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
                                        data-cart="ÔN LUYỆN KIỂM TRA ĐÁNH GIÁ VÀ THI THPT QUỐC GIA MÔN LỊCH SỬ |45000|80000|image/DanhMuc/THPT/Van-su-dia/2.ls.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/2.ls.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ÔN LUYỆN KIỂM TRA ĐÁNH GIÁ VÀ THI THPT QUỐC GIA MÔN LỊCH SỬ |45000|80000|image/DanhMuc/THPT/Van-su-dia/2.ls.png"
                                href="details.html">
                                <h6 class="name" data-index="17">ÔN LUYỆN KIỂM TRA ĐÁNH GIÁ VÀ THI THPT QUỐC GIA MÔN
                                    LỊCH SỬ</h6>
                                <h5 class="price">45000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
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
                                        data-cart="40 ĐỀ THI THỬ THPT QUỐC GIA NĂM 2020 MÔN LỊCH SỬ |25000|50000|image/DanhMuc/THPT/Van-su-dia/3.ls.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/3.ls.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="40 ĐỀ THI THỬ THPT QUỐC GIA NĂM 2020 MÔN LỊCH SỬ |25000|50000|image/DanhMuc/THPT/Van-su-dia/3.ls.jpg"
                                href="details.html">
                                <h6 class="name" data-index="18">40 ĐỀ THI THỬ THPT QUỐC GIA NĂM 2020 MÔN LỊCH SỬ </h6>
                                <h5 class="price">25000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
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
                                        data-cart="2000 CÂU HỎI TRẮC NGHIỆM KHÁCH QUAN ĐỊA LÍ 12 - ĐỖ NGỌC TIẾN |25000|50000|image/DanhMuc/THPT/Van-su-dia/1.dl.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/1.dl.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="2000 CÂU HỎI TRẮC NGHIỆM KHÁCH QUAN ĐỊA LÍ 12 - ĐỖ NGỌC TIẾN |25000|50000|image/DanhMuc/THPT/Van-su-dia/1.dl.jpg"
                                href="details.html">
                                <h6 class="name" data-index="19">2000 CÂU HỎI TRẮC NGHIỆM KHÁCH QUAN ĐỊA LÍ 12 - ĐỖ NGỌC
                                    TIẾN </h6>
                                <h5 class="price">25000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
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
                                        data-cart="928 CÂU HỎI VÀ BÀI TẬP THỰC HÀNH TRẮC NGHIỆM ĐỊA LÍ 12 - ĐỖ NGỌC TIẾN |25000|50000|image/DanhMuc/THPT/Van-su-dia/2.dl.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/2.dl.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="928 CÂU HỎI VÀ BÀI TẬP THỰC HÀNH TRẮC NGHIỆM ĐỊA LÍ 12 - ĐỖ NGỌC TIẾN |25000|50000|image/DanhMuc/THPT/Van-su-dia/2.dl.jpg"
                                href="details.html">
                                <h6 class="name" data-index="20">928 CÂU HỎI VÀ BÀI TẬP THỰC HÀNH TRẮC NGHIỆM ĐỊA LÍ 12
                                </h6>
                                <h5 class="price">25000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
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
                                        data-cart="CÁC DẠNG CÂU HỎI TRẮC NGHIỆM ĐỊA LÍ 12 - ĐỖ NGỌC TIẾN |35000|50000|image/DanhMuc/THPT/Van-su-dia/3.dl.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/3.dl.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÁC DẠNG CÂU HỎI TRẮC NGHIỆM ĐỊA LÍ 12 - ĐỖ NGỌC TIẾN |35000|50000|image/DanhMuc/THPT/Van-su-dia/3.dl.jpg"
                                href="details.html">
                                <h6 class="name" data-index="21">CÁC DẠNG CÂU HỎI TRẮC NGHIỆM ĐỊA LÍ 12 </h6>
                                <h5 class="price">35000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
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
                                        data-cart="1000 CÂU HỎI TRẮC NGHIỆM ĐỊA LÍ 12- BÙI THỊ XUÂN ĐÀO |25000|50000|image/DanhMuc/THPT/Van-su-dia/4.dl.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/4.dl.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="1000 CÂU HỎI TRẮC NGHIỆM ĐỊA LÍ 12- BÙI THỊ XUÂN ĐÀO |25000|50000|image/DanhMuc/THPT/Van-su-dia/4.dl.jpg"
                                href="details.html">
                                <h6 class="name" data-index="22">1000 CÂU HỎI TRẮC NGHIỆM ĐỊA LÍ 12- BÙI THỊ XUÂN ĐÀO
                                </h6>
                                <h5 class="price">25000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
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
                                        data-cart="1050 CÂU HỎI TRẮC NGHIỆM ĐỊA LÍ 12 THEO CHỦ ĐỀ |25000|50000|image/DanhMuc/THPT/Van-su-dia/5.dl.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/5.dl.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="1050 CÂU HỎI TRẮC NGHIỆM ĐỊA LÍ 12 THEO CHỦ ĐỀ |25000|50000|image/DanhMuc/THPT/Van-su-dia/5.dl.jpg"
                                href="details.html">
                                <h6 class="name" data-index="23">1050 CÂU HỎI TRẮC NGHIỆM ĐỊA LÍ 12 THEO CHỦ ĐỀ </h6>
                                <h5 class="price">25000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
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
                                        data-cart="ĐỘT PHÁ 8+ KÌ THI THPT QUỐC GIA MÔN ĐỊA LÝ |70000|80000|image/DanhMuc/THPT/Van-su-dia/6.dl.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/6.dl.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ĐỘT PHÁ 8+ KÌ THI THPT QUỐC GIA MÔN ĐỊA LÝ |70000|80000|image/DanhMuc/THPT/Van-su-dia/6.dl.png"
                                href="details.html">
                                <h6 class="name" data-index="24">ĐỘT PHÁ 8+ KÌ THI THPT QUỐC GIA MÔN ĐỊA LÝ </h6>
                                <h5 class="price">70000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
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
                                        data-cart="CHIẾN LƯỢC LUYỆN THI THPT QUỐC GIA 2019 NGỮ VĂN|45000|80000|image/DanhMuc/THPT/Van-su-dia/1.nv.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/1.nv.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CHIẾN LƯỢC LUYỆN THI THPT QUỐC GIA 2019 NGỮ VĂN|45000|80000|image/DanhMuc/THPT/Van-su-dia/1.nv.jpg"
                                href="details.html">
                                <h6 class="name" data-index="13">CHIẾN LƯỢC LUYỆN THI THPT QUỐC GIA 2019 NGỮ VĂN</h6>
                                <h5 class="price">45000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
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
                                        data-cart="ĐỘT PHÁ MÔN NGỮ VĂN KÌ THI THPT QUỐC GIA|50000|80000|image/DanhMuc/THPT/Van-su-dia/2.nv.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/2.nv.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ĐỘT PHÁ MÔN NGỮ VĂN KÌ THI THPT QUỐC GIA|50000|80000|image/DanhMuc/THPT/Van-su-dia/2.nv.png"
                                href="details.html">
                                <h6 class="name" data-index="14">ĐỘT PHÁ MÔN NGỮ VĂN KÌ THI THPT QUỐC GIA</h6>
                                <h5 class="price">50000đ</h5>
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
                                        data-cart="NXB GIÁO DỤC- BỘ ĐỀ LUYỆN THI 2019 MÔN NGỮ VĂN -A5|35000|50000|image/DanhMuc/THPT/Van-su-dia/3.nv.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/3.nv.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="NXB GIÁO DỤC- BỘ ĐỀ LUYỆN THI 2019 MÔN NGỮ VĂN -A5|35000|50000|image/DanhMuc/THPT/Van-su-dia/3.nv.jpg"
                                href="details.html">
                                <h6 class="name" data-index="15">NXB GIÁO DỤC- BỘ ĐỀ LUYỆN THI 2019 MÔN NGỮ VĂN -A5</h6>
                                <h5 class="price">35000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
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
                                        data-cart="ĐỘT PHÁ 8+ KÌ THI THPT QUỐC GIA MÔN LỊCH SỬ -B5|45000|80000|image/DanhMuc/THPT/Van-su-dia/1.ls.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/1.ls.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ĐỘT PHÁ 8+ KÌ THI THPT QUỐC GIA MÔN LỊCH SỬ -B5|45000|80000|image/DanhMuc/THPT/Van-su-dia/1.ls.png"
                                href="details.html">
                                <h6 class="name" data-index="16">ĐỘT PHÁ 8+ KÌ THI THPT QUỐC GIA MÔN LỊCH SỬ -B5</h6>
                                <h5 class="price">45000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
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
                                        data-cart="ÔN LUYỆN KIỂM TRA ĐÁNH GIÁ VÀ THI THPT QUỐC GIA MÔN LỊCH SỬ |45000|80000|image/DanhMuc/THPT/Van-su-dia/2.ls.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/2.ls.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ÔN LUYỆN KIỂM TRA ĐÁNH GIÁ VÀ THI THPT QUỐC GIA MÔN LỊCH SỬ |45000|80000|image/DanhMuc/THPT/Van-su-dia/2.ls.png"
                                href="details.html">
                                <h6 class="name" data-index="17">ÔN LUYỆN KIỂM TRA ĐÁNH GIÁ VÀ THI THPT QUỐC GIA MÔN
                                    LỊCH SỬ</h6>
                                <h5 class="price">45000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
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
                                        data-cart="40 ĐỀ THI THỬ THPT QUỐC GIA NĂM 2020 MÔN LỊCH SỬ |25000|50000|image/DanhMuc/THPT/Van-su-dia/3.ls.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/3.ls.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="40 ĐỀ THI THỬ THPT QUỐC GIA NĂM 2020 MÔN LỊCH SỬ |25000|50000|image/DanhMuc/THPT/Van-su-dia/3.ls.jpg"
                                href="details.html">
                                <h6 class="name" data-index="18">40 ĐỀ THI THỬ THPT QUỐC GIA NĂM 2020 MÔN LỊCH SỬ </h6>
                                <h5 class="price">25000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!--BÁN CHẠY-->
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
                                        data-cart="CHIẾN LƯỢC LUYỆN THI THPT QUỐC GIA 2019 NGỮ VĂN|45000|80000|image/DanhMuc/THPT/Van-su-dia/1.nv.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/1.nv.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CHIẾN LƯỢC LUYỆN THI THPT QUỐC GIA 2019 NGỮ VĂN|45000|80000|image/DanhMuc/THPT/Van-su-dia/1.nv.jpg"
                                href="details.html">
                                <h6 class="name" data-index="13">CHIẾN LƯỢC LUYỆN THI THPT QUỐC GIA 2019 NGỮ VĂN</h6>
                                <h5 class="price">45000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
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
                                        data-cart="ĐỘT PHÁ MÔN NGỮ VĂN KÌ THI THPT QUỐC GIA|50000|80000|image/DanhMuc/THPT/Van-su-dia/2.nv.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/2.nv.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ĐỘT PHÁ MÔN NGỮ VĂN KÌ THI THPT QUỐC GIA|50000|80000|image/DanhMuc/THPT/Van-su-dia/2.nv.png"
                                href="details.html">
                                <h6 class="name" data-index="14">ĐỘT PHÁ MÔN NGỮ VĂN KÌ THI THPT QUỐC GIA</h6>
                                <h5 class="price">50000đ</h5>
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
                                        data-cart="NXB GIÁO DỤC- BỘ ĐỀ LUYỆN THI 2019 MÔN NGỮ VĂN -A5|35000|50000|image/DanhMuc/THPT/Van-su-dia/3.nv.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/3.nv.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="NXB GIÁO DỤC- BỘ ĐỀ LUYỆN THI 2019 MÔN NGỮ VĂN -A5|35000|50000|image/DanhMuc/THPT/Van-su-dia/3.nv.jpg"
                                href="details.html">
                                <h6 class="name" data-index="15">NXB GIÁO DỤC- BỘ ĐỀ LUYỆN THI 2019 MÔN NGỮ VĂN -A5</h6>
                                <h5 class="price">35000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
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
                                        data-cart="ĐỘT PHÁ 8+ KÌ THI THPT QUỐC GIA MÔN LỊCH SỬ -B5|45000|80000|image/DanhMuc/THPT/Van-su-dia/1.ls.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/1.ls.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ĐỘT PHÁ 8+ KÌ THI THPT QUỐC GIA MÔN LỊCH SỬ -B5|45000|80000|image/DanhMuc/THPT/Van-su-dia/1.ls.png"
                                href="details.html">
                                <h6 class="name" data-index="16">ĐỘT PHÁ 8+ KÌ THI THPT QUỐC GIA MÔN LỊCH SỬ -B5</h6>
                                <h5 class="price">45000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
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
                                        data-cart="ÔN LUYỆN KIỂM TRA ĐÁNH GIÁ VÀ THI THPT QUỐC GIA MÔN LỊCH SỬ |45000|80000|image/DanhMuc/THPT/Van-su-dia/2.ls.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/2.ls.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="ÔN LUYỆN KIỂM TRA ĐÁNH GIÁ VÀ THI THPT QUỐC GIA MÔN LỊCH SỬ |45000|80000|image/DanhMuc/THPT/Van-su-dia/2.ls.png"
                                href="details.html">
                                <h6 class="name" data-index="17">ÔN LUYỆN KIỂM TRA ĐÁNH GIÁ VÀ THI THPT QUỐC GIA MÔN
                                    LỊCH SỬ</h6>
                                <h5 class="price">45000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
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
                                        data-cart="40 ĐỀ THI THỬ THPT QUỐC GIA NĂM 2020 MÔN LỊCH SỬ |25000|50000|image/DanhMuc/THPT/Van-su-dia/3.ls.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/3.ls.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="40 ĐỀ THI THỬ THPT QUỐC GIA NĂM 2020 MÔN LỊCH SỬ |25000|50000|image/DanhMuc/THPT/Van-su-dia/3.ls.jpg"
                                href="details.html">
                                <h6 class="name" data-index="18">40 ĐỀ THI THỬ THPT QUỐC GIA NĂM 2020 MÔN LỊCH SỬ </h6>
                                <h5 class="price">25000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
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
                                        data-cart="2000 CÂU HỎI TRẮC NGHIỆM KHÁCH QUAN ĐỊA LÍ 12 - ĐỖ NGỌC TIẾN |25000|50000|image/DanhMuc/THPT/Van-su-dia/1.dl.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Van-su-dia/1.dl.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="2000 CÂU HỎI TRẮC NGHIỆM KHÁCH QUAN ĐỊA LÍ 12 - ĐỖ NGỌC TIẾN |25000|50000|image/DanhMuc/THPT/Van-su-dia/1.dl.jpg"
                                href="details.html">
                                <h6 class="name" data-index="19">2000 CÂU HỎI TRẮC NGHIỆM KHÁCH QUAN ĐỊA LÍ 12 - ĐỖ NGỌC
                                    TIẾN </h6>
                                <h5 class="price">25000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="cntt-content_right thietkedohoa hidden">
            <div class="right-content_top">
                <div class="_title">
                    <span>SINH HỌC - TIẾNG ANH</span>
                </div>
                <div class="filter_content">
                    <button id="phobien3" onclick="filter(this, id)"
                        class="btn btn-outline-info btn-sm filter active click">Phổ biến</button>
                    <button id="moinhat3" onclick="filter(this, id)" class="btn btn-outline-info btn-sm filter">Mới
                        nhất</button>
                    <button id="banchay3" onclick="filter(this, id)" class="btn btn-outline-info btn-sm filter">Bán
                        chạy</button>
                </div>
            </div>
            <!-- Block sách -->
            <div class="right-content_books phobien3">
                <ul>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="25"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 2/ TRANG ANH|65000|80000|image/DanhMuc/THPT/Anh - sinh/A.1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 2/ TRANG ANH|65000|80000|image/DanhMuc/THPT/Anh - sinh/A.1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="25">25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 2/
                                    TRANG ANH</h6>
                                <h5 class="price">65000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="26"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 1/ TRANG ANH|65000|80000|image/DanhMuc/THPT/Anh - sinh/A.1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 1/ TRANG ANH|65000|80000|image/DanhMuc/THPT/Anh - sinh/A.1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="26">25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 1/
                                    TRANG ANH</h6>
                                <h5 class="price">65000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="27"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="SÁCH 2000 ENGLISH COLLOCATIONS AND IDIOMS, TRANG ANH|70000|80000|image/DanhMuc/THPT/Anh - sinh/A.3.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.3.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="SÁCH 2000 ENGLISH COLLOCATIONS AND IDIOMS, TRANG ANH|70000|80000|image/DanhMuc/THPT/Anh - sinh/A.3.jpg"
                                href="details.html">
                                <h6 class="name" data-index="27">SÁCH 2000 ENGLISH COLLOCATIONS AND IDIOMS, TRANG ANH
                                </h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="28"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 1|75000|80000|image/DanhMuc/THPT/Anh - sinh/A.4.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.4.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 1|75000|80000|image/DanhMuc/THPT/Anh - sinh/A.4.jpg"
                                href="details.html">
                                <h6 class="name" data-index="28">PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 1
                                </h6>
                                <h5 class="price">75000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="29"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 2|75000|80000|image/DanhMuc/THPT/Anh - sinh/A.5.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.5.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 2|75000|80000|image/DanhMuc/THPT/Anh - sinh/A.5.jpg"
                                href="details.html">
                                <h6 class="name" data-index="29">PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 2
                                </h6>
                                <h5 class="price">75000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="30"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="PRO S TIẾNG ANH TẬP 2|70000|80000|image/DanhMuc/THPT/Anh - sinh/A.6.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.6.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="PRO S TIẾNG ANH TẬP 2|70000|80000|image/DanhMuc/THPT/Anh - sinh/A.6.jpg"
                                href="details.html">
                                <h6 class="name" data-index="30">PRO S TIẾNG ANH TẬP 2</h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="31"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CÔNG PHÁ BÀI TẬP SINH LOVEBOOK|80000|90000|image/DanhMuc/THPT/Anh - sinh/S.1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/S.1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ BÀI TẬP SINH LOVEBOOK|80000|90000|image/DanhMuc/THPT/Anh - sinh/S.1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="31">CÔNG PHÁ BÀI TẬP SINH LOVEBOOK</h6>
                                <h5 class="price">80000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">90000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="32"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CÔNG PHÁ BÀI TẬP SINH LOVEBOOK|90000|100000|image/DanhMuc/THPT/Anh - sinh/S.2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/S.2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ BÀI TẬP SINH LOVEBOOK|90000|100000|image/DanhMuc/THPT/Anh - sinh/S.2.jpg"
                                href="details.html">
                                <h6 class="name" data-index="32">CÔNG PHÁ BÀI TẬP SINH LOVEBOOK</h6>
                                <h5 class="price">90000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">100000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="33"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="PHƯƠNG PHÁP GIẢI NHANH CÁC BÀI TẬP SINH HỌC - PHAN KHẮC NGHỆ|30000|50000|image/DanhMuc/THPT/Anh - sinh/S.3.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/S.3.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="PHƯƠNG PHÁP GIẢI NHANH CÁC BÀI TẬP SINH HỌC - PHAN KHẮC NGHỆ|30000|50000|image/DanhMuc/THPT/Anh - sinh/S.3.jpg"
                                href="details.html">
                                <h6 class="name" data-index="33">PHƯƠNG PHÁP GIẢI NHANH CÁC BÀI TẬP SINH HỌC - PHAN KHẮC
                                    NGHỆ</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="34"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="PHƯƠNG PHÁP MỚI GIẢI NHANH BÀI TẬP DI TRUYỀN - PHAN KHẮC NGHỆ|80000|90000|image/DanhMuc/THPT/Anh - sinh/S.4.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/S.4.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="PHƯƠNG PHÁP MỚI GIẢI NHANH BÀI TẬP DI TRUYỀN - PHAN KHẮC NGHỆ|80000|90000|image/DanhMuc/THPT/Anh - sinh/S.4.jpg"
                                href="details.html">
                                <h6 class="name" data-index="34">PHƯƠNG PHÁP MỚI GIẢI NHANH BÀI TẬP DI TRUYỀN - PHAN
                                    KHẮC NGHỆ</h6>
                                <h5 class="price">80000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">90000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="35"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="SINH HỌC PHÂN TỬ CỦA TẾ BÀO - TẬP 4 : CẤU TRÚC VÀ CHỨC NĂNG CỦA TẾ BÀO 2|65000|70000|image/DanhMuc/THPT/Anh - sinh/S.5.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/S.5.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="SINH HỌC PHÂN TỬ CỦA TẾ BÀO - TẬP 4 : CẤU TRÚC VÀ CHỨC NĂNG CỦA TẾ BÀO 2|65000|70000|image/DanhMuc/THPT/Anh - sinh/S.5.jpg"
                                href="details.html">
                                <h6 class="name" data-index="35">SINH HỌC PHÂN TỬ CỦA TẾ BÀO - TẬP 4 : CẤU TRÚC VÀ CHỨC
                                    NĂNG CỦA TẾ BÀO 2</h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="36"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="SINH HỌC PHÂN TỬ CỦA TẾ BÀO TẬP 5: SỰ SINH TRƯỞNG VÀ PHÁT TRIỂN CỦA TẾ BÀO|65000|70000|image/DanhMuc/THPT/Anh - sinh/S.6.png"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/S.6.png" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="SINH HỌC PHÂN TỬ CỦA TẾ BÀO TẬP 5: SỰ SINH TRƯỞNG VÀ PHÁT TRIỂN CỦA TẾ BÀO|65000|70000|image/DanhMuc/THPT/Anh - sinh/S.6.png"
                                href="details.html">
                                <h6 class="name" data-index="36">SINH HỌC PHÂN TỬ CỦA TẾ BÀO TẬP 5: SỰ SINH TRƯỞNG VÀ
                                    PHÁT TRIỂN CỦA TẾ BÀO</h6>
                                <h5 class="price">65000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">70000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!--MỚI NHẤT-->
            <div class="right-content_books moinhat3 hidden">
                <ul>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="25"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 2/ TRANG ANH|65000|80000|image/DanhMuc/THPT/Anh - sinh/A.1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 2/ TRANG ANH|65000|80000|image/DanhMuc/THPT/Anh - sinh/A.1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="25">25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 2/
                                    TRANG ANH</h6>
                                <h5 class="price">65000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="26"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 1/ TRANG ANH|65000|80000|image/DanhMuc/THPT/Anh - sinh/A.1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 1/ TRANG ANH|65000|80000|image/DanhMuc/THPT/Anh - sinh/A.1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="26">25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 1/
                                    TRANG ANH</h6>
                                <h5 class="price">65000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="27"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="SÁCH 2000 ENGLISH COLLOCATIONS AND IDIOMS, TRANG ANH|70000|80000|image/DanhMuc/THPT/Anh - sinh/A.3.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.3.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="SÁCH 2000 ENGLISH COLLOCATIONS AND IDIOMS, TRANG ANH|70000|80000|image/DanhMuc/THPT/Anh - sinh/A.3.jpg"
                                href="details.html">
                                <h6 class="name" data-index="27">SÁCH 2000 ENGLISH COLLOCATIONS AND IDIOMS, TRANG ANH
                                </h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="28"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 1|75000|80000|image/DanhMuc/THPT/Anh - sinh/A.4.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.4.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 1|75000|80000|image/DanhMuc/THPT/Anh - sinh/A.4.jpg"
                                href="details.html">
                                <h6 class="name" data-index="28">PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 1
                                </h6>
                                <h5 class="price">75000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="29"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 2|75000|80000|image/DanhMuc/THPT/Anh - sinh/A.5.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.5.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 2|75000|80000|image/DanhMuc/THPT/Anh - sinh/A.5.jpg"
                                href="details.html">
                                <h6 class="name" data-index="29">PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 2
                                </h6>
                                <h5 class="price">75000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="30"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="PRO S TIẾNG ANH TẬP 2|70000|80000|image/DanhMuc/THPT/Anh - sinh/A.6.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.6.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="PRO S TIẾNG ANH TẬP 2|70000|80000|image/DanhMuc/THPT/Anh - sinh/A.6.jpg"
                                href="details.html">
                                <h6 class="name" data-index="30">PRO S TIẾNG ANH TẬP 2</h6>
                                <h5 class="price">70000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!--BÁN CHẠY-->
            <div class="right-content_books banchay3 hidden">
                <ul>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="25"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 2/ TRANG ANH|65000|80000|image/DanhMuc/THPT/Anh - sinh/A.1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 2/ TRANG ANH|65000|80000|image/DanhMuc/THPT/Anh - sinh/A.1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="25">25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 2/
                                    TRANG ANH</h6>
                                <h5 class="price">65000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="26"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 1/ TRANG ANH|65000|80000|image/DanhMuc/THPT/Anh - sinh/A.1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 1/ TRANG ANH|65000|80000|image/DanhMuc/THPT/Anh - sinh/A.1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="26">25 CHUYÊN ĐỀ NGỮ PHÁP TIẾNG ANH TRỌNG TÂM - TẬP 1/
                                    TRANG ANH</h6>
                                <h5 class="price">65000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="27"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="SÁCH 2000 ENGLISH COLLOCATIONS AND IDIOMS, TRANG ANH|70000|80000|image/DanhMuc/THPT/Anh - sinh/A.3.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.3.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="SÁCH 2000 ENGLISH COLLOCATIONS AND IDIOMS, TRANG ANH|70000|80000|image/DanhMuc/THPT/Anh - sinh/A.3.jpg"
                                href="details.html">
                                <h6 class="name" data-index="27">SÁCH 2000 ENGLISH COLLOCATIONS AND IDIOMS, TRANG ANH
                                </h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="28"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 1|75000|80000|image/DanhMuc/THPT/Anh - sinh/A.4.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.4.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 1|75000|80000|image/DanhMuc/THPT/Anh - sinh/A.4.jpg"
                                href="details.html">
                                <h6 class="name" data-index="28">PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 1
                                </h6>
                                <h5 class="price">75000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="29"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 2|75000|80000|image/DanhMuc/THPT/Anh - sinh/A.5.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.5.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 2|75000|80000|image/DanhMuc/THPT/Anh - sinh/A.5.jpg"
                                href="details.html">
                                <h6 class="name" data-index="29">PHÁ ĐẢO CỤM TỪ HỌC ĐÂU NHỚ ĐẤY NGUYỄN TIẾN VINH TẬP 2
                                </h6>
                                <h5 class="price">75000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">80000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="30"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="PRO S TIẾNG ANH TẬP 2|70000|80000|image/DanhMuc/THPT/Anh - sinh/A.6.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/A.6.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="PRO S TIẾNG ANH TẬP 2|70000|80000|image/DanhMuc/THPT/Anh - sinh/A.6.jpg"
                                href="details.html">
                                <h6 class="name" data-index="30">PRO S TIẾNG ANH TẬP 2</h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="31"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="CÔNG PHÁ BÀI TẬP SINH LOVEBOOK|80000|90000|image/DanhMuc/THPT/Anh - sinh/S.1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/THPT/Anh - sinh/S.1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="CÔNG PHÁ BÀI TẬP SINH LOVEBOOK|80000|90000|image/DanhMuc/THPT/Anh - sinh/S.1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="31">CÔNG PHÁ BÀI TẬP SINH LOVEBOOK</h6>
                                <h5 class="price">80000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">90000đ
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