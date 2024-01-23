<?php
switch ($_GET["act"]) {
    case 'login':
        require_once('../system/db.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = mysqli_real_escape_string($db, $_POST['userName']);
            $pwd = mysqli_real_escape_string($db, $_POST['password']);
            $pwd = md5($pwd);
            $json = [];
            $role = mysqli_query($db, "select * from `users` where `username` = '$user' and `password` = '$pwd'");
            $check = mysqli_num_rows($role);
            if ($check == 0) {
                $json["status"] = "error";
                $json["message"] = "Username or password is incorrect";
            } else {
                $_SESSION['username'] = $user;
                $json["status"] = "success";
                $json["message"] = "Login successfully";
            }
            echo json_encode($json);
        }
        break;

    case 'signup':
        require_once('../system/db.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user2 = mysqli_real_escape_string($db, $_POST['userName2']);
            $pwd2 = mysqli_real_escape_string($db, $_POST['password2']);
            $repwd3 = mysqli_real_escape_string($db, $_POST['repassword3']);
            $pwd2 = md5($pwd2);
            $repwd3 = md5($repwd3);
            $json = [];
            if ($pwd2 != $repwd3) {
                $json["status"] = "error";
                $json["message"] = "Password is not match";
                $check = mysqli_query($db, "INSERT INTO `users` (`username`, `password`) VALUES ('$user2', '$pwd2')");
                if ($check) {
                    $json["status"] = "success";
                    $json["message"] = "Register successfully";
                    $query = "select * from `users` where `username` = '$user2' and `password` = '$pwd2'";
                    $role = mysqli_query($db, $query);
                    if ($role) {
                        $check = mysqli_num_rows($role);
                        $_SESSION['username'] = $user2;
                    }
                } else {
                    $json["status"] = "error";
                    $json["message"] = "Username is already exist";
                }
                echo json_encode($json);
            }
        }
        break;

    default:
        break;
}
