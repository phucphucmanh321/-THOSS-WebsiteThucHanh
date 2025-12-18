<?php 
    $cart = $_SESSION['cart'];
   
    $sum = 0;
?>
<section class="bread-crumb"
    style="background-image: url(//bizweb.dktcdn.net/100/419/543/themes/810317/assets/breadcrumb-bg.png?1716534891837)">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="/"><span>Trang chủ</span></a>
                        <span><i class="fa fa-angle-right"></i></span>
                    </li>
                    <li><strong>Giỏ hàng</strong></li>

                </ul>

            </div>
        </div>
    </div>
</section>


<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "item": {
                "@id": "https://chuottrang.vn",
                "name": "Trang chủ"
            }
        },






        {
            "@type": "ListItem",
            "position": 2,
            "item": {
                "@id": "https://chuottrang.vn/cart",
                "name": "Giỏ hàng"
            }
        }


    ]
}
</script>

<div class="container">
    <div class="box-heading relative">
        <h1 class="title-head page_title">Giỏ hàng của bạn</h1>
    </div>
</div>
<section class="main-cart-page main-container col1-layout">
    <div class="main container hidden-xs">
        <div class="col-main cart_desktop_page cart-page">
            <div class="cart page_cart hidden-xs">
                <form action="/cart"
                    method="post"
                    novalidate=""
                    class="margin-bottom-0">
                    <div class="bg-scroll">
                        <div class="cart-thead">
                            <div style="width: 15%;">Hình ảnh</div>
                            <div style="width: 30%"><span class="nobr">Tên sản phẩm</span></div>
                            <div style="width: 12%"
                                class="a-center"><span class="nobr">Đơn giá</span></div>
                            <div style="width: 12%"
                                class="a-center">Kích thước</div>
                            <div style="width: 12%"
                                class="a-center">Số lượng</div>
                            <div style="width: 12%"
                                class="a-center">Thành tiền</div>
                            <div style="width: 7%">Xoá</div>
                        </div>
                        <?php
                            foreach($cart as $item){ 
                                $sum+=$item['qty']*$item['price'];
                                ?>
                                <div class="cart-tbody">
                                    <div class="item-cart productid-123513742">
                                        <div style="width: 15%"
                                            class="image"><a class="product-image"
                                                title="MSS STRIPE LONG TEE <?= $item['description'] ?>"
                                                href="/long-tee-stripe"><img width="120"
                                                    height="auto"
                                                    alt="MSS STRIPE LONG TEE <?= $item['description'] ?>"
                                                    src="<?= BASE_URL."/image/".$product->getImageById($item['id'])[0]['path'] ?>"></a>
                                        </div>
                                        <div style="width: 30%"
                                            class="a-center">
                                            <h2 class="product-name"> <a href="/long-tee-stripe"><?= $item['name'] ?></a> <span
                                                    class="variant-title"> <?= $item['description'] ?></span> </h2>
                                        </div>
                                        <div style="width: 12%"
                                            class="a-center"><span class="item-price"> <span
                                                    class="price"><?= number_format($item['price']) ?>₫</span></span></div>
                                        <div style="width: 12%"
                                            class="a-center">
                                            <div class="input_qty_pr relative">
                                                <span><?= $item['size']['name'] ?></span>
                                            </div>
                                        </div>
                                        <div style="width: 12%"
                                            class="a-center">
                                            <div class="input_qty_pr relative">
                                                <span><?= $item['qty'] ?></span>
                                            </div>
                                        </div>
                                        <div style="width: 12%"
                                            class="a-center"><span class="cart-price"> <span class="price"><?= number_format($item['qty']*$item['price']) ?>₫</span>
                                            </span></div>
                                        <div style="width: 7%"><a class="button remove-item remove-item-cart"
                                                title="Xóa"
                                                href="javascript:;"
                                                data-id="123513742"><span><span>Xóa</span></span></a></div>
                                    </div>
                                </div>
                                
                            <?php }
                        ?>
                    </div>
                </form>
                <div class="cart-collaterals cart_submit row">
                    <div class="totals col-sm-12 col-md-12 col-xs-12">
                        <div class="totals">
                            <div class="inner">
                                <table class="table shopping-cart-table-total margin-bottom-0"
                                    id="shopping-cart-totals-table">
                                    <colgroup>
                                        <col>
                                        <col>
                                    </colgroup>
                                    <tfoot>
                                        <tr>
                                            <td colspan="20"
                                                class="a-right"></td>
                                            <td class="a-right"><span>Tổng tiền:</span> <strong><span
                                                        class="totals_price price"><?= number_format($sum) ?>₫</span></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <ul class="checkout">
                                    <li class="clearfix"><button
                                            class="btn btn-primary button btn-proceed-checkout f-right"
                                            title="Tiến hành đặt hàng"
                                            type="button"
                                            onclick="window.location.href='index.php?mod=cart&ac=checkout'"><span
                                                style=" text-transform: initial; ">Tiến hành đặt
                                                hàng</span></button><button class="btn btn-gray margin-right-15 f-right"
                                            title="Tiếp tục mua hàng"
                                            type="button"
                                            onclick="window.location.href='index?mod=product'"><span
                                                style=" text-transform: initial; ">Tiếp tục mua hàng</span></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    

</section>

