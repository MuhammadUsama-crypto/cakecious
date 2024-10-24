<?php 
 ob_start();
include './components/navbar.php';
include './components/config.php';
// session_start();
$showmessege = false;

if(isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "select * from `users` Where `email` = '$email'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)==1){
    while($row = mysqli_fetch_array($result)) {
       if(password_verify($password,$row["password"])){
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name']=$row['name'];
        $_SESSION['number'] =$row['phone'];
        $_SESSION['email'] =$row['email'];
        $_SESSION['accType'] = $row['accType'];
        header("Location: ./index.php");
       }
       else {
        $showmessege = "Password do not correct";
       }
    }
  } 
  else {
    $showmessege ="user does not exist! Please Sign up first";
  }
  
}


$showError = false;
$showMessage = false;
if(isset($_POST['signup'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $accType = $_POST['account'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $img = $_FILES['pic']['name'];
        $tmp_name = $_FILES['pic']['tmp_name'];
        $folder= "img/chef/". $img;
        move_uploaded_file($tmp_name , $folder);
        $existSql = "SELECT * FROM `users` WHERE `email` = '$email'";
        $result = mysqli_query($conn, $existSql);
        $row = mysqli_num_rows($result);
        if($row > 0) {
            $showError = "User Already Exist";
        } else {
            if($password == $cpassword) {
                $securePassword = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`name`, `email`, `phone`, `password`,`pic`,`accType`) VALUES ('$name', '$email', '$phone', '$securePassword','$img','$accType')";
            $result = mysqli_query($conn, $sql); 
           
                $showMessage = "Successfully Signup";
            
            } else {
                $showError = "Passwords do not match";
            }
        }
}
?>
        
        <div class="container">
            <div class="row">
              <div class="col-12">
              <?php 
    if($showMessage) {
      ?>
              <div class="alert alert-success" role="alert">
 
     <?php echo $showMessage;?>
   
</div>
<?php
}
?>
<?php 
    if($showError) {
      ?>
              <div class="alert alert-danger" role="alert">
 
     <?php echo $showError;?>
   
</div>
<?php
}
?>
              </div>
                <div class="col-6" style="margin-bottom: 10px;">
              
                    <h1 class="text-center">Sign up Here</h1>
                    <form action="register.php" method="POST" enctype=multipart/form-data >
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Phone</label>
                          <input type="number" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" >
                          
                        </div>
                        <div class="form-group">
                          <label for="">Picture</label>
                          <input type="file" class="form-control" name="pic" id="">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Sign up as</label>
                        <select class="custom-select" name="account">
  <option selected disabled>Sign up as Recipe Seeker or Chef?</option>
  <option value="recipeSeeker">Recipe Seeker</option>
  <option value="Chef">Chef</option>
  
</select>
                        </div>
                       
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1" >
                          </div>
                       
                        <button type="submit" class="btn btn-primary" name="signup">Sign up</button>
                      </form>
                </div>



      

                <div class="col-6" style="margin-bottom: 10px; ">
                    <h1 class="text-center">Login Here</h1>
<div style="margin-top: 25%;">
    <form action="register.php" method="POST">
                        
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"> 
        </div>
      <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1" >
        </div>
      <button type="submit" class="btn btn-primary" name="login">login</button>
      <button type="submit" class="btn btn-primary" name="login">CAncel</button>
    </form>
</div>
                </div>
            </div>
        </div>
      
        
       
      
       
       
        
        
       
        <!--================Footer Area =================-->
        <?php 
		include './components/footer.php';
		?>
        