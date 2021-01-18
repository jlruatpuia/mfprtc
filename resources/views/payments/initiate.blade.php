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
                        <li class="page-breadcrumb__nav active">Initiate</li>
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
                    <div class="col-md-4 order-md-2 mb-4 mx-auto">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Your cart</span>
                            <span class="badge badge-secondary badge-pill">{{ count((array) session('cart')) }}</span>
                        </h4>
                        <?php $total = 0 ?>

                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <?php $total += $details['price'] * $details['quantity'] ?>
                                <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                        <div>
                                            <h6 class="my-0">{{ $details['name'] }}</h6>
                                            <small class="text-muted">&#x20B9; {{ $details['price'] }} x {{ $details['quantity'] }}</small>
                                        </div>
                                        <span class="text-muted">&#x20B9; {{ $details['price'] * $details['quantity'] }}</span>
                                    </li>
                                </ul>
                            @endforeach
                        @endif
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (INR)</span>
                                <strong>&#x20B9; {{ $total }}</strong>
                            </li>
                        </ul>
                        @if(session('order_id'))
                            <form class="card p-2" action="{{ route('complete-payment') }}" method="post">
                                @csrf
                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                        data-key="{{ env('RAZOR_KEY') }}"
                                        data-amount = "{{ session('amount') * 100 }}"
                                        data-currency = "INR"
                                        data-order_id="{{ session('order_id') }}"
                                        data-button-text = "Pay with Razorpay"
                                        data-name = "MFPRTC"
                                        data-description = "Test Transaction"
                                        data-theme.color = "#F37254"
                                            ></script>
                                <input type="hidden" custom="Hidden Element" name="hidden">
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div><!-- End Product Details Gallery -->
    </main>
@endsection

