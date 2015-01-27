<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width initial-scale=1.0, minimum-scale=1.0">
<title>Sayist Official Website</title>
<link rel="stylesheet" type="text/css" href="../../../../css/sayist.css">
<link rel="stylesheet" type="text/css" href="../../../../css/bootstrap-nav-wizard.css">
<link rel="stylesheet" type="text/css" href="../../../../css/functional.css">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../../../js/scripts/jquery-1.11.0.js"><\/script>')</script>
<script src="../../../../js/scripts/jquery.bootstrap.wizard.min.js"></script>
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

	<main class="create-post">
		<div class="container" id="wizard">
			<div id="rootwizard" class="rootwizard clearfix mt40">
				<div class="wizard-steps border-top border-gray-lighter">
					<ul>
						<li><a href="#tab1" data-toggle="tab">Select Your Category</a></li>
						<li><a href="#tab2" data-toggle="tab">Your Post Information</a></li>
						<li><a href="#tab3" data-toggle="tab">Contact Information</a></li>
						<!-- UNCOMMENT BELOW AND EDIT HTML & SAYIST.CSS:
						Find "Step of ..." and change to appropriate step #.
						Also make .wizard-steps li width = 20% to account for 5 list items -->
						<li><a href="#tab4" data-toggle="tab">Payment Information</a></li>
						<li><a href="#tab5" data-toggle="tab">Preview Your Post</a></li>
					</ul>
				</div>
				<form class="tab-content mb40" role="form">
					<section class="tab-pane" id="tab1">
						<div class="col-lg-12 col-md-12 mt15 mb15">
							<!-- Steps need to be dynamic -->
							<p class="text-med">Step 1 of 4</p>
						</div>
						<div class="form-group">
							<div class="col-md-6 ml0 mb30">
								<label class="required">Category</label>
								<select class="selectpicker" data-width="100%" title="category">
									<option>community</option>
									<option>services</option>
									<option>jobs</option>
									<option>event</option>
									<option selected>pets</option>
									<option>housing</option>
									<option>vehicles</option>
									<option>for sale</option>
									<option>gigs</option>
									<option>musicians</option>
								</select>
							</div>
							<div class="col-md-6 mb30">
								<label class="required ">Section</label>
								<select class="selectpicker" data-width="100%" multiple title="section">
									<optgroup label="pets">
										<option>Cats</option>
										<option>Dogs</option>
										<option>Fish &amp; Reptile Pets</option>
										<option>Free Pets to Good Home</option>
										<option>Horses</option>
										<option>Livestock</option>
										<option>Other Pets</option>
										<option>Pet Services &amp; Stores</option>
										<option>Pet Supplies</option>
									</optgroup>
									<optgroup label="" disabled>
									</optgroup>
								</select>
							</div>
						</div>
						<div class="form-group wizard">
							<div class="col-md-6 col-sm-5 col-xs-6 mb20">
								<p class="required">Required</p>
							</div>
							<div class="col-md-4 col-md-push-2 col-sm-5 col-sm-push-2 col-xs-6">
								<button type="button" class='btn btn-full btn-sayist btn-next'>next</button>
							</div>
						</div>
					</section>
					<!-- SECTION 2	-->
					<section class="tab-pane" id="tab2" class="tab-2">
						<div class="col-md-12 mt15 mb-5">
							<p class="text-med">Step 2 of 4</p>
						</div>
						<div class="col-md-12 mb15">
							<div class="warning">
								<p>Warning you can only upload 10 photos and two videos per post</p>
								<span class="close-warning">x</span>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 mb30">
								<label class="required">Title</label>
								<input type="text" class="form-control"/>
							</div>
							<div class="col-md-3 mb30 pr15">
								<label class="required">Price</label>
								<input type="text" class="form-control"/>
							</div>
							<div class="col-md-3">
								 <input type="checkbox" id="free" class="free-check"/>
								 <label for="free" class="free-label pl5" id="free-label">Free</label>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12 mb30">
								<label class="required">Description</label>
								<textarea class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12 mb30">
								<label for="hashtags-input" class="hashtags-input">Hashtags <span>(Add hashtags to make your posts easier to find. Separate hashtags with a comma: #hashtag, #hashtag, #hashtag)</span></label>
								<input id="hashtag-input" type="text" class="form-control"/>
							</div>
						</div>
						<div class="form-group clearfix">
							<div class="col-md-3 col-sm-3 col-xs-5 mb30">
								<p class="btn-file mb15">
									<span class="sayist-icon-add-photo"></span>
									Add Photos<input type="file" accept="img/*">
								</p>
								<ul class="imgs-uploaded mt15">
									<li>
										<img src="http://placehold.it/36x36"/>
										<p>filename.jpg</p>
									</li>
									<li>
										<img src="http://placehold.it/36x36"/>
										<p>filename.jpg</p>
									</li>
									<li>
										<img src="http://placehold.it/36x36"/>
										<p>filename.jpg</p>
									</li>
									<li>
										<img src="http://placehold.it/36x36"/>
										<p>filename.jpg</p>
									</li>
									<li>
										<img src="http://placehold.it/36x36"/>
										<p>filename.jpg</p>
									</li>
									<li>
										<img src="http://placehold.it/36x36"/>
										<p>filename.jpg</p>
									</li>
									<li class="more-uploaded">3 more photos uploaded</li>
								</ul>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-5 mb30">
								<p class="btn-file mb15">
									<span class="sayist-icon-video"></span>
									Add Photos<input type="file" accept="video/*">
								</p>
								<ul class="videos-uploaded mt15">
									<li>
										<img src="http://placehold.it/36x36"/>
										<p>filename.mpeg</p>
									</li>
									<li>
										<img src="http://placehold.it/36x36"/>
										<p>filename.mpeg</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="form-group wizard">
							<div class="col-md-4 col-sm-4 col-xs-12 mb20">
								<p class="required">Required</p>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6 mb20">
								<button type="button" class='btn-full btn-sayist btn btn-previous'>back</button>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6 mb20">
								<button type="button" class='btn-full btn-sayist btn btn-next'>next</button>
							</div>
						</div>
					</section>
					<!-- SECTION 3	-->
					<section class="tab-pane" id="tab3" class="tab-3">
						<div class="col-md-12 mt15 mb15">
							<p class="text-med">Step 3 of 4</p>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 mb30">
								<label class="required ">Email:</label>
								<input type="email" class="form-control" required/>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 mb30">
								<label class="">Phone:</label>
								<input tye="tel" class="form-control">
							</div>
						</div>
						<div class="form-group clearfix">
							<div class="col-md-6 col-sm-6 col-xs-12 mb30">
								<label class="">City:</label>
								<select class="selectpicker" title="Choose a City" data-width="100%" multiple>
									<option>Austin, TX</option>
									<option>Boston, MA</option>
									<option>New York City, NY</option>
									<option>San Francisco, CA</option>
									<option>Seattle, WA</option>
								</select>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 mb30">
								<label class="">Specific Location:</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="form-group wizard">
							<div class="col-md-4 col-sm-4 col-xs-12 mb20">
								<p class="required">Required</p>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6 mb20">
								<button type="button" class='btn-full btn-sayist btn btn-previous'>back</button>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6 mb20">
								<button type="button" class='btn-full btn-sayist btn btn-next'>next</button>
							</div>
						</div>
					</section>
					<!-- SECTION 4	-->
					<!-- UNCOMMENT TO VIEW PAYMENT TAB BELOW -->
					<section class="tab-pane" id="tab4" class="tab-4">
						<div class="col-md-12 mt15 mb15">
							<!-- Steps need to be dynamic -->
							<p class="text-med">Step 4 of 4</p>
						</div>
						<div class="form-group">
							<div class="col-md-6 mb30">
								<label class="required ">Card Type:</label>
								<select class="selectpicker form-control">
									<option>Mastercard</option>
									<option>Visa</option>
									<option>Discover</option>
									<option>American Express</option>
								</select>
							</div>
							<div class="form-group">
								<label class="required pl15 ">Valid Until:</label>
								<div class="form-group">
									<div class="col-md-3 col-sm-6 col-xs-6 mb30">
										<select class="selectpicker" title="Month"  data-width="100%">
											<option>January</option>
											<option>February</option>
											<option>March</option>
											<option>April</option>
											<option>May</option>
											<option>June</option>
											<option>July</option>
											<option>August</option>
											<option>September</option>
											<option>October</option>
											<option>November</option>
											<option>December</option>
										</select>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 mb30">
										<select class="selectpicker" title="Year" data-width="100%">
											<option>2014</option>
											<option>2015</option>
											<option>2016</option>
											<option>2017</option>
											<option>2018</option>
											<option>2019</option>
											<option>2020</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-sm-8 col-xs-8 mb30">
								<label class="required ">Card Number:</label>
								<input type="text" class="form-control"/>
							</div>
							<div class="col-md-3 col-sm-4 col-xs-4 mb30">
								<label class="required ">CVC:</label>
								<input type="text" class="form-control"/>
							</div>
						</div>
						<div class="form-group clearfix">
							<div class="col-md-6 mb30">
								<label class="">Name:</label>
								<input type="text" class="form-control"/>
							</div>
						</div>
						<div class="form-group wizard">
							<div class="col-md-4 col-sm-4 col-xs-12 mb20">
								<p class="required">Required</p>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6 mb20">
								<button type="button" class='btn-full btn-sayist btn btn-previous'>back</button>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6 mb20">
								<button type="button" class='btn-full btn-sayist btn btn-next'>next</button>
							</div>
						</div>
					</section>
					<!-- SECTION 5	-->
					<section class="tab-pane" id="tab5" class="tab-5">
						<div class="col-md-12 mt15 mb15 clearfix">
							<!-- Steps need to be dynamic -->
							<p class="text-med">Step 4 of 4</p>
						</div>
						<div class="form-group clearfix">
							<div class="col-md-12">
								<h4 class="mb15 text-light review-post">Review your post before publishing</h4>
								<h6 class="mb15 text-light color-gray-light">Your current selection: <a href="" class="color-success hover-underline">Pets</a>&nbsp;>&nbsp;<a href="" class="color-success hover-underline">Dogs</a></h6>
								<div class="border-bottom border-gray"></div>
							</div>
						</div>
						<div class="form-group clearfix">
							<div class="col-md-7">
								<div class="mb10">
									<ul class="pagination clearfix">
										<li><a href="#">Seattle</a></li>
										<li><a href="#">For Sale</a></li>
										<li><a href="#">Clothing &amp; Accessories</a></li>
									</ul>
								</div>
								<div class="form-group">
									<div class="col-md-10 col-sm-10 col-xs-10 pl0 pr0 no-padding">
										<h2 class="text-med title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula</h2>
									</div>
									<div class="col-md-2 col-sm-2 col-xs-2 pr0 pl0 no-padding">
										<p class="price color-post text-right text-med">$300</p>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group clearfix">
							<div class="col-md-7">
								<div class="clearfix mb15">
									<img src="http://placehold.it/600x400&text=image" class="img-responsive">
								</div>
								<div class="clearfix">
									<ul class="img-thumbnails">
										<li><a href=""><img src="http://placehold.it/100x100&text=image" class="img-responsive"></a></li>
										<li><a href=""><img src="http://placehold.it/100x100&text=image" class="img-responsive"></a></li>
										<li><a href=""><img src="http://placehold.it/100x100&text=image" class="img-responsive"></a></li>
										<li><a href=""><img src="http://placehold.it/100x100&text=image" class="img-responsive"></a></li>

									</ul>
								</div>
								<div class="clearfix">
									<div class="desc">
										<h4>Description</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis mauris consectetur, feugiat leo vitae, pulvinar urna. Integer aliquam dolor vel massa varius tempor. In vehicula ac odio at tempus. Nullam varius magna et aliquam ultricies. Maecenas pretium mi lacus, ut faucibus arcu auctor vitae. Sed quis interdum lacus. Phasellus vel mi gravida, tristique justo quis, rutrum leo.</p>
									</div>
								</div>
								<div class="mb10">
									<ul class="hashtag-list clearfix">
										<li><a class="hashtag" href="#">#hashtag</a></li>
										<li><a class="hashtag" href="#">#hashtag</a></li>
										<li><a class="hashtag" href="#">#hashtag</a></li>
										<li><a class="hashtag" href="#">#hashtag</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-5">
								<div class="table-container pb20">
									<table class="table">
										<tr class="mb20">
											<th>Post ID:</th>
											<td class="pl20">0123456789</td>
										</tr>
										<tr class="mb20">
											<th>Date Posted:</th>
											<td class="pl20">00/00/0000</td>
										</tr>
										<tr>
											<th>Reply To:</th>
											<td class="pl20">abcdefg@sayist.com<span class="show-eye" title="Turn on Sayist mail relay (recommended)"></span><br />
											987-654-3210
											</td>
										</tr>
										<tr>
											<th>Location:</th>
											<td class="pl20">Seattle</td>
										</tr>
									</table>
								</div>
								<div class="privacy border-top  pt30 pb30 mb30">
									<p>By publishing this post you agree to our <a href="#">terms and conditions</a> and our <a href="#">privacy policy</a>.</p>
								</div>
								<!--
								<div class="form-group wizard">
									<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 mb20 btn-publish-post">
										<a href="../pages/post-success.php" class="btn btn-sayist btn-full">Publish Post</a>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 btn-back">
										<a href="#" class="btn btn-sayist btn-full previous">back</a>
									</div>
								</div>
								-->
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-12">
								<!--
								<div class="col-md-4 col-sm-4 col-xs-12 mb20">
									<p>By publishing this post you agree to our <a href="#">terms and conditions</a> and our <a href="#">privacy policy.</a></p>
								</div>
								-->
								<div class="col-md-4 col-md-push-4 col-sm-6 col-xs-6 mb20">
									<button type="button" class='btn-full btn-sayist btn btn-previous'>back</button>
								</div>
								<div class="col-md-4 col-md-push-4 col-sm-6 col-xs-6 mb20">
									<a href="../pages/post-success.php" class="btn btn-sayist btn-full">Publish Post</a>
								</div>
							</div>
						</div>
						<!--
						<div class="form-group">
							<div class="col-md-12 mb30 mt30 privacy">
								<p>By publishing this post you agree to our <a href="#">terms and conditions</a> and our <a href="#">privacy policy.</a></p>
							</div>
						</div>
						<div class="form-group wizard">
							<div class="col-md-12">
								<div class="form-group border-top border-gray pt30">
									<div class="col-md-4 col-md-push-4 col-sm-6 col-xs-6 mb20">
										<a href="#" class="btn btn-sayist btn-full previous">back</a>
									</div>
									<div class="col-md-4 col-md-push-4 col-sm-6 col-xs-6 mb20">
										<a href="../pages/post-success.php" class="btn btn-sayist btn-full">Publish Post</a>
									</div>
								</div>
							</div>
						</div>
						-->
					</section>
				</form>
			</div>
		</div>
	</main>
	<!--footer -->
	<?php include("../components/footer-new.php"); ?>
	<!--/footer-->
</body>
</html>
