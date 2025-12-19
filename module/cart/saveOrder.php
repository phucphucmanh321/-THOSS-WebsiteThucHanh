<?php
// 1. Kiểm tra giỏ hàng có dữ liệu không
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    redirect("index.php?mod=cart");
}

// 2. Lấy thông tin từ Form (Hàm postIndex bạn đã có trong function.php)
$fullname = postIndex('fullname');
$phone    = postIndex('phone');
$address  = postIndex('address');
$email    = postIndex('email');
$userId   = isset($_SESSION['login-session']) ? $_SESSION['login-session']['userId'] : null;

// 3. Tính toán tổng tiền
$totalPrice = 0;
foreach ($_SESSION['cart'] as $item) {
    $totalPrice += $item['price'] * $item['qty'];
}

// 4. Lưu vào bảng `orders`
// Lưu ý: bảng của bạn là `orders` (có chữ s), status mặc định là 'pending'
$sqlOrder = "INSERT INTO `orders` (user_id, fullname, phone, address, email, total_price, status) 
             VALUES (:uid, :name, :phone, :addr, :email, :total, 'pending')";

$db->insert($sqlOrder, [
    ':uid'   => $userId,
    ':name'  => $fullname,
    ':phone' => $phone,
    ':addr'  => $address,
    ':email' => $email,
    ':total' => $totalPrice
]);

// 5. Lấy ID của hóa đơn vừa tạo để lưu chi tiết và hiển thị invoice
// Vì lớp Db hiện tại chưa có hàm getLastInsertId, ta dùng truy vấn để lấy ID mới nhất của user này
$res = $db->select("SELECT id FROM `orders` WHERE fullname = :name AND phone = :phone ORDER BY created_at DESC LIMIT 1", [
    ':name' => $fullname,
    ':phone' => $phone
]);
$orderId = $res[0]['id'];

// 6. Lưu chi tiết sản phẩm vào bảng `order_item`
foreach ($_SESSION['cart'] as $item) {
    $sqlItem = "INSERT INTO `order_item` (order_id, product_id, size_id, quantity, price) 
                VALUES (:oid, :pid, :sid, :qty, :pri)";

    $db->insert($sqlItem, [
        ':oid' => $orderId,
        ':pid' => $item['id'],
        ':sid' => $item['size']['id'],
        ':qty' => $item['qty'],
        ':pri' => $item['price']
    ]);
}

// 7. Xóa giỏ hàng sau khi đặt thành công
if ($userId) {
    // Nếu đã đăng nhập, xóa trong Database
    $cart = new Cart();
    $cart->clear($userId);
}
// Xóa trong Session
unset($_SESSION['cart']);

// 8. Chuyển hướng sang trang hiển thị Hóa đơn điện tử
redirect("index.php?mod=cart&ac=invoice&orderId=$orderId");
