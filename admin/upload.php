<?php
  require '../admin/inc/header.php';
  require '../system/db.php';
?>


<?php 
    if(isset($_FILES['avt'])){
        $id = 1;
        $avt = $_FILES['avt'];

        $updateDir = 'upload/';
        $updateFile = $updateDir . basename($avt['name']);

        if(move_uploaded_file($avt['tmp_name'], $updateFile)){

            $updateSQL = "update users set avt = '$updateFile' where userid = '$id'";
            $result = mysqli_query($db, $updateSQL);
            if($result){
                header('location:   account-settings.php');
            } else {
                echo "Lỗi cập nhật ảnh: " . mysqli_error($db);
            }
        } else {
            echo "Lỗi tải ảnh lên server.";
        }
    }
?>


