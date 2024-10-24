<?php 

    include 'config.php';
    


    $id = $_GET['id'];
    $sql = "DELETE FROM `recipe` WHERE `id` = $id";
    mysqli_query($conn,$sql);
    header("location: index.php");

?>