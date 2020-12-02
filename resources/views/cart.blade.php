@extends('layouts.front')
@section('title', 'Shopping Cart')
@section('content')
<!-- ::::::  Start  Breadcrumb Section  ::::::  -->
<div class="page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="page-breadcrumb__menu">
                    <li class="page-breadcrumb__nav"><a href="/">Home</a></li>
                    <li class="page-breadcrumb__nav active">Cart</li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

<!-- ::::::  Start  Main Container Section  ::::::  -->
<main id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-content">
                    <h5 class="section-content__title">Your cart items</h5>
                </div>
                <!-- Start Cart Table -->
                <div class="table-content table-responsive cart-table-content m-t-30">
                    <table>
                        <thead class="gray-bg" >
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Unit Price</th>
                            <th>Qty</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $total = 0 ?>

                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img class="img-fluid img-circle" src="{{ url('storage/products/thumb/' . $details['photo']) }}" alt="">
                                    </a>
                                </td>
                                <td class="product-name">
                                    <a href="{{ route('product.show', ['id' => $details['id']]) }}">{{ $details['name'] }}</a>
                                </td>
                                <td class="product-price-cart">
                                    <span class="amount">&#x20B9; {{ $details['price'] }}</span>
                                </td>
                                <td class="product-quantities">
                                    <div class="quantity d-inline-block">
                                        <input class="quantity" type="number" min="1" step="1" value="{{ $details['quantity'] }}">
                                    </div>
                                </td>
                                <td class="product-subtotal">
                                    &#x20B9; {{ $details['price'] * $details['quantity'] }}
                                </td>
                                <td class="product-remove">
                                    <button class="text-primary update-cart" data-id="{{ $id }}">
                                        <i class="fa fa-recycle"></i>
                                    </button>
                                    <button class="text-primary remove-cart" data-id="{{ $id }}">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>  <!-- End Cart Table -->
                <!-- Start Cart Table Button -->
                <div class="cart-table-button m-t-10">
                    <div class="cart-table-button--left">
                        <a href="{{ route('home') }}" class="btn btn--box btn--large btn--radius btn--green btn--green-hover-black btn--uppercase font--bold m-t-20">CONTINUE SHOPPING</a>
                    </div>
                </div>  <!-- End Cart Table Button -->
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-lg-4 col-md-6 float-right">
                <div class="sidebar__widget m-t-40">
                    <div class="sidebar__box">
                        <h5 class="sidebar__title">Cart Total</h5>
                    </div>
                    <h6 class="total-cost">Total products Price<span>&#x20B9; {{ $total }}</span></h6>
                    <div class="total-shipping">
                        <span>Total shipping</span>
                        <ul class="shipping-cost m-t-10">
                            <li>
                                <label for="ship-standard">
                                    <input type="radio" class="shipping-select" name="shipping-cost" value="Standard" id="ship-standard" checked><span>Standard</span>
                                </label>
                                <span class="ship-price">$20.00</span>
                            </li>
                            <li>
                                <label for="ship-express">
                                    <input type="radio" class="shipping-select" name="shipping-cost" value="Express" id="ship-express"><span>Express</span>
                                </label>
                                <span class="ship-price">$30.00</span>
                            </li>
                        </ul>
                    </div>
                    <h4 class="grand-total m-tb-25">Grand Total <span>&#x20B9; {{ $total }}</span></h4>
                    <button class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold" type="submit">PROCEED TO CHECKOUT</button>
                </div>
            </div>
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->
@endsection
@section('js-after')

@endsection
