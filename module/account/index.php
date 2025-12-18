<?php
$ac = getIndex("ac", "login");
$user = new User();
if ($ac == "login") {
    include ROOT . "/module/account/login.php";
}
if ($ac == "access") {
    include ROOT . "/module/account/access.php";
}
if ($ac == "logout") {
    include ROOT . "/module/account/logout.php";
}
if ($ac == "register") {
    include ROOT . "/module/account/register.php";
}
if ($ac == "createUser") {
    include ROOT . "/module/account/createUser.php";
}
