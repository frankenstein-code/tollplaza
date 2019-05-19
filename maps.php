<?php include "header.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Maps</title>
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
		<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
		<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
		<script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script src="jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
		
	<style>
	body {
		/* font-family: Arial; */
		/* font-size: 17px; */
		/* padding: 8px; */
	}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #006db7;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 50%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #006db7;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>

</head>
<body>
        <h1 align="center">Toll Plazas on Maps</h1>
        <br>
<div class="container">

 <div class="row">
   <div class="col-md-4">
      <div class="form-group" style="color: #006db7">
        <label align="center">Search Toll Plaza</label>
        <input type="text" name="" placeholder="Search">
      </div>
      <div class="form-group" align="right">
        <input type="button" class="btn" value="Search">
      </div>
      <div class="form-group" style="color: #006db7">
        <label align="center">Toll Plaza(s) Between Two Stations</label>
        <input type="text" name="" placeholder="Source Name">
        <input type="text" name="" placeholder="Destination Name">
          </div> 
        <div class="form-group">
        <label>Select Mode of Travel</label>
        <select style="width: 100%">
        	<option value="car">Car/Jeep/Van</option>
        	<option value="lcv">LCV</option>
        	<option value="bus">Bus/Truck</option>
        	<option value="axle3">Upto 3 Axle Vehicle</option>
        	<option value="axle4">4 to 6 Axle</option>
        	<option value="axle7">7 or more Axle</option>
        	<option value="hcm">HCM/EME</option>
        </select>
        <div class="form-group" align="right">
          <input type="button" class="btn" value="Search">
        </div>
    </div>
</div>

   <div class="col-md-6">
   	<div class="w3-content w3-display-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d248767.62683371775!2d77.44230185!3d13.036042915599113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1stoll+plaza!5e0!3m2!1sen!2sin!4v1558010041064!5m2!1sen!2sin" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>

</div>
</div>


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