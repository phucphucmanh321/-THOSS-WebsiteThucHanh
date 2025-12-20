<?php
$orderId = getIndex('orderId');
$order = $db->select("SELECT * FROM `orders` WHERE id = :id", [':id' => $orderId])[0];
$items = $db->select("SELECT i.*, p.name as p_name 
                      FROM order_item i 
                      JOIN product p ON i.product_id = p.id 
                      WHERE i.order_id = :id", [':id' => $orderId]);
?>

<div id="printable-area">
    <div class="container-invoice">

        <div class="header-section">
            <h1>HÓA ĐƠN ĐIỆN TỬ</h1>
            <div class="order-info">
                Mã đơn hàng: <strong>#<?= $order['id'] ?></strong>
            </div>
            <div class="order-date">
                Ngày đặt: <?= date('d/m/Y - H:i', strtotime($order['created_at'])) ?>
            </div>
        </div>

        <div class="info-flex">
            <div class="info-col">
                <h3>Thông tin người nhận</h3>
                <p><strong>Họ tên:</strong> <?= $order['fullname'] ?></p>
                <p><strong>Điện thoại:</strong> <?= $order['phone'] ?></p>
                <p><strong>Email:</strong> <?= $order['email'] ? $order['email'] : 'N/A' ?></p>
                <p><strong>Địa chỉ:</strong> <?= $order['address'] ?></p>
            </div>
            <div class="info-col text-right">
                <h3>Đơn vị cung cấp</h3>
                <p><strong>CHUỘT TRẮNG STORE</strong></p>
                <p>Hotline: 090.xxx.xxxx</p>
                <p>Website: chuottrang.vn</p>
                <p class="status-wrap"><span class="status-badge"><?= $order['status'] ?></span></p>
            </div>
        </div>

        <table class="invoice-table">
            <thead>
                <tr>
                    <th class="text-left">SẢN PHẨM</th>
                    <th class="text-center">SL</th>
                    <th class="text-right">ĐƠN GIÁ</th>
                    <th class="text-right">THÀNH TIỀN</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                    <tr>
                        <td class="text-left">
                            <strong style="font-size: 19px;"><?= $item['p_name'] ?></strong><br>
                            <small style="color: #666;">Mã SP: CT-<?= $item['product_id'] ?></small>
                        </td>
                        <td class="text-center"><?= $item['quantity'] ?></td>
                        <td class="text-right"><?= number_format($item['price']) ?>₫</td>
                        <td class="text-right"><strong><?= number_format($item['price'] * $item['quantity']) ?>₫</strong></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="total-section">
            <p>Tổng tiền thanh toán:</p>
            <h2><?= number_format($order['total_price']) ?>₫</h2>
        </div>

        <div class="footer-note">
            Cảm ơn quý khách đã mua hàng tại Chuột Trắng Store!
        </div>
    </div>
</div>

<div class="no-print action-buttons">
    <button onclick="window.print()" class="btn-print">IN HÓA ĐƠN</button>
    <a href="index.php" class="btn-home">VỀ TRANG CHỦ</a>
</div>

<style>
    /* --- CSS CHO MÀN HÌNH MÁY TÍNH --- */
    body {
        font-family: Arial, Helvetica, sans-serif;
        background: #f0f0f0;
    }

    .container-invoice {
        max-width: 850px;
        margin: 40px auto;
        padding: 50px;
        border: 2px solid #000;
        background: #fff;
        color: #000;
        line-height: 1.4;
        box-shadow: 10px 10px 0px #ddd;
    }

    .header-section {
        text-align: center;
        border-bottom: 4px solid #000;
        padding-bottom: 20px;
        margin-bottom: 30px;
    }

    .header-section h1 {
        margin: 0;
        font-size: 38px;
        text-transform: uppercase;
    }

    .order-info {
        margin-top: 10px;
        font-size: 18px;
    }

    .order-date {
        margin-top: 5px;
        color: #555;
        font-size: 14px;
    }

    .info-flex {
        display: flex;
        justify-content: space-between;
        gap: 40px;
        margin-bottom: 30px;
    }

    .info-col {
        flex: 1;
        font-size: 16px;
    }

    .info-col h3 {
        font-size: 14px;
        text-transform: uppercase;
        border-bottom: 2px solid #eee;
        padding-bottom: 5px;
        margin-bottom: 10px;
    }

    .text-right {
        text-align: right;
    }

    .text-center {
        text-align: center;
    }

    .text-left {
        text-align: left;
    }

    .status-badge {
        padding: 3px 8px;
        border: 2px solid #000;
        font-weight: bold;
        font-size: 12px;
        text-transform: uppercase;
    }

    .invoice-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 16px;
        margin-bottom: 20px;
    }

    .invoice-table th {
        background: #f2f2f2;
        padding: 12px;
        border-top: 2px solid #000;
        border-bottom: 2px solid #000;
    }

    .invoice-table td {
        padding: 15px 12px;
        border-bottom: 1px solid #ddd;
    }

    .total-section {
        text-align: right;
        margin-top: 20px;
    }

    .total-section p {
        font-size: 18px;
        margin: 0;
    }

    .total-section h2 {
        font-size: 42px;
        margin: 5px 0;
        font-weight: bold;
    }

    .footer-note {
        margin-top: 40px;
        text-align: center;
        font-style: italic;
        color: #666;
        font-size: 14px;
    }

    .action-buttons {
        text-align: center;
        margin-top: 40px;
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .btn-print {
        background: #000;
        color: #fff;
        padding: 15px 30px;
        border: none;
        font-weight: bold;
        cursor: pointer;
        border-radius: 4px;
    }

    .btn-home {
        background: #fff;
        color: #000;
        padding: 14px 30px;
        border: 1px solid #999;
        text-decoration: none;
        font-weight: bold;
        border-radius: 4px;
    }


    /* --- CSS IN ẤN ĐÃ SỬA LẠI (CÓ VIỀN) --- */
    @media print {

        /* Reset HTML/Body để tránh cuộn trang thừa */
        html,
        body {
            height: 100%;
            margin: 0 !important;
            padding: 0 !important;
            overflow: hidden;
        }

        /* Ẩn tất cả */
        body * {
            visibility: hidden;
        }

        /* Hiện vùng in */
        #printable-area,
        #printable-area * {
            visibility: visible;
        }

        /* Định vị tuyệt đối */
        #printable-area {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            margin: 0;
            padding: 10mm;
            /* Lề trắng bên ngoài viền đen */
            box-sizing: border-box;
        }

        /* --- ĐÂY LÀ PHẦN SỬA LẠI ĐỂ HIỆN VIỀN --- */
        .container-invoice {
            width: 100% !important;
            max-width: none !important;
            margin: 0 !important;
            padding: 20px !important;
            /* Padding bên trong viền */
            border: 2px solid #000 !important;
            /* Hiện lại viền đen */
            box-shadow: none !important;
            box-sizing: border-box !important;
            /* Đảm bảo viền không làm vỡ layout */
        }

        /* Ẩn rác */
        .no-print,
        header,
        footer,
        iframe,
        .zalo-chat-widget,
        #fb-root {
            display: none !important;
        }

        @page {
            size: A4;
            margin: 0;
        }

        .footer-note {
            margin-top: 20px;
        }

        tr {
            page-break-inside: avoid;
        }
    }
</style>