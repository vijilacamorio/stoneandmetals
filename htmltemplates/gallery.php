
<!DOCTYPE html>

<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>Stone & Metal | Gallery</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">    
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/loader.min.css">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.min.css"> 
    
    <!-- IMAGE POPUP -->
    <link rel="stylesheet" type="text/css" href="css/lc_lightbox.css" />     
    
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="css/skin/skin-1.css">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/switcher.css">    
 
     <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
        
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">     
 
</head>

<body>

    <div class="page-wraper"> 
    
        <!-- HEADER START -->
        <?php include('includes/navbar.php'); ?>
        <!-- HEADER END -->
        
        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <!-- <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);"> -->
            <div class="wt-bnr-inr overlay-wraper bg-center">
            	<div class="overlay-main site-bg-secondry opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="site-text-primary">Gallery</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.php">Home</a></li>
                                    <li>Gallery</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- GALLERY SECTION START -->
            <div class="section-full p-t80 p-b50 bg-white">
                <div class="container">
                    <!-- PAGINATION START -->
                    <div class="filter-wrap work-grid p-b30 text-center">
                        <ul class="masonry-filter link-style ">
                                <li class="active"><a data-filter="*" href="#">All</a></li>
                                <li><a data-filter=".cat-1" href="#">Gallery 1</a></li>
                                <li><a data-filter=".cat-2" href="#">Gallery 2</a></li>
                                <li><a data-filter=".cat-3" href="#">Gallery 3</a></li>
                                <li><a data-filter=".cat-4" href="#">Gallery 4</a></li>
                                <li><a data-filter=".cat-5" href="#">Gallery 5</a></li>
                        </ul>
                    </div>
                    <!-- PAGINATION END -->
                    
                    <!-- GALLERY CONTENT START -->
                     <div class="masonry-wrap mfp-gallery  row clearfix d-flex justify-content-center flex-wrap">
                        <!-- COLUMNS 1 -->
                        <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30">
                        
							<div class="project-img-effect-1">
                                <img src="images/gallery/thumb/gallery.png" alt="" />
                                <div class="wt-info">
                                    <h3 class="wt-tilte m-b10 m-t0" style="color: #202326 !important;">Title</h3>
                                    <p style="color: #202326 !important;">Description</p>
                                    <a href="project-detail.html" class="site-button-link" style="color: #202326 !important;">Read More</a>
                                </div>
                                
                                <a href="images/gallery/thumb/pic1.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                            </div>                              
                            
                                                                                             
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="masonry-item cat-2 col-lg-4 col-md-6 col-sm-6 m-b30">
							<div class="project-img-effect-1">
                                <img src="images/gallery/thumb/gallery.png" alt="" />
                                <div class="wt-info">
                                    <h3 class="wt-tilte m-b10 m-t0" style="color: #202326 !important;">Title</h3>
                                    <p style="color: #202326 !important;">Description</p>
                                    <a href="project-detail.html" class="site-button-link" style="color: #202326 !important;">Read More</a>
                                </div>
                                
                                <a href="images/gallery/thumb/pic2.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                            </div>     
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="masonry-item cat-3 col-lg-4 col-md-6 col-sm-6 m-b30">
							<div class="project-img-effect-1">
                                <img src="images/gallery/thumb/gallery.png" alt="" />
                                <div class="wt-info">
                                    <h3 class="wt-tilte m-b10 m-t0" style="color: #202326 !important;">Title</h3>
                                    <p style="color: #202326 !important;">Description</p>
                                    <a href="project-detail.html" class="site-button-link" style="color: #202326 !important;">Read More</a>
                                </div>
                                
                                <a href="images/gallery/thumb/pic4.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                            </div>       
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="masonry-item cat-4 col-lg-4 col-md-6 col-sm-6 m-b30">
							<div class="project-img-effect-1">
                                <img src="images/gallery/thumb/gallery.png" alt="" />
                                <div class="wt-info">
                                    <h3 class="wt-tilte m-b10 m-t0" style="color: #202326 !important;">Title</h3>
                                    <p style="color: #202326 !important;">Description</p>
                                    <a href="project-detail.html" class="site-button-link" style="color: #202326 !important;">Read More</a>
                                </div>
                                
                                <a href="images/gallery/thumb/pic3.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                            </div>     
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="masonry-item cat-5 col-lg-4 col-md-6 col-sm-6 m-b30">
							<div class="project-img-effect-1">
                                <img src="images/gallery/thumb/gallery.png" alt="" />
                                <div class="wt-info">
                                    <h3 class="wt-tilte m-b10 m-t0" style="color: #202326 !important;">Title</h3>
                                    <p style="color: #202326 !important;">Description</p>
                                    <a href="project-detail.html" class="site-button-link" style="color: #202326 !important;">Read More</a>
                                </div>
                                
                                <a href="images/gallery/thumb/pic5.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                            </div>    
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="masonry-item cat-4 col-lg-4 col-md-6 col-sm-6 m-b30">
							<div class="project-img-effect-1">
                                <img src="images/gallery/thumb/gallery.png" alt="" />
                                <div class="wt-info">
                                    <h3 class="wt-tilte m-b10 m-t0" style="color: #202326 !important;">Title</h3>
                                    <p style="color: #202326 !important;">Description</p>
                                    <a href="project-detail.html" class="site-button-link" style="color: #202326 !important;">Read More</a>
                                </div>
                                
                                <a href="images/gallery/thumb/pic6.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                            </div>      
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="masonry-item cat-3 col-lg-4 col-md-6 col-sm-6 m-b30">
							<div class="project-img-effect-1">
                                <img src="images/gallery/thumb/gallery.png" alt="" />
                                <div class="wt-info">
                                    <h3 class="wt-tilte m-b10 m-t0" style="color: #202326 !important;">Title</h3>
                                    <p style="color: #202326 !important;">Description</p>
                                    <a href="project-detail.html" class="site-button-link" style="color: #202326 !important;">Read More</a>
                                </div>
                                
                                <a href="images/gallery/thumb/pic7.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                            </div>    
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="masonry-item cat-2 col-lg-4 col-md-6 col-sm-6 m-b30">
							<div class="project-img-effect-1">
                                <img src="images/gallery/thumb/gallery.png" alt="" />
                                <div class="wt-info">
                                    <h3 class="wt-tilte m-b10 m-t0" style="color: #202326 !important;">Title</h3>
                                    <p style="color: #202326 !important;">Description</p>
                                    <a href="project-detail.html" class="site-button-link" style="color: #202326 !important;">Read More</a>
                                </div>
                                
                                <a href="images/gallery/thumb/pic8.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                            </div>     
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30">
							<div class="project-img-effect-1">
                                <img src="images/gallery/thumb/gallery.png" alt="" />
                                <div class="wt-info">
                                    <h3 class="wt-tilte m-b10 m-t0" style="color: #202326 !important;">Title</h3>
                                    <p style="color: #202326 !important;">Description</p>
                                    <a href="project-detail.html" class="site-button-link" style="color: #202326 !important;">Read More</a>
                                </div>
                                
                                <a href="images/gallery/thumb/pic9.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                            </div>   
                        </div>                                   
                     </div>
                    <!-- GALLERY CONTENT END --> 
                </div>
            </div>   
            <!-- GALLERY SECTION END --> 
            
        </div>
        <!-- CONTENT END -->
        
        <!-- FOOTER START -->
        <?php include('includes/footer.php'); ?>
        <!-- FOOTER END -->
        
        <!-- Get In Touch -->                            
        <div class="contact-slide-hide bg-cover bg-no-repeat" style="background-image:url(images/background/bg-7.jpg)"> 
            <div class="contact-nav">
                 <a href="javascript:void(0)" class="contact_close">&times;</a>
                 <div class="contact-nav-form">
                    <div class="contact-nav-info bg-white p-a30 bg-center bg-no-repeat" style="background-image:url(images/background/bg-map2.png);">
                    	<div class="row">
                        	<div class="col-lg-4 col-md-4">
                            	<div class="contact-nav-media-section">
                                	<div class="contact-nav-media">
                                    	<img src="images/self-pic.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <form class="cons-contact-form" method="post" action="form-handler2.php">
                                    <div class="m-b30">
                                        <!-- TITLE START -->
                                         <h2 class="m-b30">Get In Touch</h2>
                                        <!-- TITLE END --> 
                                            <div class="row">
                                               <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <input name="username" type="text" required class="form-control" placeholder="Name">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                       <input name="email" type="text" class="form-control" required placeholder="Email">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                     </div>
                                                </div>
                                                
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                         <input name="subject" type="text" class="form-control" required placeholder="Subject">
                                                     </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                       <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                                     </div>
                                                </div>
                                                
                                               <div class="col-md-12">
                                                    <button type="submit" class="site-button site-btn-effect">Submit Now</button>
                                                </div>
                                                
                                            </div>
                                    </div>
                                </form>
                                <div class="contact-nav-inner text-black">
                                    <!-- TITLE START -->
                                    <h2 class="m-b30">Contact Info</h2>
                                    <!-- TITLE END -->
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="wt-icon-box-wraper left icon-shake-outer">
                                                    <div class="icon-content">
                                                        <h4 class="m-t0">Phone number</h4>
                                                        <p>(456) 789 10 12</p>
                                                        <p>(456) 789 10 15</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="wt-icon-box-wraper left icon-shake-outer">
                                                    <div class="icon-content">
                                                        <h4 class="m-t0">Email address</h4>
                                                        <p>demo@gmail.com</p>
                                                        <p>indusinfo@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div>    
                                            <div class="col-lg-4 col-md-12">
                                                <div class="wt-icon-box-wraper left icon-shake-outer">
                                                    <div class="icon-content">
                                                        <h4 class="m-t0">Address info</h4>
                                                        <p>1363-1385 Sunset Blvd Los Angeles</p>
                                                    </div>
                                                </div>
                                            </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                                                                        
                 </div>
            </div> 
        </div>     
        
        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
        
    </div>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
    
        <div class="loader">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="js/jquery-2.2.0.min.js"></script><!-- JQUERY.MIN JS -->
<script  src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script  src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="js/bootstrap-select.min.js"></script><!-- Form js -->
<script  src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script  src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script  src="js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script  src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script  src="js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->
<script  src="js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
<script  src="js/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script  src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script  src="js/lc_lightbox.lite.js" ></script><!-- IMAGE POPUP -->
<script  src="js/switcher.js"></script><!-- SHORTCODE FUCTIONS  -->

<!-- STYLE SWITCHER  ======= --> 
<div class="styleswitcher">

    <!-- <div class="switcher-btn-bx">
        <a class="switch-btn">
            <span class="fa fa-cog fa-spin"></span>
        </a>
    </div> -->
    
    <div class="styleswitcher-inner">
    
        <h6 class="switcher-title">Color Skin</h6>
        <ul class="color-skins">
            <li><a class="theme-skin skin-1" href="?theme=css/skin/skin-1"></a></li>
            <li><a class="theme-skin skin-2" href="?theme=css/skin/skin-2"></a></li>
            <li><a class="theme-skin skin-3" href="?theme=css/skin/skin-3"></a></li>
            <li><a class="theme-skin skin-4" href="?theme=css/skin/skin-4"></a></li>
            <li><a class="theme-skin skin-5" href="?theme=css/skin/skin-5"></a></li>
            <li><a class="theme-skin skin-6" href="?theme=css/skin/skin-6"></a></li>
            <li><a class="theme-skin skin-7" href="?theme=css/skin/skin-7"></a></li>
            <li><a class="theme-skin skin-8" href="?theme=css/skin/skin-8"></a></li>
            <li><a class="theme-skin skin-9" href="?theme=css/skin/skin-9"></a></li>
            <li><a class="theme-skin skin-10" href="?theme=css/skin/skin-10"></a></li>
            <li><a class="theme-skin skin-11" href="?theme=css/skin/skin-11"></a></li>
            <li><a class="theme-skin skin-12" href="?theme=css/skin/skin-12"></a></li>
        </ul>           
        
    </div>    
</div>
<!-- STYLE SWITCHER END ==== -->


<style type="text/css">
    .project-img-effect-1 a.mfp-link, .project-img-effect-1{
        background-color: #202326 !important;
    }
</style>

</body>

</html>
