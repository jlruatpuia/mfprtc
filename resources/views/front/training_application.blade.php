@extends('layouts.front')
@section('title', 'Training Application')
@section('content')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                        <li class="page-breadcrumb__nav">Trainings</li>
                        <li class="page-breadcrumb__nav active">Application</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <!-- Start Rightside - Content -->
                <div class="col-lg-12">
                    <div class="section-content">
                        <h5 class="section-content__title">Training Application Form</h5>
                    </div>
                        <div class="contact-form gray-bg">
                            <form class="contact-form-style" method="post" action="{{ route('training.apply') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="trainings_id" class="col-sm-3 col-form-label">Name of Course : </label>
                                    <div class="col-sm-9">
                                        <select name="trainings_id" class="form-control @error('trainings_id') is-invalid @enderror" id="trainings_id">
                                            <option value=""> -- SELECT COURSE -- </option>
                                            @foreach($trainings as $training)
                                                <option value="{{ $training->id }}">{{ $training->course_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('trainings_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Applicant Name : </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name of Applicant">
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="relative_name" class="col-sm-3 col-form-label">Father/Mother/Guardian Name : </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('relative_name') is-invalid @enderror" id="relative_name" name="relative_name" placeholder="Father/Mother/Guardian Name">
                                    </div>
                                    @error('relative_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 col-form-label">Address : </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Address Details">
                                    </div>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="dob" class="col-sm-3 col-form-label">Date of Birth : </label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" placeholder="Date of Birth">
                                    </div>
                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="contact" class="col-sm-3 col-form-label">Contact No : </label>
                                    <div class="col-sm-3">
                                        <input type="number" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" placeholder="Contact No">
                                    </div>
                                    @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">Email ID : </label>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email ID">
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="qualification" class="col-sm-2 col-form-label">Qualification : </label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control @error('qualification') is-invalid @enderror" id="qualification" name="qualification" placeholder="Edn. Qualification">
                                    </div>
                                    @error('qualification')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="passport_photo" class="col-sm-3 col-form-label">Recent Passport Size Photo : </label>
                                    <div class="col-sm-3">
                                        <input type="file" class="form-control @error('passport_photo') is-invalid @enderror" id="passport_photo" name="passport_photo">
                                    </div>
                                    @error('passport_photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="document_photo" class="col-sm-3 col-form-label">Aadhaar/Voter ID Card : </label>
                                    <div class="col-sm-3">
                                        <input type="file" class="form-control @error('document_photo') is-invalid @enderror" id="document_photo" name="document_photo">
                                    </div>
                                    @error('document_photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="payment_mode" class="col-sm-3 col-form-label">Payment Mode : </label>
                                    <div class="col-sm-9">
                                        <select name="payment_mode" class="form-control @error('payment_mode') is-invalid @enderror" id="payment_mode">
                                            <option value="offline" selected> Offline </option>
                                            <option value="online"> Online </option>
                                        </select>
                                    </div>
                                    @error('payment_mode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button class="btn btn--box btn--medium btn--radius-tiny btn--black btn--black-hover-green btn--uppercase font--bold m-t-30" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>  <!-- Start Rightside - Content -->
            </div>
        </div>
    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->
@endsection
