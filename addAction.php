<?php 

    include 'components/config.php';

    if(isset($_POST['recipe'])) {
        $name= $_POST['name'];
        $chefId = $_POST['chef_id'];
        $recipeType = $_POST['recipeType'];
        $ingredients = $_POST['ingredients'];
        $detail= $_POST['recipeDetail'];
       $img = $_FILES['img']['name'];
       $tmpName = $_FILES['img']['tmp_name'];
       $folder = "img/recipe/" . $img;
       move_uploaded_file($tmpName, $folder);
       $sql = "INSERT INTO `recipe` (`chef_id`, `recipeType`, `name`, `ingredients`, `pic`, `detail`) VALUES ('$chefId', '$recipeType', '$name', '$ingredients', '$img', '$detail')";
    mysqli_query($conn, $sql);
       header("location: profile.php");
        
    }   

?>