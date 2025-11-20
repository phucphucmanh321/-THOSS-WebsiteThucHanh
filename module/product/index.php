<?php
	$product = new Product();
	$ac=getIndex("ac", "list");
	if ($ac=="home")
		{
			include ROOT."/module/home/index.php";
		}
	if ($ac=="list")
		{
			include ROOT."/module/product/list.php";
		}
	if ($ac=="detail")
		{
			$id=getIndex("id", "");
			include ROOT."/module/product/detail.php";	
		}
?>