<?php
$list = $_SESSION['cart'];
$sum = 0;
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán - Chuột Trắng</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .custom-radio:checked+div {
            border-color: #000;
            background-color: #f9fafb;
        }

        .custom-radio:checked+div .radio-dot {
            border-color: #000;
            background-color: #000;
            box-shadow: inset 0 0 0 3px #fff;
        }
    </style>
</head>

<body class="bg-white text-gray-700">

    <div class="flex flex-col lg:flex-row min-h-screen">

        <div class="w-full lg:w-3/5 px-4 py-8 lg:px-16 lg:py-12 order-2 lg:order-1">
            <div class="mb-8">
                <a href="/" class="inline-block">
                    <img src="//bizweb.dktcdn.net/100/419/543/themes/810317/assets/logo.png?1716534891837" alt="Chuột Trắng" class="h-12 w-auto">
                </a>
            </div>

            <nav class="flex text-sm text-gray-500 mb-6">
                <a href="/cart" class="text-blue-600 hover:underline">Giỏ hàng</a>
                <span class="mx-2">/</span>
                <span class="font-medium text-gray-900">Thông tin giao hàng</span>
            </nav>

            <form action="index.php?mod=cart&ac=saveOrder" method="POST" class="space-y-8">

                <section>
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Thông tin giao hàng</h2>

                    <div class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Họ và tên</label>
                                <input type="text" name="fullname" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-black focus:border-black transition outline-none" placeholder="Ví dụ: Nguyễn Văn A">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Số điện thoại</label>
                                <input type="tel" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-black focus:border-black transition outline-none" placeholder="Ví dụ: 090xxxxxxx">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-black focus:border-black transition outline-none" placeholder="email@example.com">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Địa chỉ</label>
                            <input type="text" name="address" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-black focus:border-black transition outline-none" placeholder="Số nhà, tên đường...">
                        </div>




                    </div>
                </section>

                <section>
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Phương thức thanh toán</h2>
                    <div class="flex flex-col space-y-3">

                        <label class="cursor-pointer group relative">
                            <input type="radio" name="payment" value="cod" class="custom-radio sr-only" checked>
                            <div class="border border-gray-300 rounded-lg p-4 flex items-start transition-all hover:border-gray-400">
                                <div class="flex items-center h-5">
                                    <span class="radio-dot w-5 h-5 border border-gray-300 rounded-full bg-white mr-3"></span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="font-medium text-gray-900">Thanh toán khi giao hàng (COD)</span>
                                        <i class="fas fa-money-bill-wave text-gray-400 text-lg"></i>
                                    </div>
                                    <p class="text-sm text-gray-500 hidden group-focus-within:block mt-2">
                                        Kiểm tra lại số điện thoại. Đơn hàng sẽ tự động huỷ nếu gọi không được quá 3 lần.
                                    </p>
                                </div>
                            </div>
                        </label>

                        <label class="cursor-pointer group relative">
                            <input type="radio" name="payment" value="banking" class="custom-radio sr-only">
                            <div class="border border-gray-300 rounded-lg p-4 flex items-start transition-all hover:border-gray-400">
                                <div class="flex items-center h-5">
                                    <span class="radio-dot w-5 h-5 border border-gray-300 rounded-full bg-white mr-3"></span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="font-medium text-gray-900">Chuyển khoản qua ngân hàng</span>
                                        <i class="fas fa-university text-gray-400 text-lg"></i>
                                    </div>
                                    <div class="text-sm text-gray-600 mt-2 p-3 bg-gray-50 rounded border border-gray-100 hidden" id="bank-info">
                                        <p class="font-bold text-blue-800 mb-1">💳 VIETCOMBANK</p>
                                        <p>Chủ TK: <b>NGUYỄN NGỌC AN</b></p>
                                        <p>Số TK: <b>CHUOTTRANG</b></p>
                                        <p class="mt-2 text-xs italic">Nội dung: WEB - Tên Khách - SĐT (VD: WEB - An - 0901234567)</p>
                                    </div>
                                </div>
                            </div>
                        </label>

                    </div>
                </section>

                <div class="flex flex-col-reverse md:flex-row items-center justify-between gap-4 mt-8 pt-6 border-t">
                    <a href="/cart" class="text-blue-600 hover:text-blue-800 text-sm flex items-center">
                        <i class="fas fa-chevron-left mr-2 text-xs"></i> Quay về giỏ hàng
                    </a>
                    <button type="submit" class="w-full md:w-auto bg-black text-white font-semibold py-4 px-8 rounded-lg hover:bg-gray-800 transition transform hover:-translate-y-0.5 shadow-lg">
                        HOÀN TẤT ĐƠN HÀNG
                    </button>
                </div>
            </form>

            <ul class="flex flex-wrap gap-4 text-xs text-gray-400 mt-12 pt-6 border-t border-gray-100">
                <li><a href="#" class="hover:underline">Chính sách hoàn trả</a></li>
                <li><a href="#" class="hover:underline">Chính sách bảo mật</a></li>
                <li><a href="#" class="hover:underline">Điều khoản sử dụng</a></li>
            </ul>
        </div>

        <div class="w-full lg:w-2/5 bg-gray-50 border-l border-gray-200 order-1 lg:order-2">
            <div class="px-4 py-8 lg:px-12 lg:py-12 sticky top-0">

                <h2 class="text-lg font-semibold text-gray-900 mb-6 hidden lg:block">Đơn hàng (1 sản phẩm)</h2>

                <?php
                foreach ($list as $item) {
                    $sum += $item['price'] * $item['qty'];
                ?>
                    <div class="space-y-4 mb-6 pb-6 border-b border-gray-200">
                        <div class="flex items-center gap-4">
                            <div class="relative w-16 h-16 border border-gray-200 rounded-lg bg-white p-1">
                                <img src="<?= BASE_URL . "/image/" . $product->getImageById($item['id'])[0]['path'] ?>" alt="Sản phẩm" class="w-full h-full object-cover rounded">
                                <span class="absolute -top-2 -right-2 bg-gray-500 text-white text-xs font-bold w-5 h-5 flex items-center justify-center rounded-full"><?= $item['qty'] ?></span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-sm font-medium text-gray-900"><?= $item['name'] ?></h3>
                                <p class="text-xs text-gray-500 mt-1"><?= $item['description'] ?></p>
                            </div>
                            <div class="text-sm font-medium text-gray-900"><?= number_format($item['price'] * $item['qty']) ?>₫</div>
                        </div>
                    </div>
                <?php  }
                ?>

                <div class="flex gap-2 mb-6 pb-6 border-b border-gray-200">
                    <input type="text" placeholder="Mã giảm giá" class="flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-black outline-none bg-white">
                    <button class="bg-gray-200 text-gray-500 font-semibold px-4 py-2 rounded-lg hover:bg-gray-300 transition disabled:opacity-50" disabled>Áp dụng</button>
                </div>

                <div class="space-y-3 text-sm text-gray-600 mb-6 pb-6 border-b border-gray-200">
                    <div class="flex justify-between">
                        <span>Tạm tính</span>
                        <span class="font-medium">490.000₫</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Phí vận chuyển</span>
                        <span class="text-gray-400">--</span>
                    </div>
                </div>

                <div class="flex justify-between items-center">
                    <span class="text-base text-gray-600">Tổng cộng</span>
                    <span class="text-2xl font-bold text-black"><?= number_format($sum) ?>₫</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        const radios = document.querySelectorAll('input[name="payment"]');
        const bankInfo = document.getElementById('bank-info');

        radios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'banking') {
                    bankInfo.classList.remove('hidden');
                } else {
                    bankInfo.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>