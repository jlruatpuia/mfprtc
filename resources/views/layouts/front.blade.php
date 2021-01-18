

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') | HoneyDew</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('front/css/vendor/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/vendor/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/vendor/plaza-icon.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('front/css/vendor/bootstrap.min.css') }}">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Plugin CSS Files -->
    <link rel="stylesheet" href="{{ asset('front/css/plugin/material-scrolltop.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/plugin/in-number.css') }}">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link href="{{ asset('admin/js/toastr/toastr.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('front/css/plugin/plugins.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('front/css/main.min.css') }}">
{{--    <link href="{{ asset('css/blog.css') }}">--}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cookie&family=Open+Sans:wght@300&family=Playfair+Display&family=Roboto:wght@300&display=swap');
        .title-hindi {
            font-weight: bold;
        }
        @media(min-width: 544px) {
            .title-english {
                font-family: Arial, Helvetica, sans-serif;
                font-size: large;
                font-weight: bold;
                color: green;
            }
            .regn-no {
                font-weight: unset;
            }
        }
        @media(min-width: 544px) {
            .title-english {
                font-family: 'Roboto', sans-serif;;
                font-size: x-large;
                font-weight: bold;
                color: green;
            }
        }
        .subtitle {
            font-family: 'Open Sans Condensed', sans-serif;

        }

        .regn-no {
            font-size: smaller;
            color: darkred;
            font-weight: bold;
            font-family: 'Roboto', sans-serif;;
        }

        .sub-heading {
            font-family: 'Cookie', cursive;;
            font-size: large;
            color: #6f59e4;
        }
        .blog-footer{
            color: #fff;
        }
        .address {
            font-family: 'Roboto', sans-serif;
            font-size: smaller;
            font-weight: 200;
        }
    </style>
    @yield('css-after')
</head>

<body>
<?php $total = 0 ?>
@foreach((array) session('cart') as $id => $details)
    <?php $total += $details['price'] * $details['quantity'] ?>
@endforeach
    <!-- ::::::  Start Header Section  ::::::  -->
    <header>
        <!--  Start Large Header Section   -->
        <div class="header d-none d-lg-block">

            <!-- Start Header Center area -->
            <div class="header__center sticky-header p-tb-10">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <!-- Start Logo -->
                            <div class="header__logo">
                                <a href="/" class="header__logo-link img-responsive">
                                    <img class="header__logo-img img-fluid" src="{{ asset('images/honeydew.svg') }}" alt="" width="299px">
                                </a>
                            </div> <!-- End Logo -->
                             <!-- Start Header Menu -->
                             <div class="header-menu">
                                <nav>
                                    <ul class="header__nav">
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="/" class="header__nav-link">Home</a>
                                        </li> <!-- End Single Nav link-->
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="{{ route('gallery') }}" class="header__nav-link">Photo Gallery</a>
                                        </li>
                                        <!-- End Single Nav link-->
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="#" class="header__nav-link">Training <i class="fal fa-chevron-down"></i></a>
                                            {{-- <span class="menu-label menu-label--blue">New</span> --}}
                                            <!--Single Dropdown Menu-->
                                            <ul class="dropdown__menu pos-absolute">
                                                <li class="dropdown__list">
                                                    <a href="{{ route('training.application') }}" class="dropdown__link">Application</a>
                                                </li>
                                                <li class="dropdown__list pos-relative">
                                                    <a href="{{ route('training.feedback') }}" class="dropdown__link">Feedback</a>
                                                    {{-- <span class="menu-label menu-label--blue">New</span> --}}
                                                </li>
                                                <li class="dropdown__list">
                                                    <a href="{{ route('hostel') }}" class="dropdown__link">Hostel Rules</a>
                                                </li>
                                                {{-- <li class="dropdown__list"><a href="404.html" class="dropdown__link">404 Page</a></li> --}}
                                            </ul>
                                            <!--Single Dropdown Menu-->
                                        </li>
                                        <!-- End Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="javascript:void(0);" class="header__nav-link">Agri Business</a>
                                        </li>
                                        <li class="header__nav-item pos-relative">
                                            <a href="javascript:void(0);" class="header__nav-link">Food Processing</a>
                                        </li>
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="#" class="header__nav-link">About <i class="fal fa-chevron-down"></i></a>
                                            {{-- <span class="menu-label menu-label--blue">New</span> --}}
                                            <!--Single Dropdown Menu-->
                                            <ul class="dropdown__menu pos-absolute">
                                                <li class="dropdown__list">
                                                  <a href="javascript:void(0);" class="dropdown__link">About Us</a>
                                                </li>
                                                <li class="dropdown__list">
                                                  <a href="{{ route('mission') }}" class="dropdown__link">Mission Statement</a>
                                                </li>
                                                <li class="dropdown__list pos-relative">
                                                    <a href="{{ route('video') }}" class="dropdown__link">Introductory Video</a>
                                                </li>
                                                <li class="dropdown__list">
                                                    <a href="{{ route('management') }}" class="dropdown__link">Management Team</a>
                                                </li>
                                                <li class="dropdown__list">
                                                    <a href="javascript:void(0);" class="dropdown__link">Activity Report</a>
                                                </li>
                                            </ul>
                                            <!--Single Dropdown Menu-->
                                        </li> <!-- End Single Nav link-->
                                    </ul>
                                </nav>
                            </div> <!-- End Header Menu -->
                            <!-- Start Wishlist-AddCart -->
                            <ul class="header__user-action-icon">
                                @guest
                                <li>
                                    <a href="{{ route('login') }}">
                                        <i class="icon-users"></i>
                                    </a>
                                </li>
                                @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-users"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('user-profile') }}">{{ Auth::user()->name}}</a>
                                        <a class="dropdown-item" href="{{ route('admin.index') }}">Dashboard</a>
                                        <div class="dropdown-divider"></div>
{{--                                        <a class="dropdown-item" href="#">Log out</a>--}}
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
{{--                                </li>--}}
                                <!-- End Header Wishlist Box -->
                                <!-- Start Header Wishlist Box -->
{{--                                <li>--}}
{{--                                    <a href="wishlist.html">--}}
{{--                                        <i class="icon-heart"></i>--}}
{{--                                        <span class="item-count pos-absolute">3</span>--}}
{{--                                    </a>--}}
{{--                                </li> <!-- End Header Wishlist Box -->--}}
                                <!-- Start Header Add Cart Box -->
                                <li>
                                    <a href="#offcanvas-add-cart__box" class="offcanvas-toggle">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="wishlist-item-count pos-absolute">{{ count((array) session('cart')) }}</span>
{{--                                        <span class="wishlist-item-count pos-absolute">0</span>--}}
                                    </a>
                                </li> <!-- End Header Add Cart Box -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- End Header Center area -->

             <!-- Start Header bottom area -->
             <div class="header__bottom p-tb-30">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-10 col-lg-6">
                            <form class="header-search" action="#" method="post">
                                <div class="header-search__content pos-relative">
                                    <input type="search" name="header-search" placeholder="Search our store" required>
                                    <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-2 col-lg-3">
                            <div class="header-phone text-right"><span>&nbsp;</span></div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Header bottom area -->

        </div> <!--  End Large Header Section  -->

        <!--  Start Mobile Header Section   -->
        <div class="header__mobile mobile-header--1 d-block d-lg-none p-tb-20">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <ul class="header__mobile--leftside d-flex align-items-center justify-content-start">
                            <li>
                                <div class="header__mobile-logo">
                                    <a href="/" class="header__mobile-logo-link">
                                        <img src="{{ asset('images/honeydew.svg') }}" alt="" class="header__mobile-logo-img">
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <!-- Start User Action -->
                        <ul class="header__mobile--rightside header__user-action-icon  d-flex align-items-center justify-content-end">
                            <!-- Start Header Add Cart Box -->
                            <li>
                                <a href="#offcanvas-add-cart__box" class="offcanvas-toggle">
                                    <i class="icon-shopping-cart"></i>
{{--                                    <span class="wishlist-item-count pos-absolute">{{ $total }}</span>--}}
                                    <span class="wishlist-item-count pos-absolute">{{ count((array) session('cart')) }}</span>
                                </a>
                            </li> <!-- End Header Add Cart Box -->
                            <li>
                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                    <i class="far fa-bars"></i>
                                </a>
                            </li>

                        </ul>   <!-- End User Action -->
                    </div>
                </div>
            </div>
        </div> <!--  Start Mobile Header Section   -->

        <!--  Start Mobile-offcanvas Menu Section   -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <div class="offcanvas__top">
                <span class="offcanvas__top-text"></span>
                <button class="offcanvas-close"><i class="fal fa-times"></i></button>
            </div>

            <div class="offcanvas-inner">
                <form class="header-search m-tb-15" action="#" method="post">
                    <div class="header-search__content pos-relative">
                        <input type="search" name="header-search" placeholder="Search our store" required>
                        <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
                 <!-- Start Mobile User Action -->
                <ul class="header__user-action-icon m-tb-15 text-center">
                    <!-- Start Header Wishlist Box -->
                    <li>
                        <a href="my-account.html">
                            <i class="icon-users"></i>
                        </a>
                    </li> <!-- End Header Wishlist Box -->
                    <!-- Start Header Add Cart Box -->
                    <li>
                        <a href="{{ route('cart') }}">
                            <i class="icon-shopping-cart"></i>
{{--                            <span class="wishlist-item-count pos-absolute">{{ $total }}</span>--}}
                            <span class="wishlist-item-count pos-absolute">{{ count((array) session('cart')) }}</span>
                        </a>
                    </li> <!-- End Header Add Cart Box -->
                </ul>  <!-- End Mobile User Action -->
                <div class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="/"><span>Home</span></a>
                        </li>
                        <li>
                            <a href="{{ route('gallery') }}"><span>Photo Gallery</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><span>Training</span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('training.application') }}">Application</a></li>
                                <li><a href="{{ route('training.feedback') }}">Feedback</a></li>
                                <li><a href="{{ route('hostel') }}">Hostel Rules</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><span>Agri-Business</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><span>Food Processing</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><span>About</span></a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0);">About Us</a></li>
                                <li><a href="{{ route('mission') }}">Mission Statement</a></li>
                                <li><a href="{{ route('video') }}">Introductory Video</a></li>
                                <li><a href="{{ route('management') }}">Management Team</a></li>
                                <li><a href="javascript:void(0);">Activity Report</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="offcanvas__social-nav m-t-50">
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-facebook-f"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-twitter"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-youtube"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-google-plus-g"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div> <!--  End Mobile-offcanvas Menu Section   -->

        <!--  Start Popup Add Cart  -->
        <div  id="offcanvas-add-cart__box" class="offcanvas offcanvas-cart offcanvas-add-cart">
            <div class="offcanvas__top">
                <span class="offcanvas__top-text"><i class="icon-shopping-cart"></i>Cart</span>
                <button class="offcanvas-close"><i class="fal fa-times"></i></button>
            </div>
            <!-- Start Add Cart Item Box-->

            <ul class="offcanvas-add-cart__menu">
            @if (session('cart'))
                @foreach(session('cart') as $id=>$details)
<!--                    --><?php //$total += $details['price'] * $details['quantity'] ?>
                    <!-- Start Single Add Cart Item-->
                    <li class="offcanvas-add-cart__list pos-relative d-flex align-items-center justify-content-between ">
                        <div class="offcanvas-add-cart__content d-flex align-items-start m-r-10">
                            <div class="offcanvas-add-cart__img-box pos-relative">
                                <a href="{{ route('product.show', ['id' => $details['id']]) }}" class="offcanvas-add-cart__img-link img-responsive">
                                    <img src="{{ url( $details['photo']) }}" alt="" class="offcanvas-add-cart__img" style="width: 94px; height: 94px;">
                                </a>
                                <span class="offcanvas-add-cart__item-count pos-absolute">{{ $details['quantity'] }}x</span>
                            </div>
                            <div class="offcanvas-add-cart__detail">
                                <a href="{{ route('product.show', ['id' => $details['id']]) }}" class="offcanvas-add-cart__link">{{ $details['name'] }}</a>
                                <span class="offcanvas-add-cart__price">&#x20B9; {{ $details['price'] }}</span>
                            </div>
                        </div>
                        <button class="offcanvas-add-cart__item-dismiss remove-cart" data-id="{{ $details['id'] }}"><i class="fal fa-times"></i></button>
                    </li> <!-- Start Single Add Cart Item-->
                @endforeach
            @endif
            </ul> <!-- Start Add Cart Item Box-->
            <!-- Start Add Cart Checkout Box-->
            <div class="offcanvas-add-cart__checkout-box-bottom">
                <!-- Start offcanvas Add Cart Checkout Info-->
                <ul class="offcanvas-add-cart__checkout-info">
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Total</span>
                        <span class="offcanvas-add-cart__checkout-right-info">&#x20B9; {{ $total }}</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                </ul> <!-- End offcanvas Add Cart Checkout Info-->

                <div class="offcanvas-add-cart__btn-checkout">
                    <a href="{{ route('cart') }}" class="btn btn--block btn--radius btn--box btn--black btn--black-hover-green btn--large btn--uppercase font--bold">Checkout</a>
                </div>
            </div> <!-- End Add Cart Checkout Box-->
        </div> <!-- End Popup Add Cart -->

        <div class="offcanvas-overlay"></div>
    </header>  <!-- :::::: End Header Section ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    @yield('content')
    <!-- :::::: End MainContainer Wrapper :::::: -->

    <!-- ::::::  Start  Footer ::::::  -->
{{--    @include('layouts.front-footer')--}}
{{--    <footer class="footer m-t-100 m-b-50">--}}
{{--        <div class="container">--}}
{{--            <div class="col-md-3">--}}
{{--                <img src="{{ asset('images/location.png') }}" class="img-fluid" alt="">--}}
{{--            </div>--}}
{{--            <div class="col-md-3">--}}
{{--                <div class="row">--}}
{{--                    <div class="container">--}}
{{--                        <div class="col-sm-3">--}}
{{--                            <img src="{{ asset('images/logo.png') }}" class="img-fluid" style="width: 150px; height: 150px">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}
    <div class="footer m-t-100 m-b-50">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <img src="{{ asset('images/location.png') }}" class="img-fluid d-block mx-auto" alt="">
                </div>
                <hr />
                <div class="col-md-2 col-sm-12">
                    <img src="{{ asset('images/logo.png') }}" class="img-fluid d-block mx-auto">
                </div>
                <div class="col-md-7 col-sm-12">
                    <p class="text-center title-hindi mb-0">मिजोरम फूड प्रोसेसिंग रिसर्च अँड ट्रेनिंग सेंटर</p>
                    <p class="text-center title-english mt-0 mb-0">Mizoram Food Processing Research & Training Centre</p>
                    <p class="text-center subtitle mt-0 mb-0">(Autonomous body under Commerce & Industries Dept. Govt of Mizoram)</p>
                    <p class="text-center regn-no mt-0 mb-0">Regn No. MSR-792 under Mizoram Societies Registration Act</p>
                    <p class="text-center sub-heading mt-0 mb-0">Institute for Food Research, Post-Harvest Management</p>
                    <p class="text-center sub-heading mt-0 mb-0">Food Processing Technology, Entrepreneurship & Skills Development</p>
                    <p class="text-center address mt-0 mb-0">Phaibawkkawn, Seling, Aizawl District, Mizoram-796161</p>
                    <p class="text-center address mt-0 mb-0">Email: mfprtc@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
{{--                        <tr>--}}
{{--                            <td class="text-center">--}}
{{--                                <span class="sub-heading d-none d-lg-block">Institute for Food Research, Post-Harvest Management</span>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td class="text-center">--}}
{{--                                <span class="sub-heading d-none d-lg-block">Food Processing Technology, Entrepreneurship & Skills Development</span>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    </table>--}}
{{--                    <hr class="d-none d-lg-block">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-8 ">--}}
{{--                            <div class="d-flex justify-content-left">--}}
{{--                                <span class="address d-none d-lg-block">Phaibawkkawn, Seling, Aizawl District, Mizoram-796161</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4">--}}
{{--                            <div class="d-flex justify-content-right">--}}
{{--                                <span class="address d-none d-lg-block">Email: mfprtc@gmail.com</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </footer> <!-- ::::::  End  Footer ::::::  -->--}}

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Vendor JS Files -->
    <script src="{{ asset('front/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('front/js/vendor/modernizr-3.7.1.min.js') }}"></script>
    <script src="{{ asset('front/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('front/js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugins JS Files -->
    <script src="{{ asset('front/js/plugin/material-scrolltop.js') }}"></script>
    <script src="{{ asset('front/js/plugin/in-number.js') }}"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{ asset('front/js/main.js') }}"></script>
    <script src="{{ asset('admin/js/toastr/toastr.min.js') }}"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}")
    @endif
    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}")
    @endif
    @if(Session::has('error'))
    toastr.error("{{Session::get('error')}}")
    @endif
</script>
<script type="text/javascript">
    $(".update-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ url('/cart/update') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
                window.location.reload();
            }
        });
    });
    $(".remove-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        if(confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('/cart/remove') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
</script>
    @yield('js-after')
</body>

</html>
