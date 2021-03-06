<!doctype html>
<html lang="en">
<head>

    <title>AdSpot - The Classified Web App</title>
    <!--========================================
    Meta
    ===========================================-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->

    <!-- Add to home screen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="xDocs">
    <link rel="icon" sizes="192x192" href="template/assets/img/basic/chrome-touch-icon-192x192.png">

    <!-- Add to home screen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <link rel="apple-touch-icon" href="template/assets/img/basic/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="template/assets/img/basic/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#55acee">
    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#55acee">

    <!--========================================
    CSS
    ===========================================-->
    <!--3rd party plugins-->
    <link href="template/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="template/assets/lib/slick-carousel/slick/slick.css" rel="stylesheet" type="text/css">
    <!--custom icons for classified website-->
    <link href="template/assets/css/adspoticons.css" rel="stylesheet" type="text/css">
    <!--main styles for template-->
    <link href="template/assets/css/style.css" rel="stylesheet" type="text/css">
    <!--put your custom css on the file below-->
    <link href="template/assets/css/custom.css" rel="stylesheet" type="text/css">


</head>
<body>
<div class="web-app">
    <div class="doc-header header-fixed">
        <div class="container">
            <div class="inner">
                <div class="app-logo">
                    <button class="mobile-control mob-menu-trigger"><i class="adicon-hamburger"></i></button>
                    <a href="/"><img src="/template/assets/img/basic/logo.png" alt="adtoday"></a>
                </div>
                <ul class="quick-actions">


                    <?php if (User::isGuest()): ?>
                        <li class="dropdown-wrap">
                            <a href="#">My account &nbsp;<i class="fa fa-caret-down"></i></a>
                            <div class="basic-dropdown">
                                <ul class="country-list">
                                    <li><a href="/account/">My account</a></li>
                                    <li><a href="/account/logout">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    <?php else: ?>
                        <li><a class="modal-trigger" href="#signInModal"><i class="fa fa-user"></i> &nbsp; Login</a>
                        </li>
                        <li><a class="modal-trigger" href="#signUpModal">Register</a></li>
                    <?php endif; ?>


                    <!--  <li><a class="modal-trigger" href="#signInModal"><i class="fa fa-user"></i> &nbsp; Login</a></li>
                      <li><a class="modal-trigger" href="#signUpModal">Register</a></li>-->
                    <a href="/add/" class="btn btn-green pull-right quick-post"> <i class="fa fa-plus"></i> Post
                        your ad </a>
                </ul>
            </div>
            <div class="row" style="position: relative;">
                <div class="col-sm-3">
                    <div class="mega-menu0-1" style="border: 2px solid #0083c9;">
                        <ul class="category-list" style="background-color: white;">
                            <!--<li><a href="#"><i class="adicon-car"></i>Vehicles</a>
                                <ul>
                                    <li><a href="#">Cars</a></li>
                                    <li><a href="#">Motorcycles</a></li>
                                    <li><a href="#">Scooters</a></li>
                                    <li><a href="#">Bicycles</a></li>
                                    <li><a href="#">Commercial Vehicles</a></li>
                                    <li><a href="#">Spare Parts &amp; Accessories</a></li>
                                    <li><a href="#">Other Vehicles</a></li>
                                </ul>
                            </li>-->
                            <!--                            <li><a href="#"><i class="adicon-tablet"></i>Mobiles</a>
                                                            <ul>
                                                                <li><a href="#">Iphone</a></li>
                                                                <li><a href="#">Android</a></li>
                                                                <li><a href="#">Q mobile</a></li>
                                                                <li><a href="#">Black berry</a></li>
                                                            </ul>
                                                        </li>-->
                            <li><a href="/catalog/electronics"><i class="adicon-tv"></i>Electronics</a>
                                <ul>
                                    <li><a href="https://adtoday.co.uk/catalog/electronics/accessories/">Accessories</a>
                                    </li>
                                </ul>
                            </li>
                            <!--                            <li><a href="#"><i class="adicon-sofa"></i>Furniture</a></li>
                                                        <li><a href="#"><i class="adicon-briefcase"></i>Jobs</a></li>
                                                        <li><a href="#"><i class="adicon-buildings"></i>Real Estate</a></li>
                                                        <li><a href="#"><i class="adicon-bell"></i>Services</a></li>
                                                        <li><a href="#"><i class="adicon-hat"></i>Education</a></li>
                                                        <li><a href="#"><i class="adicon-dog"></i>Animals</a></li>
                                                        <li><a href="#"><i class="adicon-heal"></i>Fashion</a></li>
                                                        <li><a href="#"><i class="adicon-smile"></i>Baby Products</a></li>-->
                            <li><a href="#"><i class="adicon-hearts"></i>Matrimony</a>
                                <ul>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/adult-dating/">Adult dating</a>
                                    </li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/swingers/">Swingers</a></li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/gay-escorts/">Gay escorts</a></li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/escorts-and-massages/">Escorts and
                                            massages</a></li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/adult-entertainment/">Adult
                                            entertainment</a></li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/adult-jobs/">Adult jobs</a></li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/gay-and-lesbian/">Gay and
                                            lesbian</a></li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/friendship-friends/">Friendship
                                            friends</a></li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/straight-relationships/">Straight
                                            relationships</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="category-search-tabbed">

                        <div class="search-widget">
                            <input type="text" id="typed4">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
                <div id="typed-strings">
                    <p>Rooms ^10 to Rent ^100 In Heaton</p>
                    <p>Great double rooms to rent</p>
                    <p>Badminton Racket</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sliding-nav">
        <a class="close-sliding-nav" href="#">Close nav</a>
        <nav class="slide-nav-list">
            <ul>
                <li class="parent">
                    <a href="javascript:return;">Demos</a>
                    <ul>
                        <li><a href="home2.html">Demo1 - Focus</a></li>
                        <li><a href="home3.html">Demo2 - Expressive</a></li>
                        <li><a href="home4.html">Demo3 - Minimal</a></li>
                        <li><a href="home5.html">Demo4 - Fancy</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a href="#">Classified</a>
                    <ul>
                        <li><a href="home-default.html">Home</a></li>
                        <li><a href="listing.html">Ads Archive</a></li>
                        <li><a href="single.html">Ad Single</a></li>
                        <li><a href="create.html">Create Ad</a></li>
                        <li><a href="dashboard.html">Dashboard</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a href="javascript:return;">Shop</a>
                    <ul>
                        <li><a href="shop-index.html">Shop Home</a></li>
                        <li><a href="shop-listing.html">Archive</a></li>
                        <li><a href="shop-single.html">Single</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a href="javascript:return;">Pages</a>
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="terms.html">Terms</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a href="javascript:return;">Shortcodes</a>
                    <ul>
                        <li><a href="elements-shortcodes.html">Elements</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="elements-bootstrap.html">Bootstrap Components</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
    <div class="mobile-menu-wrap">
        <a href="#" class="closeMobilMenu">close the mobile menu</a>
        <nav class="mobile-menu">
            <div class="search-widget">
                <input type="text" placeholder="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
            <ul class="menu-list">
                <li><a href="create.html">Create an Ad</a></li>
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="listing.html">Ads Listing Page</a></li>
                <li><a href="how-adspot-works.html">How this works</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="contact.html">Contact us</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="blog-single.html">Blog Single</a></li>
                <li><a href="shop-index.html">Shop Page</a></li>
                <li><a href="shop-listing.html">Shop Archive</a></li>
                <li><a href="cart.html">Cart Page</a></li>
                <li><a href="checkout.html">Checkout Page</a></li>
                <li><a href="elements-shortcodes.html">Checkout Page</a></li>
            </ul>
        </nav>
    </div>

    <div class="app-canvas">
        <div class="main-banner imgAsBg hero-banner menu-on-top banner-overlay"
             style="background-image: url(&quot;template/assets/img/headerbg4.jpg&quot;); height: 834px;">
            <img src="template/assets/img/headerbg4.jpg" alt="dummy">
            <div class="inner">
                <div class="container">
                    <header class="text-normal">
                        <h2>Buy &amp; Sell <strong>Anything</strong></h2>
                        <p class="text-uppercase">UK Biggest Classified Marketplace</p>
                    </header>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <div class="text-widget">
                            <div class="inner">
                                <h4>About Us</h4>
                                <p>Morbi ut tellus ac leo molestie luctus nec vehicula sed justo ut varius onec tempor
                                    rhoncus volutpat ras lorem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="text-widget">
                            <div class="inner">
                                <h4>Sell Safely</h4>
                                <p>Morbi ut tellus ac leo molestie luctus nec vehicula sed justo ut varius onec tempor
                                    rhoncus volutpat ras lorem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="text-widget">
                            <div class="inner">
                                <h4>Buy Safely</h4>
                                <p>Morbi ut tellus ac leo molestie luctus nec vehicula sed justo ut varius onec tempor
                                    rhoncus volutpat ras lorem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-7 pull-right">
                        <header>
                            <span class="text-uppercase">Make Your Phone a classified machine</span>
                            <h2>Download Free Classified App</h2>
                        </header>
                        <div class="row inner">
                            <div class="col-xs-4">
                                <a href="#" class="app-store">
                                    <img src="template/assets/img/android.png" alt="Google play">
                                    <span>download on</span>
                                    <h4>Google Play</h4>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="app-store">
                                    <img src="template/assets/img/apple.png" alt="Apple store">
                                    <span>download on</span>
                                    <h4>Apple Store</h4>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="app-store">
                                    <img src="template/assets/img/win.png" alt="windows store">
                                    <span>download on</span>
                                    <h4>Windows Store</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-xs col-sm-4 col-md-5 pull-right">
                        <div class="action-mock">
                            <img src="template/assets/img/app-mock.png" alt="download apps">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <footer class="doc-footer style4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-7">
                    <a href="/"><img src="/template/assets/img/basic/logo.png" alt="adtoday"></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <form action="/" class="widget-subscribe-2">
                        <div class="labeled-input">
                            <label>Enter your email address</label>
                            <input title="title here" type="email">
                        </div>
                        <button class="btn btn-blue">subscribe</button>
                    </form>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="text-widget">
                        <p>Fusce aliquet quam eget neque ultrices lla posuere felis id arcu blandit sagittis ellen ender
                            purus.</p>
                        <div class="widget-social">
                            <div class="social-links">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                    <li><a href="#" class="fa fa-dribbble"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8">
                    <div class="grid-list">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Feedback</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <ul>
                                    <li><a href="#">Community</a></li>
                                    <li><a href="#">Trust &amp; Safety</a></li>
                                    <li><a href="#">Help &amp; Support</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Cookie Policy</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <ul>
                                    <li><a href="#">Community</a></li>
                                    <li><a href="#">Trust &amp; Safety</a></li>
                                    <li><a href="#">Help &amp; Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center copyRights">
                © ADSPOT - Classified
            </div>

        </div>
    </footer>
</div>

<!--======================================
Modals
=======================================-->
<div id="signInModal" class="modal-container">
    <a href="#" class="modal-overlay"> click to close modal</a>
    <div class="inner">
        <button class="close_modal"><i class="fa fa-remove"></i></button>
        <div class="social_login_opt">
            <div>
                <div class="opt-navigator dropdown-wrap">
                    <button>open options</button>
                    <div class="basic-dropdown">
                        <ul class="social-drop-list">
                            <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i>Google+</a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="social-opts">
                    <a href="#" class="opt-fb-login active">
                        <i class="fa fa-facebook"></i>
                        <span>Sign in with facebook</span>
                    </a>
                    <a href="#" class="opt-gp-login">
                        <i class="fa fa-google-plus"></i>
                        <span>Sign in with Google+</span>
                    </a>
                    <a href="#" class="opt-twitter-login">
                        <i class="fa fa-twitter"></i>
                        <span>Sign in with Twitter</span>
                    </a>
                    <a href="#" class="opt-instagram-login">
                        <i class="fa fa-instagram"></i>
                        <span>Sign in with Instagram</span>
                    </a>
                    <a href="#" class="opt-linkedin-login">
                        <i class="fa fa-linkedin"></i>
                        <span>Sign in with Linkedin</span>
                    </a>
                </div>
            </div>
            <span class="split-opt">or</span>
        </div>
        <div class="modal-content">
            <header>
                <h4>Welcome Back!</h4>
                <p>Please enter your details below</p>
            </header>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <form action="/" method="post">
                <div class="field-block">
                    <div class="labeled-input">
                        <label>Username</label>
                        <input title="title here" name="username" type="text">
                    </div>
                </div>
                <div class="field-block">
                    <div class="labeled-input">
                        <label>Password</label>
                        <input title="title here" name="password" type="password">
                    </div>
                </div>
                <div class="row login-actions field-block">
                    <div class="col-xs-12 col-sm-6">
                        <div class="custom-radio">
                            <input type="radio" name="item-condition" id="login001">
                            <label for="login001">Remember me</label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 xs-text-left text-right">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>

                <button type="submit" name="signIn" class="btn btn-md btn-green block-element">Login Now</button>
                <div class="login-cta text-center">
                    <p>Don't have an account?</p>
                    <a href="#">Register here FREE</a>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="signUpModal" class="modal-container">
    <a href="#" class="modal-overlay"> click to close modal</a>
    <div class="inner">
        <button class="close_modal"><i class="fa fa-remove"></i></button>
        <div class="social_login_opt">
            <div>
                <div class="opt-navigator dropdown-wrap">
                    <button>open options</button>
                    <div class="basic-dropdown">
                        <ul class="social-drop-list">
                            <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i>Google+</a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="social-opts">
                    <a href="#" class="opt-fb-login active">
                        <i class="fa fa-facebook"></i>
                        <span>Sign in with facebook</span>
                    </a>
                    <a href="#" class="opt-gp-login">
                        <i class="fa fa-google-plus"></i>
                        <span>Sign in with Google+</span>
                    </a>
                    <a href="#" class="opt-twitter-login">
                        <i class="fa fa-twitter"></i>
                        <span>Sign in with Twitter</span>
                    </a>
                    <a href="#" class="opt-instagram-login">
                        <i class="fa fa-instagram"></i>
                        <span>Sign in with Instagram</span>
                    </a>
                    <a href="#" class="opt-linkedin-login">
                        <i class="fa fa-linkedin"></i>
                        <span>Sign in with Linkedin</span>
                    </a>
                </div>
            </div>
            <span class="split-opt">or</span>
        </div>
        <div class="modal-content">
            <?php if ($query_registration): ?>
                <p>You Are Successfully Registered!</p>
            <?php else: ?>
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <header>
                    <h4>Welcome Back!</h4>
                    <p>Please enter your details below</p>
                </header>
                <form action="/" method="post">
                    <div class="field-block">
                        <div class="labeled-input">
                            <label>Username</label>
                            <input title="title here" name="username" type="text" value="<?php if (isset($username)) {
                                echo $username;
                            } ?>">
                        </div>
                    </div>
                    <div class="field-block">
                        <div class="labeled-input">
                            <label>Password</label>
                            <input title="title here" name="password" type="password"
                                   value="<?php if (isset($username)) {
                                       echo $password;
                                   } ?>">
                        </div>
                    </div>
                    <div class="field-block">
                        <div class="labeled-input">
                            <label>Email</label>
                            <input title="title here" name="email" type="email" value="<?php if (isset($username)) {
                                echo $email;
                            } ?>">
                        </div>
                    </div>
                    <div class="field-block">
                        <div class="icon-field">
                            <span>+44</span>
                            <input type="text" name="phone" placeholder="Your Contact #">
                        </div>
                    </div>


                    <button type="submit" name="signUp" class="btn btn-md btn-green block-element">Signup Now</button>
                    <div class="login-cta text-center"><br>
                        By clicking Signup Now, you agree to <br>
                        <a href="#">our Terms</a> and <a href="#">Privacy Policy</a>.
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>


<!--========================================
Javascript
===========================================-->
<script src="template/assets/lib/jquery/dist/jquery.min.js"></script>
<script src="template/assets/js/typed.js "></script>
<script src="template/assets/lib/slick-carousel/slick/slick.min.js"></script>
<script src="template/assets/js/app.js"></script>
<script src="template/assets/js/setioppd.js"></script>
</body>
</html>