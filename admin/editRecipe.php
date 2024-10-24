
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
                        $sql= "select * from `recipe` WHERE `id` = '$id'";
                        $result = mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_assoc($result)){

                       

                    ?>
                    <div class="col-12 col-md-12">
                    <form action="editAction.php" method="post" enctype="multipart/form-data">
                    <input hidden type="text" name="id" value="<?php echo $id; ?>">
                    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <select class="form-select" name="recipeType">
  <option selected>Select Recipe Type</option>
  <option value="chocolate">Chocolate Recipe</option>
  <option value="vanilla">Vanilla Recipe</option>
  <option value="cheese">Cheese Recipe</option>
</select>
      </div></div></div>
                    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="instructorName">Recipe Name</label>
      <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>"  placeholder="Enter Recipe Name">
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <img  src="../img/recipe/<?php echo $row['pic']; ?>" alt="" height="100px" width="100px">
    <label for="">Picture</label>
    <input type="file" name="img" class="form-control" >
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      
    <label for="">Ingredients</label>
    <input type="text" name="ingredients" value="<?php echo $row['ingredients'];?>" class="form-control" >
      </div>
    </div>
  </div>

  <div class="row mb-4">

    <div class="col">
      <div class="form-outline">
      <label for="recipe_description">Description</label>
   
    <textarea id="recipe_description" name="recipeDetail"><?php echo $row['detail']; ?></textarea>
        
      </div>
    </div>
    

  </div>
  
  
  
  
      <button type="submit" name="editRecipe" class="btn btn-primary my-2">Update</button>
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
        