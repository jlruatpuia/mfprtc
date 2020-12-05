@extends('layouts.front')
@section('title', 'Home')
@section('content')
<main id="main-container" class="main-container">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <!-- Start Rightside - Product Type View -->
            <div class="col-lg-12">
                <!-- ::::::  Start Sort Box Section  ::::::  -->
                <div class="sort-box m-tb-40">
                    <!-- Start Sort Left Side -->
                    <div class="sort-box-item">
                        <div class="sort-box__tab">
                            <ul class="sort-box__tab-list nav">
                                <li><a class="sort-nav-link active" data-toggle="tab" href="#sort-grid"><i class="fas fa-th"></i>  </a></li>
                                <li><a class="sort-nav-link" data-toggle="tab" href="#sort-list"><i class="fas fa-list-ul"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- Start Sort Left Side -->

{{--                    <div class="sort-box-item d-flex align-items-center flex-warp">--}}
{{--                        <span>Sort By:</span>--}}
{{--                        <div class="sort-box__option">--}}
{{--                            <label class="select-sort__arrow">--}}
{{--                                <select name="select-sort" class="select-sort">--}}
{{--                                    <option value="1">Relevance</option>--}}
{{--                                    <option value="2">Name, A to Z</option>--}}
{{--                                    <option value="3"> Name, Z to A </option>--}}
{{--                                    <option value="4"> Price, low to high</option>--}}
{{--                                    <option value="5">Price, high to low</option>--}}
{{--                                </select>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="sort-box-item">
                        <span>Showing 1 - 9 of 12 result</span>
                    </div>
                </div> <!-- ::::::  Start Sort Box Section  ::::::  -->

                <div class="product-tab-area">
                    <div class="tab-content tab-animate-zoom">
                        <div class="tab-pane show active shop-grid" id="sort-grid">
                            <div class="row">
                                @if($products->count() > 0)
                                    @foreach($products as $product)
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <!-- Start Single Default Product -->
                                            <div class="product__box product__default--single text-center">
                                                <!-- Start Product Image -->
                                                <div class="product__img-box  pos-relative">
                                                    <a href="{{ route('product.show', ['id' => $product->id]) }}" class="product__img--link">
                                                        <img class="product__img img-fluid" src="{{ url($product->photo) }}" alt="">
                                                    </a>
                                                    <!-- Start Product Action Link-->
                                                    <ul class="product__action--link pos-absolute">
                                                        <li>
{{--                                                            <a href="#modalAddCart" data-toggle="modal">--}}
{{--                                                                <i class="icon-shopping-cart"></i>--}}
{{--                                                            </a>--}}
                                                            <a href="{{ route('addToCart', ['id' => $product->id, 'quantity' => 1]) }}" data-toggle="modal">
                                                                <i class="icon-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#modalQuickView" data-toggle="modal">
                                                                <i class="icon-eye"></i>
                                                            </a>
                                                        </li>
                                                    </ul> <!-- End Product Action Link -->
                                                </div> <!-- End Product Image -->
                                                <!-- Start Product Content -->
                                                <div class="product__content m-t-20">
                                                    <a href="{{ route('product.show', ['id' => $product->id]) }}" class="product__link">{{ $product->name }}</a>
                                                    <div class="product__price m-t-5">
                                                        <span class="product__price">&#x20B9; {{ $product->price }}</span>
                                                    </div>
                                                </div> <!-- End Product Content -->
{{--                                                <a href="#" class="btn btn-block btn-outline-warning">Add to Cart</a>--}}
                                            </div> <!-- End Single Default Product -->
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane shop-list" id="sort-list">
                            <div class="row">
                            @if($products->count() > 0)
                                @foreach($products as $product)
                                <!-- Start Single List Product -->
                                <div class="col-12">
                                    <div class="product__box product__box--list">
                                        <!-- Start Product Image -->
                                        <div class="product__img-box  pos-relative text-center">
                                            <a href="javascript:void(0);" class="product__img--link">
                                                <img class="product__img img-fluid" src="{{ asset($product->photo ) }}" alt="">
                                            </a>
                                        </div> <!-- End Product Image -->
                                        <!-- Start Product Content -->
                                        <div class="product__content">
                                            <a href="javascript:void(0);" class="product__link"><h5 class="font--regular">{{ $product->name }}</h5></a>
                                            <div class="product__price m-t-5">
                                                <span class="product__price">&#x20B9; {{ $product->price }}</span>
                                            </div>
                                            <div class="product__desc">
                                                <p>
                                                    {{ $product->description }}
                                                </p>
                                            </div>
                                            <!-- Start Product Action Link-->
                                            <ul class="product__action--link-list m-t-30">
                                                <li><a href="{{ route('addToCart', ['id' => $product->id, 'quantity' => 1]) }}" data-toggle="modal" class="btn--black btn--black-hover-green">Add to cart</a></li>
{{--                                                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>--}}
{{--                                                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>--}}
                                            </ul> <!-- End Product Action Link -->
                                        </div> <!-- End Product Content -->
                                    </div>
                                </div> <!-- End Single List Product -->
                                <!-- Start Single List Product -->
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-pagination">
                    {{ $products->links() }}
                </div>
            </div>  <!-- Start Rightside - Product Type View -->
        </div>
    </div>
</main>
<div class="modal fade" id="modalAddCart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
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
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="modal__product-img">
                                        <img class="img-fluid" src="{{ asset('front/img/product/size-normal/product-home-1-img-1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="link--green link--icon-left"><i class="fal fa-check-square"></i>Added to cart successfully!</div>
                                    <div class="modal__product-cart-buttons m-tb-15">
                                        <a href="cart.html" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercase">View Cart</a>
                                        <a href="checkout.html" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercaset">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 modal__border">
                            <ul class="modal__product-shipping-info">
                                <li class="link--icon-left">
                                    <i class="icon-shopping-cart"></i>
                                    There Are 5 Items In Your Cart.
                                </li>
                                <li>TOTAL PRICE: <span>$187.00</span></li>
                                <li><a href="#" class="btn text-underline color-green" data-dismiss="modal">CONTINUE SHOPPING</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Modal Add cart -->
@endsection
