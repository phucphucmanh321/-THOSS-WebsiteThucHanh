<?php
    function addToCart($id, $name, $description, $price, $sizeId, $qty = 1)
{
	$size = new Size();

    // Nếu chưa có giỏ hàng -> tạo mới
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Nếu sản phẩm đã tồn tại -> tăng số lượng
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['qty'] += $qty;
    } else {
        // Ngược lại -> thêm sản phẩm mới
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
    redirect('index.php?mod=cart');
}


    $id    = $_POST['id'];
    $name  = $_POST['name'];
    $price = $_POST['price'];
    $sizeId = $_POST['sizeId'];
    $description = $_POST['description'];
    $qty = $_POST['quantity'];
    addToCart($id, $name, $description, $price, $sizeId, $qty);

?>