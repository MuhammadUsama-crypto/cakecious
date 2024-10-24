<?php 
include './components/navbar.php';
include './components/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sender's information
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Recipient's email address
    $to = "alviu027@gmail.com";

    // PHPMailer setup
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'alviu027@gmail.com'; // Your SMTP username
        $mail->Password   = 'bric qepf rcxu uxrm'; // Your SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipient and sender details
        $mail->setFrom($email, $name);
        $mail->addAddress($to);
        
        // Content
        $mail->isHTML(true);  // Set to true if sending HTML content
        $mail->Subject = $subject;
        $mail->Body    = "Sender Name: $name <br> Sender Email: $email <br> Subject : $subject <br> Message: $message";

        // Send the email
        $mail->send();
        
        // You can customize the response message
        session_start();
        $_SESSION['sent'] = true;
    } catch (Exception $e) {
        // Handle errors
        echo 'error';
    }
} else {
    // If the form is not submitted, redirect or handle accordingly
    echo 'form not submitted';
}

?>
        
<!--================End Main Header Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_text">
            <h3>Contact Us</h3>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="single-blog.html">Contact Us</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Main Header Area =================-->
        
<!--================Contact Form Area =================-->
<section class="contact_form_area p_100">
    <div class="container">
        <div class="main_title">
            <h2>Get In Touch</h2>
            <h5>Do you have anything in your mind to let us know?  Kindly don't delay to connect to us by means of our contact form.</h5>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <form class="row contact_us_form" action="contact.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email address">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                    </div>
                    <div class="form-group col-md-12">
                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Wrtie message"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" value="submit" class="btn order_s_btn form-control">submit now</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 offset-md-1">
                <div class="contact_details">
                    <div class="contact_d_item">
                        <h3>Address :</h3>
                        <p>54B, Tailstoi Town 5238 <br /> La city, IA 522364</p>
                    </div>
                    <div class="contact_d_item">
                        <h5>Phone : <a href="tel:01372466790">01372.466.790</a></h5>
                        <h5>Email : <a href="mailto:rockybd1995@gmail.com">rockybd1995@gmail.com</a></h5>
                    </div>
                    <div class="contact_d_item">
                        <h3>Opening Hours :</h3>
                        <p>8:00 AM – 10:00 PM</p>
                        <p>Monday – Sunday</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Contact Form Area =================-->
        
<!--================End Banner Area =================-->
<section class="map_area">
    <div id="mapBox" class="mapBox row m0" 
        data-lat="40.701083" 
        data-lon="-74.1522848" 
        data-zoom="13" 
        data-marker="img/map-marker.png" 
        data-info="54B, Tailstoi Town 5238 La city, IA 522364"
        data-mlat="40.701083"
        data-mlon="-74.1522848">
    </div>
</section>
<!--================End Banner Area =================-->
        

<div class="modal" tabindex="-1" role="dialog" id="exampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
    <?php
    // Check if the email was sent successfully and show the modal
	if (isset($_SESSION['sent']) && $_SESSION['sent']) {
        echo '$(document).ready(function() {
            $("#exampleModal").modal("show");
        });';
        unset($_SESSION['sent']); // Clear the session variable
    }
    ?>
</script>
<?php 
include './components/footer.php';
?>
