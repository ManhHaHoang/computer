<header class="site-header">
    <div class="top-header">
        <?php include 'common/top-header.php';?>
    </div>
    <div class="header-middle site-w flex-box align-c">
        <div class="is-mobile open-menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <a class="site-logo" href="/">
            <img src="/images/logo.svg" alt="">
        </a>
        <div class="header-right flex-box">
            <form class="search-header flex-box flex-e" action="/search" method="post">
                <input class="form-control" type="text" name="" placeholder="Nhập từ khóa bạn muốn tìm">
                <button class="button" type="submit" name="button">
                    <i class="icon-search"></i>
                </button>
            </form>
            <div class="header-component">
                <div class=" item">
                    <a class="hotline-item" href="tel:0123456789">
                        <i class="icon-phone-call"></i>
                        <span>Hotline<b>0123456789</b></span>
                    </a>
                </div>
                <div class="login-button">
                    <img src="/images/user.svg" alt="">
                    <span class="login-txt">Đăng nhập <br> Đăng ký</span>
                </div>
                <div class="item">
                    <a class="shopping-cart" href="#cart">
                        <img class="shopping-cart-icon" src="images/shopping-cart.svg" alt="">
                        <span class="shopping-cart-number">0</span>
                    </a>
                </div>
                <div class="language-box flex-box">
                    <a href="/?lang=en">
                        <img src="/images/fl-en.png" alt="">
                    </a>
                    <a class="active" href="/?lang=en">
                        <img src="/images/fl-vi.png" alt="">
                    </a>
                </div>
                <div class="is-mobile open-search-icon">
                    <i class="icon-search"></i>
                </div>
            </div>

        </div>
    </div>
    <div class="backgroud-transparent"></div>
</header>
