<!DOCTYPE html>
<html>
<head>
	<title>Application 6</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="well col-md-offset-3 col-md-6" style="margin-top: 50px;">
			<h1 class="text-center">Enrollment Form:</h1>
			<form method="POST" action="submit.php" class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-md-2" for="name">
						Name:
					</label>
					<div class="col-md-10">
					<input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="control-label col-md-2">
						Email:
					</label>
					<div class="col-md-10">
					<input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
					</div>					
				</div>
				<div class="form-group">
					<label class="control-label col-md-2" for="phonenumber">
						Phone Number:
					</label>
					<div class="col-md-10">
					<input type="text" name="phonenumber" id="phonenumber" class="form-control" placeholder="Enter phone number">	
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2" for="address">
						Address:
					</label>
					<div class="col-md-10">
					<input type="text" name="address" placeholder="Enter Address" id="address" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label for="skypeid" class="control-label col-md-2">
						Skype ID:
					</label>
					<div class="col-md-10">
					<input type="text" name="skypeid" id="skypeid" class="form-control" placeholder="Enter Skype ID">
					</div>
				</div>
				<div class="form-group">
					<label for="gender" class="control-label col-md-2">
						Gender:
					</label>
					<label class="radio-inline" style="margin-left: 20px;"><input type="radio" name="gender" value="male">Male</label>
					<label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2" name="program">
						Program:
					</label>
					<div class="col-md-10" id="program">
					<div class="checkbox">
  					<label><input type="checkbox" value="Web design" name="program[]">Web Design</label>
					</div>
					<div class="checkbox">
 					<label><input type="checkbox" value="Web Development" name="program[]">Web Development</label>
					</div>
					<div class="checkbox">
  					<label><input type="checkbox" value="ESL" name="program[]">ESL</label>
					</div>
					</div>
					<div class="col-md-offset-2 col-md-2" style="margin-top: 10px;">
					<input type="submit" name="submit" value="Send">
						
					</div>
				</div>
			</form>
		</div>
		<div class="well col-md-3" style="margin-top: 50px;">
			<div class="img">
				<img src="http://www.spsd.sk.ca/school/caswell/FeaturedStories/Caswell-web.jpg" width="100%">
				<p>
					The systematic provision of learning techniques to most children, such as literacy, has been a development of the last 150 or 200 years,[1] or even last 50 years in some countries. Schools for the young have historically been supplemented with advanced training for priests, bureaucrats and specialists.
				</p>
			</div>
		</div>
		<div class="well col-md-3">
			<div class="text-center"> Contact Info</div>
			<div style="margin-top: 20px;"> Address:Park Central Building, I.T. Park Apas Lahug
			Number:(036) 860 4095
			HP:https://kredo.jp</div>

		</div>
	</div>	
</div>

</body>
</html>