<?php
include 'components/config.php';
include 'components/navbar.php';


?>
<div class="container">
			<div class="row">
			<div class="col-lg-12">

<?php
    $id = $_GET['id'];
    $sql = "select * from `recipe` where `id` = '$id'";
    $result =mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
?>
				<form action="editAction.php" method="POST" enctype="multipart/form-data">
		<input type="text" value="<?php echo $row['id']; ?>" name="id" id="" hidden>
    <div class="form-group">
		<select class="custom-select" name="recipeType">
  <option selected>Select Recipe Type</option>
  <option value="chocolate">Chocolate Recipe</option>
  <option value="vanilla">Vanilla Recipe</option>
  <option value="cheese">Cheese Recipe</option>
</select>
</div>
				<div class="form-group">
    <label for="exampleInputEmail1">Recipe Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>"  placeholder="Enter Recipe Name">
  </div>

  <div class="form-group">
    <img src="img/recipe/<?php echo $row['pic']; ?>" class="img-fluid" height="150px" width="150px">
    <label for="">Picture</label>
    <input type="file" name="img" class="form-control" >
  </div>
  <div class="form-group">
    <label for="recipe_description">Description</label>
   
    <textarea id="recipe_description" name="recipeDetail"><?php echo $row['detail']; ?></textarea>
  </div>


  <button type="submit" class="btn btn-primary" name="editRecipe">Submit</button>
</form>

<?php } ?>
				</div>
			</div>
		</div>
