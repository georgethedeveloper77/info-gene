@extends("layouts.master")

@section("title")
    Compare Insurance
@endsection

@section("content")

    <div class="page-content home-page-2">

        <!-- HEADING PAGE-->
        <div class="heading-page heading-normal heading-project">
            <div class="container">
                <ul class="au-breadcrumb">
                    <li class="au-breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="/home">Home</a>
                    </li>
                    <li class="au-breadcrumb-item active">
                        <a href="/compareinsurance">Compare Insurance</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END HEADING PAGE-->

        <!-- PRODUCT, STYLE 4-->
        <section class="product product-layout style-3">
            <div class="container">
                <div class="heading">
                    <h3 class="heading-section">Compare Insurance</h3>
                </div>
                <div class="sub-heading">
                    <span>We have brought together top insurance Experts to provide you the best
                        <br/> free advise on insurance and finance matters.</span>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="title">
                                <a href="{{ url('/private-motor-quotation') }}">Motor Private Insurance</a>
                            </div>
                            <div class="content">
                                <p>Insurance fraud puts an extra ksh 70000 on the price of every annual car insurance
                                    premium.</p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-outline-warning"
                                        onclick="window.location.href='/private-motor-quotation';"
                                        type="button">Get Quotation
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fa fa-bus"></i>
                            </div>
                            <div class="title">
                                <a href="{{ url('/comparemotorcommercial') }}">Motor Commercial Insurance</a>
                            </div>
                            <div class="content">
                                <p>Insurance fraud puts an extra ksh 70000 on the price of every annual car insurance
                                    premium.</p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-outline-warning"
                                        onclick="window.location.href='/comparemotorcommercial';"
                                        type="button">Get Quotation
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fa fa-heartbeat"></i>
                            </div>
                            <div class="title">
                                <a href="{{ url('/private-motor-quotation') }}">Medical Insurance</a>
                            </div>
                            <div class="content">
                                <p>If you have a partner and children, then the two of you should think about medical
                                    insurance</p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-outline-warning"
                                        onclick="window.location.href='/comparemedicalinsurance';"
                                        type="button">Get Quotation
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fa fa-ambulance"></i>
                            </div>
                            <div class="title">
                                <a href="{{ url('/private-motor-quotation') }}">Personal Accident Insurance</a>
                            </div>
                            <div class="content">
                                <p>We'll rebuild or repair your home if it's damaged or destroyed.</p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-outline-warning"
                                        onclick="window.location.href='/private-motor-quotation';"
                                        type="button">Get Quotation
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fa fa-plane"></i>
                            </div>
                            <div class="title">
                                <a href="{{ url('/private-motor-quotation') }}">Travel Policy/Insurance</a>
                            </div>
                            <div class="content">
                                <p>We can help you find the best plan for your trip and your budget.</p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-outline-warning"
                                        onclick="window.location.href='/private-motor-quotation';"
                                        type="button">Get Quotation
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fa fa-bank"></i>
                            </div>
                            <div class="title">
                                <a href="{{ url('/private-motor-quotation') }}">Business Insurance</a>
                            </div>
                            <div class="content">
                                <p>In truth, there are certain forms of insurance that are an absolute requirement for
                                    all
                                    businesses</p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-outline-warning"
                                        onclick="window.location.href='/private-motor-quotation';"
                                        type="button">Get Quotation
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fa fa-building"></i>
                            </div>
                            <div class="title">
                                <a href="{{ url('/private-motor-quotation') }}">Landlord Insurance</a>
                            </div>
                            <div class="content">
                                <p>Our rental property insurance protects your property from damages</p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-outline-warning"
                                        onclick="window.location.href='/private-motor-quotation';"
                                        type="button">Get Quotation
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END PRODUCT, STYLE 4-->

        <!-- PARTNER-->
        <div class="partner partner-layout style-1">
            <div class="container">
                <div
                    class="partner-list owl-carousel"
                    data-center="0"
                    data-col-lg="4"
                    data-col-md="2"
                    data-col-sm="1"
                    data-items="5"
                >
                    <div class="partner-item">
                        <a href="#">
                            <img alt="partner" src="{{asset('img/partner/1.png') }}"/>
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#">
                            <img alt="partner" src="{{asset('img/partner/2.png') }}"/>
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#">
                            <img alt="partner" src="{{asset('img/partner/3.png') }}"/>
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#">
                            <img alt="partner" src="{{asset('img/partner/4.png') }}"/>
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#">
                            <img alt="partner" src="{{asset('img/partner/5.png') }}"/>
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#">
                            <img alt="partner" src="{{asset('img/partner/6.png') }}"/>
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#">
                            <img alt="partner" src="{{asset('img/partner/7.png') }}"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PARTNER-->

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
                                <img alt="Cheryl Cruz" src="{{asset('img/avatar/avatar-1.jpg')}}"/>
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
                                <img alt="Linda Campbell" src="{{asset('img/avatar/avatar-2.jpg')}}"/>
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
                                <img alt="John Walker" src="{{asset('img/avatar/avatar-3.jpg')}}"/>
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
    </div>

@endsection
