<?php
require '../system/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['img'])) {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            $json = [
                'status' => false,
                'message' => 'Không tìm thấy sản phẩm'
            ];
        }
        $avt = $_FILES['img'];
        $updateDir = 'upload/';
        $updateFile = $updateDir . basename($avt['name']);
        if (move_uploaded_file($avt['tmp_name'], $updateFile)) {
            $updateSQL = "update product set img = '$updateFile' where productID = '$id'";
            $result = mysqli_query($db, $updateSQL);
            if ($result) {
                $json = [
                    'status' => true,
                    'message' => 'Cập nhật ảnh thành công'
                ];
            } else {
                $json = [
                    'status' => false,
                    'message' => 'Cập nhật ảnh thất bại',
                    'error' => mysqli_error($db)
                ];
            }
        } else {
            $json = [
                'status' => false,
                'message' => 'Cập nhật ảnh thất bại'
            ];
        }
    }
    echo json_encode($json);
} else {
    echo 'Không tìm thấy trang';
}
