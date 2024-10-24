
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
                    <div class="col-12 col-md-12">
                    <form action="addAction.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="instructorName">Blog Name</label>
        <input type="text" name="name"  class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="">Date</label>
        <input type="date" name="date" class="form-control" />
      </div>
    </div>
  </div>

  <div class="row mb-4">

    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="">Feature Image</label>
        <input type="file" name="img"  class="form-control" />
        
      </div>
    </div>
    

  </div>
  <div class="col">
  <label class="form-label" for="price">Blog Detail</label>
  <textarea id="recipe_description" name="blogDetail"></textarea>


  </div>
  
  
  
      <button type="submit" name="blog" class="btn btn-primary my-2">Add Blog</button>
</form>

</div>
</div>
</div>
    <!-- form end -->

            <!-- data table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-12 col-md-12">
                    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Blog Name</th>
                <th>Date</th>
                <th>Image</th>
                <th>Details</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $counter= 0;
                 $sql = "SELECT * FROM `blog`";
                 $result = mysqli_query($conn, $sql);
                 while($row = mysqli_fetch_assoc($result)) {
                    $counter ++;
            ?>
            <tr>
                <td><?php echo $counter; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td>
                    <img src="../img/blog/<?php echo $row['img']; ?>" class="img-fluid" alt="no img" height="100px" width="100px" >
                </td>
          <td><?php echo $row['detail']; ?></td>
                <td>
                <a href="editBlog.php?id=<?php echo $row['id']?>" type="button" class="btn mb-2 btn-warning">Edit</a>  | 
                <a href="delBlog.php?id=<?php echo $row['id']?>" type="button" class="btn btn-danger">Delete</a>  
              </td>
            </tr>
           <?php } ?>
            </tbody>
                    </table>
                    </div>
                </div>
            </div>
            
            
            <!-- data table End -->


            

            <!-- Footer Start -->
           <?php 
           include 'footer.php';
           ?>
            <!-- Footer End -->
        