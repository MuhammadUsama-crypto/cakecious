
<?php
include './components/config.php';
	


?>
		
		<!--================Main Header Area =================-->
		<?php
		
			include './components/navbar.php';		
		?>
        <!--================End Main Header Area =================-->
        
        <!--================Slider Area =================-->
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 img-fluid" src="s-2.jpg"  height="450px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-fluid" src="s-1.jpg" height="450px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-fluid" src="s-3.jpg" height="450px"  alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        <!--================End Slider Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_bakery_area">
        	<div class="container">
        		<div class="welcome_bakery_inner p_100">
        			<div class="row">
        				<div class="col-lg-6">
        					<div class="main_title">
								<h2>Welcome to  Velvet delight</h2>
								<p>Welcome to Velvet Delight! where we make delicious desserts that are simply irresistible. Our cakes, pastries, and treats are all handmade with the best ingredients, ensuring each bite is full of flavor. Whether you're celebrating a special day or just want something sweet, Velvet Delight has something for everyone. Come taste the difference and treat yourself to something special today!</p>
							</div>
        					
        				</div>
        				<div class="col-lg-6">
        					<div class="welcome_img">
        						<img class="img-fluid" src="img/cake-feature/welcome-right.jpg" alt="">
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="cake_feature_inner">
        			<div class="main_title">
						<h2>Recipes</h2>
						<h5>Discover Delight in Every Slice with Our delicious recipies!</h5>
					</div>
       				<div class="cake_feature_slider owl-carousel">
       					<?php

							$sql = "SELECT * FROM `recipe`";
							$result = mysqli_query($conn, $sql);

							while ($rows=mysqli_fetch_array($result)){
						 $recipeType = $rows['recipeType'];
						 ?>
					<div class="item">
       						<div class="cake_feature_item">
       							<div class="cake_img">
       								<img  src="img/recipe/<?php echo $rows['pic']; ?>" alt="" height="300px" width="500px">
       							</div>
       							<div class="cake_text">
       								
       								<h3><?php echo $rows['name'] ?></h3>
									   <a href="recipeDetail.php?id=<?php echo $rows['id']; ?>" class="pest_btn">Recipe Detail</a>
       							</div>
       						</div>
       					</div>
       					<?php } ?>
       					
       				</div>
        		</div>
        	</div>
        </section>
        <!--================End Welcome Area =================-->
        
        <section class="service_we_offer_area p_100">
        	<div class="container">
        		<div class="single_w_title">
        			<h2>Explore By Type</h2>
        		</div>
        		<div class="row we_offer_inner">
        			<div class="col-lg-4">
        				<div class="s_we_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="flaticon-food-6"></i>
        						</div>
        						<div class="media-body">
        							<a href="recipeType.php?id=<?php echo "cheese" ?>"><h4>Cheese Recipies</h4></a>
        							<p>
Explore our delectable cheese recipes for a tantalizing culinary journey, perfect for both enthusiasts and beginners alike!.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="s_we_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="flaticon-food-6"></i>
        						</div>
        						<div class="media-body">
        							<a href="recipeType.php?id=<?php echo "vanilla" ?>"><h4>Vanilla Recipies</h4></a>
        							<p>
Indulge in vanilla delights: ice cream, custard tarts, fragrant cakes. Taste elegance and flavor! Make it and enjoy.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="s_we_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="flaticon-food-6"></i>
        						</div>
        						<div class="media-body">
        							<a href="recipeType.php?id=<?php echo "chocolate" ?>"><h4>Chocolate Recipies</h4></a>
        							<p>Indulge in our Chocolate Delights collection, featuring creamy mousse, decadent brownies, and melt-in-your-mouth trufflesp.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			
        			
        			
        		</div>
        	</div>
        </section>
       
      
        <!--================Newsletter Area =================-->
        <section class="newsletter_area" style="background-color: grey;">
        	<div class="container">
        		<div class="row newsletter_inner">
        			<div class="col-lg-8">
        				<div class="news_left_text">
        					<h4>Want to submit your recipe?</h4>
							<p style="color:white;">Register as a chef to submit your recipies!</p>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<a href="register.php" class="btn pest_btn">Register Now</a>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Newsletter Area =================-->
       		
        
		<?php 
		include './components/footer.php';
		?>
        
       
        
       
    