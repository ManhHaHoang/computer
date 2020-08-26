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
                        <h1 class="category-title">Chi tiết giỏ hàng</h1>
                    </div>
                    <div class="cart-page flex-box">
                        <div class="your-information">
                            <div class="cart-page-title flex-box">
                                <span>Thông tin thanh toán của bạn</span>
                                <span class="login-button">Bạn có tài khoản? <strong>Đăng nhập</strong> </span>
                            </div>
                            <div class="your-information-info">
                                <input class="form-control" type="text" name="" value="" placeholder="Tên của bạn">
                                <div class="information-row flex-box">
                                    <input class="form-control" type="text" name="" value="" placeholder="Số điện thoại của bạn">
                                    <input class="form-control" type="text" name="" value="" placeholder="Email của bạn">
                                </div>
                                <div class="information-row flex-box">
                                    <select class="" name="">
                                        <option value=""> - Chọn Tỉnh / Thành phố - </option>
                                        <option value="">Hà Nội</option>
                                        <option value="">Hồ Chí Minh</option>
                                    </select>
                                    <select class="" name="">
                                        <option value=""> - Chọn Quận / Huyện - </option>
                                    </select>
                                </div>
                                <input class="form-control" type="text" name="" value="" placeholder="Địa chỉ chi tiết">
                            </div>
                        </div>
                        <div class="yout-cart">
                            <div class="cart-page-title flex-box">
                                <span>Thông tin đơn hàng của bạn</span>
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
                                        <div class="cart-item cart-money">
                                            <div class="cart-item cart-item-price">
                                                <?php $oldPrice = ($value[3] != "" && $value[3] > 0 ) ? $value[3] : 0; ?>
                                                <?php $salePrice = ($value[4] != "" && $value[4] > 0 ) ? $value[4] : 0; ?>
                                                <?php $qty = $value[5] ?>
                                                <span class="sale-pPrice">
                                                    <?= number_format($value[3], 0, ",", ".") . ' ₫' ?>
                                                </span>
                                                <span class="old-price">
                                                    <?php if ($value[4] != "" && $value[4] > 0):?>
                                                        <?= number_format($value[4], 0, ",", ".") . ' ₫' ?>
                                                    <?php endif;?>
                                                </span>
                                            </div>
                                            <div class="cart-item cart-item-qty">
                                                <div class="cart-qty-box">
                                                    <button class="form-control" type="button">
                                                        <svg class="qty-icon" viewBox="0 -192 426.66667 426" xmlns="http://www.w3.org/2000/svg"><path fill="#999" d="m405.332031 43h-384c-11.773437 0-21.332031-9.558594-21.332031-21.332031 0-11.777344 9.558594-21.335938 21.332031-21.335938h384c11.777344 0 21.335938 9.558594 21.335938 21.335938 0 11.773437-9.558594 21.332031-21.335938 21.332031zm0 0"/></svg>
                                                    </button>
                                                    <input class="form-control" type="number" placeholder="1" min="1" max="9" value="<?=$value[5]?>">
                                                    <button class="form-control" type="button">
                                                        <svg class="qty-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path fill="#999" d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216 v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z"/></svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="cart-item cart-item-total">
                                                <?php $totalPrice = ($oldPrice * $qty);
                                                echo number_format($totalPrice, 0, ",", ".") . ' ₫';
                                                ?>
                                            </div>
                                        </div>
                                        <div class="cart-item cart-item-action">
                                            <span id="deleteItem<?= $value[0] ?>" class="delete-item">
                                                &times;
                                            </span>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="cart-wrapper cart-footer">
                                    <div class="cart-item item-info">
                                        <label for="">Lời nhắn</label>
                                        <textarea name="name" rows="2" class="form-control" placeholder="Gửi lời nhắn cho chúng tôi"></textarea>
                                    </div>
                                    <div class="cart-item payment-box">
                                        <div class="payment-item sub-total">
                                            <span>Tổng tiền hàng <small>(6 sản phẩm)</small>:</span> <span class="payment-price">105.519.000₫</span>
                                        </div>
                                        <div class="payment-item shipping-fee">
                                            <span>Phí vận chuyển:</span> <span class="payment-price">0₫</span>
                                        </div>
                                        <div class="payment-item order-total-price">
                                            <span>Tổng thanh toán:</span> <span class="payment-price">105.519.000₫</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="checkout-wrapper">
                                    <a href="/" class="button">
                                        Tiếp tục mua hàng
                                    </a>
                                    <a href="mua-hang-thanh-cong" class="button secondary checkout-buynow">
                                        MUA NGAY
                                    </a>
                                </div>
                            </div>
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
