<?php
	$ac=getIndex("ac", "list");
	$product = new Product();
	if ($ac=="list")
		{
			if(isset($_SESSION['cart']))
				include ROOT."/module/cart/list.php";
			else echo "<h2 style='color: red'>Giỏ hàng trống</h2>";
		}
	if ($ac=="add-to-cart")
		{
			$id=getIndex("id", "");
			include ROOT."/module/cart/add-to-cart.php";	
		}
	if ($ac=="checkout")
		{
			$id=getIndex("id", "");
			include ROOT."/module/cart/checkout.php";	
		}
?>