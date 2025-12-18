<?php
$username = $_POST['username'];
$password = $_POST['password'];
$hashPassword = password_hash($password, PASSWORD_DEFAULT);

$user->create($username, $hashPassword);
redirect('index?mod=account');
