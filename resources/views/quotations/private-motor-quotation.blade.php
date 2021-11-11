@extends("layouts.master")

@section('title')
    Private Motor Quotation Form
@endsection

@section('content')

    <div class="page-content get-a-quote get-a-quote-3">
        <!-- HEADING PAGE-->
        <div class="heading-page heading-normal heading-project">
            <div class="container">
                <ul class="au-breadcrumb">
                    <li class="au-breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="/home">Home</a>
                    </li>
                    <li class="au-breadcrumb-item">
                        <i aria-hidden="true" class="fa fa-university"></i>
                        <a href="/compareinsurance">Compare Insurance</a>
                    </li>
                    <li class="au-breadcrumb-item active">
                        <a href="/compareinsurance">Quotation</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END HEADING PAGE-->
        <!-- Success message -->
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="quote-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- GET A QUOTE, STYLE 3-->
                        <section class="quote-form quote-form-style-3">
                            <div class="head-section">
                                <h4>Step 1 of 2</h4>
                            </div>

                            <form method="post" action="{{ route('private-motor-quotations-results') }}"
                                  class="row g-3 needs-validation" novalidate>
                                @csrf

                                <div class="quote-form-container">
                                    <div class="quote-form-heading">
                                        <h4>Start your Private Motor Quote below.</h4>
                                    </div>

                                    <div class="col-md-12 position-relative">
                                        <label for="validationTooltip03" class="form-label text-white">Vehicle
                                            Value</label>
                                        {{-- @foreach ($responseBody as $response)--}}
                                        <input
                                            {{-- value="{{ $response->vehicleValue }}"--}}
                                            value="{{ csrf_token() }}"
                                            type="number" class="form-control" id="vehicleValue" required>
                                        {{-- @endforeach--}}
                                        <div class="invalid-tooltip">
                                            Please provide a valid Car Value.
                                        </div>
                                    </div>

                                    <div class="col-md-12 position-relative">
                                        <label for="validationTooltip04" class="form-label text-white">Make |
                                            Model</label>
                                        <select class="form-select dropdown" id="make" required>
                                            <option selected disabled value="">Choose a Model</option>
                                            @foreach ($responseBody as $response)
                                                <option value="{{ $response->id }}">{{ $response->make }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-tooltip">
                                            Please select a valid Model.
                                        </div>

                                    </div>

                                    <div class="col-md-12 position-relative">
                                        <label for="validationTooltip04" class="form-label text-white">Year</label>
                                        <select class="form-select" id="yom" required>
                                            <option selected disabled value="">Year of Manufacture</option>
                                            <option>...</option>
                                        </select>
                                        <div class="invalid-tooltip">
                                            Please select a valid Year of Manufacture.
                                        </div>
                                    </div>
                                    <div class="privateSubmit">
                                        <button class="btn-warning btn" type="submit">Submit form</button>
                                    </div>
                                </div>

                                {{ method_field('POST') }}


                            </form>

                            <script>
                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                (function () {
                                    'use strict';

                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    var forms = document.querySelectorAll('.needs-validation');

                                    // Loop over them and prevent submission
                                    Array.prototype.slice.call(forms)
                                        .forEach(function (form) {
                                            form.addEventListener('submit', function (event) {
                                                if (!form.checkValidity()) {
                                                    event.preventDefault();
                                                    event.stopPropagation()
                                                }

                                                form.classList.add('was-validated')
                                            }, false)
                                        })
                                })()
                            </script>

                            {{--<form method="post" action="{{ route('private-motor-quotations-results') }}">
                                @csrf

                                <div class="quote-form-container">
                                    <div class="quote-form-heading">
                                        <h4>Start your Motor Quote below.</h4>
                                    </div>
                                    <div class="quote-form-item">


                                        <div class="quote-form-label">
                                            <span>Vehicle Value</span>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input id="vehicleValue"
                                                placeholder="xxxxxx" value=""
                                                   aria-describedby="inputGroup-sizing-default"
                                                   aria-label="Sizing example input" class="form-control" type="text">
                                        </div>

                                        <div class="quote-form-label">
                                            <span>Make | Model</span>
                                        </div>
                                        <div class="input-group mb-3 ">

                                            <select class="form-select dropdown" name=""
                                                    id="make">
                                                <option hidden>Choose a Model</option>
                                                @foreach ($responseBody as $response)
                                                <option value="{{ $response->id }}">{{ $response->make }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="quote-form-label">
                                            <span>Year Of Manufacture</span>
                                        </div>
                                        <div class="input-group date dropdown">
                                            <select aria-label="Example select with button addon" class="form-select"
                                                    id="year">
                                                <option selected>Year</option>
                                                <option value="1">2021</option>
                                                <option value="2">2020</option>
                                                <option value="3">2019</option>
                                                <option value="4">2018</option>
                                                <option value="5">2017</option>
                                                <option value="6">2016</option>
                                                <option value="7">2015</option>
                                                <option value="8">2014</option>
                                                <option value="8">2013</option>
                                                <option value="8">2012</option>
                                                <option value="8">2011</option>
                                                <option value="8">2010</option>
                                                <option value="8">2009</option>
                                                <option value="8">2008</option>
                                                <option value="8">2007</option>
                                                <option value="8">2006</option>
                                                <option value="8">2005</option>
                                                <option value="8">2004</option>
                                                <option value="8">2003</option>
                                            </select>
                                        </div>


                                    </div>

                                    <input type="submit" name="send" value="Submit" class="au-btn au-btn-orange au-btn-md">
                                    <!--<button
                                                                class="au-btn au-btn-orange au-btn-md"
                                                                onclick="window.location.href='/private-motor-quotations-results';">Get Quotations
                                                            </button>-->


                                </div>



                            </form>--}}


                        </section>
                        <!-- END GET A QUOTE, STYLE 1-->
                    </div>
                </div>
            </div>
        </div>

        <div class="content-box-container">
            <div class="container">
                <!-- CONTENT BOX, STYLE 2-->
                <section class="content-box content-box-layout style-1">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="content-box-item style-2 match-item">
                                <div class="content-holder">
                                    <div class="content-box-icon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="content-box-main">
                                        <div class="title">
                                            <h4>Simple</h4>
                                        </div>
                                        <div class="content">
                                            <p>Cras ut nulla faucibus, finibus mi id, pellentesque nunc</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="content-box-item style-2 match-item">
                                <div class="content-holder">
                                    <div class="content-box-icon">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                    <div class="content-box-main">
                                        <div class="title">
                                            <h4>Safe</h4>
                                        </div>
                                        <div class="content">
                                            <p>Fusce at accumsan justo. Nulla lacus efficitur vel aliquam sed, fringilla
                                                sit
                                                amet neque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="content-box-item style-2 match-item">
                                <div class="content-holder">
                                    <div class="content-box-icon">
                                        <i class="fa fa-cogs"></i>
                                    </div>
                                    <div class="content-box-main">
                                        <div class="title">
                                            <h4>Convenient</h4>
                                        </div>
                                        <div class="content">
                                            <p>In ut lectus in quam tincidunt tempus eget at sem. Duis ac commodo
                                                purus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END CONTENT BOX, STYLE 2-->
            </div>
        </div>
    </div>

@endsection
