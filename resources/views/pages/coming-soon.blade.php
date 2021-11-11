<!DOCTYPE html>
<html lang="en-US">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>
        Imminent - The most spectacular coming soon template!
    </title><!-- Behavioral Meta Data -->
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Core Meta Data -->
    <meta content="georgethedeveloper" name="author">
    <meta content="The most spectacular coming soon template!" name="description">
    <meta content="Comming Soon, Responsive, Landing Page, One Page" name="keywords"><!-- Open Graph Meta Data -->
    <meta content="The most spectacular coming soon template!">
    <meta content="georgethedeveloper">
    <meta content="georgethedeveloper">
    <meta content="website">
    <meta content="index.html"><!-- Twitter Card Meta Data -->
    <meta content="summary" name="twitter:card">
    <meta content="@georgethedeveloper" name="twitter:site">
    <meta content="@georgethedeveloper" name="twitter:creator">
    <meta content="georgethedeveloper" name="twitter:title">
    <meta content="Imminent - The most spectacular coming soon template!" name="twitter:description">

    <link href="favicon.png" rel="shortcut icon" type="{{ asset('img/icons/favicon.ico') }}">

    <!-- CSS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900' rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <link href="css/loader.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link href="{{ asset('css/coming.css') }}" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ie.css') }}" />
    <![endif]-->
    <!-- Javascript -->

    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
</head>

<body>
<div class="preloader">
    <div class="loading">
        <h2>
            Loading...
        </h2>
        <span class="progress"></span>
    </div>
</div>

<div class="wrapper">
    <ul class="scene unselectable" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15"
        id="scene">
        <li class="layer" data-depth="0.00">
        </li>
        <!-- BG -->

        <li class="layer" data-depth="0.10">
            <div class="background">
            </div>
        </li>

        <!-- Hero -->

        <li class="layer" data-depth="0.20">
            <div class="title">
                <h2>
                    IMMINENT
                </h2>
                <span class="line"></span>
            </div>
        </li>

        <li class="layer" data-depth="0.25">
            <div class="sphere">
                <img alt="sphere" src="{{ asset('img/coming/sphere.png') }}">
            </div>
        </li>

        <li class="layer" data-depth="0.30">
            <div class="hero">
                <h1 id="countdown">
                    The most spectacular coming soon template!
                </h1>

                <p class="sub-title">
                    The most spectacular coming soon template!
                </p>
            </div>
        </li>
        <!-- Flakes -->

        <li class="layer" data-depth="0.40">
            <div class="depth-1 flake1">
                <img alt="flake" src="{{ asset('img/coming/flakes/depth1/flakes1.png') }}">
            </div>

            <div class="depth-1 flake2">
                <img alt="flake" src="{{ asset('img/coming/flakes/depth1/flakes2.png') }}">
            </div>

            <div class="depth-1 flake3">
                <img alt="flake" src="{{ asset('img/coming/flakes/depth1/flakes3.png') }}">
            </div>

            <div class="depth-1 flake4">
                <img alt="flake" src="{{ asset('img/coming/flakes/depth1/flakes4.png') }}">
            </div>
        </li>

        <li class="layer" data-depth="0.50">
            <div class="depth-2 flake1">
                <img alt="flake" src="img/coming/flakes/depth2/flakes1.png">
            </div>

            <div class="depth-2 flake2">
                <img alt="flake" src="img/coming/flakes/depth2/flakes2.png">
            </div>
        </li>

        <li class="layer" data-depth="0.60">
            <div class="depth-3 flake1">
                <img alt="flake" src="img/coming/flakes/depth3/flakes1.png">
            </div>

            <div class="depth-3 flake2">
                <img alt="flake" src="img/coming/flakes/depth3/flakes2.png">
            </div>

            <div class="depth-3 flake3">
                <img alt="flake" src="img/coming/flakes/depth3/flakes3.png">
            </div>

            <div class="depth-3 flake4">
                <img alt="flake" src="img/coming/flakes/depth3/flakes4.png">
            </div>
        </li>

        <li class="layer" data-depth="0.80">
            <div class="depth-4">
                <img alt="flake" src="img/coming/flakes/depth4/flakes.png">
            </div>
        </li>

        <li class="layer" data-depth="1.00">
            <div class="depth-5">
                <img alt="flake" src="img/coming/flakes/depth5/flakes.png">
            </div>
        </li>
        <!-- Contact -->

        <li class="layer" data-depth="0.20">
            <div class="contact">
                <ul class="icons">
                    <li>
                        <a class="behance" href="#"><i class="fa fa-behance"></i></a>
                    </li>

                    <li>
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                    </li>

                    <li>
                        <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                </ul>
                Theme by <a href="https://georgethedeveloper.com/" target="_blank">georgethedeveloper</a>
                <a class="mail"
                   href="mailto:info@example.com?subject=Hi%20georgethedeveloper!">info@example.com</a>
            </div>
        </li>
    </ul>
</div>

<!-- Javascript -->
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
