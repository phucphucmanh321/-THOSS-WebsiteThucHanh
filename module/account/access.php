<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$myUser = $user->getUser($username);
print_r($myUser);

if (!$myUser) {
    $_SESSION['error'] = 'Tài khoản không tồn tại';
    redirect('index?mod=account');
}

if (!password_verify($password, $myUser['password'])) {
    $_SESSION['error'] = 'Mật khẩu không đúng';
    redirect('index?mod=account');
}

$_SESSION['login-session'] = [
    'userId'   => $myUser['id'],
    'username' => $myUser['username']
];
$_SESSION['success'] = 'Đăng nhập thành công';
redirect('index.php?mod=product');
