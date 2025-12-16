<?php
	$product = new Product();
	$ac=getIndex("ac", "list");
	
	if ($ac=="list")
		{
			include ROOT."/module/product/list.php";
		}

?>