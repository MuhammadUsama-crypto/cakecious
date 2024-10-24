<?php

include '../components/config.php';


$showError = false;
    $showMessage = false;
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        include "config.php";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $existSql = "SELECT * FROM `users` WHERE `username` = '$username'";
        $result = mysqli_query($conn, $existSql);
        $row = mysqli_num_rows($result);
        if($row > 0) {
            $showError = "User Already Exist";
        } else {
            if($password == $cpassword) {
                $securePassword = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`id`, `username`, `password`, `date/time`) VALUES (NULL, '$username', '$securePassword', current_timestamp())";
            $result = mysqli_query($conn, $sql); 
            if($result) {
                $showMessage = "Successfully Signup";
            }
            } else {
                $showError = "Passwords do not match";
            }

        }
    }

?>