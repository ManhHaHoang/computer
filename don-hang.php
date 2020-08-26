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
    <link rel="stylesheet" href="assets/css/cart.css?v=<?=$ver?>">
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
                        <h1 class="category-title">Thông tin chi tiết đơn hàng</h1>
                    </div>
                    <div id="profile" class="profile-item active">
                        <div class="my-account-profile">
                            <div class="profile-row flex-box">
                                <label for="">Đơn hàng:</label>
                                <div class="my-account-content"> R00427315 </div>
                            </div>
                            <div class="profile-row flex-box">
                                <label for="">Ngày giao:</label>
                                <div class="my-account-content"> 13/06/2018 </div>
                            </div>
                            <div class="profile-row flex-box">
                                <label for="">Trạng thái:</label>
                                <div class="my-account-content"> Thành công </div>
                            </div>
                            <div class="profile-row flex-box">
                                <label for="">Tổng tiền hàng:</label>
                                <div class="my-account-content"> 105.519.000₫ </div>
                            </div>
                            <div class="profile-row flex-box">
                                <label for="">Phí vận chuyển:</label>
                                <div class="my-account-content"> 0 </div>
                            </div>
                            <div class="profile-row flex-box">
                                <label for="">Tổng cộng:</label>
                                <div class="my-account-content"> 105.519.000₫ </div>
                            </div>
                        </div>
                        <div class="your-cart-info">
                            <div class="cart-wrapper cart-head">
                                <div class="cart-item cart-item-sortby">#</div>
                                <div class="cart-item cart-item-info">Sản phẩm</div>
                                <div class="cart-item cart-money">
                                    <div class="cart-item cart-item-price">Đơn giá</div>
                                    <div class="cart-item cart-item-qty">Số lượng</div>
                                    <div class="cart-item cart-item-total">Thành tiền</div>
                                </div>
                                <div class="cart-item cart-item-action"></div>
                            </div>

                            <?php
                            $cartItem = [
                                ["1", "1.jpg", "Dell Inspiron N3593C i3 1005G1/P75F013N93C", "11190000", "11590000", "2", "Ram 8GB"],
                                ["2", "2.jpg", "Asus Vivibook A412DA-EK160T/R5-3500U", "14490000","","1", "Ram 16GB"],
                                ["3", "3.jpg", "HP 15s-fq1107TU/i3-1005G1", "10250000","10690000","1", ""],
                                ["4", "4.jpg", "Asus Vivobook X509FA-EJ871T/i3-8145U", "10440000", "10890000","1", "Màu:Trắng"],
                                ["5", "5.jpg", "HP 15s-fq0003TU/Pentium N5000", "7990000","","1", "SSD 256 GB, Ram 4GB"],
                            ]
                            ?>
                            <?php foreach ($cartItem as $key => $value) { ?>
                                <div class="cart-wrapper cart-body">
                                    <div class="cart-item cart-item-sortby"><?= $value[0] ?></div>
                                    <div class="cart-item cart-item-info">
                                        <a class="cart-item-image" href="/chi-tiet-san-pham">
                                            <img src="images/products/<?=$value[1]?>" alt="<?=$value[2]?>">
                                        </a>
                                        <div class="cart-item-detail">
                                            <a class="cart-item-name" href="/chi-tiet-san-pham">
                                                <?=$value[2]?>
                                            </a>
                                            <span><?=$value[6]?></span>
                                        </div>
                                    </div>
                                    <div class="cart-item cart-money" style="width: calc(100% - 350px - 20px)">
                                        <div class="cart-item cart-item-price">
                                            <?php $oldPrice = ($value[3] != "" && $value[3] > 0 ) ? $value[3] : 0; ?>
                                            <?php $salePrice = ($value[4] != "" && $value[4] > 0 ) ? $value[4] : 0; ?>
                                            <?php $qty = $value[5] ?>
                                            <span class="sale-pPrice">
                                                <?= number_format($value[3], 0, ",", ".") . ' ₫' ?>
                                            </span>
                                        </div>
                                        <div class="cart-item cart-item-qty">
                                                <span><?=$value[5]?></span>
                                        </div>
                                        <div class="cart-item cart-item-total">
                                            <?php $totalPrice = ($oldPrice * $qty);
                                            echo number_format($totalPrice, 0, ",", ".") . ' ₫';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
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

</body>
</html>
