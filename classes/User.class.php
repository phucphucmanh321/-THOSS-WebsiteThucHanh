<?php
    class User extends Db{
        public function create($username, $password, $role = 'customer'){
            $validRole = ['admin','customer'];
            if(!in_array($role,$validRole)){
                throw new Exception("Giá trị không hợp lệ");
            }
            $sql = "insert into user(username,password,role) values(:username, :password, :role)";
            return $this->select($sql,[':username'=>$username, ':password' => $password, ':role' => $role]);
        }
        public function getUser($username){
            $sql = "select id,username,password from user where username=:username";
            return $this->select($sql,[':username'=>$username])[0];
        }
    }
?>