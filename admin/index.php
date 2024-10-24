
<?php
            
             include 'sidebar.php';
             include 'config.php';
          
        
            
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        
            <!-- Navbar Start -->
           <?php
            include 'navbar.php';
           ?>
            <!-- Navbar End -->


             

    <!-- data table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Recipies</h1>
            </div>
        </div>
                
                <div class="row">
                    <div class="col-12 col-md-12">
                    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <!-- <th>order</th> -->
                <th>Recipe Type</th>
                <th>Name</th>
                <th>Ingredients</th>
                <th>Image</th>
                <th>Detail</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                $sr = 0;
                $sql = "SELECT * FROM `recipe`";
                $result = mysqli_query($conn, $sql);
                while($row=mysqli_fetch_assoc($result)){
                    $sr++;
            ?>
            <tr>
                <td><?php echo $sr; ?></td>
                
                <td><?php echo $row['recipeType']?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['ingredients']; ?></td>
                <td><img  src="../img/recipe/<?php echo $row['pic']; ?>" alt="" height="100px" width="100px"></td>
                <td><?php echo $row['detail']; ?></td>
                
                <td>
                <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="editRecipe.php?id=<?php echo $row['id']; ?>">Edit</a></li>
    <li><a class="dropdown-item" href="delRecipe.php?id=<?php echo $row['id']; ?>">Delete</a></li>
   
  </ul>
</div>
              </td>
            </tr>
            <?php  } ?>
           
            </tbody>
                    </table>
                    </div>
                </div>
            </div>
            
            
            <!-- data table End -->




  <!-- Order data table Start -->
  

            

            <!-- Footer Start -->
           <?php 
           include 'footer.php';
           ?>
            <!-- Footer End -->
        