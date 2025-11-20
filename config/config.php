<?php
$configDB = array();
$configDB["host"] 		= "qlbh.cl826620slbt.ap-southeast-2.rds.amazonaws.com";
$configDB["database"]	= "shop_quanao";
$configDB["username"] 	= "root";
$configDB["password"] 	= "Phuc1522004";
define("HOST", "qlbh.cl826620slbt.ap-southeast-2.rds.amazonaws.com");
define("DB_NAME", "shop_quanao");
define("DB_USER", "root");
define("DB_PASS", "Phuc1522004");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://".$_SERVER['SERVER_NAME']."/");//dia chi website
