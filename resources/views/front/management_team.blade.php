@extends('layouts.front')
@section('title', 'Management Team')
@section('content')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                        <li class="page-breadcrumb__nav active">Management Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <!-- Start Rightside - Content -->
                <div class="col-lg-12">
                    <div class="blog">
                        <div class="row">
                            <!-- Start Single Blog List -->
                            <div class="col-12">
                                <div class="blog__type-single">
                                    <div class="blog__content">
                                        <h3 class="blog__title">Management Team</h3>
                                        <hr />
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="card" >
                                                    <img class="card-img-top" src="{{ asset('images/management/centre_director.jpg') }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h6 class="card-title">CENTRE DIRECTOR</h6>
                                                        <h6 class="card-subtitle text-muted mb-2">Joseph L. Ralte</h6>
                                                        <p class="card-text experience mb-0">EMBA (Foreign Trade)</p>
                                                        <p class="card-text experience mb-0">Social Entrepreneur &amp; Author</p>
                                                        <p class="card-text experience mb-0">Expert Member - Mizoram Entrepreneur Dev Monitoring Committee</p>
                                                        <p class="card-text experience mb-0">Subject Committee Member - Federation of Indian Micro, Small and Medium Enterprises (FISME)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="card" >
                                                    <img class="card-img-top" src="{{ asset('images/management/visiting_consultant.jpg') }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h6 class="card-title">VISITING CONSULTANT</h6>
                                                        <h6 class="card-subtitle mb-2 text-muted">Dr. H. Lalhlenmawia</h6>
                                                        <p class="card-text experience mb-0">Ph.D (Pharmacy)</p>
                                                        <p class="card-text experience mb-0">Govt. Analysis - Govt. of Mizoram</p>
                                                        <p class="card-text experience mb-0">Member - Pharmacy Council of India</p>
                                                        <p class="card-text experience mb-0">Member - Education Regulation under Pharmacy Council of India</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="card" >
                                                    <img class="card-img-top" src="{{ asset('images/management/financial_adviser.jpg') }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h6 class="card-title">FINANCIAL ADVISER</h6>
                                                        <h6 class="card-subtitle mb-2 text-muted">R.L. Rinawma IRS (Rtd)</h6>
                                                        <p class="card-text experience mb-0">PGDM, MMS</p>
                                                        <p class="card-text experience mb-0">Bureaucrat turned entrepreneur</p>
                                                        <p class="card-text experience mb-0">Writer and Income Tax Consultant</p>
                                                        <p class="card-text experience mb-0">Chairman &amp; CEO - Samorita Bamboo Express</p>
                                                        <p class="card-text experience mb-0">Founder President - Zoram Management Association (ZMA)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="card" >
                                                    <img class="card-img-top" src="{{ asset('images/management/process_adviser.jpg') }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h6 class="card-title">PROCESS ADVISER</h6>
                                                        <h6 class="card-subtitle mb-2 text-muted">Dr. K. Thanzami</h6>
                                                        <p class="card-text experience mb-0">Ph.D (Pharmaceutical Sc.)</p>
                                                        <p class="card-text experience mb-0">Asst. Professor, RIPANS</p>
                                                        <p class="card-text experience mb-0">Expert in Traditional Food</p>
                                                        <p class="card-text experience mb-0">Specialist in Food Safety</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="card" >
                                                    <img class="card-img-top" src="{{ asset('images/management/tech_adviser.jpg') }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h6 class="card-title">TECHNOLOGY ADVISER</h6>
                                                        <h6 class="card-subtitle mb-2 text-muted">Dr. Baby Zothanpuii Hmar</h6>
                                                        <p class="card-text experience mb-0">Ph.D (Food Process Engineering)</p>
                                                        <p class="card-text experience mb-0">Asst. Professor, Mizoram University</p>
                                                        <p class="card-text experience mb-0">First &amp; only Ph.D in Food Engineering among the Mizos</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="card" >
                                                    <img class="card-img-top" src="{{ asset('images/management/agri_business_adviser.jpg') }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h6 class="card-title">AGRI-BUSINESS ADVISER</h6>
                                                        <h6 class="card-subtitle mb-2 text-muted">Mark Lalduhsaka</h6>
                                                        <p class="card-text experience mb-0">B-Tech, PGDM - IIM Raipur</p>
                                                        <p class="card-text experience mb-0">Ph.D - Pursuing</p>
                                                        <p class="card-text experience mb-0">Managing Director - One Organic</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="card" >
                                                    <img class="card-img-top" src="{{ asset('images/management/mgmnt_adviser.jpg') }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h6 class="card-title">MANAGEMENT ADVISER</h6>
                                                        <h6 class="card-subtitle mb-2 text-muted">Fela Khiangte</h6>
                                                        <p class="card-text experience mb-0">BE (E&amp;C)</p>
                                                        <p class="card-text experience mb-0">MBA, IIM - Lucknow</p>
                                                        <p class="card-text experience mb-0">Founder, <a href="http://adumavar.com" target="_blank">aDumAVar.com</a></p>
                                                        <p class="card-text experience mb-0">Entrepreneur</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-6">
                                                <div class="card" >
                                                    <img class="card-img-top" src="{{ asset('images/management/innovation_adviser.jpg') }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h6 class="card-title">INNOVATION ADVISER</h6>
                                                        <h6 class="card-subtitle mb-2 text-muted">Mr. HV Lalzuimawia</h6>
                                                        <p class="card-text experience mb-0">Innovator &amp; Entrepreneur</p>
                                                        <p class="card-text experience mb-0">Proprietor - Lalzui Research Foundation</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="card" >
                                                    <img class="card-img-top" src="{{ asset('images/management/it_adviser.jpg') }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h6 class="card-title">I.T. ADVISER</h6>
                                                        <h6 class="card-subtitle mb-2 text-muted">C. Rohmingtluanga</h6>
                                                        <p class="card-text experience mb-0">M.E. (Electricals &amp; Electronics)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="card" >
                                                    <img class="card-img-top" src="{{ asset('images/management/production_manager.jpg') }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h6 class="card-title">PRODUCTION MANAGER</h6>
                                                        <h6 class="card-subtitle mb-2 text-muted">Lalthlamuana</h6>
                                                        <p class="card-text experience mb-0">B. Tech (Food Technology)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="card" >
                                                    <img class="card-img-top" src="{{ asset('images/management/plantation_manager.jpg') }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h6 class="card-title">PLANTATION MANAGER</h6>
                                                        <h6 class="card-subtitle mb-2 text-muted">Lalnunzira</h6>
                                                        <p class="card-text experience mb-0">M.Sc (Horti)</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-6">
                                                <div class="card" >
                                                    <img class="card-img-top" src="{{ asset('images/management/food_analyst.jpg') }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h6 class="card-title">FOOD ANALYST</h6>
                                                        <h6 class="card-subtitle mb-2 text-muted">Lalnunhlima</h6>
                                                        <p class="card-text experience mb-0">B. Pharm</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End Single Blog List -->
                        </div>
                    </div>
                </div>  <!-- Start Rightside - Content -->
            </div>
        </div>
    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->
@endsection
@section('css-after')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <style>
        .experience {
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
        }
    </style>
@endsection
