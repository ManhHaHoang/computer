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
                        <h1 class="category-title">Chi tiết đơn hàng</h1>
                    </div>
                    <div class="page-success">
                        <p class="flex-box flex-c">
                            <img src="/images/cart.png" alt="">
                        </p>
                        <p>Cảm ơn bạn đã mua hàng tại iCare.com.</p>
                        <p>Trong thời gian chờ iCare.com giao hàng tới bạn. Bạn có thể </p>
                        <ul>
                            <li>Kiểm tra đơn hàng <b>KIO2RZsMbGA6b</b> <a href="/tai-khoan">tại đây!</a> </li>
                            <li>Bạn có thể xem nhưng sản phẩm khác của chúng tôi <a href="/danh-muc?san-oham-ban-chay">tại đây</a> </li>
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
