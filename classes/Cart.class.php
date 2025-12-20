<?php
class Cart extends Db
{

    // 1. Hàm lấy danh sách giỏ hàng (Trả về y hệt cấu trúc Session)
    public function get($userId)
    {
        // Join 3 bảng: cart, product, size để lấy đủ thông tin
        $sql = "SELECT c.product_id, c.quantity, c.size_id, 
                       p.name as p_name, p.price, p.description, 
                       s.name as s_name 
                FROM cart c 
                JOIN product p ON c.product_id = p.id 
                LEFT JOIN size s ON c.size_id = s.id 
                WHERE c.user_id = :uid";

        $rows = $this->select($sql, [':uid' => $userId]);

        $data = [];
        foreach ($rows as $r) {
            // Tái tạo cấu trúc mảng giống hệt Session cũ của bạn
            $data[$r['product_id']] = [
                'id' => $r['product_id'],
                'name' => $r['p_name'],
                'description' => $r['description'],
                'price' => $r['price'],
                'qty' => $r['quantity'],
                'size' => [
                    'id' => $r['size_id'],
                    'name' => $r['s_name']
                ]
            ];
        }
        return $data;
    }

    // 2. Hàm thêm vào giỏ (Tự kiểm tra trùng lặp)
    public function add($userId, $productId, $qty, $sizeId)
    {
        // Kiểm tra xem user này đã có sản phẩm này với size này chưa
        $sqlCheck = "SELECT * FROM cart WHERE user_id = :uid AND product_id = :pid AND size_id = :sid";
        $params = [':uid' => $userId, ':pid' => $productId, ':sid' => $sizeId];
        $exist = $this->select($sqlCheck, $params);

        if (count($exist) > 0) {
            // Có rồi -> Cộng dồn số lượng
            $newQty = $exist[0]['quantity'] + $qty;
            $sqlUpdate = "UPDATE cart SET quantity = :qty WHERE id = :id";
            $this->update($sqlUpdate, [':qty' => $newQty, ':id' => $exist[0]['id']]);
        } else {
            // Chưa có -> Thêm mới
            $sqlInsert = "INSERT INTO cart(user_id, product_id, quantity, size_id) VALUES(:uid, :pid, :qty, :sid)";
            $this->insert($sqlInsert, [':uid' => $userId, ':pid' => $productId, ':qty' => $qty, ':sid' => $sizeId]);
        }
    }

    // 3. Hàm đồng bộ từ Session vào DB khi đăng nhập
    public function sync($sessionCart, $userId)
    {
        if (!empty($sessionCart)) {
            foreach ($sessionCart as $item) {
                // Lấy các thông tin từ cấu trúc Session của bạn
                $pid = $item['id'];
                $qty = $item['qty'];
                $sizeId = isset($item['size']['id']) ? $item['size']['id'] : 0;

                $this->add($userId, $pid, $qty, $sizeId);
            }
        }
    }

    // 4. Hàm xóa giỏ hàng (Dùng khi đặt hàng xong)
    public function clear($userId)
    {
        $this->delete("DELETE FROM cart WHERE user_id = :uid", [':uid' => $userId]);
    }
}
