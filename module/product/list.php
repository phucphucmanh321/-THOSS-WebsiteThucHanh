<?php
    $list = $product->getAllProduct();
    $query = $_GET['query']??"";
    if($query!=""){
        $listFind = $product->getItemByName($query);
        $count = $product->getRowCount();
        if(!isset($listFind))
            echo "<br /><h3 style='padding-left:20px'>Không tìm thấy sản phẩm</h3>";
        else echo "<br /><h3 style='padding-left:20px'>Đã tìm thấy ".$count." sản phẩm</h3>";
    } 
?>
<style>
.products-view-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    /* 4 cột trên desktop */
    gap: 20px;
}

/* Responsive tablet */
@media (max-width: 992px) {
    .products-view-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* Responsive mobile */
@media (max-width: 576px) {
    .products-view-grid {
        grid-template-columns: 1fr;
    }
}
</style>
<?php
    if(isset($_SESSION['success'])) echo "<span style='color:green'>".$_SESSION['success']."</span>"; 
    unset($_SESSION['success']);
?>
<a href="<?= ROOT."/module/product/index.php?mod=addProduct" ?>"></a>
<section class="products-view products-view-grid">
<?php if ($query == "") { 
    foreach ($list as $item) { ?>
        <div class="product-box">
            <div class="product-thumbnail relative">
                <a href="index.php?mod=product&ac=detail&id=<?= $item['id'] ?>"
                   title="<?= $item["name"] ?>">
                    <img class="lazyload"
                         src="<?= BASE_URL."/image/".$product->getImageById($item['id'])[0]['path'] ?>"
                         alt="<?= $item["name"] ?>">
                </a>
            </div>

            <div class="product-info a-center">
                <h3 class="product-name">
                    <a href="index.php?mod=product&ac=detail&id=<?= $item['id'] ?>"
                       title="<?= $item["name"] ?>">
                        <?= $item["name"] ?>
                    </a>
                </h3>
                <div class="price-box clearfix">
                    <div class="special-price">
                        <span class="price product-price">
                            <?= number_format($item["price"]) ?>₫
                        </span>
                    </div>
                </div>
            </div>
        </div>
<?php } 
} else { 
    foreach ($listFind as $item) { ?>
        <div class="product-box">
            <div class="product-thumbnail relative">
                <a href="index.php?mod=product&ac=detail&id=<?= $item['id'] ?>"
                   title="<?= $item["name"] ?>">
                    <img class="lazyload"
                         src="<?= BASE_URL."/image/".$product->getImageById($item['id'])[0]['path'] ?>"
                         alt="<?= $item["name"] ?>">
                </a>
            </div>

            <div class="product-info a-center">
                <h3 class="product-name">
                    <a href="index.php?mod=product&ac=detail&id=<?= $item['id'] ?>"
                       title="<?= $item["name"] ?>">
                        <?= $item["name"] ?>
                    </a>
                </h3>
                <div class="price-box clearfix">
                    <div class="special-price">
                        <span class="price product-price">
                            <?= number_format($item["price"]) ?>₫
                        </span>
                    </div>
                </div>
            </div>
        </div>
<?php } 
} ?>

</section>