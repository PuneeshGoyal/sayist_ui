<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width initial-scale=1.0, minimum-scale=1.0">
<title>Sayist Official Website</title>
<link rel="stylesheet" type="text/css" href="../../../../css/sayist.css">
<link rel="stylesheet" type="text/css" href="../../../../css/functional.css">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../../../js/scripts/jquery-1.11.0.js"><\/script>')</script>
<script src="../../../../js/scripts/frameworks-min.js"></script>
<script src="../../../../js/scripts/sayist.min.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!--header-->
<?php include("../components/header-new.php"); ?>
<!--/header-->


<main class="your-account">
	<section class="mt40 mb40">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-12">
					<ul class="nav nav-pills nav-stacked">
						<h4 class="color-gray-dark text-light">Your Account</h4>
						<li class="active"><a href="../pages/your-account.php">Account Information</a></li>
						<li><a href="../pages/your-favorites.php">Your Favorites</a></li>
						<li><a href="../pages/your-posts.php">Your Posts</a></li>
						<li><a href="#">Sign Out</a></li>
					</ul>
				</div>
				<div class="col-md-9 col-sm-8 col-xs-12">
					<h2 class="mb20 pb20 heading border-bottom border-gray">Account Information</h2>
					<div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12 mb30">
							<label>First Name:</label>
							<input type="text" class="form-control">
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12 mb30">
							<label>Last Name:</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12  mb30">
							<label>Email:</label>
							<input type="email" class="form-control">
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12  mb30">
							<label>Default City:</label>
							<select class="selectpicker" data-size="auto" data-width="100%">
								<option>Austin</option>
								<option selected>Boston</option>
								<option>New York City</option>
								<option>San Francisco</option>
								<option>Seattle</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12">
							<label>Password:</label>
							<input type="password" class="form-control">
							<p class="mt10">Please use at least 8 characters</p>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12 pt30">
							<p class="mt5"><a href="#" class="h4 text-light color-post text-no-underline change-pswd">Change Password</a></p>
						</div>
					</div>
					<div class="row mt30 mb30">
						<div class="col-md-6 col-sm-12 col-xs-12">
							<a class="btn btn-social btn-full btn-sayist btn-facebook mb20">
								<i class="fa fa-facebook"></i>Connect to Facebook
							</a>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<a class="btn btn-social btn-full btn-sayist btn-twitter mb20">
								<i class="fa fa-twitter"></i>Connect to Twitter
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="border-top border-gray"></div>
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12 mt30 mb30">
									<button class="btn btn-sayist btn-full">Save</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<!--footer-->
<?php include("../components/footer-new.php"); ?>
<!--footer-->

</body>
</html>
