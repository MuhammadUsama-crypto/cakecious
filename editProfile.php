<?php
include 'components/config.php';
include 'components/navbar.php';

$id = $_GET['id'];




$sql = "select * from `users` where `id` = '$id'";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result)){


?>



    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <form action="editAction.php" method="POST" enctype=multipart/form-data >
            <input type="text" name="id" value="<?php echo $id; ?>" hidden>            
            
            <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Phone</label>
                          <input type="number" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
                          
                        </div>
                        <div class=" form-group col-6" style="display:inline-block">
                            <img src="img/chef/<?php echo $row['pic']; ?>" style="display:inline-block" class="img-fluid img-responsive" height="150px" width="150px"  alt="">
                        </div>
                        <div class="form-group col-6">
                          <label for="">Picture</label>
                          <input type="file" class="form-control" name="pic" id="">
                        </div>
            
                       
                       
                        
                       
                        <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                      </form>
            </div>
        </div>
    </div>


<?php } ?>