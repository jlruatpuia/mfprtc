@extends('layouts.front')
@section('title', 'Orders')
@section('content')
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="container">
                    <div class="main-body">
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb" class="main-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Orders</li>
                            </ol>
                        </nav>
                        <!-- /Breadcrumb -->

                        <div class="row gutters-sm">
                            <div class="col-md-8 mx-auto">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Order Details</h5>
                                        <hr />
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex flex-column align-items-center text-center">
                                                    <div class="mt-3">
                                                        <h4></h4>
                                                        <p class="text-secondary mb-1"><strong>Order ID</strong> : {{ $orders->get(0)->payment_id }}</p>
                                                        <p class="text-secondary mb-1"><strong>Order Date</strong> : {{ formatDate($orders->get(0)->order_date) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>Items</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Amount</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $index => $order)
                                                @foreach(json_decode($order->items) as $item)
                                                <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td>&#x20B9; {{ $item->price }}</td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>&#x20B9; {{ $item->price * $item->quantity }}</td>
                                                </tr>
                                                @endforeach
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <p class="text-right">
                                            <strong>Amount</strong> : &#x20B9; {{ $order->amount }}
                                        </p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
