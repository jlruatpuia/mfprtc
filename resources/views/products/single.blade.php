@extends('layouts.front')
@section('title', $product->name)
@section('content')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                        <li class="page-breadcrumb__nav"><a href="{{ route('home') }}">Products</a></li>
                        <li class="page-breadcrumb__nav active">{{ $product->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">

        <!-- Start Product Details Gallery -->
        <div class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="product-gallery-box product-gallery-box--default m-b-60">
                            <div class="product-image--large product-image--large-horizontal">
                                <img class="img-fluid" id="img-zoom" src="{{ url('storage/products/thumb/' . $product->photo) }}"
                                     data-zoom-image="{{ url('storage/products/' . $product->photo) }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="product-details-box m-b-60">
                            <h4 class="font--regular m-b-20">{{ $product->name }}</h4>
                            <div class="product__price m-t-5">
                                <span class="product__price product__price--large">&#x20B9; {{ $product->price }}</span>
{{--                                <span class="product__tag m-l-15 btn--tiny btn--green">-34%</span>--}}
                            </div>

                            <div class="product__desc m-t-25 m-b-30">
                                <p>{{ $product->description }}</p>
                            </div>
                            <div class="product-var p-tb-30">
                                <div class="product-quantity product-var__item d-flex align-items-center">
                                    <span class="product-var__text">Quantity: </span>
                                    <form class="quantity-scale m-l-20">
                                        <div class="value-button" id="decrease" onclick="decreaseValue()">-</div>
                                        <input type="number" id="number" value="1" />
                                        <div class="value-button" id="increase" onclick="increaseValue()">+</div>
                                    </form>
                                </div>
                                <div class="product-var__item">
                                    <a href="#modalAddCart" data-toggle="modal" data-dismiss="modal"
                                       class="btn btn--long btn--radius-tiny btn--green btn--green-hover-black btn--uppercase btn--weight m-r-20">Add to cart</a>
{{--                                    <a href="wishlist.html" class="btn btn--round btn--round-size-small btn--green btn--green-hover-black"><i class="fas fa-heart"></i></a>--}}
                                </div>
                                <div class="product-var__item">
                                    <div class="dynmiac_checkout--button">
{{--                                        <input type="checkbox" id="buy-now-check" value="1" class="p-r-30">--}}
{{--                                        <label for="buy-now-check" class="m-b-20">I agree with the terms and condition</label>--}}
                                        <a href="cart.html" class="btn btn--block btn--long btn--radius-tiny btn-warning btn--green-hover-black text-uppercase m-r-35">Buy It Now</a>
                                    </div>
                                </div>
{{--                                <div class="product-var__item">--}}
{{--                                    <span class="product-var__text">Guaranteed safe checkout </span>--}}
{{--                                    <ul class="payment-icon m-t-5">--}}
{{--                                        <li><img src="assets/img/icon/payment/paypal.svg" alt=""></li>--}}
{{--                                        <li><img src="assets/img/icon/payment/amex.svg" alt=""></li>--}}
{{--                                        <li><img src="assets/img/icon/payment/ipay.svg" alt=""></li>--}}
{{--                                        <li><img src="assets/img/icon/payment/visa.svg" alt=""></li>--}}
{{--                                        <li><img src="assets/img/icon/payment/shoify.svg" alt=""></li>--}}
{{--                                        <li><img src="assets/img/icon/payment/mastercard.svg" alt=""></li>--}}
{{--                                        <li><img src="assets/img/icon/payment/gpay.svg" alt=""></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="product-var__item d-flex align-items-center">--}}
{{--                                    <span class="product-var__text">Share: </span>--}}
{{--                                    <ul class="product-social m-l-20">--}}
{{--                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Product Details Gallery -->
    </main>
@endsection
