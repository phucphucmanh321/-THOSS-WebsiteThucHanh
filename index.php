<?php

	include "./config/config.php";

	// Nạp file chứa các hàm tiện ích dùng chung
	include ROOT."/include/function.php";

	// Đăng ký hàm autoload: khi khởi tạo một class, PHP sẽ tự động tìm và load file class tương ứng
	spl_autoload_register("loadClass");

	// Khởi tạo đối tượng kết nối CSDL (class Db sẽ được tự động load từ file Db.class.php)
	$db = new Db();
    session_start();

    
 	include_once "include/header.php";
?>

<h1 class="hidden">Chuột Trắng - </h1>




<div class="contain">
    <?php
		$mod = getIndex("mod","home");
        
        switch($mod)
        {
            case "product":
                include "module/product/index.php";
                break;
            default:
                include "module/home/index.php";
                break;
        }
	?>
</div>

<script>
$('.home-slider').slick({
    lazyLoad: 'ondemand',
    centerMode: false,
    focusOnSelect: true,
    dots: false,
    loop: true,
    infinite: true,
    autoplaySpeed: 3000,
    autoplay: true,
    dots: false,
    arrows: true,
    slidesToShow: 1

});
</script>

<style>
button.slick-prev.slick-arrow {
    position: absolute;
    bottom: 50%;
    z-index: 99999;
    left: 0;
    background: red;
    color: #fff;
    border: none;
}

button.slick-next.slick-arrow {
    position: absolute;
    bottom: 50%;
    z-index: 99999;
    right: 0;
    background: red;
    color: #fff;
    border: none;
}
</style>



<?php
    include "include/footer.php"
?>