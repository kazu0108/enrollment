<?php

$servername = "localhost";
$username = "ody";
$password = "zarahjean1234";
$dbname = "enrollment";

$conn = new mysqli($servername, $username, $password, $dbname);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Result4</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class=" col-md-12" style="margin-top: 50px;">
	<h3 class="text-center">Enrollment Results</h3>
	<table class="table table-bordered table-hover">
	<tr>
		<th class="text-center">Select</th>
		<th class="text-center">Name</th>
		<th class="text-center">Email</th>
		<th class="text-center">Phone Number</th>
		<th class="text-center">Address</th>
		<th class="text-center">Skype ID</th>
		<th class="text-center">Gender</th>
		<th class="text-center">Program</th>
	</tr>


	</table>
	</div>
		</div>
	</div>



</body>
</html>