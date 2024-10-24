<?php 

    // include 'sidebar.php';
    include 'config.php';
    if(isset($_REQUEST['addCake'])){
        $cakeName = $_POST['name'];
        $price = $_POST['price'];
        $img = $_FILES['img']['name'];
        $ImgTmpName = $_FILES['img']['tmp_name'];
        $folder = "../img/product/" . $img;
        move_uploaded_file($ImgTmpName,$folder);
        $sql = "INSERT INTO `cakes` (`cakeName`, `price`, `pic`) VALUES ('$cakeName', '$price', '$img')";
        mysqli_query($conn, $sql);
        header("location: addCake.php");
    }

    if(isset($_REQUEST['team'])){
        $name = $_POST['name'];
        $title = $_POST['title'];
        $fb = $_POST['fb'];
        $linkedin = $_POST['linkedin'];
        $img = $_FILES['img']['name'];
        $ImgTmpName = $_FILES['img']['tmp_name'];
        $folder = "../img/chef/" . $img;
        move_uploaded_file($ImgTmpName,$folder);

        $sql = "INSERT INTO `team` (`name`, `title`, `img`, `fbProfile`, `linkedinProfile`) VALUES ('$name', '$title', '$img', '$fb', '$linkedin')";
        mysqli_query($conn,$sql);
        header("location: addTeam.php");

    }


    if(isset($_REQUEST["addCake"])) {
        $cakeName = $_POST['name'];
        $price = $_POST['price'];
        $image = $_FILES['img']['name'];
        $temp_name = $_FILES['img']['tmp_name'];
        $folder = "../img/uploadedImages/" . $image;
        move_uploaded_file($temp_name,$folder);
        $sql = "INSERT INTO `course` (`title`, `category`, `instructor`, `image` ,`price`, `discount`, `duration`, `lectures`, `content`, `detail`) VALUES ('$title', '$category', '$instructor', '$image'  , '$price', '$discount', '$duration', ' $lectures', '$uploadedAdvantage', '$detail')";
        mysqli_query($conn, $sql);
        header("location: course.php");
    
    }


    if(isset($_REQUEST["addService"])) {
        $title = $_POST['title'];
        $detail = mysqli_real_escape_string($conn, $_POST['detail']);
        // $services = $_POST['advantages'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $image_name = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $folder = "../assets/img/uploadedImages/" . $image_name;
        move_uploaded_file($temp_name,$folder);

   
    //     foreach ($services as $service) {
    //         $uploadedService[] = $service;
    //    }
    //    $uploadedService = implode(",",$uploadedService);
    $sql = "INSERT INTO `services` (`title`, `image`,`detail`, `price`, `discount`) VALUES ('$title', '$image_name', '$detail' ,  '$price', '$discount')";
    mysqli_query($conn, $sql);
    header("location: service.php");
    }

    if(isset($_POST['blog'])) {
        $name = $_POST['name'];
        $date = $_POST['date'];
        $detail = $_POST['blogDetail'];
        $img = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        $folder = "../img/blog/" . $img;
        move_uploaded_file($tmp_name , $folder); 
        $sql = "INSERT INTO `blog` (`name`, `date`, `detail`, `img`) VALUES ('$name', '$date', '$detail', '$img')";
        mysqli_query($conn,$sql);
        header("location: addBlog.php");
        
    }
?>