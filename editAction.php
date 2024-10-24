<?php
include 'components/config.php';

if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $img = $_FILES['pic'];
    if(isset($_FILES['pic']) && $_FILES['pic']['error'] === UPLOAD_ERR_OK) {
        // If the 'featureImg' file is uploaded, process it as before
        $img = $_FILES['pic']['name'];
    $ImgTmpName = $_FILES['pic']['tmp_name'];
    $folder = "img/chef/" . $img;
    move_uploaded_file($ImgTmpName,$folder);
        // Add the 'featureImg' field to the SQL query
        $sql = "UPDATE `users` SET `name` = '$name', `email` = '$email', `phone` = '$phone', `pic` = '$img' WHERE `users`.`id` = '$id'";
    } else {
        // If no 'featureImg' file is uploaded, exclude 'featureImg' from the SQL query
        $sql = "UPDATE `users` SET `name` = '$name', `email` = '$email', `phone` = '$phone' WHERE `users`.`id` = '$id'";
    }
    mysqli_query($conn, $sql);
    header("location: profile.php");
}


if(isset($_POST['editRecipe'])) {
    $name= $_POST['name'];
    $id= $_POST['id'];
    // $chefId = $_POST['chef_id'];
    $recipeType = $_POST['recipeType'];
    $detail= $_POST['recipeDetail'];
    $img = $_FILES['img'];
    if(isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
        // If the 'featureImg' file is uploaded, process it as before
        $img = $_FILES['img']['name'];
    $ImgTmpName = $_FILES['img']['tmp_name'];
    $folder = "img/recipe/" . $img;
    move_uploaded_file($ImgTmpName,$folder);
        // Add the 'featureImg' field to the SQL query
        $sql = "UPDATE `recipe` SET `recipeType` = '$recipeType', `name` = '$name', `pic` = '$img', `detail` = '$detail' WHERE `recipe`.`id` = $id";
    } else {
        // If no 'featureImg' file is uploaded, exclude 'featureImg' from the SQL query
        $sql = "UPDATE `recipe` SET  `recipeType` = '$recipeType', `name` = '$name', `detail` = '$detail' WHERE `recipe`.`id` = $id";
    }
    mysqli_query($conn, $sql);
    header("location: profile.php");
}
?>