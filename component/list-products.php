<div class="home-list-products">
    <div class="home-list-products-title">
        <div class="title">
            Máy tính xách tay
        </div>
        <div class="list-hot-category">
            <a href="">Asus</a>
            <a href="">Macbook</a>
            <a href="">Samsung</a>
            <a href="">Dell</a>
            <a href="">HP</a>
            <a href="">Lennovo</a>
        </div>
    </div>
    <div class="list-product-info">
        <?php for ($i=1; $i < 11; $i++) { ?>
            <div class="list-product-info-item">
                <a class="list-product-image" href="">
                    <img src="/images/products/<?=$i?>.jpg" alt="">
                </a>
                <a class="list-product-info-title" href="">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit
                </a>
                <div class="product-price">
                    <span class="new-price">{{item1.priceformat}}</span>
                    <span class="old-price">{{item1.originalpriceformat}}</span>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
