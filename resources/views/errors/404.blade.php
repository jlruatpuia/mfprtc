@extends('layouts.front')
@section('title', '404:Error')
@section('content')
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                        <li class="page-breadcrumb__nav active">404 Page</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
                    <div class="error-section-top text-center">
                        <h1>404</h1>
                        <h4 class="m-b-20">OOOPS! ERROR 404</h4>
                        <h5 class="font--light">Sorry, But the page you are looking for does't exist!</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-4 offset-lg-4">
                    <div class="page-not-found text-center">
                        <a href="/" class="btn btn--icon-left btn--small btn--radius-tiny btn--green btn--green-hover-black font--bold text-capitalize m-t-20">GO TO HOME PAGE</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
