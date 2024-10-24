
<?php
            include 'sidebar.php';
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        
            <!-- Navbar Start -->
           <?php
            include 'navbar.php';
           ?>
            <!-- Navbar End -->

<!-- form -->
<div class="container-fluid pt-4 px-4">
                <div class="row">
                    <?php

                        $id = $_GET['id'];
                        $sql= "select * from `blog` WHERE `id` = '$id'";
                        $result = mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_assoc($result)){

                       

                    ?>
                    <div class="col-12 col-md-12">
                    <form action="editAction.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="id" value="<?php echo $id; ?>">
                    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="instructorName">Blog Name</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>"  class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="">Date</label>
        <input type="date" name="date" value="<?php echo $row['date'];?>" class="form-control" />
      </div>
    </div>
  </div>

  <div class="row mb-4">

    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="">Feature Image</label>
      <img src="../img/blog/<?php echo $row['img']; ?>" class="img-fluid" alt="no img" height="100px" width="100px" >
        <input type="file" name="img"  class="form-control" />
        
      </div>
    </div>
    

  </div>
  <div class="col">
  <label class="form-label" for="price">Blog Detail</label>
  <textarea id="recipe_description"  name="blogDetail"><?php echo $row['detail']; ?></textarea>


  </div>
  
  
  
      <button type="submit" name="editBlog" class="btn btn-primary my-2">Update</button>
</form>
 <?php } ?>
</div>
</div>
</div>
    <!-- form end -->

         


            

            <!-- Footer Start -->
           <?php 
           include 'footer.php';
           ?>
            <!-- Footer End -->
        