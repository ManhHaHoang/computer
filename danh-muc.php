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
    <link rel="stylesheet" href="assets/css/home.css?v=<?=$ver?>">
    <link rel="stylesheet" href="assets/css/slide.css?v=<?=$ver?>">
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
                    <div class="category-head">
                        <h1 class="category-title">Laptop HP</h1>
                        <span>(64 sản phẩm)</span>
                    </div>
                    <div class="category-sort">
                        <ul class="listfilter" data-sort="sort">
                            <li class="frowitem sort sortdefault active">
                                <span class="outline-secondary" data-value="ban-chay-nhat">Bán chạy nhất</span>
                            </li>
                            <li class="frowitem sort">
                                <span class="outline-secondary" data-value="tra-gop-0">Trả góp 0%</span>
                            </li>
                            <li class="frowitem sort">
                                <span class="outline-secondary" data-value="gia-thap-den-cao">Giá thấp</span>
                            </li>
                            <li class="frowitem sort">
                                <span class="outline-secondary" data-value="gia-cao-den-thap">Giá cao</span>
                            </li>
                            <li class="frowitem sort">
                                <span class="outline-secondary" data-value="uu-dai-online">Ưu đãi online</span>
                            </li>
                        </ul>
                        <div class="grid-list">
                            <div class="grid-item grid-ic-layout active">
                                <img src="/images/list.svg" alt="">
                            </div>
                            <div class="grid-item grid-ic-list">
                                <img src="/images/grid.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="list-products">
                        <?php for ($i=1; $i < 31; $i++) { ?>
                            <div class="product-item-info">
                                <a class="product-image-info" href="/chi-tiet-san-pham">
                                    <img src="/images/products/<?= $i ?>.jpg" alt="">
                                </a>
                                <div class="product-info-box">
                                    <a class="product-title-info" href="/chi-tiet-san-pham">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </a>
                                    <div class="product-info-other">
                                        <span class="new-price">10.190.000 ₫</span>
                                        <span class="old-price">10.690.000 ₫</span>
                                        <span class="product-rating">
                                            <i class="icon-star star-on"></i>
                                            <i class="icon-star star-on"></i>
                                            <i class="icon-star star-on"></i>
                                            <i class="icon-star star-on"></i>
                                            <i class="icon-star star-off"></i>
                                        </span>
                                        <a class="buynow" href="/chi-tiet-san-pham">
                                            Mua ngay
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="pagination-box ">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"> <i class="icon-chevrons-right"></i> </a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item "><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#"> <i class="icon-chevrons-right"></i> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="right-col">
                    <?php include 'common/right-col.php' ?>
                </div>
            </div>

        </div>
    </main>
    <?php include 'common/footer.php';?>

</body>
</html>
