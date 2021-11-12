@extends("layouts.master")

@section("title")
    Insurance Details
@endsection

@section("content")
    <!-- HEADING PAGE-->
    <div class="heading-page heading-normal heading-project">
        <div class="container">
            <ul class="au-breadcrumb">
                <li class="au-breadcrumb-item">
                    <i class="fa fa-home"></i>
                    <a href="/home">Home</a>
                </li>
                <li class="au-breadcrumb-item active">
                    <a href="/compare-insurance">Compare Insurance</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END HEADING PAGE-->
    <!-- END HEADING PAGE-->
    <div class="page-content services-detail-1">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <!-- SLIDER, STYLE 1-->
                    <div class="slider slider-medium-layout style-1">
                        <div class="slider-item">
                            <div class="owl-carousel" data-dots=".slider-dots">
                                <div class="owl-item">
                                    <div class="slider-image">
                                        <img alt="Compare quotes from over 250 insurance brands" class="img-fluid"
                                             src="{{asset('img/slider/slider-medium-1.jpg')}}"/>
                                    </div>
                                    <div class="slider-text-holder animated">
                                        <div class="slider-title">
                                            <a>Compare quotes from over 250 insurance brands</a>
                                        </div>
                                        <div class="slider-btn">
                                            <button
                                                class="au-btn au-btn-orange au-btn-sm"
                                                onclick="window.location.href='/compare-insurance';">Get a quote
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="slider-image">
                                        <img alt="Compare quotes from over 250 insurance brands" class="img-fluid"
                                             src="{{asset('img/slider/slider-medium-2.jpg')}}"/>
                                    </div>
                                    <div class="slider-text-holder animated">
                                        <div class="slider-title">
                                            <a>Compare quotes from over 250 insurance brands</a>
                                        </div>
                                        <div class="slider-btn">
                                            <button class="au-btn au-btn-orange au-btn-sm"
                                                    onclick="window.location.href='/compare-insurance';">Get a quote
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="slider-image">
                                        <img alt="Compare quotes from over 250 insurance brands" class="img-fluid"
                                             src="{{asset('img/slider/slider-medium-3.jpg')}}"/>
                                    </div>
                                    <div class="slider-text-holder animated">
                                        <div class="slider-title">
                                            <a>Compare quotes from over 250 insurance brands</a>
                                        </div>
                                        <div class="slider-btn">
                                            <button class="au-btn au-btn-orange au-btn-sm"
                                                    onclick="window.location.href='/compare-insurance';">Get a quote
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="slider-dots owl-dots">
                                <li class="owl-dot active"></li>
                                <li class="owl-dot"></li>
                                <li class="owl-dot"></li>
                            </ul>
                            <div class="slider-arrow">
                                <div class="prev">
                                    <i class="fa fa-chevron-left"></i>
                                </div>
                                <div class="next">
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SLIDER, STYLE 1-->
                    <!-- POST SERVICES DERAIL 1-->
                    <section class="post-services post-services-detail-1">
                        <div class="post-paragraph p1">
                            <div class="post-heading">
                                <h3>Car Insurance Prepares You for the Unexpected</h3>
                            </div>
                            <div class="post-content">
                                <p>
                                    Nulla commodo iaculis ligula, ac dapibus quam ornare ut. Praesent ac hendrerit sem,
                                    et
                                    tempus sem. Donec sit amet elit a felis tristique eleifend. Aliquam erat volutpat.
                                    Cras
                                    metus ipsum, tincidunt in bibendum vitae, fringilla ac ipsum. Sed at eros quis
                                    mi pulvinar lacinia eget sed ex. Vestibulum eget ipsum porttitor, cursus urna nec,
                                    ultrices enim. Sed eget dignissim nulla, non facilisis augue. Fusce nec dictum nunc.
                                    Maecenas hendrerit tempus magna eu ultricies. Cum
                                    sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                    Maecenas eros ligula, porta non leo porttitor, laoreet mollis nisl.
                                </p>
                            </div>
                        </div>
                        <div class="post-paragraph p2">
                            <div class="post-heading">
                                <h3>The Cost of Car Accidents in the U.S.</h3>
                            </div>
                            <div class="post-content">
                                <p>
                                    Sed vel bibendum urna, in blandit nunc. Praesent eget mauris auctor, efficitur justo
                                    sed, consectetur dolor. Cras aliquet mi vitae convallis luctus. Aenean imperdiet mi
                                    et
                                    eleifend efficitur.
                                </p>
                            </div>
                        </div>
                        <div class="post-table">
                            <table class="table table-bordered table-responsive">
                                <tbody>
                                <tr>
                                    <td>Automobile traffic accidents</td>
                                    <td>Cost $299.5 billion annually in the U.S.</td>
                                </tr>
                                <tr>
                                    <td>Crashes</td>
                                    <td>Cost $61,600 on average</td>
                                </tr>
                                <tr>
                                    <td>A critically injured person</td>
                                    <td>Can accumulate $1 million in medical expenses</td>
                                </tr>
                                <tr>
                                    <td class="tblock" colspan="2">
                                        <div class="tblock-container">
                                            <span>Download brochures:</span>
                                            <div class="post-btn">
                                                <button class="au-btn au-btn-blue au-btn-sm">
                                                    <i class="fa fa-file-pdf-o"></i>DownloadFile.pdf
                                                </button>
                                                <button class="au-btn au-btn-blue au-btn-sm">
                                                    <i class="fa fa-file-word-o"></i>DownloadFile.doc
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="post-with-image">
                                    <div class="post-paragraph">
                                        <div class="post-heading">
                                            <h3>How to Find Fast, Accurate Insurance Quotes</h3>
                                        </div>
                                        <div class="post-content">
                                            <p>
                                                Sed vel bibendum urna, in blandit nunc. Praesent eget mauris auctor,
                                                efficitur justo sed, consectetur dolor. Cras aliquet mi vitae convallis
                                                luctus.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="post-image">
                                        <img alt="post services" class="img-fluid"
                                             src="{{asset('img/post/post-services-2.jpg')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-with-image">
                                    <div class="post-paragraph">
                                        <div class="post-heading">
                                            <h3>Review Options from Multiple Auto Insurance Companies</h3>
                                        </div>
                                        <div class="post-content">
                                            <p>
                                                Sed vel bibendum urna, in blandit nunc. Praesent eget mauris auctor,
                                                efficitur justo sed, consectetur dolor. Cras aliquet mi vitae convallis
                                                luctus.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="post-image">
                                        <img alt="post services" class="img-fluid"
                                             src="{{asset('img/post/post-services-1.jpg')}}"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-paragraph p3">
                            <div class="post-heading">
                                <h3>What Does Car Insurance Cover?</h3>
                            </div>
                            <div class="post-content">
                                <p>
                                    Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit
                                    ornare
                                    vel sed velit . Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus
                                    interdum urna at sapien varius elementum. Suspendisse ut mi felis et interdum libero
                                    lacinia vel. Aenean elementum odio ut lorem cursus, eu auctor magna pellentesque.
                                </p>
                            </div>
                        </div>
                        <div class="post-content-box">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            <p>
                                                <span class="bold">Liability Insurance:</span>Donec cursus risus ut
                                                neque
                                                rhoncus ultrices at quis lacus convallis.</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            <p>
                                                <span class="bold">Collision:</span>Donec cursus risus ut neque rhoncus
                                                ultrices at quis lacus augue luctus convallis.</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            <p>
                                                <span class="bold">Comprehensive:</span>Donec cursus risus ut neque
                                                rhoncus
                                                ultrices at quis lacus convallis.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            <p>
                                                <span class="bold">Medical Payments:</span>Donec cursus risus ut neque
                                                rhoncus ultrices at quis lacus convallis.</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            <p>
                                                <span class="bold">Rental Reimbursement:</span>Donec cursus risus ut
                                                neque
                                                rhoncus ultrices at quis lacus convallis.</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            <p>
                                                <span class="bold">Towing and Roadside Service:</span>Donec cursus risus
                                                ut
                                                neque rhoncus ultrices at quis lacus convallis.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- TESTINMONIAL, STYLE 3-->
                        <section class="testinmonials testinmonials-layout style-3">
                            <div class="heading">
                                <h3>What Our Customers Say</h3>
                            </div>
                            <div class="testinmonial-wrapper owl-carousel" data-dots=".testinmonial-control">
                                <!-- testinmonials item-->
                                <div class="testinmonial-item style-1 style-3">
                                    <div class="content">
                                        <p>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et
                                            hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis
                                            sit
                                            amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit
                                            amet lacinia massa</p>
                                    </div>
                                    <div class="personal">
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
                                <div class="testinmonial-item style-1 style-3">
                                    <div class="content">
                                        <p>Vestibulum ultricies cursus feugiat. Vestibulum scelerisque posuere neque.
                                            Phasellus tortor lacus, tincidunt nec varius ut, tempor eget massa. Aenean
                                            non
                                            lorem ex. Phasellus dapibus eu justo dapibus commodo.</p>
                                    </div>
                                    <div class="personal">
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
                                <div class="testinmonial-item style-1 style-3">
                                    <div class="content">
                                        <p>Etiam et purus in dui dignissim dictum quis efficitur libero. Sed fringilla,
                                            augue vel sollicitudin bibendum, ligula elit rhoncus lorem, a egestas diam
                                            augue
                                            sed enim. In eget luctus ante. Mauris ut cursus nunc,
                                            vitae hendrerit</p>
                                    </div>
                                    <div class="personal">
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
                            <ul class="testinmonial-control owl-dots">
                                <li class="owl-dot"></li>
                                <li class="owl-dot"></li>
                                <li class="owl-dot"></li>
                            </ul>
                        </section>
                        <!-- END TESTINMONIAL, STYLE 3-->
                    </section>
                    <!-- END POST SERVICES DERAIL 1-->
                </div>

                <div class="col-3">
                    <!-- SIDEBAR, STYLE 1-->
                    <div class="sidebar sidebar-style-1">
                        <ul class="sidebar-container">
                            <li class="sidebar-item active">
                                <a href="/insurance-details">
                                    <i class="fa fa-car"></i>
                                    <span>Car Insurance</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/insurance-details">
                                    <i class="fa fa-home"></i>
                                    <span>Home Insurance</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/insurance-details">
                                    <i class="fa fa-heart"></i>
                                    <span>Life Insurance</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/insurance-details">
                                    <i class="fa fa-plane"></i>
                                    <span>Travel Insurance</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/insurance-details">
                                    <i class="fa fa-bank"></i>
                                    <span>Business Insurance</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/insurance-details">
                                    <i class="fa fa-building"></i>
                                    <span>Landlord Insurance</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/insurance-details">
                                    <i class="fa fa-umbrella"></i>
                                    <span>Umbrella Insurance</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/insurance-details">
                                    <i class="fa fa-ship"></i>
                                    <span>Boat Insurance</span>
                                </a>
                            </li>
                        </ul>
                        <div class="banner">
                            <img alt="banner" class="img-fluid" src="{{asset('img/banner/banner-1.jpg')}}"/>
                        </div>
                    </div>
                    <!-- END SIDEBAR, STYLE 1-->
                </div>
            </div>
        </div>
    </div>

@endsection
