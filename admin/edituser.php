<?php
require '../system/db.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_GET[$id])){
        $id = $_GET['id']; 
    }else{
       $json = [
           'status' => false,
           'message' => 'Không tìm thấy sản phẩm'
       ];
    }
}