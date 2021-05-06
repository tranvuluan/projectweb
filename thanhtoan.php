<!doctype html>
<html lang="en">

<head>
    <title>Thanh toán</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/thanhtoan.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="js/pay.js"></script>
</head>

<body>
    <div style="text-align: center;">
        <a href="index.html"><img src="image/logo.jpg" style="width: 100px;"></a>
        <p style="font-size: 30px;"> Thanh Toán </p>
    </div>

    <div class="pay-content">
        <div class="thanhtoan1">
            <span class="thanhtoan-stt">1</span>
            <span class="thanhtoan-text-stt">Thông Tin Đơn Hàng</span>
            <form>
                <p> Họ và tên<span style="color: red;">*</span> </p>
                <input id="name" type="text" name="hoten" placeholder="Họ và tên">
                <p>Email</p>
                <input id="mail" type="text" name="email" placeholder="Email">
                <p> Điện Thoại<span style="color: red;">*</span> </p>
                <input id="phone" type="text" name="sdt" placeholder="Số điện thoại">
                <p> Địa Chỉ <span style="color: red;">*</span></p>
                <input id="address" type="text" name="diachi" placeholder="Địa chỉ cụ thể">
                <p> Ghi Chú Đơn Hàng </p>
                <textarea id="description" name="description" rows="5" cols="40" placeholder="Ghi chú đơn hàng"></textarea>
            
            </form>
        </div>
        <div class="thanhtoan2">
            <span class="thanhtoan-stt">2</span>
            <span class="thanhtoan-text-stt">Phương Thức Thanh Toán</span>
            <div class="thanhtoan-content">
                <input checked type="radio">
                <span>Thanh toán bằng tiền mặt khi nhận hàng (COD)</span>
            </div>
        </div>

        <div class="thanhtoan3">
            <span class="thanhtoan-stt">3</span>
            <span class="thanhtoan-text-stt">Thông Tin Giỏ Hàng</span>
            <div class="thanhtoan3-content">
                <!-- List sản phẩm lấy từ cart -->
                <div class="list-info">
                    <div class="info top-info">
                        <div class="col1">Tên sản phẩm</div>
                        <div class="col2">Số lượng</div>
                        <div class="col3">Giá</div>
                    </div>
                    <ul id="list">
                        <li class="info list">
                            <div class="col1">Đường vào lập trình Python - Nguyễn Ngọc Giang</div>
                            <div class="col2">2</div>
                            <div class="col3">150000</div>
                        </li>
                        <li class="info list">
                            <div class="col1">Ngày xưa tôi có một chuyện tình</div>
                            <div class="col2">2</div>
                            <div class="col3">150000</div>
                        </li>
                        <li class="info list">
                            <div class="col1">Xin em đừng bugs</div>
                            <div class="col2">2</div>
                            <div class="col3">150000</div>
                        </li>

                    </ul>
                </div>
                <div class="cart-price">
                    <span>Tạm tính: </span>
                    <span id="beforePrice" class="_price"></span>
                </div>
                <div class="ship-price">
                    <span>Phí vận chuyển: </span>
                    <span class="_price">30000 đ</span>
                </div>
                <div class="total-price">
                    <span>Tổng cộng: </span>
                    <span id="totalPrice" class="_price"></span>
                </div>
                <form action="" class="khuyenmai">
                    <p>Nhập mã khuyễn mãi (Mã Coupon, Voucher)</p>
                    <div class="code-khuyenmai">
                        <input type="text" placeholder="Nhập mã khuyễn mãi nếu có">
                        <div class="btn btn-dark code">Áp dụng</div>
                    </div>
                </form>
                <div class="btn-bottom">
                    <div onclick="completePay()" class="btn btn-dark">Tiến hành thanh toán</div>
                    <a href="index.html">
                        <div class="btn btn-dark">Tiếp tục mua sắm</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Thông tin đơn hàng -->
    <script>
        var dsPay = JSON.parse(localStorage.getItem('listToPay'));
        console.log(dsPay);
        var listHTML = document.getElementById('list');
        listHTML.innerHTML = listToHTML(dsPay);
        document.getElementById('beforePrice').innerText = totalPrice(dsPay) + " đ";
        document.getElementById('totalPrice').innerText = totalPrice(dsPay) + 30000 + " đ";
        function completePay() {
            var dsOrder = localStorage.getItem('listOrder');
            if (dsOrder == null)
                dsOrder = new Array();
            else {
                dsOrder = JSON.parse(localStorage.getItem('listOrder'));
            }
            var object = new Object();
            object.name = document.getElementById('name').value;
            object.phone = document.getElementById('phone').value;
            object.mail = document.getElementById('mail').value;
            object.address = document.getElementById('address').value;
            object.description = document.getElementById('description').value;
            console.log(object);
            dsOrder.push(object);
            localStorage.setItem('listOrder', JSON.stringify(dsOrder));
            alert("Cảm ơn bạn đã mua hàng !!\n***Thông tin khách hàng***"
                    + "\nHọ tên: " + object.name
                    + "\nPhone: " + object.phone + "    |   Email: " + object.mail
                    + "\nĐịa chỉ: " + object.address 
                    + "\n---Thông tin đơn hàng---\n"
                    + JSON.stringify(dsPay)
                    +"\nTổng tiền: " + (totalPrice(dsPay) + 30000) + " đ"
            );
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