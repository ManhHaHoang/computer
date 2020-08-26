<!DOCTYPE html>
<html lang="vi">
<?php
$ver = time();
?>
<head>
    <title>Computer Accessories | iCare</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="icon" href="images/favicon.png" sizes="16x16 32x32" type="image/png">
    <link rel="stylesheet" href="assets/css/icon.css?v=<?=$ver?>">
    <link rel="stylesheet" href="assets/css/layout.css?v=<?=$ver?>">
    <link rel="stylesheet" href="assets/css/styles.css?v=<?=$ver?>">
    <link rel="stylesheet" href="assets/css/slide.css?v=<?=$ver?>">
    <link rel="stylesheet" href="assets/css/product.css?v=<?=$ver?>">
    <link rel="stylesheet" href="assets/css/responsive.css?v=<?=$ver?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">

</head>
<body>
    <?php include 'common/header.php' ?>
    <?php include 'common/navigation.php' ?>
    <main id="site-main">
        <div class="site-w">
            <div class="top-content">
                <div class="left-col">
                    <?php include 'common/left-col.php' ?>
                </div>
                <div class="center-col">
                    <div class="breadcrumb-box ">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/danh-muc">Danh mục</a>
                            </li>
                            <li class="breadcrumb-item">
                                Laptop Dell Vostro 5370 7M6D51 (i5 8250U/4GB RAM/256GB SSD/13.3 inch FHD/Win 10)
                            </li>
                        </ul>
                    </div>
                    <div class="category-head">
                        <h1 class="product-title">
                            Laptop Dell Vostro 5370 7M6D51 (i5 8250U/4GB RAM/256GB SSD/13.3 inch FHD/Win 10)
                            <span class="badge-promote">Bán chạy</span>
                            <span class="badge-new">Sản phẩm mới</span>
                        </h1>
                    </div>
                    <div class="product-detail-wrapper">
                        <div class="product-detail">
                            <div class="product-gallery">
                                <div class="expanded-image">
                                    <?php for ($e=1; $e < 5; $e++) {  ?>
                                        <img class="expandedImg" src="images/products/<?=$e?>.jpg" draggable="false">
                                    <?php } ?>
                                </div>
                                <!-- Image text -->
                                <div class="slider-nav flex-box">
                                    <?php for ($i=1; $i < 5; $i++) {  ?>
                                        <div class="slider-nav-item">
                                            <img src="images/products/<?=$i?>.jpg" draggable="false">
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="product-detail-info">
                                <div class="product-detail-row flex-box">
                                    <span>Tình trạng</span>
                                    <span>Còn hàng</span>
                                </div>
                                <div class="product-detail-row flex-box product-detail-price">
                                    <span>Giá</span>
                                    <span>18.999.000 ₫</span>
                                </div>
                                <div class="product-detail-row flex-box product-detail-save">
                                    <span>Tiết kiệm</span>
                                    <span>1.000.000 ₫ <small>(Giá bao gồm VAT)</small> </span>
                                </div>
                                <div class="product-detail-row flex-box product-detail-sale">
                                    <span>Giá thị trường</span>
                                    <span>19.999.000 ₫</span>
                                </div>
                                <div class="product-detail-row flex-box">
                                    <span>Mã sản phẩm</span>
                                    <span>LTLG014</span>
                                </div>

                                <div class="product-detail-row flex-box">
                                    <span>Xuất xứ</span>
                                    <span>Nhật Bản</span>
                                </div>
                                <div class="product-detail-row flex-box">
                                    <div class="rating-box flex-box">
                                        <span>Đánh giá</span>
                                        <span class="starRating">
                                            <i class="icon-star star-on"></i>
                                            <i class="icon-star star-on"></i>
                                            <i class="icon-star star-on"></i>
                                            <i class="icon-star star-on"></i>
                                            <i class="icon-star star-off"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-detail-row">
                                    <div class="buynow-wrapper">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus">
                                            <input type="number" step="1" min="1" max="9" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                            <input type="button" value="+" class="plus">
                                        </div>
                                        <a class="buynow" href="gio-hang">
                                            Mua ngay
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <ul class="product-content-tab">
                                <li class="active" data-content="#information">Thông số <span class="is-desktop">sản phẩm</span></li>
                                <li data-content="#detail" >Chi tiết <span class="is-desktop">sản phẩm</span></li>
                                <li data-content="#promotion" ><span class="is-desktop">Chương trình</span> khuyến mại</li>
                            </ul>
                            <div class="tab-content">
                                <div id="information" class="tab-content-item active">
                                    <ul class="product-summary-item-ul d-flex flex-wrap mb-0" id="js-tskt-item">

                                        <li>Bộ vi xử lý	Intel Core™ i5 8250U (4*1.6Ghz, 6MB Cache)
                                        </li>

                                        <li>Chipset	Intel
                                        </li>

                                        <li>Bộ nhớ trong	4GB DDR4 2400MHz
                                        </li>

                                        <li>VGA	Intel UHD 620
                                        </li>

                                        <li>Ổ cứng	256GB M2 SSD
                                        </li>

                                        <li>Ổ quang	No
                                        </li>

                                        <li>Card Reader	Micro SD
                                        </li>

                                        <li>Bảo mật, công nghệ	Finger Print, Led Keyboard
                                        </li>

                                        <li>Màn hình 	13.3”  FHD (1920 * 1080), LED backlight</li>

                                    </ul>
                                </div>
                                <div id="detail" class="tab-content-item">
                                    <h2>Giới thiệu về Laptop Dell Vostro 5370 7M6D51</h2>
                                    <p>Dell Vostro, dòng máy hướng tới sự đơn giản và nam tính trong thiết kế ngoại hình và giao diện sử dụng. Hãy cùng HANOICOMPUTER tìm hiểu về mẫu Laptop Dell Vostro 5370 7M6D51 – một sản phẩm nổi bật thuộc dòng Dell Vostro qua bài viết dưới đây nào!</p>
                                    <h3>Tính di động vượt trội</h3>
                                    <p>Đặc điểm nổi bật của dòng Dell Vostro là khung máy được gia cố cứng cáp bởi kim loại magie, thường dành cho doanh nhân hay doanh nghiệp nhỏ có nhu cầu làm việc di động. Laptop Dell Vostro 5370 7M6D51 đáp ứng tất cả những điều đó thông qua chất lượng kết cấu và cấu hình. Đầu tiên cần kể đến tính di động của máy như màn hình 13.3", pin 3 cell liền và khối lượng của máy rất nhẹ chỉ có 1.4 kg. Tiếp đến là tính năng bảo mật vân tay luôn có độ bảo mật tin cậy.</p>
                                    <h3>Màn hình có độ phân giải cao</h3>
                                    <p>Laptop Dell Vostro 5370 7M6D51 có kích thước màn hình chỉ 13.3" nhưng được đầu tư độ phân giải lên tới 1920 x 1080 rất sắc nét. Độ phân giải này còn phục vụ mục đích xuất hình sang màn hình rời có cùng độ phân giải nhưng kích thước lớn hơn, tăng không gian hiển thị thông tin rộng hơn.</p>
                                </div>
                                <div id="promotion" class="tab-content-item">
                                    <div class="square-trade-content" style="color: #222; font-size: 13px; margin-top: 40px">
                                        <div class="khuyen-mai-laptop-pc">
                                        <p><span style="color: red; font-weight: bold; text-transform: uppercase">BỘ QUÀ TẶNG TRỊ GIÁ <span style="color: red; font-weight: bold">2.450.00đ</span></span>
                                        <br><span style="margin-left: 15px">+</span> Bộ phát Wifi di động Kasda KW9550 trị giá <span style="color: red; font-weight: bold">999.000đ</span> (ANKA003)
                                        <br><span style="margin-left: 15px">+</span> Chuột không dây trị giá <span style="color: red; font-weight: bold">169.000đ</span> (MEHI001/MEHI002)
                                        <br><span style="margin-left: 15px">+</span> Đế làm mát trị giá <span style="color: red; font-weight: bold">99.000đ</span> (DELM245)
                                        <br><span style="margin-left: 15px">+</span> Tấm lót chuột trị giá <span style="color: red; font-weight: bold">49.000đ</span> (PADM635/PADM639)
                                        <br><span style="margin-left: 15px">+</span> Túi đựng Laptop trị giá <span style="color: red; font-weight: bold">149.000đ</span> (TUID064)<br>
                                        <span style="margin-left: 15px">+</span> Tặng phiếu vệ sinh bảo dưỡng Laptop, PC miễn phí trọn đời trị giá <span style="color: red; font-weight: bold">999.000đ</span> (THEK417)</p>
                                        </div>

                                        <div class="khuyen-mai-pcgm-t6">
                                            <p><span style="color: red; font-weight: bold; text-transform: uppercase">ƯU ĐÃI KHI MUA KÈM SẢN PHẨM PCGM</span>
                                            <br><span style="margin-left: 15px">+</span> Giảm giá sốc Màn hình khi mua cùng PCGM. Chi tiết xem <a href="https://www.hanoicomputer.vn/chuong-trinh-khuyen-mai-giam-soc-khi-mua-man-hinh-kem-pc-gaming" rel="nofollow" target="_blank" style="color:#243a76; font-weight: bold;"> tại đây</a>
                                            <br><span style="margin-left: 15px">+</span> Giảm <span style="color: red; font-weight: bold">5%</span> tối đa 100.000đ khi mua loa
                                            <br><span style="margin-left: 15px">+</span> Giảm <span style="color: red; font-weight: bold">10%</span> tối đa 200.00đ khi mua Bàn &amp; Ghế Gaming
                                            <br><span style="margin-left: 15px">+</span> Giảm <span style="color: red; font-weight: bold">5%</span> Phụ kiện, Ổ cứng gắn ngoài,Router, Switch, Modem</p>
                                        </div>

                                        <div class="khuyen-mai-laptop-t6">
                                            <p><span style="font-weight: bold; text-transform: uppercase; color: red">ƯU ĐÃI KHI MUA KÈM LAPTOP (ÁP DỤNG ĐẾN 30/09/2020)</span>
                                            <br><span style="margin-left: 15px">+</span> Giảm <span style="color: red; font-weight: bold">5%</span> Tai nghe Zidli, Dareu, Kingston HyperX, Corsair, SteelSeries, Ổ cứng gắn ngoài, Microphone Razer, HyperX, Router, Switch, Modem, Loa Logitech.
                                            <br><span style="margin-left: 15px">+</span> Giảm <span style="color: red; font-weight: bold">10%</span> Tai nghe JBL (TNJB), Bàn di chuột (PADM), USB, Card mạng, Card sound các loại.</p>
                                        </div>

                                        <div class="khuyen-mai-man-hinh-t6">
                                            <p><span style="font-weight: bold; text-transform: uppercase; color: red">ƯU ĐÃI KHI MUA KÈM MÀN HÌNH</span>
                                            <br><span style="margin-left: 15px">+</span> Giảm <span style="color: red; font-weight: bold">10%</span> giá treo màn hình khi mua kèm màn hình.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php include 'component/comment.php' ?>
                        </div>
                    </div>
                </div>
                <div class="right-col">
                    <?php include 'common/right-col.php' ?>
                </div>
            </div>

        </div>
    </main>
    <?php include 'common/footer.php';?>
    <script type="text/javascript" src="/assets/js/product.js?v=<?= time()?>"></script>
</body>
</html>
