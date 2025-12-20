<?php
$ac = getIndex("ac", "list");
$product = new Product();

if ($ac == "list") {
	// [MỚI] Nếu đã đăng nhập, nạp dữ liệu từ DB vào Session tạm trước khi hiển thị
	if (isset($_SESSION['login-session'])) {
		$userId = $_SESSION['login-session']['userId'];
		$cart = new Cart();
		$_SESSION['cart'] = $cart->get($userId);
	}

	// Hiển thị giỏ hàng
	if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
		include ROOT . "/module/cart/list.php";
	} else {
		echo "<h2 style='color: red; text-align: center; margin-top: 50px;'>Giỏ hàng trống</h2>";
	}
}

if ($ac == "add-to-cart") {
	// File này xử lý dữ liệu từ form Detail gửi qua
	include ROOT . "/module/cart/add-to-cart.php";
}

if ($ac == "checkout") {
	include ROOT . "/module/cart/checkout.php";
}

// THÊM 2 DÒNG NÀY VÀO:
if ($ac == "saveOrder") {
	include ROOT . "/module/cart/saveOrder.php";
}

if ($ac == "invoice") {
	include ROOT . "/module/cart/invoice.php";
}
