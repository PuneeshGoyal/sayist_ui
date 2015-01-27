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
	<section class="favorites mt40 mb40">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<ul class="nav nav-pills nav-stacked">
						<h4 class="color-gray-dark text-light border-bottom border-gray">Your Account</h4>
						<li><a href="../pages/your-account.php">Account Information</a></li>
						<li class="active"><a href="../pages/your-favorites.php">Your Favorites</a></li>
						<li><a href="../pages/your-posts.php">Your Posts</a></li>
						<li><a href="#">Sign Out</a></li>
					</ul>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
					<hgroup class="pb10">
						<h2>Your Favorites</h2>
						<p>Viewing 10 out of 12 posts</p>
					</hgroup>
					<div class="category-filter">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-6 mb20 mt20">
								<select name="select-categories" id="select-categories" class="selectpicker" data-width="100%" multiple title="All Categories" data-selected-text-format="count>2" data-size="auto">
									<option>Community</option>
									<option>For Sale</option>
									<option>Gigs</option>
									<option>Housing</option>
									<option>Jobs</option>
									<option>Musicians</option>
									<option>Pets</option>
									<option>Resume</option>
									<option>Servicers</option>
								</select>
							</div>
							<div class="col-md-8 col-sm-6 col-xs-6 mb20 mt20">
								<div class="search-container">
									<input type="search" class="form-control">
									<button class="fa fa-search"></button>
							 	</div>
							</div>
						</div>
					</div>
					<!--  POST -->
					<div class="post">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
								<img class="img-responsive" src="http://placehold.it/400x300&text=video">
								<div class="row mt10">
									<div class="col-md-12 mb30">
										<button class="btn btn-full btn-sayist btn-gray">unfavorite</button>
									</div>
								</div>
							</div>
							<div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
								<div class="row">
									<!-- Title  -->
									<div class="col-lg-10 col-md-10 col-sm-9 col-xs-10">
										<h4 class="title text-med color-post mt0"><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</a></h4>
										<p class="location color-gray-dark text-med">Location</p>
									</div>
									<!-- Price  -->
									<div class="col-lg-2 col-md-2 col-sm-3 col-xs-2">
										<p class="price color-post text-right text-med">$300</p>
									</div>
								</div>
								<!-- Description -->
								<p class="mb10 desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
								<div class="row">
									<!-- Hashtags -->
									<div class="col-md-12">
										<ul class="hashtag-list">
											<li class="hashtag"><a href="#">#hashtag</a></li>
											<li class="hashtag"><a href="#">#hashtag</a></li>
											<li class="hashtag"><a href="#">#hashtag</a></li>
											<li class="hashtag"><a href="#">#hashtag</a></li>
										</ul>
									</div>
								</div>
								<!-- Post Date -->
								<p class="post-date"><a class="date-posted">Date Posted</a> - <a class="category">Category</a></p>
							</div>
						</div>
					</div>

					<!-- POST -->
					<div class="post">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
								<img class="img-responsive" src="http://placehold.it/400x300&text=video">
								<div class="row mt10">
									<div class="col-md-12 mb30">
										<button class="btn btn-full btn-sayist btn-gray">unfavorite</button>
									</div>
								</div>
							</div>
							<div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
								<div class="row">
									<!-- Title  -->
									<div class="col-lg-10 col-md-10 col-sm-9 col-xs-10">
										<h4 class="title text-med color-post mt0"><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</a></h4>
										<p class="location color-gray-dark text-med">Location</p>
									</div>
									<!-- Price  -->
									<div class="col-lg-2 col-md-2 col-sm-3 col-xs-2">
										<p class="price color-post text-right text-med">$300</p>
									</div>
								</div>
								<!-- Description -->
								<p class="mb10 desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
								<div class="row">
									<!-- Hashtags -->
									<div class="col-md-12">
										<ul class="hashtag-list">
											<li><a href="#" class="hashtag">#hashtag</a></li>
											<li><a href="#" class="hashtag">#hashtag</a></li>
											<li><a href="#" class="hashtag">#hashtag</a></li>
											<li><a href="#" class="hashtag">#hashtag</a></li>
										</ul>
									</div>
								</div>
								<!-- Post Date -->
								<p class="post-date"><a class="date-posted">Date Posted</a> - <a class="category">Category</a></p>
							</div>
						</div>
					</div>

					<!-- POST -->
					<div class="post">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
								<img class="img-responsive" src="http://placehold.it/400x300&text=video">
								<div class="row mt10">
									<div class="col-md-12 mb30">
										<button class="btn btn-full btn-sayist btn-gray">unfavorite</button>
									</div>
								</div>
							</div>
							<div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
								<div class="row">
									<!-- Title  -->
									<div class="col-lg-10 col-md-10 col-sm-9 col-xs-10">
										<h4 class="title text-med color-post mt0"><a href="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</a></h4>
										<p class="location color-gray-dark text-med">Location</p>
									</div>
									<!-- Price  -->
									<div class="col-lg-2 col-md-2 col-sm-3 col-xs-2">
										<p class="price color-post text-right text-med">$300</p>
									</div>
								</div>
								<!-- Description -->
								<p class="mb10 desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
								<div class="row">
									<div class="col-md-12">
										<ul class="hashtag-list">
											<li><a href="#" class="hashtag">#hashtag</a></li>
											<li><a href="#" class="hashtag">#hashtag</a></li>
											<li><a href="#" class="hashtag">#hashtag</a></li>
											<li><a href="#" class="hashtag">#hashtag</a></li>
										</ul>
									</div>
								</div>
								<!-- Post Date -->
								<p class="post-date"><a class="date-posted">Date Posted</a> - <a class="category">Category</a></p>
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
