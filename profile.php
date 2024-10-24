    

<?php
include './components/config.php';
include './components/navbar.php';		


	


?>
	
        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Account</h3>
        			<ul>
        				<li><a href="index.html">Home</a></li>
        				<li><a href="service.html">Profile</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Service Offer Area =================-->
        <section class="service_offer_area p_100">
        	<div class="container">
        		<div class="main_title">
        			<h2>Your Profile</h2>
        			
        		</div>
        		<div class="row">
        			<!-- <div class="col-lg-4 col-sm-6">
        				<div class="service_m_item">
        					<div class="service_img_inner">
								<div class="service_img">
									<img class="rounded-circle" src="img/chef/chef-1.jpg" alt="">
								</div>
        					</div>
        					
        				</div>
        			</div>
					<div class="col-lg-6 col-sm-6 d-flex justify-content-center" >
					<div class="service_text">
        						<h4>Name: Iqra Awan</h4>
        						<h4>Email: iqra@gmail.com</h4>
        						<h4>Phone: 0302-6081294</h4>
        					</div>
					</div> -->

<?php 
	
	if(isset($_SESSION['user_id'])) {
		$id = $_SESSION['user_id'];
	$sql = "select * from `users` where `id` = '$id'";
    $result = mysqli_query($conn, $sql);
	while($row=mysqli_fetch_assoc($result)){

	?>
					<div class="col-lg-4  d-flex justify-content-center">
						<img class="img-fluid" src="img/chef/<?php echo $row['pic'] ?>" alt="" height="350px" width="350px">
					</div>
					<div class="col-lg-6 d-flex justify-content-center " style="flex-direction:column;">
						<h1>Name: <?php echo $row['name']?></h1> 
						<h2>Email: <?php echo $row['email']?></h2>
						<h2>Phone: <?php echo $row['phone']?></h2>
						
						

						<a href="editProfile.php?id=<?php echo $_SESSION['user_id']; ?>" class="btn btn-primary" style="width:150px">Edit Profile</a>
					</div>
					



        			<?php  }}; ?>
        		</div>
        	</div>
        </section>
        <!--================End Service Offer Area =================-->
        
        <!--================Recipe form Area =================-->
		
		<?php
if(isset($_SESSION['user_id']) && $_SESSION['accType'] == 'Chef') {
?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<form action="addAction.php" method="POST" enctype="multipart/form-data">
		<input type="text" value="<?php echo $_SESSION['user_id'];?>" name="chef_id" id="" hidden>
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
    <input type="text" class="form-control" name="name"  placeholder="Enter Recipe Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Ingredients</label>
    <input type="text" class="form-control"  name="ingredients"  placeholder="Enter Recipe Name">
  </div>
  <div class="form-group">
    <label for="">Picture</label>
    <input type="file" name="img" class="form-control">
  </div>
  <div class="form-group">
    <label for="recipe_description">Description</label>
    <!-- Text area for TinyMCE -->
    <textarea id="recipe_description" name="recipeDetail"></textarea>
  </div>


  <button style="margin-bottom: 100px;" type="submit" class="btn btn-primary" name="recipe">Submit</button>
</form>
				</div>
			</div>
		</div>



        <!--================End Recipe form Area =================-->
        
        <!--================Discover Menu Area =================-->
        <section class="discover_menu_area service_menu">
        	<div class="discover_menu_inner">
        		<div class="container">
        			<div class="s_dis_title">
        				<div class="float-left">
        					<div class="main_title">
								<h2>My Recipes</h2>
								<!-- <h5>Duis aute irure dolor in reprehenderit voluptate</h5> -->
							</div>
        				</div>
        				
        			</div>
       				<div class="row">
       					
       					<div class="col-lg-12">
       						<div class="discover_item_inner">
       						
							   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
	  <th scope="col">Recipe Type</th>
      <th scope="col">Recipe Name</th>
      <th scope="col">Picture</th>
      <th scope="col">Recipe Description</th>
	  <th>Action</th>
    </tr>
  </thead>
  <tbody>
	<?php 
	
	$sql = "SELECT * FROM recipe WHERE `chef_id`='".$_SESSION['user_id']."'";
	$counter = 0;
	// $sql = "SELECT * FROM `recipe`";
	$result = mysqli_query($conn, $sql);
	while($row=mysqli_fetch_assoc($result)){
		$counter++;

	?> 
	 
    <tr>
      <th scope="row"><?php echo $counter; ?></th>
	  <td><?php echo $row['recipeType']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td>
		<img src="img/recipe/<?php echo $row['pic']; ?>" class="img-fluid" height="150px" width="150px" alt="">
	  </td>
      <td><?php echo $row['detail']; ?></td>

	  <td>
		<a href="editRecipe.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a> / 
		<a href="delRecipe.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
	  </td>
    </tr>
    
	<?php } }?>
   
  </tbody>
</table>
       						</div>
       					</div>
       				</div>
        		</div>
        	</div>
			
        </section>
        <!--================End Discover Menu Area =================-->
        
        <!--================Bakery Video Area =================-->
        <section class="bakery_video_area">
        	<div class="container">
        		<div class="video_inner">
        			<h3>Real Taste</h3>
        			<p>A light, sour wheat dough with roasted walnuts and freshly picked rosemary, thyme, poppy seeds, parsley and sage</p>
        			<div class="media">
        				<div class="d-flex">
        					<a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="flaticon-play-button"></i></a>
        				</div>
        				<div class="media-body">
        					<h5>Watch intro video <br />about us</h5>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Bakery Video Area =================-->
        
       
        
		<?php 
		include './components/footer.php';
		?>