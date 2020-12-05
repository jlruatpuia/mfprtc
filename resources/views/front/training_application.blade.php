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
                            <form class="contact-form-style" method="" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="course_id" class="col-sm-3 col-form-label">Name of Course : </label>
                                    <div class="col-sm-9">
                                        <select name="course_id" class="form-control" id="course_id">
                                            <option value=""> -- SELECT COURSE -- </option>
                                            @foreach($trainings as $training)
                                                <option value="{{ $training->id }}">{{ $training->course_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="applicant_name" class="col-sm-3 col-form-label">Applicant Name : </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="applicant_name" name="applicant_name" placeholder="Name of Applicant">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="relative_name" class="col-sm-3 col-form-label">Father/Mother/Guardian Name : </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="relative_name" name="relative_name" placeholder="Father/Mother/Guardian Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 col-form-label">Address : </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address Details">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dob" class="col-sm-3 col-form-label">Date of Birth : </label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
                                    </div>
                                    <label for="contact" class="col-sm-3 col-form-label">Contact No : </label>
                                    <div class="col-sm-3">
                                        <input type="number" class="form-control" id="contact" name="contact" placeholder="Contact No">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">Email ID : </label>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email ID">
                                    </div>
                                    <label for="qualification" class="col-sm-2 col-form-label">Qualification : </label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Edn. Qualification">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">Recent Passport Size Photo : </label>
                                    <div class="col-sm-3">
                                        <input type="file" class="form-control" id="email" name="email" placeholder="Email ID">
                                    </div>
                                    <label for="qualification" class="col-sm-3 col-form-label">Aadhaar/Voter ID Card : </label>
                                    <div class="col-sm-3">
                                        <input type="file" class="form-control" id="qualification" name="qualification" placeholder="Edn. Qualification">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="payment_mode" class="col-sm-3 col-form-label">Payment Mode : </label>
                                    <div class="col-sm-9">
                                        <select name="payment_mode" class="form-control" id="payment_mode">
                                            <option value="offline" selected> Offline </option>
                                            <option value="online"> Online </option>
                                        </select>
                                    </div>
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
