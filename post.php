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
  <script>
    window.jQuery || document.write('<script src="../../../../js/scripts/jquery-1.11.0.js"><\/script>')
  </script>
  <script src="../../../../js/scripts/frameworks-min.js"></script>
  <script src="../../../../js/scripts/sayist.min.js"></script>
  <script>
    videojs.options.flash.swf = "/bower-components/video.js/dist/video-js/video-js.swf"
  </script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <!--header-->
  <?php include( "../components/header-new.php"); ?>
  <!--/header-->
  <main class="view-post">
    <section class="container mt5 mb40">

      <!-- fixing ff flush left -->
      <div class="hide show-ff clearfix"></div>

      <!--	Post Heading	-->
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12 col-ph-12">
          <!--  Category Pagination  -->
          <ul class="pagination clearfix mb0">
            <li><a href="#">Seattle</a>
            </li>
            <li><a href="#">For Sale</a>
            </li>
            <li><a href="#">Clothing &amp; Accessories </a>
            </li>
          </ul>
          <div class="border-top border-gray mb15"></div>
          <div class="row">
            <!-- Title  -->
            <div class="col-md-10 col-sm-10 col-xs-10 col-ph-12 mt0 mb10">
              <h2 class="title text-med mt0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</h2>
            </div>
            <!-- Price  -->
            <div class="col-md-2 col-sm-2 col-xs-2 col-ph-12">
              <p class="price color-post text-right text-med">$300</p>
            </div>
          </div>
        </div>
      </div>

      <!--  POST BODY -->
      <div class="row">

        <!--  Left Column -->
        <div class="col-md-8 col-sm-12">
          <!--<img src="http://placehold.it/800x600&text=image" class="img-responsive mb15">-->
          <ui id="image-carousel" class="image-carousel mb15">
            <li>
              <img class="img-responsive" src="/img/dog/IMG_1688.JPG" alt="">
            </li>
            <li class="embed-responsive">
              <video class="video-js vjs-default-skin vjs-big-play-button vjs-big-play-centered" controls preload="auto" data-setup='{"autoplay":false, "loop":false}'>
                <source src="/upload/posts/clip20140110.mp4" type="video/mp4">
                  <source src="/upload/posts/clip20140110.ogg" type="video/ogg">
                    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
              </video>
            </li>
            <li>
              <img class="img-responsive" src="/img/dog/IMG_0330.JPG" alt="">
            </li>
            <li class="embed-responsive">
              <video class="video-js vjs-default-skin vjs-big-play-button vjs-big-play-centered" controls preload="auto" data-setup='{"autoplay":false, "loop":false}'>
                <source src="/upload/posts/Clip314-720.mp4" type="video/mp4">
                  <source src="/upload/posts/Clip314-720.ogg" type="video/ogg">
                    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
              </video>
            </li>
            <li>
              <img class="img-responsive" src="/img/dog/IMG_2129.JPG" alt="">
            </li>
            <li>
              <img class="img-responsive" src="/img/dog/IMG_2131.JPG" alt="">
            </li>
            <li>
              <img class="img-responsive" src="/img/dog/IMG_2161.JPG" alt="">
            </li>
            <li>
              <img class="img-responsive" src="/img/dog/IMG_2162.JPG" alt="">
            </li>
            <li>
              <img class="img-responsive" src="/img/dog/IMG_2219.JPG" alt="">
            </li>
            <li>
              <img class="img-responsive" src="/img/dog/IMG_2220.JPG" alt="">
            </li>
            <li>
              <img class="img-responsive" src="/img/dog/IMG_2310.JPG" alt="">
            </li>
          </ui>
          <div class="clearfix mb30">
            <ul id="img-thumbnails" class="img-thumbnails"></ul>
          </div>

          <!--  Description  -->
          <div class="post-desc border-top border-gray pt30 pb20 mb10">
            <h4>Description</h4>
            <p class="mb10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis mauris consectetur, feugiat leo vitae, pulvinar urna. Integer aliquam dolor vel massa varius tempor. In vehicula ac odio at tempus. Nullam varius magna et aliquam ultricies. Maecenas pretium mi lacus, ut faucibus arcu auctor vitae. Sed quis interdum lacus. Phasellus vel mi gravida, tristique justo quis, rutrum leo.</p>
            <!--  Hashtag List  -->
            <ul class="hashtag-list clearfix mb20">
              <li class="hashtag"><a href="#">#hashtag</a>
              </li>
              <li class="hashtag"><a href="#">#hashtag</a>
              </li>
              <li class="hashtag"><a href="#">#hashtag</a>
              </li>
              <li class="hashtag"><a href="#">#hashtag</a>
              </li>
            </ul>
          </div>
        </div>

        <!--  Right Column -->
        <div class="col-md-4 col-sm-12">

          <!--  Post Information  -->
          <div class="table-container mb10">
            <table class="table">
              <tr class="mb20">
                <th id="post-id">Post ID:</th>
                <td headers="post-id" class="pl20">0123456789</td>
              </tr>
              <tr class="mb20">
                <th id="post-date">Date Posted:</th>
                <td headers="post-date" class="pl20 date">00/00/0000</td>
              </tr>
              <tr>
                <th id="reply-to">Reply To:</th>
                <td class="pl20" headers="reply-to">
                  <span id="post-email">
									<a href="mailto:abcdefg@sayist.com">abcdefg@sayist.com</a><br />
								</span>
                  <span id="post-tel">
									<a href="tel:987-654-3210">987-654-3210</a>
								</span>
                </td>
              </tr>
              <tr>
                <th id="post-loc">Location:</th>
                <td headers="post-loc" class="pl20">Seattle</td>
              </tr>
            </table>
          </div>

          <!--  Add To Favorites  -->
          <p class="add-to-favorites border-top border-bottom border-gray pt20 pb20"><span class="sayist-icon-favorites-inactive"></span>Add To Favorites</p>

          <!--  Social Buttons  -->
          <div class="mb10 mt30 clearfix">
            <a class="btn btn-social btn-full btn-sayist btn-twitter mb20">
              <i class="fa fa-twitter"></i>Share on Twitter
            </a>
            <a class="btn btn-social btn-full btn-sayist btn-facebook mb20">
              <i class="fa fa-facebook"></i>Share on Facebook
            </a>
          </div>
          <!--  Beware of Post  -->
          <div class="beware-of-post border-top border-gray pt20">
            <p class="color-gray-light">Beware of Scams</p>
            <p><span class="sayist-icon-flag mr5"></span>Flag/Report</p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--footer-->
  <?php include( "../components/footer-new.php"); ?>
  <!--footer-->
</body>

</html>
