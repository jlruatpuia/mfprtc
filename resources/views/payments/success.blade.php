@extends('layouts.front')
@section('title', 'Initiate Payment')
@section('content')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                        <li class="page-breadcrumb__nav">Payment</li>
                        <li class="page-breadcrumb__nav active">Success</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">

        <div class="jumbotron text-center">
            <h1 class="display-3">Thank You!</h1>
            <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
            <hr>
            <p>
                Having trouble? <a href="">Contact us</a>
            </p>
            <p class="lead">
                <a class="btn btn-primary btn-sm" href="{{ route('home') }}" role="button">Continue to homepage</a>
            </p>
        </div>
    </main>
@endsection

