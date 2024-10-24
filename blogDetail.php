<?php
include 'components/config.php';
include 'components/navbar.php';
?>
            
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Blog Details</h3>
        			<ul>
        				<li><a href="index.html">Home</a></li>
        				<li><a href="blog.html">Blog</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Blog Main Area =================-->
        <section class="main_blog_area p_100">
        	<div class="container">
        		<div class="row blog_area_inner">
				<?php 
	$id = $_GET['id'];
$sql = "SELECT * FROM `blog` Where `id`= '$id'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
						
						?>
        			<div class="col-lg-12">
        				<div class="main_blog_inner single_blog_inner">
							<div class="blog_item">
								<div class="blog_img">
									<img class="img-fluid" src="img/blog/<?php echo $row['img']; ?>" alt="">
								</div>
								<div class="blog_text">
									<div class="blog_time">
										<div class="float-left">
											<a href="#"><?php echo $row['date']; ?></a>
										</div>
										<div class="float-right">
											<ul class="list_style">
												<li><a href="#">By :  Admin</a></li>
												
											</ul>
										</div>
									</div>
									<a href="#"><h4><?php echo $row['name']; ?></h4></a>
									<p><?php echo $row['detail']; ?></p>
								</div>
							</div>
       						
       						
							
        				</div>
        			</div>
        			<?php } ?>
        		</div>
        	</div>
        </section>
        <!--================End Blog Main Area =================-->
        
  <?php include 'components/footer.php'; ?>