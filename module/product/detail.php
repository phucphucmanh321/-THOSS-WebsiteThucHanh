<?php    
    $item = $product->getItem($_GET['id']);
    $stockList = $product->getStockByProductId($item['id']);

?>
<section class="bread-crumb"
    style="background-image: url(//bizweb.dktcdn.net/100/419/543/themes/810317/assets/breadcrumb-bg.png?1716534891837)">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb">
                    <li class="home"> <a href="/"><span>Trang chủ</span></a> <span><i
                                class="fa fa-angle-right"></i></span> </li>
                    <li> <a href="/tshirt"><span>PRODUCT</span></a> <span><i class="fa fa-angle-right"></i></span> </li>
                    <li><strong><span><?= $item["name"] ?></span></strong>
                    <li>
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
    }, {
        "@type": "ListItem",
        "position": 2,
        "item": {
            "@id": "https://chuottrang.vn/big-ss-long-tee-brick",
            "name": "BIG SS LONG TEE (brick)"
        }
    }]
}
</script>


<script>
    var productStock = {};
    <?php foreach ($stockList as $s): ?>
        productStock[<?= (int)$s['size_id'] ?>] = <?= (int)$s['quantity'] ?>;
    <?php endforeach; ?>
</script>


<section class="product"
    itemscope
    itemtype="http://schema.org/Product">
    <meta itemprop="url"
        content="//chuottrang.vn/big-ss-long-tee-brick">
    <meta itemprop="name"
        content="BIG SS LONG TEE (brick)">
    <meta itemprop="image"
        content="http://bizweb.dktcdn.net/thumb/grande/100/419/543/products/img-0874ok-jpeg.jpg?v=1718781808970">
    <meta itemprop="description"
        content="Áo thun Chuot Trang COTTON sợi to, chất vải dày dặn, đứng phom.Hình và mực in bảo hành lỗi bong tróc, nếu đã sử dụng và giặt ủi theo hướng dẫn nhưng vẫn xảy ra lỗi,liên hệ hotline 079 3399 939 để được hỗ trợ bảo hành ạMàu: nâu gạch sữa, màu sắc thực tế sẽ khác ảnh ở tuỳ ánh sáng (trong nhà, ngoài trời, màu đèn vàng hay trắng) khác nhau, sẽ hiển thị chênh lệch màu ở mỗi loại thiết bị, tuỳ các hãng điện thoai, ipad, laptop.... quý khách cân nhắc trước khi mua ạ.">
    <meta itemprop="brand"
        content="chuột trắng shop">
    <meta itemprop="model"
        content="">
    <meta itemprop="sku"
        content="<?= $item['id'] ?>">
    <div class="hidden"
        itemprop="offers"
        itemscope
        itemtype="http://schema.org/Offer">
        <div class="inventory_quantity hidden"
            itemscope
            itemtype="http://schema.org/ItemAvailability"> <span class="a-stock"
                itemprop="supersededBy"> Còn hàng </span> </div>
        <link itemprop="availability"
            href="http://schema.org/InStock">
        <meta itemprop="priceCurrency"
            content="VND">
        <meta itemprop="price"
            content="550000">
        <meta itemprop="url"
            content="https://chuottrang.vn/big-ss-long-tee-brick">
        <meta itemprop="priceValidUntil"
            content="2099-01-01">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 details-product">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                        <div class="relative product-image-block ">
                            <div class="large-image"> <a
                                    href="<?= BASE_URL."/image/".$product->getImageById($item['id'])[0]['path'] ?>"
                                    class="checkurl"
                                    data-rel="prettyPhoto[product-gallery]"> <img id="zoom_01"
                                        src="<?= BASE_URL."/image/".$product->getImageById($item['id'])[0]['path'] ?>"
                                        alt="BIG SS LONG TEE (brick)"> </a>
                                <div class="hidden">
                                    <div class="item"> <a
                                            href="https://bizweb.dktcdn.net/100/419/543/products/img-0874ok-jpeg.jpg?v=1718781808970"
                                            data-image="https://bizweb.dktcdn.net/100/419/543/products/img-0874ok-jpeg.jpg?v=1718781808970"
                                            data-zoom-image="https://bizweb.dktcdn.net/100/419/543/products/img-0874ok-jpeg.jpg?v=1718781808970"
                                            data-rel="prettyPhoto[product-gallery]"> </a> </div>
                                    <div class="item"> <a
                                            href="https://bizweb.dktcdn.net/100/419/543/products/img-1031web.jpg?v=1718869475197"
                                            data-image="https://bizweb.dktcdn.net/100/419/543/products/img-1031web.jpg?v=1718869475197"
                                            data-zoom-image="https://bizweb.dktcdn.net/100/419/543/products/img-1031web.jpg?v=1718869475197"
                                            data-rel="prettyPhoto[product-gallery]"> </a> </div>
                                    <div class="item"> <a
                                            href="https://bizweb.dktcdn.net/100/419/543/products/img-1028web.jpg?v=1718869508570"
                                            data-image="https://bizweb.dktcdn.net/100/419/543/products/img-1028web.jpg?v=1718869508570"
                                            data-zoom-image="https://bizweb.dktcdn.net/100/419/543/products/img-1028web.jpg?v=1718869508570"
                                            data-rel="prettyPhoto[product-gallery]"> </a> </div>
                                    <div class="item"> <a
                                            href="https://bizweb.dktcdn.net/100/419/543/products/img-1196web.jpg?v=1718968602280"
                                            data-image="https://bizweb.dktcdn.net/100/419/543/products/img-1196web.jpg?v=1718968602280"
                                            data-zoom-image="https://bizweb.dktcdn.net/100/419/543/products/img-1196web.jpg?v=1718968602280"
                                            data-rel="prettyPhoto[product-gallery]"> </a> </div>
                                    <div class="item"> <a
                                            href="https://bizweb.dktcdn.net/100/419/543/products/img-1201web.jpg?v=1718968604580"
                                            data-image="https://bizweb.dktcdn.net/100/419/543/products/img-1201web.jpg?v=1718968604580"
                                            data-zoom-image="https://bizweb.dktcdn.net/100/419/543/products/img-1201web.jpg?v=1718968604580"
                                            data-rel="prettyPhoto[product-gallery]"> </a> </div>
                                </div>
                            </div>
                            <div id="gallery_01"
                                class="swiper-container more-views"
                                data-margin="10"
                                data-items="5"
                                data-direction="vertical">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"> <a
                                            href="<?= BASE_URL."/image/".$product->getImageById($item['id'])[0]['path'] ?>"
                                            class="thumb-link"
                                            title=""
                                            rel="<?= BASE_URL."/image/".$product->getImageById($item['id'])[0]['path'] ?>">
                                            <img src="<?= BASE_URL."/image/".$product->getImageById($item['id'])[0]['path'] ?>"
                                                alt="BIG SS LONG TEE (brick)"> </a> </div>
                                </div>
                                <div class="swiper-button-next hidden-lg"> <i class="fa fa-angle-down"></i> </div>
                                <div class="swiper-button-prev hidden-lg"> <i class="fa fa-angle-up"></i> </div>
                            </div>
                            <div class="swiper-button-next fixlg hidden-xs hidden-sm hidden-md"> <i
                                    class="fa fa-angle-down"></i> </div>
                            <div class="swiper-button-prev fixlg hidden-xs hidden-sm hidden-md"> <i
                                    class="fa fa-angle-up"></i> </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 details-pro">
                        <h1 class="title-head"><?= $item["name"] ?></h1>
                        <div class="review hidden">
                            <div class="sapo-product-reviews-badge sapo-product-reviews-badge-detail"
                                data-id="36234520"></div> <span class="line"> | </span> <span><b>Thương hiệu: </b> chuột
                                trắng shop </span>
                        </div>
                        <div class="detail-header-info"> Tình trạng: 
                            <span class="inventory_quantity">Còn <span id="qty-text">0</span> sản phẩm</span>
                            <span class="line">|</span> Mã SP: 
                            <span class="masp"><span id="size-text">S</span> </span> 
                        </div>
                        <div class="price-box"> <span class="special-price"><span
                                    class="price product-price"><?= $item["price"] ?>₫</span> </span>
                            <!-- Giá Khuyến mại --> <span class="old-price"><del
                                    class="price product-price-old">0₫</del> </span> <!-- Giá gốc -->
                        </div>
                        <div class="form-product">
                            <form enctype="multipart/form-data"
                                id="add-to-cart-form"
                                action="index.php?mod=cart&ac=add-to-cart"
                                method="post"
                                class="form-inline margin-bottom-10">
                                <style>
                                    label[for="product-select-option-0"] {display: none;}
                                    #product-select-option-0 {display: none;}
                                    #product-select-option-0+.custom-style-select-box {display: none !important;}
                                    label[for="product-select-option-1"] {display: none;}
                                    #product-select-option-1 {display: none;}
                                    #product-select-option-1+.custom-style-select-box {display: none !important;}
                                </style>
                                <script>
                                    $(window).load(function() {
                                        $('.selector-wrapper:eq(1)').hide();
                                    });
                                </script>
                                <div class="swatch clearfix"
                                    data-option-index="1">
                                    <div class="swheader">SIZE</div>
                                    
                                    <div data-value="S"
                                        class="swatch-element S soldout"> <input id="swatch-1-S"
                                            type="radio"
                                            name="sideId"
                                            checked
                                            value="1" /> <label for="swatch-1-S"> S <img
                                                class="crossed-out"
                                                src="//bizweb.dktcdn.net/100/419/543/themes/810317/assets/soldout.png?1716534891837"
                                                alt="S" /> </label> </div>
                                    <div data-value="M"
                                        class="swatch-element M soldout"> <input id="swatch-1-M"
                                            type="radio"
                                            name="sideId"
                                            value="2" /> <label for="swatch-1-M"> M <img
                                                class="crossed-out"
                                                src="//bizweb.dktcdn.net/100/419/543/themes/810317/assets/soldout.png?1716534891837"
                                                alt="M" /> </label> </div>
                                    <div data-value="L"
                                        class="swatch-element L soldout"> <input id="swatch-1-L"
                                            type="radio"
                                            name="sideId"
                                            value="3" /> <label for="swatch-1-L"> L <img
                                                class="crossed-out"
                                                src="//bizweb.dktcdn.net/100/419/543/themes/810317/assets/soldout.png?1716534891837"
                                                alt="L" /> </label> </div>
                                    <div data-value="XL"
                                        class="swatch-element XL soldout"> <input id="swatch-1-XL"
                                            type="radio"
                                            name="sideId"
                                            value="4" /> <label for="swatch-1-XL"> XL <img
                                                class="crossed-out"
                                                src="//bizweb.dktcdn.net/100/419/543/themes/810317/assets/soldout.png?1716534891837"
                                                alt="XL" /> </label> </div>
                                    
                                </div>


                                <script>
                                    $(document).ready(function () {

                                        function updateStock(sizeId, sizeName) {
                                            let qty = productStock[sizeId] ?? 0;

                                            // Update số lượng
                                            if (qty <= 0) {
                                                $('.inventory_quantity').html('<span style="color:red">Hết hàng</span>');
                                            } else {
                                                $('.inventory_quantity').html(
                                                    'Còn <span id="qty-text">' + qty + '</span> sản phẩm'
                                                );
                                            }

                                            // Update mã SP
                                            $('#size-text').text(sizeName);
                                        }

                                        // Load size mặc định (radio checked)
                                        let first = $('input[name="sideId"]:checked');
                                        if (first.length) {
                                            updateStock(
                                                first.val(),
                                                first.closest('.swatch-element').data('value')
                                            );
                                        }

                                        // Khi click size
                                        $('input[name="sideId"]').on('change', function () {
                                            let sizeId = $(this).val();
                                            let sizeName = $(this).closest('.swatch-element').data('value');
                                            updateStock(sizeId, sizeName);
                                        });

                                    });
                                </script>


                                
                                <script>
                                    let maxQty = 0;  

                                    maxQty = productStock[$("input[name='sideId']:checked").val()] ?? 1;

                                    function clampQty(v){
                                        v = parseInt(v);

                                        if (isNaN(v)) return 1;
                                        if (v < 1) return 1;
                                        if (v > maxQty) return maxQty;
                                        return v;
                                    }

                                    // Khi gõ vào input
                                    $("#qty").on("input", function(){

                                        // chặn chữ
                                        this.value = this.value.replace(/\D+/g, "");

                                        // clamp giá trị
                                        this.value = clampQty(this.value);
                                    });

                                    // Khi nhấn phím trong input
                                    $("#qty").on("keypress", function(e){

                                        // Ngăn chữ
                                        if (e.which < 48 || e.which > 57){
                                            e.preventDefault();
                                            return false;
                                        }
                                    });

                                    $(document).on("click", ".qtyplus", function(){
                                        let v = parseInt($("#qty").val()) || 1;
                                        $("#qty").val(clampQty(v + 1));
                                    });

                                    $(document).on("click", ".qtyminus", function(){
                                        let v = parseInt($("#qty").val()) || 1;
                                        $("#qty").val(clampQty(v - 1));
                                    });


                                    // Khi đổi size
                                    $("input[name='sideId']").change(function(){
                                        maxQty = productStock[$(this).val()] ?? 1;
                                        $("#qty").val(1);
                                        updateStockDisplay();
                                    });

                                    // kiểm tra lần cuối khi submit
                                    $("#add-to-cart-form").on("submit", function(e){

                                        let raw = $("#qty").val();

                                        // xóa toàn bộ chữ nếu còn sót
                                        raw = raw.replace(/\D+/g, "");
                                        $("#qty").val(raw);

                                        let v = parseInt(raw);

                                        if (!v || v < 1 || v > maxQty){
                                            alert("Số lượng không hợp lệ!");
                                            e.preventDefault();
                                            return false;
                                        }
                                    });
                                </script>




                                <script>

                                    function updateStockDisplay(){

                                        // lấy size đang chọn
                                        let sizeId = $("input[name='sideId']:checked").val();

                                        // tồn kho size đó
                                        let stock = productStock[sizeId] ?? 0;

                                        //  CỰC QUAN TRỌNG → GIỚI HẠN maxQty ĐÚNG
                                        maxQty = stock;

                                        // reset số lượng về 1
                                        $('#qty').val( stock > 0 ? 1 : 0 );

                                        if(stock < 1){

                                            // hết hàng
                                            $('#qty').prop('disabled',true);
                                            $('.qtyplus, .qtyminus').hide();
                                            $('#btnAddCart').prop('disabled',true).hide();

                                        } else {

                                            // còn hàng
                                            $('#qty').prop('disabled',false);
                                            $('.qtyplus, .qtyminus').show();
                                            $('#btnAddCart').prop('disabled',false).show();
                                        }
                                    }

                                    // chạy khi đổi size
                                    $("input[name='sideId']").change(function(){
                                        updateStockDisplay();
                                    });

                                    // chạy ngay khi load trang
                                    $(document).ready(function(){
                                        updateStockDisplay();
                                    });

                                </script>




                                <div class="form-group form-groupx form-detail-action clearfix "> 
                                    <label class="hidden">Số lượng: </label>

                                    <div class="custom custom-btn-number f-left"> 

                                        <span class="qtyminus">
                                            <i class="fa fa-caret-left"></i>
                                        </span>

                                        <input
                                            id="qty"
                                            name="quantity"
                                            value="1"
                                        />

                                        <span class="qtyplus">
                                            <i class="fa fa-caret-right"></i>
                                        </span>

                                    </div>

                                    <input type="hidden" name='price' value="<?= $item["price"] ?> " />
                                    <input type="hidden" name='description' value="<?= $item['description'] ?>" />   
                                    <input type="hidden" name='name' value="<?= $item["name"] ?> " />
                                    <input type="hidden" value="<?= $item['id'] ?>" name="id" />

                                    <button id="btnAddCart"
                                        type="submit"
                                        class="btn btn-lg btn-primary btn-cart btn-cart2"
                                        title="Cho vào giỏ hàng">
                                        <span>Thêm vào giỏ hàng</span>
                                    </button>

                                </div>

                            </form>
                            <div class="popup"></div>
                            <div id="popup-cart"
                                class="modal fade"
                                role="dialog">
                                <div id="popup-cart-desktop"
                                    class="clearfix">
                                    <div class="title-popup-cart"> <i class="fa fa-check"
                                        aria-hidden="true"></i> Bạn đã thêm <span class="cart-popup-name"
                                        style="color: red;"></span> vào giỏ hàng 
                                    </div>
                                    <div class="title-quantity-popup"> <a href="/cart"> Giỏ hàng của bạn (<span
                                                class="cart-popup-count"></span> sản phẩm) <i class="fa fa-caret-right"
                                                aria-hidden="true"></i> </a> 
                                    </div>
                                    <div class="content-popup-cart">
                                        <div class="thead-popup">
                                            <div style="width: 54%;"
                                                class="text-left">Sản phẩm</div>
                                            <div style="width: 15%;"
                                                class="text-center">Đơn giá</div>
                                            <div style="width: 15%;"
                                                class="text-center">Số lượng</div>
                                            <div style="width: 15%;"
                                                class="text-center">Thành tiền</div>
                                        </div>
                                        <div class="tbody-popup"> </div>
                                        <div class="tfoot-popup">
                                            <div class="tfoot-popup-1 clearfix">
                                                <div class="pull-left popup-ship">
                                                    <p>Giao hàng trên toàn quốc</p>
                                                </div>
                                                <div class="pull-right popup-total">
                                                    <p>Thành tiền: <span class="total-price"></span></p>
                                                </div>
                                            </div>
                                            <div class="tfoot-popup-2 clearfix"> <a class="button btn-proceed-checkout"
                                                    title="Tiến hành đặt hàng"
                                                    href="/checkout"><span>Tiến hành đặt hàng</span></a> <a
                                                    class="button btn-continue"
                                                    title="Tiếp tục mua hàng"
                                                    onclick="$('#popup-cart').modal('hide');"><span><span><i
                                                                class="fa fa-caret-left"
                                                                aria-hidden="true"></i> Tiếp tục mua
                                                            hàng</span></span></a> </div>
                                        </div>
                                    </div> <a title="Close"
                                        class="quickview-close close-window"
                                        href="javascript:;"
                                        onclick="$('#popup-cart').modal('hide');"><i
                                            class="fa  fa-times-circle"></i></a>
                                </div>
                                <div class="social-sharing clearfix">
                                    <div class="social-media"
                                        data-permalink="https://chuottrang.vn/big-ss-long-tee-brick"> Chia sẻ: <a
                                            target="_blank"
                                            href="//www.facebook.com/sharer.php?u=https://chuottrang.vn/big-ss-long-tee-brick"
                                            class="share-facebook"
                                            title="Chia sẻ lên Facebook"> <i class="fa fa-facebook"></i> </a> <a
                                            target="_blank"
                                            href="//twitter.com/share?text=BIG SS LONG TEE (brick)&amp;url=https://chuottrang.vn/big-ss-long-tee-brick"
                                            class="share-twitter"
                                            title="Chia sẻ lên Twitter"> <i class="fa fa-twitter"></i> </a> <a
                                            target="_blank"
                                            href="//pinterest.com/pin/create/button/?url=https://chuottrang.vn/big-ss-long-tee-brick&amp;media=http://bizweb.dktcdn.net/thumb/1024x1024/100/419/543/products/img-0874ok-jpeg.jpg?v=1718781808970&amp;description=BIG SS LONG TEE (brick)"
                                            class="share-pinterest"
                                            title="Chia sẻ lên pinterest"> <i class="fa fa-pinterest"></i> </a> <a
                                            target="_blank"
                                            href="//plus.google.com/share?url=https://chuottrang.vn/big-ss-long-tee-brick"
                                            class="share-google"
                                            title="+1"> <i class="fa fa-google-plus"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</section>
</body>

</html>