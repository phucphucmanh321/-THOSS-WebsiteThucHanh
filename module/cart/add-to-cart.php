<?php
// Sử dụng hàm postIndex để tránh lỗi Undefined Index nếu dữ liệu từ form bị thiếu
$id          = postIndex('id');
$name        = postIndex('name');
$price       = postIndex('price');
$sizeId      = postIndex('sizeId');
$description = postIndex('description');

// Kiểm tra linh hoạt cả 'quantity' hoặc 'qty' từ form gửi qua
$qty = postIndex('quantity', postIndex('qty', 1));

// Hàm xử lý lưu vào Session (giữ nguyên logic của bạn)
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

// Chỉ xử lý nếu có ID sản phẩm hợp lệ
if ($id) {
    if (isset($_SESSION['login-session'])) {
        // Nếu đã đăng nhập -> Lưu vào Database
        $userId = $_SESSION['login-session']['userId'];
        $cart = new Cart();
        $cart->add($userId, $id, $qty, $sizeId);
    } else {
        // Nếu chưa đăng nhập -> Lưu vào Session
        addToCartSession($id, $name, $description, $price, $sizeId, $qty);
    }
}

// Chuyển hướng về trang giỏ hàng bằng hàm redirect đã được tối ưu
redirect('index.php?mod=cart');
