<?php 

    include 'config.php';
    // include 'sidebar.php';
    if(isset($_REQUEST['editCake'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $cakeImg = $_FILES['CakeImage'];
       

        if(isset($_FILES['CakeImage']) && $_FILES['CakeImage']['error'] === UPLOAD_ERR_OK) {
            // If the 'featureImg' file is uploaded, process it as before
            $img = $_FILES['CakeImage']['name'];
        $ImgTmpName = $_FILES['CakeImage']['tmp_name'];
        $folder = "../img/product/" . $img;
        move_uploaded_file($ImgTmpName,$folder);
            // Add the 'featureImg' field to the SQL query
            $sql = "UPDATE `cakes` SET `cakeName` = '$name', `price` = '$price', `pic` = '$img' WHERE `cakes`.`id` = '$id'";
        } else {
            // If no 'featureImg' file is uploaded, exclude 'featureImg' from the SQL query
            $sql = "UPDATE `cakes` SET `cakeName` = '$name', `price` = '$price' WHERE `cakes`.`id` = '$id'";
        }
        mysqli_query($conn, $sql);
        header("location: addCake.php");
    }



    if(isset($_REQUEST['editTeam'])){ 
        $id = $_POST['id'];
        $name = $_POST['name'];
        $title = $_POST['title'];
        $fb = $_POST['fb'];
        $linkedin = $_POST['linkedin'];
       

        if(isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
            // If the 'featureImg' file is uploaded, process it as before
            $img = $_FILES['img']['name'];
        $ImgTmpName = $_FILES['img']['tmp_name'];
        $folder = "../img/chef/" . $img;
        move_uploaded_file($ImgTmpName,$folder);
            // Add the 'featureImg' field to the SQL query
            $sql = "UPDATE `team` SET `name` = '$name', `title` = '$title', `img` = '$img', `fbProfile` = '$fb', `linkedinProfile` = '$linkedin' WHERE `team`.`id` = '$id'";
        } else {
            // If no 'featureImg' file is uploaded, exclude 'featureImg' from the SQL query
            $sql = "UPDATE `team` SET `name` = '$name', `title` = '$title', `fbProfile` = '$fb', `linkedinProfile` = '$linkedin' WHERE `team`.`id` = '$id'";
        }
        mysqli_query($conn, $sql);
        header("location: addTeam.php");
    }


    if(isset($_REQUEST['editCourse'])){ 
        $id = $_POST['id'];
        $title = $_POST['title'];
        $category = $_POST['category'];
       $instructor = $_POST['instructor'];
        
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $duration = $_POST['duration'];
        $lectures = $_POST['lectures'];
        $advantages = $_POST['advantages'];
        $detail = mysqli_real_escape_string($conn, $_POST['detial']);
        // echo $detail;
        
        if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            // If the 'featureImg' file is uploaded, process it as before
            $image = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $folder = "../assets/img/uploadedImages/" . $image;
        move_uploaded_file($temp_name,$folder);
            // Add the 'featureImg' field to the SQL query        
        foreach ($advantages as $advantage) {
            $uploadedAdvantage[] = $advantage;
       }
       $uploadedAdvantage = implode(",",$uploadedAdvantage);
        $sql = "UPDATE `course` SET `title` = '$title', `category` = '$category', `instructor` = '$instructor', `image` = '$image', `price` = '$price', `discount` = '$discount', `duration` = '$duration', `lectures` = '$lectures', `content` = '$uploadedAdvantage', `detail` = '$detail' WHERE `course`.`id` = '$id'";
           
        } else {
            // If no 'featureImg' file is uploaded, exclude 'featureImg' from the SQL query
            foreach ($advantages as $advantage) {
                $uploadedAdvantage[] = $advantage;
           }
           $uploadedAdvantage = implode(",",$uploadedAdvantage);
                $sql = "UPDATE `course` SET `title` = '$title', `category` = '$category', `instructor` = '$instructor', `price` = '$price', `discount` = '$discount', `duration` = '$duration', `lectures` = '$lectures', `content` = '$uploadedAdvantage', `detail` = '$detail' WHERE `course`.`id` = '$id'";
        }
        mysqli_query($conn, $sql);
        header("location: course.php");

     }

     if(isset($_REQUEST['editService'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        // $services = $_POST['advantages'];
        // echo $discount;
        $detail = mysqli_real_escape_string($conn, $_POST['detail']);
        // echo $detail;
        if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $folder = "../assets/img/uploadedImages/" . $image;
        move_uploaded_file($temp_name,$folder);
        $sql = "UPDATE `services` SET `title` = '$title', `image` = '$image',  `detail` = '$detail', `price` = '$price', `discount` = '$discount' WHERE `services`.`id` = '$id'";
    } else {
        $sql = "UPDATE `services` SET `title` = '$title',  `detail` = '$detail', `price` = '$price', `discount` = '$discount' WHERE `services`.`id` = '$id'";
    }
    
    mysqli_query($conn, $sql);
    header("location: service.php");
        }
    
     if(isset($_REQUEST['editBlog'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $date = $_POST['date'];
        $detail = $_POST['blogDetail'];
       
        if(isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['img']['name'];
        $temp_name = $_FILES['img']['tmp_name'];
        $folder = "../img/blog/" . $image;
        move_uploaded_file($temp_name,$folder);
        $sql = "UPDATE `blog` SET `name` = '$name', `date` = '$date', `detail` = '$detail', `img` = '$image' WHERE `blog`.`id` = '$id'";
    } else {
        $sql = "UPDATE `blog` SET `name` = '$name', `date` = '$date', `detail` = '$detail' WHERE `blog`.`id` = '$id'";
    }
    
    mysqli_query($conn, $sql);
    header("location: addBlog.php");
        }
    
        if(isset($_POST['editRecipe'])) {
            $name= $_POST['name'];
            $id= $_POST['id'];
            $chefId = $_POST['chef_id'];
            $recipeType = $_POST['recipeType'];
            $ingredients = $_POST['ingredients'];
            $detail= $_POST['recipeDetail'];
            $img = $_FILES['img'];
            if(isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                // If the 'featureImg' file is uploaded, process it as before
                $img = $_FILES['img']['name'];
            $ImgTmpName = $_FILES['img']['tmp_name'];
            $folder = "img/recipe/" . $img;
            move_uploaded_file($ImgTmpName,$folder);
                // Add the 'featureImg' field to the SQL query
                $sql = "UPDATE `recipe` SET `recipeType` = '$recipeType', `name` = '$name', `ingredients` = '$ingredients', `pic` = '$img', `detail` = '$detail' WHERE `recipe`.`id` = '$id'";
            } else {
                // If no 'featureImg' file is uploaded, exclude 'featureImg' from the SQL query
                $sql = "UPDATE `recipe` SET `recipeType` = '$recipeType', `name` = '$name', `ingredients` = '$ingredients', `detail` = '$detail' WHERE `recipe`.`id` = '$id'";
            }
            mysqli_query($conn, $sql);
            header("location: index.php");
        }
        ?>