@extends("layouts.master")

@section('title')
    Insurance Product Details
@endsection

@section('content')
    <!-- HEADING PAGE-->
    <div class="heading-page heading-normal heading-project">
        <div class="container">
            <ul class="au-breadcrumb">
                <li class="au-breadcrumb-item">
                    <i class="fa fa-home"></i>
                    <a href="/home">Home</a>
                </li>
                <li class="au-breadcrumb-item">
                    <i class="fa fa-question-circle"></i>
                    <a href="/private-motor-quotation">Quotations</a>
                </li>
                <li class="au-breadcrumb-item active">
                    <a href="/compareinsurance">Quotations Results</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END HEADING PAGE-->
    <!-- END HEADING PAGE-->
    <div class="page-content services-detail-1">
        <div class="container">

            <div class="row">
                <div class="col">

                    <div class="post-paragraph p1">
                        <div class="post-heading">
                            <h3>Motor Private Quotation Results</h3>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($responseBody as $response)
                            <div class="col-md-3">
                                <div class="post-with-image">
                                    <div class="post-paragraph">
                                        <div class="post-heading">
                                            <h3>Value of Car</h3>
                                        </div>
                                        <div class="post-content">
                                            <p>{{ $response->vehicleValue }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="post-with-image">
                                    <div class="post-paragraph">
                                        <div class="post-heading">
                                            <h3>Age</h3>
                                        </div>
                                        <div class="post-content">
                                            <p>{{ $response->vehicleAge }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="post-with-image">
                                    <div class="post-paragraph">
                                        <div class="post-heading">
                                            <h3>Make | Model</h3>
                                        </div>
                                        <div class="post-content">
                                            <p>{{ $response->make }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- Quote SERVICES DERAIL 1-->
                    <div class="post-content-box">
                        <div class="row">

                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="post-with-image">
                                            <div class="post-paragraph">
                                                <div class="post-heading">
                                                    <h4>Insurance Logo</h4>
                                                </div>
                                            </div>
                                            <div class="post-image">
                                                <img alt="post services" class="img-fluid"
                                                     src="{{ asset('img/partner/3.png') }}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="post-with-image">
                                            <div class="post-paragraph">
                                                <div class="post-heading">
                                                    <h4>Basic Premium</h4>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>

                                                    <p>
                                                        <span class="bold">{{ $response->premium }}</span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="post-with-image">
                                            <div class="post-paragraph">
                                                <div class="post-heading">
                                                    <h4>Additional Covers</h4>
                                                </div>
                                            </div>
                                            @foreach ($responseBody as $response)
                                                <ul>
                                                    <li>

                                                        <p>
                                                            <span class="bold">Political Violence and Terrorism
                                                                (PVT) Minimum:</span>2500.0
                                                        </p>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="post-with-image">
                                    <div class="post-paragraph">
                                        <div class="post-heading">
                                            <h4>Limits Of Liability</h4>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>

                                            <p>
                                                <span class="bold">Windscreen & Window Glass:</span>Kshs. 30,000
                                            </p>
                                        </li>
                                        <li>

                                            <p>
                                                <span class="bold">Entertainment Unit:</span>Kshs. 30,000
                                            </p>
                                        </li>
                                        <li>

                                            <p>
                                                <span class="bold">Repair Authority:</span>Kshs. 30,000
                                            </p>
                                        </li>
                                        <li>

                                            <p>
                                                <span class="bold">Towing & Recovery Expenses:</span>Kshs. 30,000
                                            </p>
                                        </li>
                                        <li>

                                            <p>
                                                <span class="bold">Emergency Medical Expenses:</span>Kshs. 30,000
                                            </p>
                                        </li>
                                        <li>

                                            <p>
                                                <span class="bold">Third Party Property Damage:</span>Kshs.
                                                5,000,000
                                            </p>
                                        </li>
                                        <li>

                                            <p>
                                                <span class="bold">Third Party Bodily Injuries:</span>Unlimited
                                                per
                                                event
                                            </p>
                                        </li>
                                        <li>

                                            <p>
                                                <span class="bold">Passenger Legal Liability:</span>Kshs.
                                                20,000,000 per
                                                event
                                            </p>
                                        </li>
                                        <li>

                                            <p>
                                                <span class="bold">Geographical Area:</span>Kenya
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col">
                                <div class="post-with-image">
                                    <div class="post-paragraph">
                                        <div class="post-heading">
                                            <h4>Applicable Excess</h4>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>

                                            <p>
                                                <span class="bold">Own Damage/Partial Theft:</span>2.5% of Sum
                                                Insured
                                                Minimum Ksh 20,000
                                            </p>
                                        </li>
                                        <li>

                                            <p>
                                                <span class="bold">Partial Theft:</span>2.5% of Sum Insured
                                                Minimum Ksh
                                                20,000 and Maximum Ksh 100,000
                                            </p>
                                        </li>
                                        <li>

                                            <p>
                                                <span class="bold">Theft with Anti-Theft Devices:</span>10% of Sum
                                                Insured Minimum Ksh 20,000
                                            </p>
                                        </li>
                                        <li>

                                            <p>
                                                <span class="bold">Theft without Anti-Theft Devices:</span>20% of
                                                Sum
                                                Insured Minimum Ksh 20,000
                                            </p>
                                        </li>
                                        <li>

                                            <p>
                                                <span class="bold">Theft with Tracking Device:</span>2.5% of Sum
                                                Insured
                                                Minimum Ksh 20,000
                                            </p>
                                        </li>
                                        <li>

                                            <p>
                                                <span class="bold">Third Party Bodily Injury:</span>
                                            </p>
                                        </li>
                                        <li>

                                            <p>
                                                <span class="bold">Third Party Property Damage:</span>Kshs.
                                                7,500.00
                                            </p>
                                        </li>
                                        <li>

                                            <p>
                                                <span class="bold">New & Young Drivers:</span>Kshs. 5,000.00
                                                additional
                                                (Below 1 Year Experience/ Under 23 Years Old)
                                            </p>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            @endforeach
                        </div>


                    </div>

                <!--<div class="post-content-box">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="post-with-image">
                                            <div class="post-paragraph">
                                                <div class="post-heading">
                                                    <h4>Insurance Logo</h4>
                                                </div>
                                            </div>
                                            <div class="post-image">
                                                <img
                                                    alt="post services"
                                                    class="img-fluid"
                                                    src="{{ asset('img/partner/4.png') }}"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="post-with-image">
                                            <div class="post-paragraph">
                                                <div class="post-heading">
                                                    <h4>Basic Premium</h4>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>

                                                <p>
                                                        <span class="bold">33750.00</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="post-with-image">
                                            <div class="post-paragraph">
                                                <div class="post-heading">
                                                    <h4>Additional Covers</h4>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>

                                                <p>
                                                        <span
                                                            class="bold">Political Violence and Terrorism (PVT) Minimum:</span>2500.0
                                                    </p>
                                                </li>
                                                <li>

                                                <p>
                                                        <span class="bold">Excess Protector Minimum:</span>5000.0</p>
                                                </li>
                                                <li>

                                                <p>
                                                        <span
                                                            class="bold">Political Violence and Terrorism (PVT) Rate:</span>0.25
                                                    </p>
                                                </li>
                                                <li>

                                                <p>
                                                        <span class="bold">Excess Protector Rate:</span>0.25</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="post-with-image">
                                    <div class="post-paragraph">
                                        <div class="post-heading">
                                            <h4>Limits Of Liability</h4>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>

                                        <p>
                                                <span class="bold">Windscreen & Window Glass:</span>Kshs. 30,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Entertainment Unit:</span>Kshs. 30,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Repair Authority:</span>Kshs. 30,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Towing & Recovery Expenses:</span>Kshs. 30,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Emergency Medical Expenses:</span>Kshs. 30,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Third Party Property Damage:</span>Kshs. 5,000,000
                                            </p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Third Party Bodily Injuries:</span>Unlimited per
                                                event
                                            </p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Passenger Legal Liability:</span>Kshs. 20,000,000 per
                                                event</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Geographical Area:</span>Kenya</p>
                                        </li>

                                    </ul>

                                </div>
                            </div>

                            <div class="col">
                                <div class="post-with-image">
                                    <div class="post-paragraph">
                                        <div class="post-heading">
                                            <h4>Applicable Excess</h4>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>

                                        <p>
                                                <span class="bold">Own Damage/Partial Theft:</span>2.5% of Sum Insured
                                                Minimum Ksh 20,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Partial Theft:</span>2.5% of Sum Insured Minimum Ksh
                                                20,000 and Maximum Ksh 100,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Theft with Anti-Theft Devices:</span>10% of Sum
                                                Insured Minimum Ksh 20,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Theft without Anti-Theft Devices:</span>20% of Sum
                                                Insured Minimum Ksh 20,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Theft with Tracking Device:</span>2.5% of Sum Insured
                                                Minimum Ksh 20,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Third Party Bodily Injury:</span></p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Third Party Property Damage:</span>Kshs. 7,500.00
                                            </p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">New & Young Drivers:</span>Kshs. 5,000.00 additional
                                                (Below 1 Year Experience/ Under 23 Years Old)</p>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="post-content-box">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="post-with-image">
                                            <div class="post-paragraph">
                                                <div class="post-heading">
                                                    <h4>Insurance Logo</h4>
                                                </div>
                                            </div>
                                            <div class="post-image">
                                                <img
                                                    alt="post services"
                                                    class="img-fluid"
                                                    src="{{ asset('img/partner/5.png') }}"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="post-with-image">
                                            <div class="post-paragraph">
                                                <div class="post-heading">
                                                    <h4>Basic Premium</h4>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>

                                                <p>
                                                        <span class="bold">33750.00</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="post-with-image">
                                            <div class="post-paragraph">
                                                <div class="post-heading">
                                                    <h4>Additional Covers</h4>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>

                                                <p>
                                                        <span
                                                            class="bold">Political Violence and Terrorism (PVT) Minimum:</span>2500.0
                                                    </p>
                                                </li>
                                                <li>

                                                <p>
                                                        <span class="bold">Excess Protector Minimum:</span>5000.0</p>
                                                </li>
                                                <li>

                                                <p>
                                                        <span
                                                            class="bold">Political Violence and Terrorism (PVT) Rate:</span>0.25
                                                    </p>
                                                </li>
                                                <li>

                                                <p>
                                                        <span class="bold">Excess Protector Rate:</span>0.25</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="post-with-image">
                                    <div class="post-paragraph">
                                        <div class="post-heading">
                                            <h4>Limits Of Liability</h4>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>

                                        <p>
                                                <span class="bold">Windscreen & Window Glass:</span>Kshs. 30,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Entertainment Unit:</span>Kshs. 30,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Repair Authority:</span>Kshs. 30,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Towing & Recovery Expenses:</span>Kshs. 30,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Emergency Medical Expenses:</span>Kshs. 30,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Third Party Property Damage:</span>Kshs. 5,000,000
                                            </p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Third Party Bodily Injuries:</span>Unlimited per
                                                event
                                            </p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Passenger Legal Liability:</span>Kshs. 20,000,000 per
                                                event</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Geographical Area:</span>Kenya</p>
                                        </li>

                                    </ul>

                                </div>
                            </div>

                            <div class="col">
                                <div class="post-with-image">
                                    <div class="post-paragraph">
                                        <div class="post-heading">
                                            <h4>Applicable Excess</h4>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>

                                        <p>
                                                <span class="bold">Own Damage/Partial Theft:</span>2.5% of Sum Insured
                                                Minimum Ksh 20,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Partial Theft:</span>2.5% of Sum Insured Minimum Ksh
                                                20,000 and Maximum Ksh 100,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Theft with Anti-Theft Devices:</span>10% of Sum
                                                Insured Minimum Ksh 20,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Theft without Anti-Theft Devices:</span>20% of Sum
                                                Insured Minimum Ksh 20,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Theft with Tracking Device:</span>2.5% of Sum Insured
                                                Minimum Ksh 20,000</p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Third Party Bodily Injury:</span></p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">Third Party Property Damage:</span>Kshs. 7,500.00
                                            </p>
                                        </li>
                                        <li>

                                        <p>
                                                <span class="bold">New & Young Drivers:</span>Kshs. 5,000.00 additional
                                                (Below 1 Year Experience/ Under 23 Years Old)</p>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>


                    </div>-->

                    <!-- END POST SERVICES DERAIL 1-->
                </div>
            </div>

        </div>
        <!--Pagination-->
        <div class="container">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--Pagination-->
    </div>


@endsection
