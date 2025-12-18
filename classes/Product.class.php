<?php
// Lớp Book kế thừa từ lớp Db (đã định nghĩa trước đó)
// => có thể sử dụng các phương thức kết nối và truy vấn CSDL của Db
class Product extends Db
{
	public function getItem($id){
		$sql = "select id, name, description, price, cate_id
			from product where id = :id";
		return $this->select($sql,[':id'=>$id])[0];
	}
	public function getAllProduct()
	{
		$sql = "select id, name, description, price, cate_id
			from product";
		return $this->select($sql);
	}
	public function getImageById($id)
	{
		$sql = "select *
			from product_image
			where product_id = :id";
		return $this->select($sql,[':id' => $id]);
	}
	public function getItemByName($name)
	{
		$sql = "select *
			from product
			where name like :name";
		return $this->select($sql,[':name' => '%'.$name.'%'])??null;
	}
	public function getStockByProductId($productId)
	{
		$sql = "SELECT ps.size_id, ps.quantity
				FROM product_stock ps
				WHERE ps.product_id = :product_id";

		return $this->select($sql, [':product_id' => $productId]);
	}

}
