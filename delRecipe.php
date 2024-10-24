<?php
include 'components/config.php';
$id = $_GET['id'];
$sql = "DELETE FROM `recipe` WHERE `recipe`.`id` = '$id'";
mysqli_query($conn,$sql);
header("location: profile.php");
?>