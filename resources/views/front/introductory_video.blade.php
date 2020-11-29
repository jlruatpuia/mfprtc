@extends('layouts.front')
@section('title', 'Introductory Video')
@section('content')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                        <li class="page-breadcrumb__nav active">Introductory Video</li>
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
                                        <h3 class="blog__title">Introductory Video</h3>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <video controls>
                                                <source src="{{ asset("images/introductory_video.mp4")}}" type="video/mp4">
                                            </video>
                                        </div>
                                        {{-- <div class="para m-tb-20">
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat.
                                            </p>
                                            <p class="block-quote">
                                               Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt labo dolor magna aliqua. Ut enim ad minim veniam quis nostrud.
                                            </p>
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div> --}}
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
