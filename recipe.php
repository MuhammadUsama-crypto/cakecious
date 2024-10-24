<?php 

include './components/config.php';
include './components/navbar.php';


?>
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Our Cakes</h3>
        			<ul>
        				<li><a href="index.html">Home</a></li>
        				<li><a href="cakes.html">Services</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
     
        <!--================Blog Main Area =================-->
        <section class="our_cakes_area p_100">
        	<div class="container">
        		<div class="main_title">
        			<h2>Our Recipies</h2>
        			
        		</div>
        		<div class="cake_feature_row row">
				<?php

$sql = "SELECT * FROM `recipe`";
$result = mysqli_query($conn, $sql);
while ($rows=mysqli_fetch_array($result)){

?>
					<div class="col-lg-3 col-md-4 col-6">
						<div class="cake_feature_item">
							<div class="cake_img">
								<img src="img/recipe/<?php echo $rows['pic']; ?>" alt="" height="250px" width="250px">
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
        </section>
        <!--================End Blog Main Area =================-->
        
       
		<script>
function addToCart() {
    // Check if the user is logged in
    var userLoggedIn = <?php echo isset($_SESSION['user_id']) ? 'true' : 'false'; ?>;

    if (userLoggedIn) {
        // If user is logged in, submit the form
        document.getElementById("cartForm").submit();
    } else {
        // If user is not logged in, display a message
        $('#loginModal').modal('show');

        // Prevent the form from submitting
        return false;

        // You can also redirect the user to the login page if needed
        // window.location.href = "login.php";
    }
}
</script>
<div class="modal fade" id="loginModal" tabindex="-1"  role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color:#E88F97;" class="modal-title" id="loginModalLabel">Please Log In</h5>
                <butto style="color:#E88F97;"n type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </butto>
            </div>
            <div class="modal-body"> 
                <p style="color:#E88F97;">Please log in to add items to your cart.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color:#E88F97;"><a href="register.php" style="text-decoration: none; color: white">Login</a></button>
                <!-- Add a button to redirect to the login page if needed -->
                <!-- <a href="login.php" class="btn btn-primary">Log In</a> -->
            </div>
        </div>
    </div>
</div>
		<?php 
		include './components/footer.php';
		?>
        