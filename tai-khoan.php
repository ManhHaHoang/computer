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
                        <h1 class="category-title">Hồ sơ của tôi</h1>
                    </div>
                    <div class="category-sort">
                        <ul class="listfilter" data-sort="sort">
                            <li class="frowitem profile-tab-item sort sortdefault active" data-value="#profile">
                                <span class="outline-secondary"> Chi tiết tài khoản</span>
                            </li>
                            <li class="frowitem profile-tab-item sort" data-value="#change-profile">
                                <span class="outline-secondary" >Đổi thông tin</span>
                            </li>
                            <li class="frowitem profile-tab-item sort" data-value="#order-detail">
                                <span class="outline-secondary" >Thông tin đơn hàng</span>
                            </li>
                            <li class="frowitem profile-tab-item sort">
                                <a href="/" class="outline-secondary">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                    <div class="profile-content">
                        <div id="profile" class="profile-item active">
                            <div class="my-account-profile">
                                <div class="profile-row flex-box">
                                    <label for="">Họ và tên:</label>
                                    <div class="my-account-content"> Hà Hoàng </div>
                                </div>
                                <div class="profile-row flex-box">
                                    <label for="">Số điện thoại:</label>
                                    <div class="my-account-content"> 0123456789 </div>
                                </div>
                                <div class="profile-row flex-box">
                                    <label for="">Giới tính</label>
                                    <div class="my-account-content"> Nam </div>
                                </div>
                                <div class="profile-row flex-box">
                                    <label for="">Ngày sinh:</label>
                                    <div class="my-account-content"> 26/6/1999 </div>
                                </div>
                                <div class="profile-row flex-box">
                                    <label for="">Email:</label>
                                    <div class="my-account-content"> hahoang@gmail.com </div>
                                </div>
                                <div class="profile-row flex-box">
                                    <label for="">Địa chỉ:</label>
                                    <div class="my-account-content"> Số 1 Ngõ 172 Nguyễn Tuân </div>
                                </div>
                                <div class="profile-row flex-box">
                                    <label for="">Tỉnh/thành phố:</label>
                                    <div class="my-account-content"> Hà Nội </div>
                                </div>
                                <div class="profile-row flex-box">
                                    <label for="">Quận/huyện:</label>
                                    <div class="my-account-content"> <i>Chưa có thông tin</i> </div>
                                </div>
                                <div class="profile-row flex-box">
                                    <label for="">Phường/xã:</label>
                                    <div class="my-account-content"> <i>Chưa có thông tin</i> </div>
                                </div>
                            </div>
                        </div>
                        <div id="change-profile" class="profile-item">
                            <div class="profile-row flex-box">
                                <label for="">Họ và tên:</label>
                                <input class="form-control" type="text" name="" value="Hà Hoàng" disabled>
                            </div>
                            <div class="profile-row flex-box">
                                <label for="">Số điện thoại:</label>
                                <input class="form-control" type="text" name="" value="0123456789">
                            </div>
                            <div class="profile-row flex-box">
                                <label for="">Giới tính</label>
                                <select class="" name="">
                                    <option value="Nam" selected>Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                            <div class="profile-row flex-box">
                                <label for="">Ngày sinh:</label>
                                <input class="form-control" type="text" name="" value="26/6/1999">
                            </div>
                            <div class="profile-row flex-box">
                                <label for="">Email:</label>
                                <input class="form-control" type="text" name="" value="hahoang@gmail.com" disabled>
                            </div>
                            <div class="profile-row flex-box">
                                <label for="">Mật khẩu cũ:</label>
                                <input class="form-control" type="password" name="" placeholder="Điền mật khẩu cũ">
                            </div>
                            <div class="profile-row flex-box">
                                <label for="">Mật khẩu mới:</label>
                                <input class="form-control" type="password" name="" placeholder="Mật khẩu mới">
                            </div>
                            <div class="profile-row flex-box">
                                <label for="">Nhập lại:</label>
                                <input class="form-control" type="password" name="" placeholder="Nhập lại mật khẩu">
                            </div>

                            <div class="profile-row flex-box">
                                <label for="">Địa chỉ:</label>
                                <input class="form-control" type="text" name="" value="Số 1 Ngõ 172 Nguyễn Tuân">
                            </div>
                            <div class="profile-row flex-box">
                                <label for="">Tỉnh/thành phố:</label>
                                <select class="" name="">
                                    <option value=""> - Chọn Tỉnh/thành phố - </option>
                                </select>
                            </div>
                            <div class="profile-row flex-box">
                                <label for="">Quận/huyện:</label>
                                <select class="" name="">
                                    <option value=""> - Chọn Quận/huyện - </option>
                                </select>
                            </div>
                            <div class="profile-row flex-box">
                                <label for="">Phường/xã:</label>
                                <select class="" name="">
                                    <option value=""> - Chọn Phường/xã -</option>
                                </select>
                            </div>
                        </div>
                        <div id="order-detail" class="profile-item">
                            <div class="your-cart-info">
                                <div class="cart-wrapper cart-head">
                                    <div class="cart-item cart-item-sortby">#</div>
                                    <div class="cart-item cart-item-info">Sản phẩm</div>
                                    <div class="cart-item cart-money">
                                        <div class="cart-item cart-item-price">Tên người nhận</div>
                                        <div class="cart-item cart-item-total">Tiền thanh toán</div>
                                    </div>
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
                                        <?php $oldPrice = ($value[3] != "" && $value[3] > 0 ) ? $value[3] : 0; ?>
                                        <?php $salePrice = ($value[4] != "" && $value[4] > 0 ) ? $value[4] : 0; ?>
                                        <?php $qty = $value[5] ?>
                                        <div class="cart-item cart-item-sortby"><?= $value[0] ?></div>
                                        <div class="cart-item cart-item-info">
                                            <a class="cart-item-image" href="/don-hang?IC432323">
                                                <img src="images/products/<?=$value[1]?>" alt="<?=$value[2]?>">
                                            </a>
                                            <div class="cart-item-detail">
                                                <a class="cart-item-name" href="/don-hang?IC432323">
                                                    <?=$value[2]?>
                                                </a>
                                                <div class="profile-order-info flex-box">
                                                    <span>(<?=$value[6]?>)</span>
                                                    <span>SL: <?=$value[5]?></span>
                                                    <span><?= number_format($value[3], 0, ",", ".") . ' ₫' ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-item cart-money" style="width: calc(100% - 350px - 20px)">
                                            <div class="cart-item cart-item-price shipping-name flex-box">
                                                <b>Hà Hoàng</b>
                                                <span>Số 1, ngõ 172 Nguyễn Tuân, Thanh Xuân Hà Nội</span>
                                                <span>ĐT: 0123456789</span>
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
