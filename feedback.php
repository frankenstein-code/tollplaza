<?php include "header.php"; ?>

<?php

if(isset($_POST['clicksubmit']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $comments=$_POST['comments'];
    
    $db = new mysqli("localhost", "root", "", "tollbooth");
    
    $db->query("INSERT INTO contactus (name, phone, email, comment) VALUES ('$name', '$phone','$email', '$comments')");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
		<script src="css/jquery.min.js"></script>
		<script src="css/bootstrap.min.js"></script>

		<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
		<script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script src="jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>
            .main{
        padding-top: 6%;
    }
    body{
        background-image: url("img/contactbg.jpg");
        background-size: cover;
    }
    .about{
        color: black;
        font-size: 20px;
    }
        </style>



		</head>
        <body>
            <!-- Container (Contact Section) -->
<div id="contact" class="main container bg-grey">
    <h1 class="text-center"><b>Feedback Form:</b></h1>
  <br>
  <br>
  <div class="row">
    <div class="about col-sm-5">
      <!-- <p>Please .</p> -->
      <p><span class="glyphicon glyphicon-map-marker"></span> Bangalore, IN</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9686466022</p>
      <p><span class="glyphicon glyphicon-envelope"></span> monicashankar12@gmail.com</p>
    </div>
      <form action="" method="POST">
    <div class="col-sm-7 slideanim">
      <div class="row">
      <p style="color:red;">All fields with ' * ' are mandatory.</p>
        <div class="col-sm-6 form-group">
        
          <input class="form-control" id="name" name="name" placeholder="Name*" type="text" required>
        </div>
        
        <div class="col-sm-6 form-group">
        
          <input class="form-control" id="phone" name="phone" placeholder="Phone No*" type="text" required maxlength="10" required>
        </div>

        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email*" type="email" pattern="[^@\s]+@[^@\s]+" title="Enter valid email" required>
        </div>
      </div>
        
        
        
        <textarea class="form-control" id="comments" name="comments" placeholder="Message*" rows="5" minlength="20" required></textarea><br>
        
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-primary pull-right" type="submit" name="clicksubmit">Submit</button>
        </div>
      </div>
    </div>
      </form>
  </div>
</div>






        </body>


<footer class="footer-distributed">
			<div class="footer-left">
		<div class="footer-icons">
					<a href="links/Facebook.html"><i class="fa fa-facebook"></i></a>
					<a href="links/Twitter.html"><i class="fa fa-twitter"></i></a>
					<a href="links/LinkedIn.html"><i class="fa fa-linkedin"></i></a>
					<a href="links/Instagram.html"><i class="fa fa-instagram"></i></a>
					<a href="links/Gmail.html"><i class="fa fa-google"></i></a>
				</div>
				</div>

				<div class="footer-center">
				</div>

				<div class="footer-right">
					<h4 style="color: white">Conceptualized and supported by NHAI, Developed and Designed by Comvision India</h4>
				</div>
			</footer>
</body>
</html>