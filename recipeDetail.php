<?php 

	include 'components/navbar.php';
	include 'components/config.php';

?>
        
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Recipe Details</h3>
        			<ul>
        				<li><a href="index.html">Home</a></li>
        				<li><a href="recipeDetail.html">Recipe Details</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Product Details Area =================-->
        <section class="product_details_area p_100">
        	<div class="container">
				<?php  

					
$id = $_GET['id'];
$sql = "SELECT * FROM `recipe` Where `id` = '$id'";
$result = mysqli_query($conn, $sql);
while ($rows=mysqli_fetch_array($result)){

?>
        		<div class="row product_d_price">
        			<div class="col-lg-6">
        				<div class="product_img"><img class="img-fluid" src="img/recipe/<?php echo $rows['pic']; ?>" alt=""></div>
        			</div>
        			<div class="col-lg-6">
        				<div>
        					<h4><span style="color:#F18F93;">Recipe Name:</span> <?php echo $rows['name']; ?></h4>
							
        					<h4><span style="color:#F18F93;">Ingredients:</span> <?php echo $rows['ingredients']; ?></h4>
        					<H4><span style="color:#F18F93;">Detail:</span><?php echo $rows['detail']; ?></H4>

							<h4>Chef:</h4>
							<?php 
							$chef_id = $rows['chef_id'];
							$chefSql = "select * from `users`  where id='$chef_id'";
							$chefResult = mysqli_query($conn,$chefSql);
							while($chefRow = mysqli_fetch_assoc($chefResult)){
							?>

							<img src="img/chef/<?php echo $chefRow['pic'] ?>" alt="" height="150px" width="150px" class="img-fluid">
								<h3><?php echo $chefRow['name']; ?></h3>
								<h4>Contact:</h4>
								<p>Email:<?php echo $chefRow['email']; ?></p>
								<p>Phone:<?php echo $chefRow['phone']; ?></p>
<?php } ?>	
        				</div>
        			</div>
        		</div>

				<?php } ?>
        		
        	</div>
        </section>
        
        
      <?php
	 	
		include 'components/footer.php';
	 
	 ?>