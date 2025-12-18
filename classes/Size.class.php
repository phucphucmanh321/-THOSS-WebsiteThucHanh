<?php
    class Size extends Db{
        public function getName($id){
            $sql = "select name from size where id = :id";
            return $this->select($sql,[':id' => $id])[0]['name'];
        }
    }
?>