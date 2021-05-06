<?php 
$file
?>
    <!-- Kết thúc header -->
    <!-- Content -->
    <div class="details-link">
        <span><a href="index.html">Trang chủ</a> / <a href="#">THÔNG TIN SẢN PHẨM</a></span>
    </div>
    <br>

    <div class="deltails-content">
        <div class="deltails-content-left">
            <img id="del-img" src="image/SaleOFF/Slide-right/introductionPython.jpg" alt=""> 
        </div>
        <div class="deltails-content-right">
            <h4 id="del-title" class="del-name-product" style="text-transform: uppercase;">
                INTRODUCTION TO MACHINE LEARNING WITH PYTHON: A GUIDE FOR DATA SCIENTISTS 1ST EDITION
            </h4>

            <div class="del-block">
                <div class="price-quantity">
                    <div id="del-price" style="font-size: 30px; font-weight: 500; display: inline; color: #C73736;"
                        class="_price">
                        100$
                    </div>
                    <span id="del-origin-price"
                        style="font-size: 20px; text-decoration: line-through; font-style: italic;"
                        class="_origin-price">150$</span>
                    <div class="_quantity">
                        <form>
                            <h6>Số lượng</h6>
                            <input id="quantity" type="number" value="1" min="1" onchange="changeValueDetails()"
                                style="width: 50px;">
                        </form>
                    </div>
                </div>
                <div class="del-description">
                    <p style="font-size: 20px;font-weight: 500;">Dịch vụ của chúng tôi</p>
                    <i style="margin-right: 10px; float: left;font-size: 30px;" class="fa fa-truck"
                        aria-hidden="true"></i>
                    <span>Giao hàng tận nhà toàn quốc, thanh toán khi nhận hàng (COD).</span>
                    <br>
                    <br>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <span style="margin-left: 5px;">Sách hay, rẻ, chất lượng tốt.</span>
                </div>
            </div>
            <div style="margin-left: 30px;" class="del-btn">
                <a style="float: left; width: 125px; height: 37px;" href="cart.html">
                    <div class="button buy" onclick="addToCartFromDetails()">MUA NGAY</div>
                </a>
                <a style="margin-left: 30px; float: left;width: 190px; height: 37px; cursor: pointer;">
                    <div class="button addcart" onclick="addToCartFromDetails()">THÊM VÀO GIỎ HÀNG</div>
                </a>

            </div>
        </div>
    </div>
    <script>
        var object = new Object();
        object = JSON.parse(localStorage.getItem('details'));
        var del_img = document.getElementById('del-img').src = object.img;
        var del_name = document.getElementById('del-title').innerText = object.title;
        var del_price = document.getElementById('del-price').innerText = object.price + "đ";
        var del_origin_price = document.getElementById('del-origin-price').innerText = object.origin_price + "đ";

        // set Object to Cart
        object = createObject(object.title, object.price, object.img);
        function addToCartFromDetails() {
            var dsSanPham = localStorage.getItem('listItemToCart');
            if (dsSanPham == null)
                dsSanPham = new Array();
            else {
                dsSanPham = JSON.parse(localStorage.getItem('listItemToCart'));
            }
            dsSanPham.push(object);
            jsonDS = JSON.stringify(dsSanPham);
            localStorage.setItem('listItemToCart', jsonDS);
            alert('Bạn đã thêm sách ' + object.title + ' vào giỏ hàng!');
            location.reload();
        }
    </script>

    <!-- ChangeValue Quantity Details -->
    <script>
        function changeValueDetails() {
            var x = document.getElementById('quantity');
            var y = object.price;
            var valueChange = parseFloat(y) * parseInt(x.value);
            var del_price = document.getElementById('del-price').innerText = valueChange + "đ";
        }
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
    <script src="js/homejs.js"></script>
</body>

</html>