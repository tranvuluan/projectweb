<!doctype html>
<html lang="en">

<head>
    <title>Sách ngoại ngữ</title>
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
        <span><a href="index.html">Trang chủ</a> / <a href="#">SÁCH NGOẠI NGỮ</a></span>
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
                            <span>Tiếng Trung</span></a>
                    </li>
                    <li id="thietkedohoa" onclick="showListBook(this, id,2)">
                        <a data-id="thietkedohoa" class="" href="#"><i class="fa fa-hand-o-right"
                                aria-hidden="true"></i>
                            <span>Tiếng Nhật</span></a>
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
                                        data-cart="Amazing Science 1|20000|image/DanhMuc/NgoaiNgu/amazing1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/amazing1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Amazing Science 1|20000|30000|image/DanhMuc/NgoaiNgu/amazing1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="1">Amazing Science 1</h6>
                                <h5 class="price">20000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">30000đ
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
                                        data-cart="Amazing Science 2|22000|image/DanhMuc/NgoaiNgu/amazing2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/amazing2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Amazing Science 2|22000|32000|image/DanhMuc/NgoaiNgu/amazing2.jpg"
                                href="details.html">
                                <h6 class="name" data-index="2">Amazing Science 2</h6>
                                <h5 class="price">22000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">32000đ
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
                                        data-cart="Amazing Science 3|24000|image/DanhMuc/NgoaiNgu/amazing3.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/amazing3.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Amazing Science 3|24000|34000|image/DanhMuc/NgoaiNgu/amazing1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="3">Amazing Science 3</h6>
                                <h5 class="price">24000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">34000đ
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
                                        data-cart="Amazing Science 4|26000|image/DanhMuc/NgoaiNgu/amazing4.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/amazing4.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Amazing Science 4|26000|36000|image/DanhMuc/NgoaiNgu/amazing4.jpg"
                                href="details.html">
                                <h6 class="name" data-index="4">Amazing Science 4</h6>
                                <h5 class="price">26000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">36000đ
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
                                        data-cart="3000 Câu Ngữ Pháp Và Từ Vựng Hay Sai|30000|image/DanhMuc/NgoaiNgu/3000tuvung.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/3000tuvung.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="3000 Câu Ngữ Pháp Và Từ Vựng Hay Sai|30000|40000|image/DanhMuc/NgoaiNgu/3000tuvung.jpg"
                                href="details.html">
                                <h6 class="name" data-index="5">3000 Câu Ngữ Pháp Và Từ Vựng Hay Sai</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">40000đ
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
                                        data-cart="Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2020 – môn Tiếng Anh|40000|image/DanhMuc/NgoaiNgu/tracnghiemtienganh1.jpg.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tracnghiemtienganh1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2020 – môn Tiếng Anh|40000|50000|image/DanhMuc/NgoaiNgu/tracnghiemtienganh1.jpg.jpg"
                                href="details.html">
                                <h6 class="name" data-index="6">Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2020 – môn
                                    Tiếng Anh</h6>
                                <h5 class="price">40000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
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
                                        data-cart="Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2018 – môn Tiếng Anh|35000|image/DanhMuc/NgoaiNgu/tracnghiemtienganh2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tracnghiemtienganh2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2018 – môn Tiếng Anh|35000|45000|image/DanhMuc/NgoaiNgu/tracnghiemtienganh2.jpg"
                                href="details.html">
                                <h6 class="name" data-index="7">Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2018 – môn
                                    Tiếng Anh</h6>
                                <h5 class="price">35000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">45000đ
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
                                        data-cart="Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2017 – môn Tiếng Anh|35000|image/DanhMuc/NgoaiNgu/tracnghiemtienganh3.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tracnghiemtienganh3.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2017 – môn Tiếng Anh|35000|45000|image/DanhMuc/NgoaiNgu/tracnghiemtienganh3.jpg"
                                href="details.html">
                                <h6 class="name" data-index="8">Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2017 – môn
                                    Tiếng Anh</h6>
                                <h5 class="price">35000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">45000đ
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
                                        data-cart="Tự Học Tiếng Anh Cấp Tốc|50000|image/DanhMuc/NgoaiNgu/tuhoctienganh1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctienganh1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Tiếng Anh Cấp Tốc|50000|60000|image/DanhMuc/NgoaiNgu/tuhoctienganh1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="9">Tự Học Tiếng Anh Cấp Tốc</h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="10"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Tự Học Tiếng Anh Cấp Tốc Cho Người Mới Bắt Đầu|55000|image/DanhMuc/NgoaiNgu/tuhoctienganh2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctienganh2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Tiếng Anh Cấp Tốc Cho Người Mới Bắt Đầu|55000|65000|image/DanhMuc/NgoaiNgu/tuhoctienganh2.jpg"
                                href="details.html">
                                <h6 class="name" data-index="10">Tự Học Tiếng Anh Cấp Tốc Cho Người Mới Bắt Đầu</h6>
                                <h5 class="price">55000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">65000đ
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
                                        data-cart="Tự Học Nghe Nói Tiếng Anh Cấp Tốc|55000|image/DanhMuc/NgoaiNgu/tuhoctienganh3.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctienganh3.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Nghe Nói Tiếng Anh Cấp Tốc|55000|65000|image/DanhMuc/NgoaiNgu/tuhoctienganh3.jpg"
                                href="details.html">
                                <h6 class="name" data-index="11">Tự Học Nghe Nói Tiếng Anh Cấp Tốc</h6>
                                <h5 class="price">55000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">65000đ
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
                                        data-cart="10 Phút Tự Học Tiếng Anh|65000|image/DanhMuc/NgoaiNgu/tuhoctienganh4.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctienganh4.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="10 Phút Tự Học Tiếng Anh|65000|75000|image/DanhMuc/NgoaiNgu/tuhoctienganh4.jpg"
                                href="details.html">
                                <h6 class="name" data-index="12">10 Phút Tự Học Tiếng Anh</h6>
                                <h5 class="price">65000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">75000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
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
                                        data-cart="Amazing Science 1|20000|image/DanhMuc/NgoaiNgu/amazing1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/amazing1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Amazing Science 1|20000|30000|image/DanhMuc/NgoaiNgu/amazing1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="1">Amazing Science 1</h6>
                                <h5 class="price">20000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">30000đ
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
                                        data-cart="Amazing Science 2|22000|image/DanhMuc/NgoaiNgu/amazing2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/amazing2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Amazing Science 2|22000|32000|image/DanhMuc/NgoaiNgu/amazing2.jpg"
                                href="details.html">
                                <h6 class="name" data-index="2">Amazing Science 2</h6>
                                <h5 class="price">22000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">32000đ
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
                                        data-cart="Amazing Science 3|24000|image/DanhMuc/NgoaiNgu/amazing3.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/amazing3.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Amazing Science 3|24000|34000|image/DanhMuc/NgoaiNgu/amazing1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="3">Amazing Science 3</h6>
                                <h5 class="price">24000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">34000đ
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
                                        data-cart="Amazing Science 4|26000|image/DanhMuc/NgoaiNgu/amazing4.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/amazing4.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Amazing Science 4|26000|36000|image/DanhMuc/NgoaiNgu/amazing4.jpg"
                                href="details.html">
                                <h6 class="name" data-index="4">Amazing Science 4</h6>
                                <h5 class="price">26000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">36000đ
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
                                        data-cart="3000 Câu Ngữ Pháp Và Từ Vựng Hay Sai|30000|image/DanhMuc/NgoaiNgu/3000tuvung.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/3000tuvung.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="3000 Câu Ngữ Pháp Và Từ Vựng Hay Sai|30000|40000|image/DanhMuc/NgoaiNgu/3000tuvung.jpg"
                                href="details.html">
                                <h6 class="name" data-index="5">3000 Câu Ngữ Pháp Và Từ Vựng Hay Sai</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">40000đ
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
                                        data-cart="Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2020 – môn Tiếng Anh|40000|image/DanhMuc/NgoaiNgu/tracnghiemtienganh1.jpg.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tracnghiemtienganh1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2020 – môn Tiếng Anh|40000|50000|image/DanhMuc/NgoaiNgu/tracnghiemtienganh1.jpg.jpg"
                                href="details.html">
                                <h6 class="name" data-index="6">Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2020 – môn
                                    Tiếng Anh</h6>
                                <h5 class="price">40000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
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
                                        data-cart="Amazing Science 1|20000|image/DanhMuc/NgoaiNgu/amazing1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/amazing1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Amazing Science 1|20000|30000|image/DanhMuc/NgoaiNgu/amazing1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="1">Amazing Science 1</h6>
                                <h5 class="price">20000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">30000đ
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
                                        data-cart="Amazing Science 2|22000|image/DanhMuc/NgoaiNgu/amazing2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/amazing2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Amazing Science 2|22000|32000|image/DanhMuc/NgoaiNgu/amazing2.jpg"
                                href="details.html">
                                <h6 class="name" data-index="2">Amazing Science 2</h6>
                                <h5 class="price">22000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">32000đ
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
                                        data-cart="Amazing Science 3|24000|image/DanhMuc/NgoaiNgu/amazing3.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/amazing3.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Amazing Science 3|24000|34000|image/DanhMuc/NgoaiNgu/amazing1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="3">Amazing Science 3</h6>
                                <h5 class="price">24000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">34000đ
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
                                        data-cart="Amazing Science 4|26000|image/DanhMuc/NgoaiNgu/amazing4.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/amazing4.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Amazing Science 4|26000|36000|image/DanhMuc/NgoaiNgu/amazing4.jpg"
                                href="details.html">
                                <h6 class="name" data-index="4">Amazing Science 4</h6>
                                <h5 class="price">26000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">36000đ
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
                                        data-cart="3000 Câu Ngữ Pháp Và Từ Vựng Hay Sai|30000|image/DanhMuc/NgoaiNgu/3000tuvung.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/3000tuvung.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="3000 Câu Ngữ Pháp Và Từ Vựng Hay Sai|30000|40000|image/DanhMuc/NgoaiNgu/3000tuvung.jpg"
                                href="details.html">
                                <h6 class="name" data-index="5">3000 Câu Ngữ Pháp Và Từ Vựng Hay Sai</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">40000đ
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
                                        data-cart="Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2020 – môn Tiếng Anh|40000|image/DanhMuc/NgoaiNgu/tracnghiemtienganh1.jpg.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tracnghiemtienganh1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2020 – môn Tiếng Anh|40000|50000|image/DanhMuc/NgoaiNgu/tracnghiemtienganh1.jpg.jpg"
                                href="details.html">
                                <h6 class="name" data-index="6">Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2020 – môn
                                    Tiếng Anh</h6>
                                <h5 class="price">40000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">50000đ
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
                                        data-cart="Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2018 – môn Tiếng Anh|35000|image/DanhMuc/NgoaiNgu/tracnghiemtienganh2.jpg.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tracnghiemtienganh2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2018 – môn Tiếng Anh|35000|45000|image/DanhMuc/NgoaiNgu/tracnghiemtienganh2.jpg.jpg"
                                href="details.html">
                                <h6 class="name" data-index="7">Bộ đề trắc nghiệm luyện thi THPT Quốc gia 2018 – môn
                                    Tiếng Anh</h6>
                                <h5 class="price">35000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">45000đ
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
                    <span>TIẾNG TRUNG</span>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="21"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Luyện Nghe Hán Ngữ 1|30000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/luyennghetiengtrung1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Luyện Nghe Hán Ngữ 1|30000|40000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="21">Luyện Nghe Hán Ngữ 1</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">40000đ
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
                                        data-cart="Luyện Nghe Hán Ngữ 2|30000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/luyennghetiengtrung2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Luyện Nghe Hán Ngữ 2|30000|40000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung2.jpg"
                                href="details.html">
                                <h6 class="name" data-index="22">Luyện Nghe Hán Ngữ 2</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">40000đ
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
                                        data-cart="Luyện Nghe Hán Ngữ 3|30000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung3.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/luyennghetiengtrung3.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Luyện Nghe Hán Ngữ 3|30000|40000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung3.jpg"
                                href="details.html">
                                <h6 class="name" data-index="23">Luyện Nghe Hán Ngữ 3</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">40000đ
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
                                        data-cart="Giáo Trình Hán Ngữ 1|42000|image/DanhMuc/NgoaiNgu/giaotrinhhanngu1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/giaotrinhhanngu1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Giáo Trình Hán Ngữ 1|42000|52000|image/DanhMuc/NgoaiNgu/giaotrinhhanngu1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="24">Giáo Trình Hán Ngữ 1</h6>
                                <h5 class="price">42000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">52000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="25"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Giáo Trình Hán Ngữ 2|42000|image/DanhMuc/NgoaiNgu/giaotrinhhanngu2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/giaotrinhhanngu2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Giáo Trình Hán Ngữ 2|42000|52000|image/DanhMuc/NgoaiNgu/giaotrinhhanngu2.jpg"
                                href="details.html">
                                <h6 class="name" data-index="25">Giáo Trình Hán Ngữ 2</h6>
                                <h5 class="price">42000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">52000đ
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
                                        data-cart="Tự Học Tiếng Trung Dành Cho Người Việt|50000|image/DanhMuc/NgoaiNgu/tuhoctiengtrung1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctiengtrung1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Tiếng Trung Dành Cho Người Việt|50000|64000|image/DanhMuc/NgoaiNgu/tuhoctiengtrung1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="26">Tự Học Tiếng Trung Dành Cho Người Việt</h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">64000đ
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
                                        data-cart="Tự Học Tiếng Trung Dành Cho Nhân Viên Văn Phòng|55000|image/DanhMuc/NgoaiNgu/tuhoctiengtrung2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctiengtrung2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Tiếng Trung Dành Cho Nhân Viên Văn Phòng|55000|65000|image/DanhMuc/NgoaiNgu/tuhoctiengtrung1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="27">Tự Học Tiếng Trung Dành Cho Nhân Viên Văn Phòng</h6>
                                <h5 class="price">55000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">65000đ
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
                                        data-cart="Tự Học Tiếng Trung Giao Tiếp Tập 1|50000|image/DanhMuc/NgoaiNgu/tuhoctiengtrungtap1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctiengtrungtap1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Tiếng Trung Giao Tiếp Tập 1|50000|60000|image/DanhMuc/NgoaiNgu/tuhoctiengtrungtap1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="28">Tự Học Tiếng Trung Giao Tiếp Tập 1</h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="29"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Tự Học Tiếng Trung Giao Tiếp Tập 2|50000|image/DanhMuc/NgoaiNgu/tuhoctiengtrungtap2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctiengtrungtap2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Tiếng Trung Giao Tiếp Tập 2|50000|60000|image/DanhMuc/NgoaiNgu/tuhoctiengtrungtap2.jpg"
                                href="details.html">
                                <h6 class="name" data-index="29">Tự Học Tiếng Trung Giao Tiếp Tập 2</h6>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="30"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="301 Câu Đàm Thoại Tiếng Hoa|25000|image/DanhMuc/NgoaiNgu/301tiengtrung.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/301tiengtrung.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="301 Câu Đàm Thoại Tiếng Hoa|25000|30000|image/DanhMuc/NgoaiNgu/301tiengtrung.jpg"
                                href="details.html">
                                <h6 class="name" data-index="30">301 Câu Đàm Thoại Tiếng Hoa</h6>
                                <h5 class="price">25000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">30000đ
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
                                        data-cart="Tiếng Hoa Dành Cho Trẻ Em|15000|image/DanhMuc/NgoaiNgu/tienghoachotre.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tienghoachotre.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tiếng Hoa Dành Cho Trẻ Em|15000|25000|image/DanhMuc/NgoaiNgu/tienghoachotre.jpg"
                                href="details.html">
                                <h6 class="name" data-index="31">Tiếng Hoa Dành Cho Trẻ Em</h6>
                                <h5 class="price">15000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">25000đ
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
                                        data-cart="400 Mẫu Bài Dịch Trung-Việt & Việt-Trung Hay Nhất|37000|image/DanhMuc/NgoaiNgu/400tiengtrung.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/400tiengtrung.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="400 Mẫu Bài Dịch Trung-Việt & Việt-Trung Hay Nhất|37000|57000|image/DanhMuc/NgoaiNgu/400tiengtrung.jpg"
                                href="details.html">
                                <h6 class="name" data-index="32">400 Mẫu Bài Dịch Trung-Việt & Việt-Trung Hay Nhất</h6>
                                <h5 class="price">37000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">57000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="right-content_books moinhat2 hidden">
                <ul>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="21"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Luyện Nghe Hán Ngữ 1|30000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/luyennghetiengtrung1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Luyện Nghe Hán Ngữ 1|30000|40000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="21">Luyện Nghe Hán Ngữ 1</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">40000đ
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
                                        data-cart="Luyện Nghe Hán Ngữ 2|30000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/luyennghetiengtrung2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Luyện Nghe Hán Ngữ 2|30000|40000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung2.jpg"
                                href="details.html">
                                <h6 class="name" data-index="22">Luyện Nghe Hán Ngữ 2</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">40000đ
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
                                        data-cart="Luyện Nghe Hán Ngữ 3|30000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung3.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/luyennghetiengtrung3.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Luyện Nghe Hán Ngữ 3|30000|40000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung3.jpg"
                                href="details.html">
                                <h6 class="name" data-index="23">Luyện Nghe Hán Ngữ 3</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">40000đ
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
                                        data-cart="Giáo Trình Hán Ngữ 1|42000|image/DanhMuc/NgoaiNgu/giaotrinhhanngu1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/giaotrinhhanngu1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Giáo Trình Hán Ngữ 1|42000|52000|image/DanhMuc/NgoaiNgu/giaotrinhhanngu1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="24">Giáo Trình Hán Ngữ 1</h6>
                                <h5 class="price">42000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">52000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="25"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Giáo Trình Hán Ngữ 2|42000|image/DanhMuc/NgoaiNgu/giaotrinhhanngu2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/giaotrinhhanngu2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Giáo Trình Hán Ngữ 2|42000|52000|image/DanhMuc/NgoaiNgu/giaotrinhhanngu2.jpg"
                                href="details.html">
                                <h6 class="name" data-index="25">Giáo Trình Hán Ngữ 2</h6>
                                <h5 class="price">42000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">52000đ
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
                                        data-cart="Tự Học Tiếng Trung Dành Cho Người Việt|50000|image/DanhMuc/NgoaiNgu/tuhoctiengtrung1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctiengtrung1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Tiếng Trung Dành Cho Người Việt|50000|64000|image/DanhMuc/NgoaiNgu/tuhoctiengtrung1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="26">Tự Học Tiếng Trung Dành Cho Người Việt</h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">64000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="right-content_books banchay2 hidden">
                <ul>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="21"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Luyện Nghe Hán Ngữ 1|30000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/luyennghetiengtrung1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Luyện Nghe Hán Ngữ 1|30000|40000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="21">Luyện Nghe Hán Ngữ 1</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">40000đ
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
                                        data-cart="Luyện Nghe Hán Ngữ 2|30000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/luyennghetiengtrung2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Luyện Nghe Hán Ngữ 2|30000|40000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung2.jpg"
                                href="details.html">
                                <h6 class="name" data-index="22">Luyện Nghe Hán Ngữ 2</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">40000đ
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
                                        data-cart="Luyện Nghe Hán Ngữ 3|30000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung3.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/luyennghetiengtrung3.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Luyện Nghe Hán Ngữ 3|30000|40000|image/DanhMuc/NgoaiNgu/luyennghetiengtrung3.jpg"
                                href="details.html">
                                <h6 class="name" data-index="23">Luyện Nghe Hán Ngữ 3</h6>
                                <h5 class="price">30000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">40000đ
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
                                        data-cart="Giáo Trình Hán Ngữ 1|42000|image/DanhMuc/NgoaiNgu/giaotrinhhanngu1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/giaotrinhhanngu1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Giáo Trình Hán Ngữ 1|42000|52000|image/DanhMuc/NgoaiNgu/giaotrinhhanngu1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="24">Giáo Trình Hán Ngữ 1</h6>
                                <h5 class="price">42000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">52000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="25"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Giáo Trình Hán Ngữ 2|42000|image/DanhMuc/NgoaiNgu/giaotrinhhanngu2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/giaotrinhhanngu2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Giáo Trình Hán Ngữ 2|42000|52000|image/DanhMuc/NgoaiNgu/giaotrinhhanngu2.jpg"
                                href="details.html">
                                <h6 class="name" data-index="25">Giáo Trình Hán Ngữ 2</h6>
                                <h5 class="price">42000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">52000đ
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
                                        data-cart="Tự Học Tiếng Trung Dành Cho Người Việt|50000|image/DanhMuc/NgoaiNgu/tuhoctiengtrung1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctiengtrung1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Tiếng Trung Dành Cho Người Việt|50000|64000|image/DanhMuc/NgoaiNgu/tuhoctiengtrung1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="26">Tự Học Tiếng Trung Dành Cho Người Việt</h6>
                                <h5 class="price">50000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">64000đ
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
                                        data-cart="Tự Học Tiếng Trung Dành Cho Nhân Viên Văn Phòng|55000|image/DanhMuc/NgoaiNgu/tuhoctiengtrung2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctiengtrung2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Tiếng Trung Dành Cho Nhân Viên Văn Phòng|55000|65000|image/DanhMuc/NgoaiNgu/tuhoctiengtrung1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="27">Tự Học Tiếng Trung Dành Cho Nhân Viên Văn Phòng</h6>
                                <h5 class="price">55000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">65000đ
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
                    <span>TIẾNG NHẬT</span>
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
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="41"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Giáo Trình Luyện Thi Năng Lực Tiếng Nhật Try!-N5|70000|image/DanhMuc/NgoaiNgu/luyenthitiengnhat.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/luyenthitiengnhat.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Giáo Trình Luyện Thi Năng Lực Tiếng Nhật Try!-N5|70000|90000|image/DanhMuc/NgoaiNgu/luyenthitiengnhat.jpg"
                                href="details.html">
                                <h6 class="name" data-index="41">Giáo Trình Luyện Thi Năng Lực Tiếng Nhật Try!-N5</h6>
                                <h5 class="price">70000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">90000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="42"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="3000 Từ Vựng Tiếng Nhật Thông Dụng|40000|image/DanhMuc/NgoaiNgu/3000tiengnhat.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/3000tiengnhat.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="3000 Từ Vựng Tiếng Nhật Thông Dụng|40000|61000|image/DanhMuc/NgoaiNgu/3000tiengnhat.jpg"
                                href="details.html">
                                <h6 class="name" data-index="42">3000 Từ Vựng Tiếng Nhật Thông Dụng</h6>
                                <h5 class="price">40000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">61000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="43"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Giáo Trình Tiếng Nhật Sơ Cấp Tập 1|47000|image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Giáo Trình Tiếng Nhật Sơ Cấp Tập 1|47000|51000|image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="43">Giáo Trình Tiếng Nhật Sơ Cấp Tập 1</h6>
                                <h5 class="price">47000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">51000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="44"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Giáo Trình Tiếng Nhật Sơ Cấp Tập 2|47000|image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Giáo Trình Tiếng Nhật Sơ Cấp Tập 2|47000|51000|image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="44">Giáo Trình Tiếng Nhật Sơ Cấp Tập 2</h6>
                                <h5 class="price">47000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">51000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="45"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Ngữ Pháp Tiếng Nhật Hiện Đại - Sơ Cấp|44000|image/DanhMuc/NgoaiNgu/nguphaptiengnhat.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/nguphaptiengnhat.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Ngữ Pháp Tiếng Nhật Hiện Đại - Sơ Cấp|44000|57000|image/DanhMuc/NgoaiNgu/nguphaptiengnhat.jpg"
                                href="details.html">
                                <h6 class="name" data-index="45">Ngữ Pháp Tiếng Nhật Hiện Đại - Sơ Cấp</h6>
                                <h5 class="price">44000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">57000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="46"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Tự Học Tiếng Nhật Dành Cho Người Mới Bắt Đầu|74000|image/DanhMuc/NgoaiNgu/tuhoctiengnhat1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctiengnhat1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Tiếng Nhật Dành Cho Người Mới Bắt Đầu|74000|77000|image/DanhMuc/NgoaiNgu/tuhoctiengnhat1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="46">Tự Học Tiếng Nhật Dành Cho Người Mới Bắt Đầu</h6>
                                <h5 class="price">74000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">77000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="47"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Tự Học Tiếng Nhật Cấp Tốc|52000|image/DanhMuc/NgoaiNgu/tuhoctiengnhat2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctiengnhat2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Tiếng Nhật Cấp Tốc|52000|67000|image/DanhMuc/NgoaiNgu/tuhoctiengnhat1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="47">Tự Học Tiếng Nhật Cấp Tốc</h6>
                                <h5 class="price">52000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">67000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="48"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Tự Học Tiếng Nhật Cấp Tốc Trong 7 Ngày|55000|image/DanhMuc/NgoaiNgu/tuhoctiengnhat3.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctiengnhat3.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Tiếng Nhật Cấp Tốc Trong 7 Ngày|55000|65000|image/DanhMuc/NgoaiNgu/tuhoctiengnhat1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="48">Tự Học Tiếng Nhật Cấp Tốc Trong 7 Ngày</h6>
                                <h5 class="price">55000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">65000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="49"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="28 Ngày Tự Học Tiếng Nhật|55000|image/DanhMuc/NgoaiNgu/tuhoctiengnhat4.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctiengnhat4.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="28 Ngày Tự Học Tiếng Nhật|55000|65000|image/DanhMuc/NgoaiNgu/tuhoctiengnhat4.jpg"
                                href="details.html">
                                <h6 class="name" data-index="49">28 Ngày Tự Học Tiếng Nhật</h6>
                                <h5 class="price">55000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">65000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="50"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="5500 Câu Giao Tiếp Tiếng Nhật Hằng Ngày|35000|image/DanhMuc/NgoaiNgu/5500giaotieptiengnhat.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/5500giaotieptiengnhat.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="5500 Câu Giao Tiếp Tiếng Nhật Hằng Ngày|55000|65000|image/DanhMuc/NgoaiNgu/5500giaotieptiengnhat.jpg"
                                href="details.html">
                                <h6 class="name" data-index="50">5500 Câu Giao Tiếp Tiếng Nhật Hằng Ngày</h6>
                                <h5 class="price">35000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">65000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="51"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Temabetsu|75000|image/DanhMuc/NgoaiNgu/temabetsu.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/temabetsu.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Temabetsu|75000|85000|image/DanhMuc/NgoaiNgu/temabetsu.jpg"
                                href="details.html">
                                <h6 class="name" data-index="51">Temabetsu</h6>
                                <h5 class="price">75000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">85000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="52"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Tiếng Nhật Thật Đơn Giản|52000|image/DanhMuc/NgoaiNgu/tiengnhatdongian.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tiengnhatdongian.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tiếng Nhật Thật Đơn Giản|52000|72000|image/DanhMuc/NgoaiNgu/tiengnhatdongian.jpg"
                                href="details.html">
                                <h6 class="name" data-index="52">Tiếng Nhật Thật Đơn Giản</h6>
                                <h5 class="price">52000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">72000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="right-content_books moinhat3 hidden">
                <ul>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="41"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Giáo Trình Luyện Thi Năng Lực Tiếng Nhật Try!-N5|70000|image/DanhMuc/NgoaiNgu/luyenthitiengnhat.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/luyenthitiengnhat.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Giáo Trình Luyện Thi Năng Lực Tiếng Nhật Try!-N5|70000|90000|image/DanhMuc/NgoaiNgu/luyenthitiengnhat.jpg"
                                href="details.html">
                                <h6 class="name" data-index="41">Giáo Trình Luyện Thi Năng Lực Tiếng Nhật Try!-N5</h6>
                                <h5 class="price">70000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">90000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="42"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="3000 Từ Vựng Tiếng Nhật Thông Dụng|40000|image/DanhMuc/NgoaiNgu/3000tiengnhat.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/3000tiengnhat.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="3000 Từ Vựng Tiếng Nhật Thông Dụng|40000|61000|image/DanhMuc/NgoaiNgu/3000tiengnhat.jpg"
                                href="details.html">
                                <h6 class="name" data-index="42">3000 Từ Vựng Tiếng Nhật Thông Dụng</h6>
                                <h5 class="price">40000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">61000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="43"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Giáo Trình Tiếng Nhật Sơ Cấp Tập 1|47000|image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Giáo Trình Tiếng Nhật Sơ Cấp Tập 1|47000|51000|image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="43">Giáo Trình Tiếng Nhật Sơ Cấp Tập 1</h6>
                                <h5 class="price">47000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">51000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="44"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Giáo Trình Tiếng Nhật Sơ Cấp Tập 2|47000|image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Giáo Trình Tiếng Nhật Sơ Cấp Tập 2|47000|51000|image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="44">Giáo Trình Tiếng Nhật Sơ Cấp Tập 2</h6>
                                <h5 class="price">47000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">51000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="45"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Ngữ Pháp Tiếng Nhật Hiện Đại - Sơ Cấp|44000|image/DanhMuc/NgoaiNgu/nguphaptiengnhat.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/nguphaptiengnhat.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Ngữ Pháp Tiếng Nhật Hiện Đại - Sơ Cấp|44000|57000|image/DanhMuc/NgoaiNgu/nguphaptiengnhat.jpg"
                                href="details.html">
                                <h6 class="name" data-index="45">Ngữ Pháp Tiếng Nhật Hiện Đại - Sơ Cấp</h6>
                                <h5 class="price">44000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">57000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="46"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Tự Học Tiếng Nhật Dành Cho Người Mới Bắt Đầu|74000|image/DanhMuc/NgoaiNgu/tuhoctiengnhat1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctiengnhat1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Tiếng Nhật Dành Cho Người Mới Bắt Đầu|74000|77000|image/DanhMuc/NgoaiNgu/tuhoctiengnhat1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="46">Tự Học Tiếng Nhật Dành Cho Người Mới Bắt Đầu</h6>
                                <h5 class="price">74000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">77000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="right-content_books banchay3 hidden">
                <ul>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="41"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Giáo Trình Luyện Thi Năng Lực Tiếng Nhật Try!-N5|70000|image/DanhMuc/NgoaiNgu/luyenthitiengnhat.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/luyenthitiengnhat.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Giáo Trình Luyện Thi Năng Lực Tiếng Nhật Try!-N5|70000|90000|image/DanhMuc/NgoaiNgu/luyenthitiengnhat.jpg"
                                href="details.html">
                                <h6 class="name" data-index="41">Giáo Trình Luyện Thi Năng Lực Tiếng Nhật Try!-N5</h6>
                                <h5 class="price">70000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">90000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="42"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="3000 Từ Vựng Tiếng Nhật Thông Dụng|40000|image/DanhMuc/NgoaiNgu/3000tiengnhat.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/3000tiengnhat.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="3000 Từ Vựng Tiếng Nhật Thông Dụng|40000|61000|image/DanhMuc/NgoaiNgu/3000tiengnhat.jpg"
                                href="details.html">
                                <h6 class="name" data-index="42">3000 Từ Vựng Tiếng Nhật Thông Dụng</h6>
                                <h5 class="price">40000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">61000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="43"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Giáo Trình Tiếng Nhật Sơ Cấp Tập 1|47000|image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Giáo Trình Tiếng Nhật Sơ Cấp Tập 1|47000|51000|image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="43">Giáo Trình Tiếng Nhật Sơ Cấp Tập 1</h6>
                                <h5 class="price">47000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">51000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="44"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Giáo Trình Tiếng Nhật Sơ Cấp Tập 2|47000|image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Giáo Trình Tiếng Nhật Sơ Cấp Tập 2|47000|51000|image/DanhMuc/NgoaiNgu/giaotrinhtiengnhat1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="44">Giáo Trình Tiếng Nhật Sơ Cấp Tập 2</h6>
                                <h5 class="price">47000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">51000đ
                                </h6>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="45"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Ngữ Pháp Tiếng Nhật Hiện Đại - Sơ Cấp|44000|image/DanhMuc/NgoaiNgu/nguphaptiengnhat.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/nguphaptiengnhat.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Ngữ Pháp Tiếng Nhật Hiện Đại - Sơ Cấp|44000|57000|image/DanhMuc/NgoaiNgu/nguphaptiengnhat.jpg"
                                href="details.html">
                                <h6 class="name" data-index="45">Ngữ Pháp Tiếng Nhật Hiện Đại - Sơ Cấp</h6>
                                <h5 class="price">44000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">57000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="46"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Tự Học Tiếng Nhật Dành Cho Người Mới Bắt Đầu|74000|image/DanhMuc/NgoaiNgu/tuhoctiengnhat1.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctiengnhat1.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Tiếng Nhật Dành Cho Người Mới Bắt Đầu|74000|77000|image/DanhMuc/NgoaiNgu/tuhoctiengnhat1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="46">Tự Học Tiếng Nhật Dành Cho Người Mới Bắt Đầu</h6>
                                <h5 class="price">74000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">77000đ
                                </h6>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="product-image">
                                <div class="icon-product">
                                    <i class="fa fa-search-plus" onclick="quickview(this)" data-index="47"
                                        aria-hidden="true" data-toggle="modal" data-target="#myModal"
                                        style="cursor: pointer;"></i>
                                    <i onclick="addToCart(this)"
                                        data-cart="Tự Học Tiếng Nhật Cấp Tốc|52000|image/DanhMuc/NgoaiNgu/tuhoctiengnhat2.jpg"
                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                </div>
                                <img src="image/DanhMuc/NgoaiNgu/tuhoctiengnhat2.jpg" alt="">
                            </div>
                            <a onclick="showdetails(this)"
                                data-info="Tự Học Tiếng Nhật Cấp Tốc|52000|67000|image/DanhMuc/NgoaiNgu/tuhoctiengnhat1.jpg"
                                href="details.html">
                                <h6 class="name" data-index="47">Tự Học Tiếng Nhật Cấp Tốc</h6>
                                <h5 class="price">52000đ</h5>
                                <h6 class="origin-price" style="text-decoration: line-through;display: inline;">67000đ
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