<?php
// Hàm xử lý lưu vào Session (code cũ của bạn)
function addToCartSession($id, $name, $description, $price, $sizeId, $qty = 1)
{
    $size = new Size();
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['qty'] += $qty;
    } else {
        $_SESSION['cart'][$id] = [
            'id' => $id,
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'size' => [
                'id' => $sizeId,
                'name' => $size->getName($sizeId),
            ],
            'qty' => $qty
        ];
    }
}

// Lấy dữ liệu từ POST
$id          = $_POST['id'];
$name        = $_POST['name'];
$price       = $_POST['price'];
$sizeId      = $_POST['sizeId'];
$description = $_POST['description'];
$qty         = $_POST['quantity'];

// KIỂM TRA TRẠNG THÁI ĐĂNG NHẬP
if (isset($_SESSION['login-session'])) {
    // Nếu đã đăng nhập -> Lưu vào Database thông qua lớp Cart
    $userId = $_SESSION['login-session']['userId'];
    $cart = new Cart();
    $cart->add($userId, $id, $qty, $sizeId);
} else {
    // Nếu chưa đăng nhập -> Lưu vào Session như cũ
    addToCartSession($id, $name, $description, $price, $sizeId, $qty);
}

// Sau khi xử lý xong thì chuyển hướng về trang giỏ hàng
redirect('index.php?mod=cart');
