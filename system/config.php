<?php
require_once 'db.php';

mysqli_set_charset($db, "utf8");
if (isset($_POST['userName']) && isset($_POST['password'])) {
    $user = mysqli_real_escape_string($db, $_POST['userName']);
    $pwd = mysqli_real_escape_string($db, $_POST['password']);
    $role = mysqli_query($db, "select * from `users` where `username` = '$user' and `password` = '$pwd'");
    $check = mysqli_num_rows($role);
  
}
