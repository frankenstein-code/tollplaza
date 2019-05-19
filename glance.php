<?php include "header.php"; ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="css/jquery.min.js"></script>
<script src="css/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

<style>

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
  font-size: 20px;
}

table {
	background-color: #006db7;
}

.btn {
  background-color: #006db7;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 20%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #006db7;
}

</style>
</head>
<body>
    <div class="continer text-center">
<h1 class="page-header">Toll Plazas — At a Glance</h1>
<div class="container">
 <div class="form-group">
        <label>List of Toll Plaza</label><br/>
        <input type="text" name="" placeholder="Enter Toll Plaza Name">
      </div>
      <div class="form-group" align="right">
        <input type="button" class="btn" value="Search">
      </div>
      </div>
<table class="table" border="1px solid #006db7" align="center" style="width: 83%">
	<tr style="font-size: 20px">
		<th>Sr No.</th>
		<th>State</th>
		<th>NH-No.</th>
		<th>Toll Plaza Name</th>
		<th>Toll Plaza Location</th>
		<th>Section/Stretch</th>
	</tr>
</table>
</div>
</body>
</html>