<?php
$homeList = [
    ["Laptop", "laptop"],
    ["PC", "pc"],
    ["Màn hình", "display"],
    ["Linh kiện", "accessories"]
]
?>
<?php foreach ($homeList as  $value) { ?>
    <div id="<?= $value[1]?>" class="home-list-products">
        <div class="home-list-products-title">
            <div class="title">
                <?= $value[0]?>
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
            <?php for ($f=1; $f < 11; $f++) { ?>
                <div class="list-product-info-item">
                    <a class="list-product-image" href="">
                        <img src="/images/products/<?=$f?>.jpg" alt="">
                    </a>
                    <a class="list-product-info-title" href="">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    </a>
                    <div class="product-price">
                        <span class="new-price">10.190.000 ₫</span>
                        <span class="old-price">10.690.000 ₫</span>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<?php } ?>
