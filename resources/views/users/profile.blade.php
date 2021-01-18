@extends('layouts.front')
@section('title', 'Profile')
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
                                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                            </ol>
                        </nav>
                        <!-- /Breadcrumb -->

                        <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                            <div class="mt-3">
                                                <h4>{{ $user->name }}</h4>
                                                @if($user->addresses->count() > 0)
                                                    <p class="text-secondary mb-1">{{ $user->addresses->house_no }}</p>
                                                    <p class="text-secondary mb-1">{{ $user->addresses->village }}</p>
                                                    <p class="text-secondary mb-1">{{ $user->addresses->city }}, {{ $user->addresses->state }}</p>
                                                    <p class="text-secondary mb-1">Phone No: {{ $user->addresses->mobile_no }}</p>
{{--                                                <button class="btn btn-primary">Follow</button>--}}
{{--                                                <button class="btn btn-outline-primary">Message</button>--}}
                                                    <a href="{{ route('edit-address') }}" >Edit</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Orders</h5>
                                        <hr />
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Order Date</th>
                                                <th>Amount</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $index => $order)
                                            <tr>
                                                <td><a href="{{ route('order-details', ['id' => $order->payment_id]) }}">{{ $order->payment_id }}</a> </td>
                                                <td>{{ formatDate($order->order_date) }}</td>
                                                <td>&#x20B9; {{ $order->amount }}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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
