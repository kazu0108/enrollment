<?php


$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$skypeid = $_POST['skypeid'];
$gender = $_POST['gender'];
$program = $_POST['program'];

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
		<th class="text-center">Name</th>
		<th class="text-center">Email</th>
		<th class="text-center">Phone Number</th>
		<th class="text-center">Address</th>
		<th class="text-center">Skype ID</th>
		<th class="text-center">Gender</th>
		<th class="text-center">Program</th>
	</tr>

	<tr>
	<td><?php echo $name; ?></td>
	<td><?php echo $email; ?></td>
	<td><?php echo $phonenumber; ?></td>
	<td><?php echo $address; ?></td>
	<td><?php echo $skypeid; ?></td>
	<td><?php echo $gender; ?></td>
	<td><?php echo $program; ?></td>
	</tr>

	</table>
	</div>
		</div>
	</div>



</body>
</html>