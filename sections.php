<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width initial-scale=1.0, minimum-scale=1.0">
<title>Sayist Official Website - Section Page</title>
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

<main class="cities">
	<section class="hero">
		<div class="container">
			<h1 class="text-center mt40 mt50-sm color-white pt40-md">Find what you are looking for <br class="hide show-sm hide-md">
				in Seattle</h1>
		</div>
	</section>
	<div class="container mt20 mt35-sm mt-50md mb35">
		<div class="first-paragraph pull-right-md col-md-8 ml-15 ml0-md ml0-ph">
			<div class="row">
				<div class="col-sm-5">
					<h2>Categories</h2>
					<p class="mt5">Viewing 10 of 342 Posts</p>
				</div>
				<div class="col-sm-7 text-right-sm mt0 mr0 pr0">
					<div class="">
						<ul class="pagination pagination-md mt5 mb0 mr0 pr0">
						  <li><a href="#">&laquo;</a></li>
						  <li><a href="#">1</a></li>
						  <li><a href="#">2</a></li>
						  <li><a href="#">3</a></li>
						  <li><a href="#">4</a></li>
						  <li><a href="#">5</a></li>
						  <li><a href="#">&raquo;</a></li>
						</ul>
						<!--<a href="1">1</a> <a href="2">2</a> <a href="3">3</a>... <a href="17">17</a>-->
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 pr20 mb40">
				<div class="border-solid border-1x border-gray-lighter pt25 pl15 pr15">
					<form role="form">
						<section class="search">
							<h5>Search Sayist</h5>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
								<button type="submit" class="search-submit"><img src="../../../../img/icon-search.png" alt="search icon"></button>
							</div>
							<h5 class="mt20">Search Options</h5>
							<div class="row">
								<div class="col-ph-12 col-xs-6 col-sm-4 col-md-12">
									<div class="checkbox pl15 mt0 mb0">
										<label>
											<input type="checkbox">
											Post with video </label>
									</div>
								</div>
								<div class="col-ph-12 col-xs-6 col-sm-4 col-md-12">
									<div class="checkbox pl15 mt0">
										<label>
											<input type="checkbox">
											Post with images </label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-ph-12 col-xs-12 col-sm-4 col-md-12">
									<div class="form-group">
										<select name="select-categories" id="select-categories" class="selectpicker" data-width="100%" multiple title="All Categories" data-selected-text-format="count>2" data-size="auto">
											<option value="">Community</option>
											<option value="">For Sale</option>
											<option value="">Gigs</option>
											<option value="">Housing</option>
											<option value="">Jobs</option>
											<option value="">Musicians</option>
											<option value="">Pets</option>
											<option value="">Resumes</option>
											<option value="">Servicers</option>
											<option value="">Vehicles</option>

										</select>
									</div>
								</div>
								<div class="col-ph-12 col-xs-12 col-sm-4 col-md-12">
									<div class="form-group">
										<select name="sort-by" id="sort-by" class="selectpicker" data-width="100%" title="Sort-By">
											<option>Sort By</option>
											<option value="">Price: Highest to Lowest</option>
											<option value="">Price: Lowest to Highest</option>
										</select>
									</div>
								</div>
							</div>
						</section>
					</form>
				</div>
			</div>
			<div class="col-md-8 categories">
				<div class="post row">
					<div class="col-md-12 hr-container">
						<hr class="border border-gray-lighter">
					</div>
					<!-- Image -->
					<div class="col-md-3 col-sm-3 col-xs-4 mb30">
						<img src="../../../../img/item_01.jpg" alt="item 01" class="img-responsive">
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="row">
							<!-- Title  -->
							<div class="col-md-10 col-sm-9 col-xs-9">
								<h4 class="title text-light color-post mt0"><a href="" class="">Post Title</a></h4>
							</div>
							<!-- Price  -->
							<div class="col-md-2 col-sm-3 col-xs-3 text-right">
								<p class="price color-post text-large text-med mb0 mt-5">$300</p>
							</div>
						</div>
						<!-- Description  -->
						<p class="mb10 post-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
						<div class="row">
							<!-- Hashtags  -->
							<div class="col-md-12">
								<ul class="hashtag-list">
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
								</ul>
							</div>
						</div>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
				</div>
				<div class="post row">
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
					<!-- Image -->
					<div class="col-md-3 col-sm-3 col-xs-4 mb30">
						<img src="../../../../img/item_02.jpg" alt="item 02" class="img-responsive">
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="row">
							<!-- Title  -->
							<div class="col-md-10 col-sm-9 col-xs-9">
								<h4 class="title text-light color-post mt0"><a href="" class="">Post Title</a></h4>
							</div>
							<!-- Price  -->
							<div class="col-md-2 col-sm-3 col-xs-3 text-right">
								<p class="price color-post text-large text-med mb0 mt-5">$300</p>
							</div>
						</div>
						<!-- Description  -->
						<p class="mb10 post-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
						<div class="row">
							<!-- Hashtags  -->
							<div class="col-md-12">
								<ul class="hashtag-list">
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
								</ul>
							</div>
						</div>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
				</div>
				<div class="post row">
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
					<!-- Image -->
					<div class="col-md-3 col-sm-3 col-xs-4 mb30">
						<img src="../../../../img/item_03.jpg" alt="item 03" class="img-responsive">
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="row">
							<!-- Title  -->
							<div class="col-md-10 col-sm-9 col-xs-9">
								<h4 class="title text-light color-post mt0"><a href="" class="">Post Title</a></h4>
							</div>
							<!-- Price  -->
							<div class="col-md-2 col-sm-3 col-xs-3 text-right">
								<p class="price color-post text-large text-med mb0 mt-5">$300</p>
							</div>
						</div>
						<!-- Description  -->
						<p class="mb10 post-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
						<div class="row">
							<!-- Hashtags  -->
							<div class="col-md-12">
								<ul class="hashtag-list">
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
								</ul>
							</div>
						</div>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
				</div>
				<div class="post row">
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
					<!-- Image -->
					<div class="col-md-3 col-sm-3 col-xs-4 mb30">
						<img src="../../../../img/item_04.jpg" alt="item 04" class="img-responsive">
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="row">
							<!-- Title  -->
							<div class="col-md-10 col-sm-9 col-xs-9">
								<h4 class="title text-light color-post mt0"><a href="" class="">Post Title</a></h4>
							</div>
							<!-- Price  -->
							<div class="col-md-2 col-sm-3 col-xs-3 text-right">
								<p class="price color-post text-large text-med mb0 mt-5">$300</p>
							</div>
						</div>
						<!-- Description  -->
						<p class="mb10 post-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
						<div class="row">
							<!-- Hashtags  -->
							<div class="col-md-12">
								<ul class="hashtag-list">
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
								</ul>
							</div>
						</div>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
				</div>
				<div class="post row">
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
					<!-- Image -->
					<div class="col-md-3 col-sm-3 col-xs-4 mb30">
						<img src="../../../../img/item_05.jpg" alt="item 05" class="img-responsive">
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="row">
							<!-- Title  -->
							<div class="col-md-10 col-sm-9 col-xs-9">
								<h4 class="title text-light color-post mt0"><a href="" class="">Post Title</a></h4>
							</div>
							<!-- Price  -->
							<div class="col-md-2 col-sm-3 col-xs-3 text-right">
								<p class="price color-post text-large text-med mb0 mt-5">$300</p>
							</div>
						</div>
						<!-- Description  -->
						<p class="mb10 post-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
						<div class="row">
							<!-- Hashtags  -->
							<div class="col-md-12">
								<ul class="hashtag-list">
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
								</ul>
							</div>
						</div>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
				</div>
				<div class="post row">
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
					<!-- Image -->
					<div class="col-md-3 col-sm-3 col-xs-4 mb30">
						<img src="../../../../img/item_06.jpg" alt="item 06" class="img-responsive">
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="row">
							<!-- Title  -->
							<div class="col-md-10 col-sm-9 col-xs-9">
								<h4 class="title text-light color-post mt0"><a href="" class="">Post Title</a></h4>
							</div>
							<!-- Price  -->
							<div class="col-md-2 col-sm-3 col-xs-3 text-right">
								<p class="price color-post text-large text-med mb0 mt-5">$300</p>
							</div>
						</div>
						<!-- Description  -->
						<p class="mb10 post-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
						<div class="row">
							<!-- Hashtags  -->
							<div class="col-md-12">
								<ul class="hashtag-list">
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
								</ul>
							</div>
						</div>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
				</div>
				<div class="post row">
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
					<!-- Image -->
					<div class="col-md-3 col-sm-3 col-xs-4 mb30">
						<img src="../../../../img/item_07.jpg" alt="item 07" class="img-responsive">
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="row">
							<!-- Title  -->
							<div class="col-md-10 col-sm-9 col-xs-9">
								<h4 class="title text-light color-post mt0"><a href="" class="">Post Title</a></h4>
							</div>
							<!-- Price  -->
							<div class="col-md-2 col-sm-3 col-xs-3 text-right">
								<p class="price color-post text-large text-med mb0 mt-5">$300</p>
							</div>
						</div>
						<!-- Description  -->
						<p class="mb10 post-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
						<div class="row">
							<!-- Hashtags  -->
							<div class="col-md-12">
								<ul class="hashtag-list">
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
								</ul>
							</div>
						</div>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
				</div>
				<div class="post row">
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
					<!-- Image -->
					<div class="col-md-3 col-sm-3 col-xs-4 mb30">
						<img src="../../../../img/item_08.jpg" alt="item 08" class="img-responsive">
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="row">
							<!-- Title  -->
							<div class="col-md-10 col-sm-9 col-xs-9">
								<h4 class="title text-light color-post mt0"><a href="" class="">Post Title</a></h4>
							</div>
							<!-- Price  -->
							<div class="col-md-2 col-sm-3 col-xs-3 text-right">
								<p class="price color-post text-large text-med mb0 mt-5">$300</p>
							</div>
						</div>
						<!-- Description  -->
						<p class="mb10 post-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
						<div class="row">
							<!-- Hashtags  -->
							<div class="col-md-12">
								<ul class="hashtag-list">
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
								</ul>
							</div>
						</div>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
				</div>
				<div class="post row">
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
					<!-- Image -->
					<div class="col-md-3 col-sm-3 col-xs-4 mb30">
						<img src="../../../../img/item_09.jpg" alt="item 09" class="img-responsive">
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="row">
							<!-- Title  -->
							<div class="col-md-10 col-sm-9 col-xs-9">
								<h4 class="title text-light color-post mt0"><a href="" class="">Post Title</a></h4>
							</div>
							<!-- Price  -->
							<div class="col-md-2 col-sm-3 col-xs-3 text-right">
								<p class="price color-post text-large text-med mb0 mt-5">$300</p>
							</div>
						</div>
						<!-- Description  -->
						<p class="mb10 post-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
						<div class="row">
							<!-- Hashtags  -->
							<div class="col-md-12">
								<ul class="hashtag-list">
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
								</ul>
							</div>
						</div>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
				</div>
				<div class="post row">
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
					<!-- Image -->
					<div class="col-md-3 col-sm-3 col-xs-4 mb30">
						<img src="../../../../img/item_10.jpg" alt="item 10" class="img-responsive">
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="row">
							<!-- Title  -->
							<div class="col-md-10 col-sm-9 col-xs-9">
								<h4 class="title text-light color-post mt0"><a href="" class="">Post Title</a></h4>
							</div>
							<!-- Price  -->
							<div class="col-md-2 col-sm-3 col-xs-3 text-right">
								<p class="price color-post text-large text-med mb0 mt-5">$300</p>
							</div>
						</div>
						<!-- Description  -->
						<p class="mb10 post-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
						<div class="row">
							<!-- Hashtags  -->
							<div class="col-md-12">
								<ul class="hashtag-list">
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
									<li><a href="#" class="hashtag">#hashtag</a></li>
								</ul>
							</div>
						</div>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
				</div>
				<div class="col-xs-12 col-ph-12">
					<div class="footer-pagination row">
						<ul class="pagination pagination-md mt0 mb0">
						  <li><a href="#">&laquo;</a></li>
						  <li><a href="#">1</a></li>
						  <li><a href="#">2</a></li>
						  <li><a href="#">3</a></li>
						  <li><a href="#">4</a></li>
						  <li><a href="#">5</a></li>
						  <li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
				<!--
				<div class="row">
					<div class="col-sm-3 col-xs-4 text-center-ph">
						<img src="../../../../img/item_03.jpg" alt="item 03" class="img-responsive">
					</div>
					<div class="col-sm-7 col-xs-7">
						<h5><a href="">Post Title</a></h5>
						<p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, blanditiis maxime ipsa labore similique. Sequi.</p>
						<ul class="hashtag-list clearfix">
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>

						</ul>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
					<div class="col-sm-2 col-xs-1 text-right-sm">
						<h6 class="mt35-sm mt15-ph text-large color-success ml0-ph ml-50-xs ml0-sm">$300</h6>
					</div>
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-xs-4 text-center-ph">
						<img src="../../../../img/item_04.jpg" alt="item 04" class="img-responsive">
					</div>
					<div class="col-sm-7 col-xs-7">
						<h5><a href="">Post Title</a></h5>
						<p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, blanditiis maxime ipsa labore similique. Sequi.</p>
						<ul class="hashtag-list clearfix">
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>

						</ul>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
					<div class="col-sm-2 col-xs-1 text-right-sm">
						<h6 class="mt35-sm mt15-ph text-large color-success ml0-ph ml-50-xs ml0-sm">$300</h6>
					</div>
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-xs-4 text-center-ph">
						<img src="../../../../img/item_05.jpg" alt="item 05" class="img-responsive">
					</div>
					<div class="col-sm-7 col-xs-7">
						<h5><a href="">Post Title</a></h5>
						<p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, blanditiis maxime ipsa labore similique. Sequi.</p>
						<ul class="hashtag-list clearfix">
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>

						</ul>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
					<div class="col-sm-2 col-xs-1 text-right-sm">
						<h6 class="mt35-sm mt15-ph text-large color-success ml0-ph ml-50-xs ml0-sm">$300</h6>
					</div>
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-xs-4 text-center-ph">
						<img src="../../../../img/item_06.jpg" alt="item 06" class="img-responsive">
					</div>
					<div class="col-sm-7 col-xs-7">
						<h5><a href="">Post Title</a></h5>
						<p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, blanditiis maxime ipsa labore similique. Sequi.</p>
						<ul class="hashtag-list clearfix">
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>

						</ul>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
					<div class="col-sm-2 col-xs-1 text-right-sm">
						<h6 class="mt35-sm mt15-ph text-large color-success ml0-ph ml-50-xs ml0-sm">$300</h6>
					</div>
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-xs-4 text-center-ph">
						<img src="../../../../img/item_07.jpg" alt="item 07" class="img-responsive">
					</div>
					<div class="col-sm-7 col-xs-7">
						<h5><a href="">Post Title</a></h5>
						<p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, blanditiis maxime ipsa labore similique. Sequi.</p>
						<ul class="hashtag-list clearfix">
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>

						</ul>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
					<div class="col-sm-2 col-xs-1 text-right-sm">
						<h6 class="mt35-sm mt15-ph text-large color-success ml0-ph ml-50-xs ml0-sm">$300</h6>
					</div>
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-xs-4 text-center-ph">
						<img src="../../../../img/item_08.jpg" alt="item 08" class="img-responsive">
					</div>
					<div class="col-sm-7 col-xs-7">
						<h5><a href="">Post Title</a></h5>
						<p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, blanditiis maxime ipsa labore similique. Sequi.</p>
						<ul class="hashtag-list clearfix">
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>

						</ul>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
					<div class="col-sm-2 col-xs-1 text-right-sm">
						<h6 class="mt35-sm mt15-ph text-large color-success ml0-ph ml-50-xs ml0-sm">$300</h6>
					</div>
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-xs-4 text-center-ph">
						<img src="../../../../img/item_09.jpg" alt="item 09" class="img-responsive">
					</div>
					<div class="col-sm-7 col-xs-7">
						<h5><a href="">Post Title</a></h5>
						<p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, blanditiis maxime ipsa labore similique. Sequi.</p>
						<ul class="hashtag-list clearfix">
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>

						</ul>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
					<div class="col-sm-2 col-xs-1 text-right-sm">
						<h6 class="mt35-sm mt15-ph text-large color-success ml0-ph ml-50-xs ml0-sm">$300</h6>
					</div>
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-xs-4 text-center-ph">
						<img src="../../../../img/item_10.jpg" alt="item 10" class="img-responsive">
					</div>
					<div class="col-sm-7 col-xs-7">
						<h5><a href="">Post Title</a></h5>
						<p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, blanditiis maxime ipsa labore similique. Sequi.</p>
						<ul class="hashtag-list clearfix">
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>
							<li class="hashtag"><a href="#hashtag">#hashtag</a></li>

						</ul>
						<div class="postedby mt10"><span class="fa fa-heart"></span> Date Posted, City Name</div>
					</div>
					<div class="col-sm-2 col-xs-1 text-right-sm">
						<h6 class="mt35-sm mt15-ph text-large color-success ml0-ph ml-50-xs ml0-sm">$300</h6>
					</div>
					<div class="col-xs-12 col-ph-12">
						<hr class="border-solid mt25 mb30">
					</div>
					<div class="col-xs-12 col-ph-12">
						<div class="footer-pagination">
							<ul class="pagination pagination-sm mt0 mb0">
							  <li><a href="#">&laquo;</a></li>
							  <li><a href="#">1</a></li>
							  <li><a href="#">2</a></li>
							  <li><a href="#">3</a></li>
							  <li><a href="#">4</a></li>
							  <li><a href="#">5</a></li>
							  <li><a href="#">&raquo;</a></li>
							</ul>
						</div>
					</div>
				</div>
				-->
			</div>
		</div>
	</div>
</main>

<!--footer-->
<?php include("../components/footer-new.php"); ?>
<!--footer-->

</body>
</html>
