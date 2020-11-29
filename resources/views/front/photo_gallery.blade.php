@extends('layouts.front')
@section('title', 'Photo Gallery')
@section('content')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Home</a></li>
                        <li class="page-breadcrumb__nav active">Photo Gallery</li>
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
                                        <h3 class="blog__title">Photo Gallery</h3>
                                        <div class="container">
                                            <div class="row photos">
                                                @if ($photos->count() > 0)
                                                    @foreach($photos as $photo)
                                                <div class="col-sm-6 col-md-4 col-lg-3 item mb-2">
                                                    <a href="{{ url('storage/gallery/' . $photo->path) }}" data-lightbox="photos">
                                                        <img class="img-fluid" src="{{ url('storage/gallery/thumb/' . $photo->path) }}" alt="{{ $photo->description }}">
                                                    </a>
                                                </div>
                                                    @endforeach
                                                @else
                                                    <div class="col">
                                                        <div class="alert alert-info">
                                                            <h5><i class="icon fas fa-info"></i> Alert!</h5>
                                                            Currently there are no photos.
                                                        </div>
                                                    </div>
                                                @endif
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <style>
        .photo-gallery {
            color:#313437;
            background-color:#fff;
        }

        .photo-gallery p {
            color:#7d8285;
        }

        .photo-gallery h2 {
            font-weight:bold;
            margin-bottom:40px;
            padding-top:40px;
            color:inherit;
        }

        @media (max-width:767px) {
            .photo-gallery h2 {
                margin-bottom:25px;
                padding-top:25px;
                font-size:24px;
            }
        }

        .photo-gallery .intro {
            font-size:16px;
            max-width:500px;
            margin:0 auto 40px;
        }

        .photo-gallery .intro p {
            margin-bottom:0;
        }

        .photo-gallery .photos {
            padding-bottom:20px;
        }

        .photo-gallery .item {
            padding-bottom:30px;
        }

    </style>
@endsection
@section('js-after')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
@endsection
