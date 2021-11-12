@extends("layouts.master")

@section('title')
    Insurance Product
@endsection

@section('content')
    <div class="page-content project-list-page">
        <!-- HEADING PAGE-->
        <div class="heading-page heading-normal heading-project">
            <div class="container">
                <ul class="au-breadcrumb">
                    <li class="au-breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="/home">Home</a>
                    </li>
                    <li class="au-breadcrumb-item active">
                        <a href="/insurance-products">Our Products</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END HEADING PAGE-->
        <!-- PROJECT LIST-->
        <section class="projects-layout">
            <div class="container">
                <div class="project-subjects">
                    <ul class="filter-button-group">
                        <li class="is-checked button"
                            data-filter=".Financial, .Investments, .Taxes, .Insurance, .Retirement">
                            <h4>All</h4>
                        </li>
                        <li class="button" data-filter=".Financial">
                            <h4>Financial</h4>
                        </li>
                        <li class="button" data-filter=".Investments">
                            <h4>Investments</h4>
                        </li>
                        <li class="button" data-filter=".Taxes">
                            <h4>Medical</h4>
                        </li>
                        <li class="button" data-filter=".Insurance">
                            <h4>Insurance</h4>
                        </li>
                        <li class="button" data-filter=".Retirement">
                            <h4>Retirement</h4>
                        </li>
                    </ul>
                </div>

                <div class="row isotope-grid">
                    <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Retirement">
                        <div class="project-item match-item">
                            <div class="project-item-img">
                                <img alt="project-1.jpg" class="img-fluid" src="{{ asset('img/projects/1.png') }}"/>
                            </div>
                            <div class="project-item-title">
                                <a href="/insurance-product-details">2018 Retirement Plan</a>
                            </div>
                            <div class="project-item-subjects">
                                <p>Retirement</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Insurance">
                        <div class="project-item match-item">
                            <div class="project-item-img">
                                <img alt="project-2.jpg" class="img-fluid" src="{{ asset('img/projects/2.png') }}"/>
                            </div>
                            <div class="project-item-title">
                                <a href="/insurance-product-details">Insurance Life</a>
                            </div>
                            <div class="project-item-subjects">
                                <p>Insurance</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Financial">
                        <div class="project-item match-item">
                            <div class="project-item-img">
                                <img alt="project-3.jpg" class="img-fluid" src="{{ asset('img/projects/3.png') }}"/>
                            </div>
                            <div class="project-item-title">
                                <a href="/insurance-product-details">Financial Report</a>
                            </div>
                            <div class="project-item-subjects">
                                <p>Financial</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Taxes">
                        <div class="project-item match-item">
                            <div class="project-item-img">
                                <img alt="project-4.jpg" class="img-fluid" src="{{ asset('img/projects/4.png') }}"/>
                            </div>
                            <div class="project-item-title">
                                <a href="/insurance-product-details">IEM Financial
                                    Statements</a>
                            </div>
                            <div class="project-item-subjects">
                                <p>Taxes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Insurance">
                        <div class="project-item match-item">
                            <div class="project-item-img">
                                <img alt="project-5.jpg" class="img-fluid" src="{{ asset('img/projects/5.png') }}"/>
                            </div>
                            <div class="project-item-title">
                                <a href="/insurance-product-details">MO Insurance Pack 2</a>
                            </div>
                            <div class="project-item-subjects">
                                <p>Insurance</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Financial">
                        <div class="project-item match-item">
                            <div class="project-item-img">
                                <img alt="project-6.jpg" class="img-fluid" src="{{ asset('img/projects/6.png') }}"/>
                            </div>
                            <div class="project-item-title">
                                <a href="/insurance-product-details">Business Loan</a>
                            </div>
                            <div class="project-item-subjects">
                                <p>Financial</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Investments">
                        <div class="project-item match-item">
                            <div class="project-item-img">
                                <img alt="project-7.jpg" class="img-fluid" src="{{ asset('img/projects/7.png') }}"/>
                            </div>
                            <div class="project-item-title">
                                <a href="/insurance-product-details">Enterprise Loan</a>
                            </div>
                            <div class="project-item-subjects">
                                <p>Investments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Financial">
                        <div class="project-item match-item">
                            <div class="project-item-img">
                                <img alt="project-8.jpg" class="img-fluid" src="{{ asset('img/projects/8.png') }}"/>
                            </div>
                            <div class="project-item-title">
                                <a href="/insurance-product-details">Money Market</a>
                            </div>
                            <div class="project-item-subjects">
                                <p>Financial</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Insurance">
                        <div class="project-item match-item">
                            <div class="project-item-img">
                                <img alt="project-9.jpg" class="img-fluid" src="{{ asset('img/projects/9.png') }}"/>
                            </div>
                            <div class="project-item-title">
                                <a href="/insurance-product-details">MO Insurance</a>
                            </div>
                            <div class="project-item-subjects">
                                <p>Insurance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END PROJECT LIST-->
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
