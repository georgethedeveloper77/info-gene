@extends("layouts.master")

@section("title")
    Contact
@endsection

@section("content")

    <div class="page-content contact">
        <!-- HEADING PAGE-->
        <div class="heading-page heading-normal heading-project">
            <div class="container">
                <ul class="au-breadcrumb">
                    <li class="au-breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="/home">Home</a>
                    </li>
                    <li class="au-breadcrumb-item active">
                        <a href="/home">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END HEADING PAGE-->
        <!-- Section Google Map-->
        <section class="contact contact-layout-5">

            <div class="contact-wrapper">
                <div class="container">
                    <div class="contact-inner">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="contact-info">
                                    <div class="heading">
                                        <h3>Contact Info</h3>
                                    </div>
                                    <div class="info-accordion">
                                        <div data-accordion-group="data-accordion-group">
                                            <div class="accordion open" data-accordion="data-accordion">
                                                <div class="accordion-title" data-control="data-control">
                                                    <i class="fa fa-trophy"></i>
                                                    <h4>Finance the best choice for your business</h4>
                                                </div>
                                                <div class="accordion-content" data-content="data-content">
                                                    <div class="textbox-info">
                                                        <p>
                                                            Fusce ornare mi vel risus porttitor dignissim. Nunc eget
                                                            risus
                                                            at ipsum blandit ornare vel sed velit. Proin gravida arcu
                                                            nisl,
                                                            a dignissim mauris placerat id. Vivamus interdum urna at
                                                            sapien
                                                            varius elementum. Suspendisse ut mi felis et interdum libero
                                                            lacinia vel. Aenean elementum odio ut lorem cursus, eu
                                                            auctor
                                                            magna pellentesque.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion" data-accordion="data-accordion">
                                                <div class="accordion-title" data-control="data-control">
                                                    <i class="fa fa-map-marker"></i>
                                                    <h4>Contacts and location</h4>
                                                </div>
                                                <div class="accordion-content" data-content="data-content">
                                                    <div class="wpb_text_column wpb_content_element">
                                                        <div class="wpb_wrapper">
                                                            <dl class="dl-horizontal">
                                                                <dt>Location</dt>
                                                                <dd>
                                                                    <i class="fa fa-map-marker"></i>8th floor, 379
                                                                    Hudson
                                                                    St, Nairobi
                                                                </dd>
                                                                <dt>Administration Phone Number</dt>
                                                                <dd>
                                                                    <i class="fa fa-phone"></i>(+1) 96 716 6879
                                                                </dd>
                                                                <dt>FREE Hotline</dt>
                                                                <dd>
                                                                    <i class="fa fa-phone"></i>(+84) 946 716 4545
                                                                </dd>
                                                                <dt>E-mail</dt>
                                                                <dd>
                                                                    <i class="fa fa-envelope-o"></i>contact@finance.com
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion" data-accordion="data-accordion">
                                                <div class="accordion-title" data-control="data-control">
                                                    <i class="fa fa-mobile"></i>
                                                    <h4>Financial advisors in touch</h4>
                                                </div>
                                                <div class="accordion-content" data-content="data-content">
                                                    <div class="wpb_text_column wpb_content_element">
                                                        <div class="wpb_wrapper">
                                                            <dl class="dl-horizontal">
                                                                <dt>Financial Analyst</dt>
                                                                <dd>
                                                                    <i class="fa fa-phone"></i>(+1) 96 734 6339
                                                                </dd>
                                                                <dt>Lawyer</dt>
                                                                <dd>
                                                                    <i class="fa fa-phone"></i>(+1) 96 716 6879
                                                                </dd>
                                                                <dt>Personal Financial Advisor</dt>
                                                                <dd>
                                                                    <i class="fa fa-phone"></i>(+1) 96 716 6879
                                                                </dd>
                                                                <dt>Investments Expert</dt>
                                                                <dd>
                                                                    <i class="fa fa-phone"></i>(+84) 946 726 4628
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion" data-accordion="data-accordion">
                                                <div class="accordion-title" data-control="data-control">
                                                    <i class="fa fa-twitter"></i>
                                                    <h4>Finance in social networks</h4>
                                                </div>
                                                <div class="accordion-content" data-content="data-content">
                                                    <div class="socials-list">
                                                        <p>Join us in social networks</p>
                                                        <ul class="social social-dark social-bg-dark">
                                                            <li class="facebook">
                                                                <a href="http://facebook.com">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="twitter">
                                                                <a href="http://twitter.com">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="google-plus">
                                                                <a href="http://plus.google.com">
                                                                    <i class="fa fa-google-plus"></i>
                                                                </a>
                                                            </li>
                                                            <li class="youtube">
                                                                <a href="http://youtube.com">
                                                                    <i class="fa fa-youtube-play"></i>
                                                                </a>
                                                            </li>
                                                            <li class="linkedin">
                                                                <a href="http://linkedin.com">
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
                            </div>
                            <div class="col-md-5">
                                <div class="contact-form">
                                    <form action="public/includes/contact-form.php" class="contact-form" method="post"
                                          name="contactform">
                                        <div class="heading">
                                            <h3>Send Us a Message</h3>
                                        </div>
                                        <div class="contact-input-group">
                                            <div class="input">
                                                <input name="name" placeholder="Your Name" type="text"/>
                                            </div>
                                            <div class="input">
                                                <input name="email" placeholder="Your Email" type="text"/>
                                            </div>
                                            <div class="input">
                                                <input name="phone" placeholder="Phone Number" type="text"/>
                                            </div>
                                        </div>
                                        <div class="text-area">
                                            <textarea name="msg" placeholder="Your Messages"></textarea>
                                        </div>
                                        <div class="action-group">
                                            <button class="au-btn au-btn-orange au-btn-sm" type="submit">Send EMail
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact_layout_8">
            <div class="contact-wrapper">
                <div class="container">

                    <div class="contact-map">
                        <h3 class="text-cap">Find Us On Google</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="sidebar-left sidebar-control-map">
                                    <div id="controls"></div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="google-map" id="google_map" style="width:100%;height:320px;"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Section-->
    </div>

@endsection
