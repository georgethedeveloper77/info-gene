<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sevices List</title>
    <meta content="no-referrer" name="referrer">
    <meta content="My Insurance" name="description">
    <meta content="My Insurance" name="keywords">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="public/img/icons/favicon.ico" rel="icon" sizes="16x16" type="image/gif">
    <!--Styles-->
    <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/jQuery.mmenu/dist/css/jquery.mmenu.all.css" rel="stylesheet">
    <!-- Fonts-->
    <link href="public/fonts/open-sans/css/open-sans.css" rel="stylesheet">
    <link href="public/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/fonts/Linearicons-Free-v1.0.0/style.css" rel="stylesheet">
    <!--Theme style-->
    <link href="public/css/style.css" rel="stylesheet">
</head>

<body>
<!-- Header main-->
<header>
    <div id="loading">
        <div class="image-load">
            <img alt="loader" src="public/img/icons/Marty.gif"/>
        </div>
    </div>
    <nav id="mmenu">
        <ul>
            <li>
                <a href="/home">HOME</a>
                <ul>
                    <li>
                        <a href="/home">HOME LAYOUT 1</a>
                    </li>
                    <li>
                        <a href="/compareinsurance">HOME LAYOUT 2</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="resources/views/pages/services/services-list.blade.php">PRODUCTS</a>
                <ul>
                    <li>
                        <a href="resources/views/pages/insurance-details.blade.php">CAR INSURANCE</a>
                    </li>
                    <li>
                        <a href="resources/views/pages/services/services-detail-2.blade.php">LIFE INSURANCE</a>
                    </li>
                    <li>
                        <a href="resources/views/pages/services/services-detail-3.blade.php">HOME INSURANCE</a>
                    </li>
                    <li>
                        <a href="resources/views/pages/services/services-detail-4.blade.php">TRAVEL INSURANCE</a>
                    </li>
                    <li>
                        <a href="resources/views/pages/services/services-detail-5.blade.php">BUSINESS INSURANCE</a>
                    </li>
                    <li>
                        <a href="services-detail-6.html">LANDLORD INSURANCE</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/private-motor-quotation">GET A QUOTE</a>
                <ul>
                    <li>
                        <a href="/private-motor-quotation">QUOTE LAYOUT 1</a>
                    </li>
                    <li>
                        <a href="get-a-quote-2.blade.php">QUOTE LAYOUT 2</a>
                    </li>
                    <li>
                        <a href="/private-motor-quotation">QUOTE LAYOUT 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="resources/views/pages/about.blade.php">OUR COMPANY</a>
            </li>
            <li>
                <a href="resources/views/pages/articles.blade.php">BLOG</a>
                <ul>
                    <li>
                        <a href="resources/views/pages/articles.blade.php">BLOG LIST</a>
                    </li>
                    <li>
                        <a href="resources/views/pages/article-detail.blade.php">BLOG SINGLE</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">PAGES</a>
                <ul>
                    <li>
                        <a href="#">AGENT</a>
                        <ul>
                            <li>
                                <a href="resources/views/pages/agent-list.blade.php">AGENT LAYOUT 1</a>
                            </li>
                            <li>
                                <a href="agent-list-2.blade.php">AGENT LAYOUT 2</a>
                            </li>
                            <li>
                                <a href="resources/views/pages/agent-detail.blade.php">AGENT DETAIL</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">PROJECT</a>
                        <ul>
                            <li>
                                <a href="resources/views/pages/insurance-products.blade.php">PROJECT LIST</a>
                            </li>
                            <li>
                                <a href="resources/views/pages/insurance-product-detail.blade.php">PROJECT DETAILS</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="contact-6.blade.php">CONTACT US</a>
                <ul>
                    <li>
                        <a href="contact-6.blade.php">Contact 1</a>
                    </li>
                    <li>
                        <a href="contact-2.blade.php">Contact 2</a>
                    </li>
                    <li>
                        <a href="contact-3.blade.php">Contact 3</a>
                    </li>
                    <li>
                        <a href="contact-4.blade.php">Contact 4</a>
                    </li>
                    <li>
                        <a href="resources/views/pages/contact.blade.php">Contact 5</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="top-bar">
        <div class="container">
            <p class="greeting">Welcome to insurance company, we're here to help you</p>
            <div class="quick-link">
                <a href="/private-motor-quotation">Get a Quote</a>|
                <a href="resources/views/pages/agent-list.blade.php">Find an Agent</a>|
                <a href="#">Pricing</a>|
                <a href="resources/views/pages/about.blade.php">FAQS</a>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container">
            <div class="logo">
                <a href="/home">
                    <img alt="Logo" class="img-fluid" src="public/img/icons/logo.png"/>
                </a>
            </div>
            <div class="contact-widget">
                <div class="contact-list hidden-lg-tablet">
                    <div class="item">
                        <i class="lnr lnr-phone-handset"></i>
                        <div class="text">
                            <p class="top">Need Help?</p>
                            <p class="bot">1-800-123-6889</p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="lnr lnr-map-marker"></i>
                        <div class="text">
                            <p class="top">8th floor, 379 Hudson St</p>
                            <p class="bot">Nairobi</p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="lnr lnr-clock"></i>
                        <div class="text">
                            <p class="top">07:30 am – 05:30 pm</p>
                            <p class="bot">Every Day</p>
                        </div>
                    </div>
                </div>
                <button class="au-btn au-btn-sm au-btn-orange hidden-md-phone">Get a Quote</button>
            </div>
        </div>
    </div>
    <div class="navbar-main">
        <div class="container">
            <div class="navbar-holder">
                <a class="navbar-toggle collapsed" href="#mmenu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <nav class="navbar-menu">
                    <ul class="menu">
                        <li class="dropdown">
                            <a href="/home">Home</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/home">Home 1</a>
                                </li>
                                <li>
                                    <a href="resources/views/quotations/compareinsurance.blade.php">Home 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="resources/views/pages/services/services-list.blade.php">Products</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="resources/views/pages/insurance-details.blade.php">CAR INSURANCE</a>
                                </li>
                                <li>
                                    <a href="resources/views/pages/services/services-detail-2.blade.php">LIFE
                                        INSURANCE</a>
                                </li>
                                <li>
                                    <a href="resources/views/pages/services/services-detail-5.blade.php">HOME
                                        INSURANCE</a>
                                </li>
                                <li>
                                    <a href="resources/views/pages/services/services-detail-3.blade.php">TRAVEL
                                        INSURANCE</a>
                                </li>
                                <li>
                                    <a href="resources/views/pages/services/services-detail-4.blade.php">BUSINESS
                                        INSURANCE</a>
                                </li>
                                <li>
                                    <a href="resources/views/pages/insurance-details.blade.php">LANDLORD INSURANCE</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Get A Quote</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="resources/views/quotations/private-motor-quotation.blade.php">Get A Quote
                                        1</a>
                                </li>
                                <li>
                                    <a href="get-a-quote-2.blade.php">Get A Quote 2</a>
                                </li>
                                <li>
                                    <a href="resources/views/quotations/private-motor-quotation.blade.php">Get A Quote
                                        3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="resources/views/pages/about.blade.php">Our Company</a>
                        </li>
                        <li class="dropdown">
                            <a href="/articles">Blog</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/articles">Blog List</a>
                                </li>
                                <li>
                                    <a href="/article-detail">Blog Detail</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-child">
                                    <a href="resources/views/pages/agent-list.blade.php">Agent List</a>
                                    <ul class="dropdown-menu-child">
                                        <li>
                                            <a href="resources/views/pages/agent-list.blade.php">Agent List 1</a>
                                        </li>
                                        <li>
                                            <a href="agent-list-2.blade.php">Agent List 2</a>
                                        </li>
                                        <li>
                                            <a href="resources/views/pages/agent-detail.blade.php">Agent Detail</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-child">
                                    <a href="resources/views/pages/insurance-products.blade.php">Projects</a>
                                    <ul class="dropdown-menu-child">
                                        <li>
                                            <a href="resources/views/pages/insurance-products.blade.php">Projects
                                                List</a>
                                        </li>
                                        <li>
                                            <a href="resources/views/pages/insurance-product-detail.blade.php">Project
                                                Detail</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact-6.blade.php">Contact</a>
                                </li>
                                <li class="dropdown-child">
                                    <a href="/articles">Blog</a>
                                    <ul class="dropdown-menu-child">
                                        <li>
                                            <a href="/articles">Blog List</a>
                                        </li>
                                        <li>
                                            <a href="/article-detail">Blog Detail</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="resources/views/pages/about.blade.php">About</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="contact-6.blade.php">Contact Us</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="contact-6.blade.php">Contact 1</a>
                                </li>
                                <li>
                                    <a href="contact-2.blade.php">Contact 2</a>
                                </li>
                                <li>
                                    <a href="contact-3.blade.php">Contact 3</a>
                                </li>
                                <li>
                                    <a href="contact-4.blade.php">Contact 4</a>
                                </li>
                                <li>
                                    <a href="resources/views/pages/contact.blade.php">Contact 5</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="search">
                    <form>
                        <input class="search-input" placeholder="Search" type="text"/>
                        <input class="search-submit" type="button" value="search"/>
                        <span class="search-icon"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header main-->
<div class="page-content services-list">
    <!-- HEADING PAGE-->
    <section class="heading-page heading-services-list"
             style="background: url(&quot;img/backgrounds/heading-page-1.jpg&quot;) center center no-repeat;">
        <div class="container">
            <div class="heading-title">
                <h1>Our Products</h1>
            </div>
            <ul class="au-breadcrumb">
                <li class="au-breadcrumb-item">
                    <a href="/home">Home</a>
                </li>
                <li class="au-breadcrumb-item active">
                    <a href="/home">Our Products</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- END HEADING PAGE-->
    <!-- PRODUCT, STYLE 2-->
    <div class="product product-layout product-layout-none-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="product-item style-1 match-item">
                        <a class="image" href="resources/views/pages/insurance-details.blade.php">
                            <img alt="Car Insurance" class="img-fluid" src="public/img/product/product-1.jpg"/>
                        </a>
                        <div class="title">
                            <a href="resources/views/pages/insurance-details.blade.php">Car Insurance</a>
                        </div>
                        <div class="content">
                            <p>Insurance fraud puts an extra $70 on the price of every annual car insurance premium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-item style-1 match-item">
                        <a class="image" href="resources/views/pages/services/services-detail-2.blade.php">
                            <img alt="Life Insurance" class="img-fluid" src="public/img/product/product-2.jpg"/>
                        </a>
                        <div class="title">
                            <a href="resources/views/pages/services/services-detail-2.blade.php">Life Insurance</a>
                        </div>
                        <div class="content">
                            <p>If you have a partner and children, then the two of you should think about life
                                insurance</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-item style-1 match-item">
                        <a class="image" href="resources/views/pages/services/services-detail-3.blade.php">
                            <img alt="Home Insurance" class="img-fluid" src="public/img/product/product-3.jpg"/>
                        </a>
                        <div class="title">
                            <a href="resources/views/pages/services/services-detail-3.blade.php">Home Insurance</a>
                        </div>
                        <div class="content">
                            <p>We'll rebuild or repair your home if it's damaged or destroyed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-item style-1 match-item">
                        <a class="image" href="resources/views/pages/services/services-detail-4.blade.php">
                            <img alt="Travel Insurance" class="img-fluid" src="public/img/product/product-4.jpg"/>
                        </a>
                        <div class="title">
                            <a href="resources/views/pages/services/services-detail-4.blade.php">Travel Insurance</a>
                        </div>
                        <div class="content">
                            <p>We can help you find the best plan for your trip and your budget.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-item style-1 match-item">
                        <a class="image" href="resources/views/pages/services/services-detail-5.blade.php">
                            <img alt="Business Insurance" class="img-fluid"
                                 src="public/img/product/product-5.jpg"/>
                        </a>
                        <div class="title">
                            <a href="resources/views/pages/services/services-detail-5.blade.php">Business Insurance</a>
                        </div>
                        <div class="content">
                            <p>In truth, there are certain forms of insurance that are an absolute requirement for all
                                businesses</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-item style-1 match-item">
                        <a class="image" href="services-detail-6.html">
                            <img alt="Landlord Insurance" class="img-fluid"
                                 src="public/img/product/product-6.jpg"/>
                        </a>
                        <div class="title">
                            <a href="services-detail-6.html">Landlord Insurance</a>
                        </div>
                        <div class="content">
                            <p>Our rental property insurance protects your property from damages</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PRODUCT, STYLE 2-->
    <!-- CALL TO ACTION, STYLE 2-->
    <section class="call-to-action call-to-action-layout style-2 bg-blue">
        <div class="container">
            <div class="call-to-action-block">
                <h4 class="call-to-action-content">Find Information And Get Free Insurance Quotes.</h4>
                <button class="au-btn au-btn-orange au-btn-md">Get a quote</button>
            </div>
        </div>
    </section>
    <!-- END CALL TO ACTION, STYLE 2-->
</div>
<!-- FOOTER-->
<footer>
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="services-widget">
                        <div class="logo">
                            <img alt="Logo" src="public/img/icons/logo-2.png"/>
                        </div>
                        <div class="services-list">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>
                                            <a href="resources/views/pages/insurance-details.blade.php">Car
                                                Insurance</a>
                                        </li>
                                        <li>
                                            <a href="resources/views/pages/services/services-detail-2.blade.php">Home
                                                Insurance</a>
                                        </li>
                                        <li>
                                            <a href="resources/views/pages/services/services-detail-5.blade.php">Life
                                                Insurance</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>
                                            <a href="resources/views/pages/services/services-detail-4.blade.php">Travel
                                                Insurance</a>
                                        </li>
                                        <li>
                                            <a href="resources/views/pages/insurance-details.blade.php">Landlord
                                                Insurance</a>
                                        </li>
                                        <li>
                                            <a href="resources/views/pages/services/services-detail-2.blade.php">Business
                                                Insurance</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-widget">
                        <h3>Contact Us</h3>
                        <div class="content">
                            <p>
                                <span class="bold">A:</span>8th floor, Nairobi</p>
                            <p>
                                <span class="bold">P:</span>(+1) 96 716 6879</p>
                            <p>
                                <span class="bold">E:</span>contact@site.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="social-widget">
                        <h3>Follow us</h3>
                        <ul class="social-list">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <p class="copyright">Copyright © 2021 Designed by georgethedeveloper. All rights reserved.</p>
            <ul class="quick-link">
                <li>
                    <a href="resources/views/pages/about.blade.php">About</a>
                </li>
                <li>
                    <a href="contact-6.blade.php">Contact Us</a>
                </li>
                <li>
                    <a href="#">Term & Conditions</a>
                </li>
                <li>
                    <a href="#">Privacy Policy</a>
                </li>
                <li>
                    <a href="#">Sites Map</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<!-- END FOOTER-->
<!--Scripts-->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jQuery.mmenu/dist/js/jquery.mmenu.min.umd.js"></script>
<script src="public/js/mmenu-function.js"></script>
<script src="public/js/custom.js"></script>
<!--End script-->
</body>

</html>
