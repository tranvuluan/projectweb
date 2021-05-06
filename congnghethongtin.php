<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath . '/inc/header.php';
?>

<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath . '/classes/danhmuc.php';
$filepath = realpath(dirname(__FILE__));
include_once $filepath . '/classes/sach.php';
?>

<?php
$danhmuc = new danhmucsach();
$book = new sach();

?>
<!-- Kết thúc header -->

<!-- Nội dung -->
<div class="cntt-link">
    <span><a href="index.php">Trang chủ</a> / <a href="#">SÁCH CÔNG NGHỆ THÔNG TIN</a></span>
</div>
<div class="cntt-content-block">
    <div class="cntt-content_left">
        <div class="left_danhmuc">
            <span>DANH MỤC SẢN PHẨM</span>
        </div>
        <div class="left_content-block">
            <ul>
                <?php
                $showdanhmuc = $danhmuc->showDanhmuccon('1');
                if ($showdanhmuc) {
                    while ($result = $showdanhmuc->fetch_assoc()) {
                ?>
                        <li class="li_sach" style="cursor: pointer" onclick="requestAjaxToShowBookCategory(<?php echo strval($result['id_categorychild']) ?>,0); joincategorychild(this);">
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            <span><?php echo $result['name_categorychild'] ?></span>
                        </li>
                <?php
                    }
                }
                ?>
            </ul>
            <script> $(document).ready(function() {$('.li_sach')[0].click()}) </script>
        </div>
    </div>
    <div class="cntt-content_right ngonngulaptrinh">
        <div class="right-content_top">
            <div class="_title">
                <span>C/C++, JS, React, Python...</span>
            </div>
            <div class="filter_content">
                <button onclick="filter('0',this)" class="btn btn-outline-info btn-sm filter active">Khuyến mãi</button>
                <button  onclick="filter('1',this)" class="btn btn-outline-info btn-sm filter">Mới
                    nhất</button>
                <button  onclick="filter('2',this)" class="btn btn-outline-info btn-sm filter">Bán
                    chạy</button>
            </div>
        </div>
        <!-- Block sách -->
        <div class="right-content_books">
            <ul id="show_allbook">

            </ul>
        </div>
    </div>

</div>



<!-- Quick view -->


<!-- Barbottom -->
<!-- Footer -->
<?php
include_once $filepath . '/../inc/footer.php';
?>