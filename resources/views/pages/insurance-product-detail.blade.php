@extends("layouts.master")

@section("title")
    Insurance Product Details
@endsection

@section("content")

    <div class="page-content projects-detail-page">
        <!-- HEADING PAGE-->
        <div class="heading-page heading-normal heading-project">
            <div class="container">
                <ul class="au-breadcrumb">
                    <li class="au-breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="/home">Home</a>
                    </li>
                    <li class="au-breadcrumb-item">
                        <a href="/home">Insurance Product</a>
                    </li>
                    <li class="au-breadcrumb-item active">
                        <a href="/home">Business Insurance</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END HEADING PAGE-->
        <!-- PROJECT DETAIL-->
        <section class="projects-detail">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="projects-detail-detail">
                            <div class="projects-detail-heading">
                                <h3>Project Details</h3>
                            </div>
                            <ul>
                                <li>Client: Au Company</li>
                                <li>Location: Central Street, San Francisco</li>
                                <li>Year Completed: 2017</li>
                                <li>Value: $350,000</li>
                                <li>Agent: Sean Rogers & Rachel Peters</li>
                            </ul>
                        </div>
                        <div class="projects-detail-plan">
                            <div class="projects-detail-heading">
                                <h3>Financial plan</h3>
                            </div>
                            <div class="projects-detail-content">
                                <p>Curabitur dictum viverra urna. Nam ullamcorper egestas lacinia. Fusce fermentum velit
                                    non
                                    velit malesuada, vel aliquam leo viverra. Etiam id justo mattis, bibendum eros non,
                                    finibus
                                    diam. Suspendisse suscipit, arcu ac rutrum
                                    pellentesque, nunc sapien molestie nisi, id pellentesque odio diam quis justo. Proin
                                    rutrum
                                    convallis mauris. Morbi vulputate bibendum velit id tincidunt. Fusce auctor aliquam
                                    nunc
                                    in
                                    tristique. Nulla luctus dictum enim
                                    ut pulvinar.</p>
                                <p>Sed id fermentum lectus, vel sollicitudin ipsum. Nulla porttitor, dolor ut sagittis
                                    lacinia,
                                    nulla mauris elementum leo, at viverra massa sapien id diam. Phasellus et ornare
                                    sem.
                                    Integer dictum imperdiet luctus. Sed luctus
                                    vel nisl eu convallis. Integer gravida enim velit, ultricies sodales erat imperdiet
                                    ac.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="project-detail-imageMain">
                            <img alt="project" src="{{asset('img/projects/project-detail-big-1.jpg')}}"/>
                        </div>
                        <div class="project-detail-thumb">
                            <div class="thumb-item">
                                <img alt="project" src="{{asset('img/projects/project-detail-thumb-1.jpg')}}"/>
                            </div>
                            <div class="thumb-item">
                                <img alt="project" src="{{asset('img/projects/project-detail-thumb-1.jpg')}}"/>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END PROJECT DETAIL-->
        <!-- CALL TO ACTION, STYLE 4-->
        <section class="call-to-action call-to-action-layout style-2 style-4">
            <div class="container">
                <div class="call-to-action-block">
                    <div class="call-to-action-content">
                        <h4>Find Information And Get Free Insurance Quotes.</h4>
                    </div>
                    <div class="call-to-action-select fancy-select-wrapper">
                        <button class="au-btn au-btn-orange" onclick="window.location.href='/compare-insurance';">Get a
                            quote
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CALL TO ACTION, STYLE 4-->
    </div>

@endsection
