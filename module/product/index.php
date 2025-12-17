<?php
	$product = new Product();
	$ac=getIndex("ac", "list");
	
	if ($ac=="list")
		{
			include ROOT."/module/product/list.php";
		}
	if ($ac=="detail")
		{
			include ROOT."/module/product/detail.php";
		}
?>