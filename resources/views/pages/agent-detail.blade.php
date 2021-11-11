@extends("layouts.master")

@section('title')
    Agents-Detail
@endsection

@section('content')

    <div class="page-content agent-detail">
        <!-- HEADING PAGE-->
        <section class="heading-page heading-agent-detail"
                 style="background: url(&quot;img/backgrounds/heading-page-12.jpg&quot;) center center no-repeat;">
            <div class="content-holder">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="agent-image">
                                <img alt="agent detail" class="img-fluid" src="public/img/team/agent-1.jpg"/>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="agent-main">
                                <ul class="au-breadcrumb">
                                    <li class="au-breadcrumb-item">
                                        <a href="/home">Home</a>
                                    </li>
                                    <li class="au-breadcrumb-item active">
                                        <a href="/home">Agent</a>
                                    </li>
                                </ul>
                                <div class="heading-title">
                                    <h1>Jack Johnston</h1>
                                </div>
                                <div class="contact-group">
                                    <button class="au-btn au-btn-orange au-btn-sm">Get A Quote</button>
                                    <ul class="social-list">
                                        <li class="facebook">
                                            <a href="/home">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="/home">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="/home">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HEADING PAGE-->
        <!-- CONTACT, STYLE 4-->
        <section class="contact contact-layout style-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="main-post">
                            <div class="heading">
                                <h3>About Jack Johnston</h3>
                            </div>
                            <div class="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id lectus quis
                                    dui
                                    euismod consectetur. Pellentesque ac ante sollicitudin, tincidunt nulla in, bibendum
                                    massa. Phasellus bibendum, sem velue aliquam gravida, eros ex dapibus neque, eget
                                    fermentum dolor arcu a tortor. Integer placerat massa nec elit egestas efficitur.
                                    Praesent mi dui, sollicitudin eu facilisis et, egestas vel risus. Vivamus gravida
                                    ipsum
                                    eros, id fermentum nisi vehicula et. Vestibulum
                                    blandit commodo elit quis gravida.
                                </p>
                                <p>
                                    Pellentesque sodales, ligula vitae pulvinar tempor, lacus elit fermentum lectus, non
                                    sagittis diam ipsum a turpis. Phasellus rutrum nibh nunc, a finibus lacus ultricies
                                    ac.
                                    Fusce diam leo, dictum sit amet laoreet nec, mollis eu justo. Nulla ultricies
                                    nec ex id aliquam. Phasellus eget ex id tellus ornare feugiat. Cras eu mi sodales,
                                    egestas elit vel, ornare eros. Vivamus in dolor ut erat aliquet luctus.
                                </p>
                                <p>
                                    Etiam feugiat rhoncus laoreet. Proin vel sem in eros bibendum eleifend non in nunc.
                                    Ut
                                    mollis pellentesque nisi at sagittis. Sed scelerisque massa libero. Suspendisse
                                    vulputate ipsum in mauris porta
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-contact">
                            <div class="heading">
                                <h3>Contact</h3>
                            </div>
                            <div class="contact-list">
                                <p>
                                    <i class="fa fa-phone"></i>
                                    <span class="bold">PHONE:</span>(+1) 96 800 1238
                                </p>
                                <p>
                                    <i class="fa fa-envelope"></i>
                                    <span class="bold">Email:</span>contact@agent.com
                                </p>
                                <p>
                                    <i class="fa fa-home"></i>
                                    <span class="bold">Address:</span>290 Hermosillo St, Nairobi
                                </p>
                                <p>
                                    <i class="fa fa-clock-o"></i>
                                    <span class="bold">OFFICE HOURS:</span>
                                </p>
                                <ul class="time-list">
                                    <li>
                                        <span class="text-left">Monday</span>
                                        <span class="text-right">08:00 AM - 05:00 PM</span>
                                    </li>
                                    <li>
                                        <span class="text-left">Tuesday</span>
                                        <span class="text-right">09:00 AM - 05:00 PM</span>
                                    </li>
                                    <li>
                                        <span class="text-left">Wednesday</span>
                                        <span class="text-right">09:00 AM - 03:00 PM</span>
                                    </li>
                                    <li>
                                        <span class="text-left">Thursday</span>
                                        <span class="text-right">09:00 AM - 05:00 PM</span>
                                    </li>
                                    <li>
                                        <span class="text-left">Friday</span>
                                        <span class="text-right">10:00 AM - 04:00 PM</span>
                                    </li>
                                    <li>
                                        <span class="text-left">Saturday</span>
                                        <span class="text-right">Appointment Only</span>
                                    </li>
                                    <li>
                                        <span class="text-left">Sunday</span>
                                        <span class="text-right">Appointment Only</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT, STYLE 4-->
        <!-- PRODUCT, STYLE 3-->
        <section class="product product-layout style-2">
            <div class="container">
                <div class="heading">
                    <h3>Home, Life & Car Insurance - Get A Quote</h3>
                </div>
                <div class="lead">
                    <span>Select a product.</span>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-1 match-item">
                            <a class="image" href="resources/views/pages/insurance-details.blade.phpde.php">
                                <img alt="Car Insurance" class="img-fluid" src="public/img/product/product-1.jpg"/>
                            </a>
                            <div class="title">
                                <a href="resources/views/pages/insurance-details.blade.phpde.php">Car Insurance</a>
                            </div>
                            <div class="content">
                                <p>Insurance fraud puts an extra $70 on the price of every annual car insurance
                                    premium.</p>
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
                                <a href="resources/views/pages/services/services-detail-4.blade.php">Travel
                                    Insurance</a>
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
                                <a href="resources/views/pages/services/services-detail-5.blade.php">Business
                                    Insurance</a>
                            </div>
                            <div class="content">
                                <p>In truth, there are certain forms of insurance that are an absolute requirement for
                                    all
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
        </section>
        <!-- END PRODUCT, STYLE 3-->
        <!-- CONTACT, STYLE 2-->
        <section class="contact contact-layout style-1 style-2"
                 style="background: url(&quot;img/backgrounds/bg-contact.jpg&quot;) center no-repeat;">
            <div class="container">
                <div class="contact-block clearfix">
                    <div class="contact-form w-50 w-sm-100">
                        <div class="head-contact-form">
                            <div class="heading">
                                <h3>Contact Me</h3>
                            </div>
                        </div>
                        <form action="public/includes/contact-form.php" class="contact-form-body" method="post"
                              name="contactform">
                            <div class="contact-form-item">
                                <span class="input-title">Your Name</span>
                                <input class="contact-form-input au-form-control au-form-radius" name="name"
                                       placeholder="Ex. John Smith" type="text"/>
                            </div>
                            <div class="contact-form-item">
                                <span class="input-title">Your Phone</span>
                                <input class="contact-form-input au-form-control au-form-radius" name="phone"
                                       placeholder="Ex. 555-555-5555" type="text"/>
                            </div>
                            <div class="contact-form-item">
                                <span class="input-title">Your Email</span>
                                <input class="contact-form-input au-form-control au-form-radius" name="email"
                                       placeholder="Ex. john.smith@email.com" type="text"/>
                            </div>
                            <div class="contact-form-item">
                                <span class="input-title">Message</span>
                                <textarea class="contact-form-input au-form-control au-form-radius" name="msg"
                                          rows="4"></textarea>
                            </div>
                            <div class="btn-area">
                                <button class="au-btn au-btn-orange au-btn-md" type="submit">Get Quotations</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT, STYLE 2-->
    </div>

@endsection
