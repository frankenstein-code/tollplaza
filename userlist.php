<?php
$connect=mysqli_connect("localhost","root","","tollbooth");
$query= "SELECT * FROM client ORDER BY id DESC";
$result= mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Toll Plaza</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
		<script src="css/jquery.min.js"></script>
		<script src="css/bootstrap.min.js"></script>

		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
		<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
		<script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script src="jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
		
		
		<style type="text/css">
			
		</style>
	</head>
	<body>
	<body>



	<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Toll Plaza</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="adminpage.php">Home</a></li>
          <li class="active"><a href="userlist.php">Users List</a></li>
          <li><a href="feedbacklist.php">Feedbacks</a></li>
          <li><a href="paymentlist.php">Payment Request</a></li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron text-center">
  <h1>TollBooth Services</h1> 
  <h2>Clients Page</h2>
</div>
<hr>
<div class="container">
    <br>
    <br>
    <br>
    <div class="table-responsive">
        <h3 align="center">List Of Clients </h3><br>
        <table id="editable_table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>UserName</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result))
                    {
                        echo '<tr>
                        <td>'.$row["username"].'</td>
                        <td>'.$row["email"].'</td>
                        </tr>'                       
                        ;  
                    }
                    ?>
                </tbody>
            </table>
        </h3>
    </div>
</div>
<hr>

  		


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