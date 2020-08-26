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
                    <?php include 'common/banner.php' ?>
                    <?php include 'component/trending.php' ?>
                    <div class="promote center-box-promote">
                        <a href="#">
                            <img src="images/banner/promote.png" alt="">
                        </a>
                    </div>
                    <?php include 'component/top-category.php' ?>
                </div>
                <div class="right-col">
                    <?php include 'common/right-col.php' ?>
                </div>
            </div>
            <div class="bottom-content">
                <?php include 'common/bottom-col.php' ?>
            </div>
        </div>
    </main>
    <?php include 'common/footer.php';?>
    <script type="text/javascript">
    $('.slider').slick({
        dots: !1,
        slidesToShow: 1,
        autoplay: 1,
        autoplaySpeed: 5000,
    });
    $('.category-list').slick({
        dots: !1,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: !1,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 760,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            }
        ]
    });

    $('.product-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: !1,
        dots: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 760,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            }
        ]
    });
    </script>
</body>
</html>
