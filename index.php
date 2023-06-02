
<?php

$rows = array();
include('cfg.php');
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM $tablename LIMIT 30";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
        array_push($rows, $row);
        
    }
}

?>


<html lang="en">
<head> 
<title>Game store<title> 
  
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GoodGames | Gallery</title>
        <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
        <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
        <meta name="author" content="_nK">
        <link rel="icon" type="image/png" href="assets/images/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- START: Styles -->
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
        <!-- FontAwesome -->
        <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
        <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>
        <!-- IonIcons -->
        <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">
        <!-- Flickity -->
        <link rel="stylesheet" href="assets/vendor/flickity/dist/flickity.min.css">
        <!-- Photoswipe -->
        <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/photoswipe.css">
        <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/default-skin/default-skin.css">
        <!-- Seiyria Bootstrap Slider -->
        <link rel="stylesheet" href="assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">
        <!-- Summernote -->
        <link rel="stylesheet" type="text/css" href="assets/vendor/summernote/dist/summernote-bs4.css">
        <!-- GoodGames -->
        <link rel="stylesheet" href="/assets/css/goodgames.min.css">
        <!-- Custom Styles -->
        <link rel="stylesheet" href="/assets/css/custom.css">
        <!-- END: Styles -->
        <!-- jQuery -->
        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>


</head>

    <body>
    <header> 
    
           
            <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
                <div class="container">
                    <div class="nk-nav-table">
                        <a class="nk-nav-logo">
                            <img src="assets/images/logo.svg" alt="GoodGames" width="199">
                        </a>
                    </div>
                </div>
            </nav>
    </header>
    <div class="nk-gap-1"></div>
        <div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
            <div class="nano">
                <div class="nano-content">
                    
                        
                    
                    <div class="nk-navbar-mobile-content">
                        <ul class="nk-nav">
                            <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Navbar Mobile -->
        <div class="nk-main">
            
            <!-- END: Breadcrumbs -->
            <div class="container">
                <div class="row vertical-gap">
                    <div class="col-lg-8">
                        <!-- START: Latest Pictures -->
                        
                        
                            <div class="nk-gap-2"></div>
                                <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Recent</span> games</span></h2>
                                <div class="row vertical-gap">
                                    
                                    <?php // FIND ME ?>

                                    <?php foreach($rows as $row){ ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="nk-gallery-item-box">
                                                <a href="/store-product.php?id=<?php echo $row['name']; ?>">

                                                    <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                                    <img src="<?php echo $row['photo']; ?>" alt="">
                                                </a>
                                                <div class="nk-gallery-item-description">
                                                    <h4>Called Let</h4> <?php echo $row['description']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                           
                        <!-- END: Latest Pictures -->
                        <!-- START: Recent Galleries-->
                        <div class="nk-gap-2"></div>
                        <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Recent</span> games</span></h2>
                        <div class="nk-gap"></div>
                        <div class="row vertical-gap">
                            
                        </div>
                        
                        <!-- END: Recent Galleries -->
                        <!-- START: Video Galleries-->
                        <div class="nk-gap-2"></div>
                        <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Video</span> Galleries</span></h2>
                        <div class="nk-gap"></div>
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                <h4>Double rainbow? What does it mean?</h4>
                                <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=eBERVWYa-1Y"></div>
                            </div>
                            <div class="col-md-6">
                                <h4>We will never be slaves! But we will... be conquerors</h4>
                                <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=6cXyQg_5uoc"></div>
                            </div>
                            <div class="col-md-6">
                                <h4>There is only the Emperor, and he is our shield</h4>
                                <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=pYC44YPb_5k"></div>
                            </div>
                            <div class="col-md-6">
                                <h4>It looks like we don't have any Quotes for this title yet</h4>
                                <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=BXJPwBCJES8"></div>
                            </div>
                        </div>
                        
                    
                    <div class="col-lg-4">
                        
                                    
                        <!-- END: Sidebar -->
                    </div>
                </div>
            </div>
            <div class="nk-gap-2"></div>
            
                
                <div class="nk-copyright">
                    <div class="container">
                        <div class="nk-copyright-left"> VM 2023                                                           mechanic.mich@gmail.com
                        </div>
            
            <!-- END: Footer -->
        </div>
        <!-- START: Page Background -->
        <img class="nk-page-background-top" src="assets/images/bg-top-3.png" alt="">
        <img class="nk-page-background-bottom" src="assets/images/bg-bottom.png" alt="">
        <!-- END: Page Background -->
        <!-- START: Search Modal -->
        <div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="ion-android-close"></span>
                        </button>
                        <h4 class="mb-0">Search</h4>
                        <div class="nk-gap-1"></div>
                        <form action="#" class="nk-form nk-form-style-1">
                            <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Search Modal -->
        <!-- START: Login Modal -->
        <div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="ion-android-close"></span>
                        </button>
                        <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>
                        <div class="nk-gap-1"></div>
                        <form action="#" class="nk-form text-white">
                            <div class="row vertical-gap">
                                <div class="col-md-6"> Use email and password: <div class="nk-gap"></div>
                                    <input type="email" value="" name="email" class=" form-control" placeholder="Email">
                                    <div class="nk-gap"></div>
                                    <input type="password" value="" name="password" class="required form-control" placeholder="Password">
                                </div>
                                <div class="col-md-6"> Or social account: <div class="nk-gap"></div>
                                    <ul class="nk-social-links-2">
                                        <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                                        <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                                        <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nk-gap-1"></div>
                            <div class="row vertical-gap">
                                <div class="col-md-6">
                                    <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign In</a>
                                </div>
                                <div class="col-md-6">
                                    <div class="mnt-5">
                                        <small><a href="#">Forgot your password?</a></small>
                                    </div>
                                    <div class="mnt-5">
                                        <small><a href="#">Not a member? Sign up</a></small>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Login Modal -->
        <!-- START: Scripts -->
        <!-- Object Fit Polyfill -->
        <script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>
        <!-- GSAP -->
        <script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
        <script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
        <!-- Popper -->
        <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Sticky Kit -->
        <script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>
        <!-- Jarallax -->
        <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
        <script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>
        <!-- imagesLoaded -->
        <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <!-- Flickity -->
        <script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>
        <!-- Photoswipe -->
        <script src="assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
        <script src="assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>
        <!-- Jquery Validation -->
        <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <!-- Jquery Countdown + Moment -->
        <script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
        <script src="assets/vendor/moment/min/moment.min.js"></script>
        <script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
        <!-- Hammer.js -->
        <script src="assets/vendor/hammerjs/hammer.min.js"></script>
        <!-- NanoSroller -->
        <script src="assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>
        <!-- SoundManager2 -->
        <script src="assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>
        <!-- Seiyria Bootstrap Slider -->
        <script src="assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>
        <!-- Summernote -->
        <script src="assets/vendor/summernote/dist/summernote-bs4.min.js"></script>
        <!-- nK Share -->
        <script src="assets/plugins/nk-share/nk-share.js"></script>
        <!-- GoodGames -->
        <script src="assets/js/goodgames.min.js"></script>
        <script src="assets/js/goodgames-init.js"></script>
        <!-- END: Scripts -->
    </body>

</html>