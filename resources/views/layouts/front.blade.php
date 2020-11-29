

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
    <link rel="stylesheet" href="{{ asset('front/css/vendor/bootstrap.min.css') }}">

    <!-- Plugin CSS Files -->
    <link rel="stylesheet" href="{{ asset('front/css/plugin/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/plugin/material-scrolltop.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/plugin/price_range_style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/plugin/in-number.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/plugin/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/plugin/jquery.lineProgressbar.css') }}">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css"/> -->
    <link rel="stylesheet" href="{{ asset('front/css/plugin/plugins.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('front/css/main.min.css') }}">

    <!-- Main Style CSS File -->
    {{-- <link rel="stylesheet" href="{{ asset('front/css/main.css') }}"> --}}
    @yield('css-after')
</head>

<body>
<?php $total = 0 ?>
@foreach((array)session('cart') as $id => $details)
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
                                                    <a href="about.html" class="dropdown__link">Application</a>
                                                </li>
                                                <li class="dropdown__list pos-relative">
                                                    <a href="frequently-questions.html" class="dropdown__link">Feedback</a>
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
                                        <a class="dropdown-item" href="#">{{ Auth::user()->name}}</a>
                                        <a class="dropdown-item" href="#">Dashboard</a>
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
                                <li>
                                    <a href="wishlist.html">
                                        <i class="icon-heart"></i>
                                        <span class="item-count pos-absolute">3</span>
                                    </a>
                                </li> <!-- End Header Wishlist Box -->
                                <!-- Start Header Add Cart Box -->
                                <li>
                                    <a href="#offcanvas-add-cart__box" class="offcanvas-toggle">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="wishlist-item-count pos-absolute">{{ $total }}</span>
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
                                    <span class="wishlist-item-count pos-absolute">{{ $total }}</span>
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
                    <!-- Start Header Wishlist Box -->
                    <li>
                        <a href="wishlist.html">
                            <i class="icon-heart"></i>
                            <span class="item-count pos-absolute">3</span>
                        </a>
                    </li> <!-- End Header Wishlist Box -->
                    <!-- Start Header Add Cart Box -->
                    <li>
                        <a href="{{ route('cart') }}">
                            <i class="icon-shopping-cart"></i>
                            <span class="wishlist-item-count pos-absolute">{{ $total }}</span>
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
                                <li><a href="about.html">Application</a></li>
                                <li><a href="frequently-questions.html">Feedback</a></li>
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
                <!-- Start Single Add Cart Item-->
                <li class="offcanvas-add-cart__list pos-relative d-flex align-items-center justify-content-between ">
                    <div class="offcanvas-add-cart__content d-flex align-items-start m-r-10">
                        <div class="offcanvas-add-cart__img-box pos-relative">
                            <a href="product-single-default.html" class="offcanvas-add-cart__img-link img-responsive">
                              <img src="{{ asset('front/img/product/size-small/product-home-1-img-1.jpg') }}" alt="" class="add-cart__img">
                            </a>
                            <span class="offcanvas-add-cart__item-count pos-absolute">2x</span>
                        </div>
                        <div class="offcanvas-add-cart__detail">
                            <a href="product-single-default.html" class="offcanvas-add-cart__link">Lucky Wooden Elephant</a>
                            <span class="offcanvas-add-cart__price">$29.00</span>
                            <span class="offcanvas-add-cart__info">Dimension: 40x60cm</span>
                        </div>
                    </div>
                    <button class="offcanvas-add-cart__item-dismiss"><i class="fal fa-times"></i></button>
                </li> <!-- Start Single Add Cart Item-->
                <!-- Start Single Add Cart Item-->
                <li class="offcanvas-add-cart__list pos-relative d-flex align-items-center justify-content-between">
                    <div class="offcanvas-add-cart__content d-flex  align-items-start m-r-10">
                        <div class="offcanvas-add-cart__img-box pos-relative">
                            <a href="product-single-default.html" class="offcanvas-add-cart__img-link img-responsive">
                              <img src="{{ asset('front/img/product/size-small/product-home-1-img-2.jpg') }}" alt="" class="add-cart__img">
                            </a>
                            <span class="offcanvas-add-cart__item-count pos-absolute">2x</span>
                        </div>
                        <div class="offcanvas-add-cart__detail">
                            <a href="product-single-default.html" class="offcanvas-add-cart__link">Lucky Wooden Elephant</a>
                            <span class="offcanvas-add-cart__price">$29.00</span>
                            <span class="offcanvas-add-cart__info">Dimension: 40x60cm</span>
                        </div>
                    </div>
                    <button class="offcanvas-add-cart__item-dismiss"><i class="fal fa-times"></i></button>
                </li> <!-- Start Single Add Cart Item-->
            </ul> <!-- Start Add Cart Item Box-->
            <!-- Start Add Cart Checkout Box-->
            <div class="offcanvas-add-cart__checkout-box-bottom">
                <!-- Start offcanvas Add Cart Checkout Info-->
                <ul class="offcanvas-add-cart__checkout-info">
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Subtotal</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$60.59</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Shipping</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$7.00</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Taxes</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$0.00</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Total</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$67.59</span>
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
    @include('layouts.front-footer')

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->


    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery-box m-b-60">
                                    <div class="modal-product-image--large">
                                        <img class="img-fluid" src="{{ asset('front/img/product/gallery/gallery-large/product-gallery-large-1.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-details-box">
                                    <h5 class="title title--normal m-b-20">Aliquam lobortis</h5>
                                    <div class="product__price">
                                        <span class="product__price-del">$35.90</span>
                                        <span class="product__price-reg">$31.69</span>
                                    </div>
                                    <ul class="product__review m-t-15">
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--blank"><i class="icon-star"></i></li>
                                    </ul>
                                    <div class="product__desc m-t-25 m-b-30">
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>
                                    </div>

                                    <div class="product-var p-t-30">
                                        <div class="product-quantity product-var__item d-flex align-items-center flex-wrap">
                                            <span class="product-var__text">Quantity: </span>
                                            <form class="modal-quantity-scale m-l-20">
                                                <div class="value-button" id="modal-decrease" onclick="decreaseValueModal()">-</div>
                                                <input type="number" id="modal-number" value="1" />
                                                <div class="value-button" id="modal-increase" onclick="increaseValueModal()">+</div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="product-links">
                                        <div class="product-social m-tb-30">
                                            <span>SHARE THIS PRODUCT</span>
                                            <ul class="product-social-link">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->


    <!-- Vendor JS Files -->
    <script src="{{ asset('front/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('front/js/vendor/modernizr-3.7.1.min.js') }}"></script>
    <script src="{{ asset('front/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('front/js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugins JS Files -->
    <script src="{{ asset('front/js/plugin/slick.min.js') }}"></script>
    <script src="{{ asset('front/js/plugin/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('front/js/plugin/material-scrolltop.js') }}"></script>
    <script src="{{ asset('front/js/plugin/price_range_script.js') }}"></script>
    <script src="{{ asset('front/js/plugin/in-number.js') }}"></script>
    <script src="{{ asset('front/js/plugin/jquery.elevateZoom-3.0.8.min.js') }}"></script>
    <script src="{{ asset('front/js/plugin/venobox.min.js') }}"></script>
    <script src="{{ asset('front/js/plugin/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('front/js/plugin/jquery.lineProgressbar.js') }}"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugin/plugins.min.js"></script> -->

    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{ asset('front/js/main.js') }}"></script>
    @yield('js-after')
</body>

</html>
