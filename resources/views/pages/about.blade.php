@extends("layouts.master")

@section('title')
    About
@endsection

@section('content')

    <div class="page-content about-page">
        <!-- HEADING PAGE-->
        <section class="heading-page heading-agent-list-1 heading-services-detail-5"
                 style="background: url(&quot;img/backgrounds/heading-page-15.jpg&quot;) center center no-repeat;">
            <div class="container">
                <ul class="au-breadcrumb">
                    <li class="au-breadcrumb-item">
                        <a href="/home">Home</a>
                    </li>
                    <li class="au-breadcrumb-item active">
                        <a href="/home">About Us</a>
                    </li>
                </ul>
                <div class="heading-title">
                    <h1>Our Company</h1>
                </div>
            </div>
        </section>
        <!-- END HEADING PAGE-->
        <!-- SECTION ABOUT, STYLE 2-->
        <section class="about about-layout-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-md-push-6">
                        <div class="image">
                            <img alt="Our Team" src="public/img/call-to-action/call-to-action-3.jpg"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-md-pull-6">
                        <div class="main-post">
                            <h3 class="heading">We are Insurance Company</h3>
                            <p class="content">
                                Donec ut nisl interdum, ultrices est non, tincidunt justo. Aliquam sollicitudin diam sed
                                urna commodo dictum. In eget tortor rutrum, molestie erat et, maximus dolor. Phasellus
                                aliquam tortor tristique ornare malesuada. Mauris sed posuere quam. Aliquam
                                erat arcu, mollis ac sem at, ultrices porttitor ipsum. Ut hendrerit maximus nisl eu
                                ornare.
                                Mauris vitae ipsum a arcu pellentesque auctor. In id vulputate velit, a tempus lectus.
                                Nam
                                finibus diam lectus, id ornare quam
                                semper nec. Maecenas rhoncus lacus orci, ac fermentum quam vehicula quis. Suspendisse
                                lobortis diam quis eleifend dictum. Aliquam vel vehicula nisl, eget interdum libero.
                                Mauris
                                blandit, erat eget finibus ornare, diam libero
                                ornare orci, vehicula fermentum sapien dolor ac ligula.
                            </p>
                            <div class="action-group">
                                <a class="au-btn au-btn-orange au-btn-md"
                                   href="resources/views/quotations/private-motor-quotation.blade.php">Get a
                                    quote</a>
                                <div class="sub-link">
                                    <span>or</span>
                                    <a href="resources/views/pages/agent-list.blade.php">Find an agent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION ABOUT, STYLE 2-->
        <!-- CONTENT BOX, STYLE 3-->
        <section class="content-box content-box-layout style-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="content-box-item style-3 match-item">
                            <div class="icon-present">
                                <i class="fa fa-group"></i>
                            </div>
                            <div class="title">
                                <h4>Our Agents Are Trusted Advisors</h4>
                            </div>
                            <div class="subtitle">
                                <p>
                                    Quisque pulvinar libero dolor, quis bibendum eros euismod sit amet. Proin dapibus id
                                    diam at
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="content-box-item style-3 match-item">
                            <div class="icon-present">
                                <i class="fa fa-diamond"></i>
                            </div>
                            <div class="title">
                                <h4>Excellent Claims Experiences</h4>
                            </div>
                            <div class="subtitle">
                                <p>Pellentesque non diam euismod metus vehicula varius. Donec et velit placerat arcu
                                    lobortis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="content-box-item style-3 match-item">
                            <div class="icon-present">
                                <i class="fa fa-comment"></i>
                            </div>
                            <div class="title">
                                <h4>Positive Customer Testimonials</h4>
                            </div>
                            <div class="subtitle">
                                <p>Gravida at convallis a, tempor sed magna. Pellentesque non diam euismod metus
                                    vehicula</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTENT BOX, STYLE 3-->
        <!-- TESTINMONIAL, STYLE 2-->
        <section class="testinmonials testinmonials-layout style-2">
            <div class="container">
                <div class="heading">
                    <h3 class="heading-section">What Our Customers Say</h3>
                </div>
                <div class="testinmonial-wrapper owl-carousel" data-dots=".testinmonial-control">
                    <!-- testinmonials item-->
                    <div class="testinmonial-item style-2">
                        <div class="content">
                            <p>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio
                                fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis,
                                faucibus faucibus nunc. Vestibulum sit amet lacinia
                                massa</p>
                        </div>
                        <div class="personal">
                            <div class="avatar">
                                <img alt="Cheryl Cruz" src="public/img/avatar/avatar-1.jpg"/>
                            </div>
                            <div class="info">
                                <div class="name">
                                    <span>Cheryl Cruz</span>
                                </div>
                                <div class="title-job">
                                    <span>Car Owner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- testinmonials item-->
                    <div class="testinmonial-item style-2">
                        <div class="content">
                            <p>Vestibulum ultricies cursus feugiat. Vestibulum scelerisque posuere neque. Phasellus
                                tortor
                                lacus, tincidunt nec varius ut, tempor eget massa. Aenean non lorem ex. Phasellus
                                dapibus eu
                                justo dapibus commodo.</p>
                        </div>
                        <div class="personal">
                            <div class="avatar">
                                <img alt="Linda Campbell" src="public/img/avatar/avatar-2.jpg"/>
                            </div>
                            <div class="info">
                                <div class="name">
                                    <span>Linda Campbell</span>
                                </div>
                                <div class="title-job">
                                    <span>Car Owner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- testinmonials item-->
                    <div class="testinmonial-item style-2">
                        <div class="content">
                            <p>Etiam et purus in dui dignissim dictum quis efficitur libero. Sed fringilla, augue vel
                                sollicitudin bibendum, ligula elit rhoncus lorem, a egestas diam augue sed enim. In eget
                                luctus ante. Mauris ut cursus nunc, vitae hendrerit</p>
                        </div>
                        <div class="personal">
                            <div class="avatar">
                                <img alt="John Walker" src="public/img/avatar/avatar-3.jpg"/>
                            </div>
                            <div class="info">
                                <div class="name">
                                    <span>John Walker</span>
                                </div>
                                <div class="title-job">
                                    <span>Home Owner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="owl-dots testinmonial-control">
                    <li class="owl-dot active"></li>
                    <li class="owl-dot"></li>
                    <li class="owl-dot"></li>
                </ul>
            </div>
        </section>
        <!-- END TESTINMONIAL, STYLE 2-->
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

@endsection
