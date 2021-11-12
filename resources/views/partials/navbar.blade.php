<!-- Header main-->
<header>
    <div id="loading">
        <div class="image-load">
            <img alt="loader" src="{{asset('img/icons/Marty.gif') }}"/>
        </div>
    </div>

    <!--Mobile Menu-->
    <nav id="mmenu">
        <ul>
            <li>
                <a href="{{ url('/') }}">Home</a>
            </li>

            <li>
                <a href="resources/views/pages/insurance-products.blade.php">Insurance Products</a>
            </li>

            <li>
                <a href="resources/views/pages/services/services-list.blade.php">Compare Insurance</a>
            </li>


            <li>
                <a href="articles.blade.php">Articles</a>
            </li>

            <li>
                <a href="about.blade.php">Q & A</a>
            </li>
        </ul>
    </nav>
    <!--Mobile Menu-->

    <div class="navbar-main ">
        <div class="container">
            <div class="navbar-holder">

                <a class="navbar-toggle collapsed" href="#mmenu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <nav class="navbar-menu">

                    <!-- <div class="header-main">
                         <div class="container">
                             <div class="logo">
                                 <a href="index.blade.php">
                                     <img alt="Logo" class="img-fluid" src="img/icons/logo-2.png"/>
                                 </a>
                             </div>
                             <div class="contact-widget">
                                 <div class="contact-list hidden-lg-tablet">
                                     <button
                                             class="au-btn au-btn-sm au-btn-orange hidden-md-phone"
                                             onclick="window.location.href='compare-insurance.blade.php';">Get a Quote
                                     </button>
                                 </div>
                             </div>

                         </div>
                     </div>-->

                    <ul class="menu">
                        <li class="dropdown">
                            <a href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="dropdown">
                            <a href="{{ url('/insurance-products') }}">INSURANCE Products</a>

                        </li>

                        <li class="dropdown">
                            <a href="{{ url('/compare-insurance') }}">Compare Insurance</a>
                        </li>

                        <li class="dropdown">
                            <a href="{{ url('/articles') }}">Articles</a>
                        </li>

                        <li class="dropdown">
                            <a href="">Q & A</a>
                        </li>
                    </ul>
                </nav>

                <!-- search start -->
                <!--<form class="d-flex">
                    <input aria-label="Search" class="form-control me-2" placeholder="Search" type="search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>-->
                <!-- search end -->

            </div>
        </div>
    </div>
</header>
<!-- End header main-->
