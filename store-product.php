

<?php
include('cfg.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM $tablename WHERE `name`='".$_GET['id']."' LIMIT 30";

$rows = array();



$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
}
?>




<!DOCTYPE html>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GoodGames</title>
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
        <link rel="stylesheet" href="assets/css/goodgames.min.css">
        <!-- Custom Styles -->
        <link rel="stylesheet" href="assets/css/custom.css">
        <!-- END: Styles -->
        <!-- jQuery -->
        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    </head>
  
    <body>
   
        <header class="nk-header nk-header-opaque">
            <!-- START: Top Contacts -->
            <div class="nk-contacts-top">
                <div class="container">
                    
                    
                </div>
            </div>
           
            <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
                <div class="container">
                    <div class="nk-nav-table">
                        <a href="index.html" class="nk-nav-logo">
                            <img src="assets/images/logo.svg" alt="GoodGames" width="199">
                        </a>
                        
                            </li>
                            
                        </ul>
                        <ul class="nk-nav nk-nav-right nk-nav-icons">
                            <li class="single-icon d-lg-none">
                                <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                    <span class="nk-icon-burger">
                                        <span class="nk-t-1"></span>
                                        <span class="nk-t-2"></span>
                                        <span class="nk-t-3"></span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- END: Navbar -->
        </header>


        <div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
            <div class="nano">
                <div class="nano-content">
                    <a href="index.html" class="nk-nav-logo">
                        <img src="assets/images/logo.svg" alt="" width="120">
                    </a>
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
            <!-- START: Breadcrumbs -->
            <div class="nk-gap-1"></div>
          
            <div class="nk-gap-1"></div>
            <!-- END: Breadcrumbs -->
            <div class="container">
                <div class="row vertical-gap">
                    <div class="col-lg-8">
                        <div class="nk-store-product">
                            <div class="row vertical-gap">
                                <div class="col-md-6">
                                    <!-- START: Product Photos -->
                                    <div class="nk-popup-gallery">
                                        <div class="nk-gallery-item-box">
                                            <a>
                                                
                                                <img src="<?php echo $rows[0]['photo']; ?>" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <!-- END: Product Photos -->
                                </div>
                                <div class="col-md-6">
                                    <h2 class="nk-product-title h3"><?php echo $rows[0]['name']; ?> </h2>
                                    
                                    <div class="nk-product-description">
                                        <p><?php echo $rows[0]['rewu']; ?></p>
                                    </div>
                                    <!-- START: Add to Cart -->
                                    <div class="nk-gap-2"></div>
                                    <form action="#" class="nk-product-addtocart">
                                        
                                        <div class="nk-gap-1"></div>
                                        <div>
                                            <a class="nk-btn nk-btn-rounded nk-btn-color-main-1" href="<?php echo $rows[0]['link']; ?>">Download from Steam</a>

                                            <!--<button class="nk-btn nk-btn-rounded nk-btn-color-main-1" href="<?php echo $rows[0]['link']; ?>">Download from steam</button>-->
                                        </div>
                                    </form>
                                    <div class="nk-gap-3"></div>
                                    <!-- END: Add to Cart -->
                                    
                                    
                                    
                                </div>
                            </div>
                            
                            
                            <!-- END: Share -->
                            <div class="nk-gap-2"></div>
                            <!-- START: Tabs -->
                            <div class="nk-tabs">
                                
                                <div class="tab-content">
                                    
                                    <!-- START: Tab Reviews -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab-reviews">
                                        <div class="nk-gap-2"></div>
                                        <!-- START: Reply -->
                                        <h3 class="h4">Add a Review</h3>
                                        <div class="nk-reply">
                                            <form action="#" class="nk-form">
                                                <div class="row vertical-gap sm-gap">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control required" name="name" placeholder="Name *">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control required" name="title" placeholder="Title *">
                                                    </div>
                                                </div>
                                                <div class="nk-gap-1"></div>
                                                <textarea class="form-control required" name="message" rows="5" placeholder="Your Review *" aria-required="true"></textarea>
                                                <div class="nk-gap-1"></div>
                                                <div class="nk-rating">
                                                    <input type="radio" id="review-rate-5" name="review-rate" value="5">
                                                    <label for="review-rate-5">
                                                        <span><i class="far fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </label>
                                                    <input type="radio" id="review-rate-4" name="review-rate" value="4">
                                                    <label for="review-rate-4">
                                                        <span><i class="far fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </label>
                                                    <input type="radio" id="review-rate-3" name="review-rate" value="3">
                                                    <label for="review-rate-3">
                                                        <span><i class="far fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </label>
                                                    <input type="radio" id="review-rate-2" name="review-rate" value="2">
                                                    <label for="review-rate-2">
                                                        <span><i class="far fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </label>
                                                    <input type="radio" id="review-rate-1" name="review-rate" value="1">
                                                    <label for="review-rate-1">
                                                        <span><i class="far fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </label>
                                                </div>
                                                <button class="nk-btn nk-btn-rounded nk-btn-color-dark-3 float-right">Submit</button>
                                            </form>
                                        </div>
                                        <!-- END: Reply -->
                                        <div class="clearfix"></div>
                                        <div class="nk-gap-2"></div>
                                        <div class="nk-comments">
                                            <!-- START: Review -->
                                            <div class="nk-comment">
                                                <div class="nk-comment-meta">
                                                    <img src="assets/images/avatar-2.jpg" alt="Witch Murder" class="rounded-circle" width="35"> by <a href="https://nkdev.info">Witch Murder</a> in 20 September, 2018 <span class="nk-product-rating nk-review-rating">
                                                        <span class="nk-product-rating-front" style="width: 80%;">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                        <span class="nk-product-rating-back">
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="nk-comment-text">
                                                    <p>Upon replenish great rule. Were tree, given day him night Fruit it moveth all. First they're creature seasons and creature fill a it have fifth, their own subdue brought above divided.</p>
                                                    <p>Behold it set, seas seas and meat divided Moveth cattle forth evening above moveth so, signs god a fruitful his after called that whose.</p>
                                                </div>
                                            </div>
                                            <!-- END: Review -->
                                            <!-- START: Review -->
                                            <div class="nk-comment">
                                                <div class="nk-comment-meta">
                                                    <img src="assets/images/avatar-1.jpg" alt="Hitman" class="rounded-circle" width="35"> by <a href="https://nkdev.info">Hitman</a> in 14 Jule, 2018 <span class="nk-product-rating nk-review-rating">
                                                        <span class="nk-product-rating-front" style="width: 20%;">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                        <span class="nk-product-rating-back">
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="nk-comment-text">
                                                    <p> I was awakened at daybreak by the charwoman, and having arrived at the inn, was at first placed inside the coach. :(</p>
                                                </div>
                                            </div>
                                            <!-- END: Review -->
                                            <!-- START: Review -->
                                            <div class="nk-comment">
                                                <div class="nk-comment-meta">
                                                    <img src="assets/images/avatar-3.jpg" alt="Wolfenstein" class="rounded-circle" width="35"> by <a href="https://nkdev.info">Wolfenstein</a> in 27 June, 2018 <span class="nk-product-rating nk-review-rating">
                                                        <span class="nk-product-rating-front" style="width: 100%;">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                        <span class="nk-product-rating-back">
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="nk-comment-text">
                                                    <p>Divided thing, land it evening earth winged whose great after. Were grass night. To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein winged and form. Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.</p>
                                                </div>
                                            </div>
                                            <!-- END: Review -->
                                        </div>
                                    </div>
                                    <!-- END: Tab Reviews -->
                                </div>
                            </div>
                            <!-- END: Tabs -->
                        </div>
                        <!-- START: Related Products -->
                        <div class="nk-gap-3"></div>
                        
                        <div class="nk-gap"></div>
                        
                        <!-- END: Related Products -->
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
            <div class="nk-gap-2"></div>
            <!-- START: Footer -->
            <footer class="nk-footer">
                
                            
                    <div class="nk-gap-3"></div>
                </div>
                <div class="nk-copyright">
                    <div class="container">
                        <div class="nk-copyright-left"> VM 2023 
                        </div>
                        
                    </div>
                </div>
            </footer>
            <!-- END: Footer -->
        </div>
        <!-- START: Page Background -->
        <img class="nk-page-background-top" src="assets/images/bg-top-4.png" alt="">
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