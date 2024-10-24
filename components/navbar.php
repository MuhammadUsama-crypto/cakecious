 <!-- <button class="btn btn-primary">Click me</button> -->

<?php
session_start();


	
	

?>


<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
       
        <title>Cake - Bakery</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linearicons/style.css" rel="stylesheet">
        <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/checkout.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
		<!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/jquery-ui/jquery-ui.min.css" rel="stylesheet">
        <link href="vendors/nice-select/css/nice-select.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
		<script src="https://cdn.tiny.cloud/1/otkgj6dkilafx8ea9x7zlb0ait23l023zq8bfl4kb0nrsptj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    // Initialize TinyMCE after the page has loaded
    document.addEventListener("DOMContentLoaded", function() {
      tinymce.init({
        selector: 'textarea#recipe_description', // Target the textarea with ID 'recipe_description'
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | image',
        height: 300 // Set the height of the editor as per your requirement
      });
    });
  </script>
    </head>
    <body>
        

<header class="main_header_area">
			
			<div class="main_menu_area">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="index.php">
						<!-- <img src="img/logo.png" alt="">
						<img src="img/logo-2.png" alt=""> -->
						<h1 style="color: #F195B2;" >Velvet delight</h1>
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
							
								
								<li><a href="index.php">Home</a></li>
								<li><a href="recipe.php">Recipe</a></li>
								<li><a href="about-us.php">About Us</a></li>
								
							</ul>
							<ul class="navbar-nav justify-content-end">
								
								
							
							<li><a href="contact.php">Contact Us</a></li>
								<li><a href="blog.php">Blogs</a></li>
								<!-- <li><a href="faq.php">Faqs</a></li> -->
								
								<li><a href="register.php">Register</a></li>
								

								<?php
								include 'config.php';
								 	//  session_start();
									  
								  
								 ?>
				<?php if(isset($_SESSION['user_id'])) { ?>
					<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o" aria-hidden="true" style="margin-right:5px; font-size: 25px;"></i></a>
									<ul class="dropdown-menu">
										<li><a href="profile.php">Account</a></li>
										<li><a href="logout.php">Logout</a></li>
										
									</ul>
								</li>
								<?php } ?>
								<!-- <li><a href="register.php"><i class="fa fa-user-o" aria-hidden="true" style="margin-right:5px;"></i>Profile</a></li> -->
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>