@extends('layouts.front')
@section('title', 'User Address')
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
                                <li class="breadcrumb-item active" aria-current="page">User Address</li>
                            </ol>
                        </nav>
                        <!-- /Breadcrumb -->

                        <div class="row gutters-sm">
                            <div class="col-md-6 mx-auto">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Add New Address</h5>
                                        <hr/>
                                        <form method="post" action="{{ route('add-address') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="full_name"><strong>Full Name</strong></label>
                                                <input id="full_name" name="full_name" type="text" class="form-control form-control-sm @error('full_name') is-invalid @enderror">
                                                @error('full_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="mobile_no">Mobile No</label>
                                                <div class="input-group input-group-sm mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">+91</span>
                                                    </div>
                                                    <input id="mobile_no" name="mobile_no" type="number" class="form-control form-control-sm @error('mobile_no') is-invalid @enderror"
                                                           placeholder="Mobile No" aria-label="Mobile No" aria-describedby="basic-addon1">
                                                </div>
                                                @error('mobile_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="pin_code">Pin Code</label>
                                                <input id="pin_code" name="pin_code" type="number" class="form-control form-control-sm @error('pin_code') is-invalid @enderror">
                                                @error('pin_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="house_no">House/Flat/Apartment No</label>
                                                <input id="house_no" name="house_no" type="text" class="form-control form-control-sm @error('house_no') is-invalid @enderror">
                                                @error('house_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="village">Area/Colony/Street/Sector/Village</label>
                                                <input id="village" name="village" type="text" class="form-control form-control-sm @error('village') is-invalid @enderror">
                                                @error('village')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="town">Town/City</label>
                                                <input id="town" name="town" type="text" class="form-control form-control-sm @error('town') is-invalid @enderror">
                                                @error('town')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <button type="submit" class="btn btn-block btn-primary">Submit</button>
                                        </form>
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
@section('js-after')

@endsection
