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
                        <li class="page-breadcrumb__nav active">Feedback</li>
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
                        <h5 class="section-content__title">Training Feedback Form</h5>
                    </div>
                        <div class="contact-form gray-bg">
                            <form class="contact-form-style" method="" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="applicant_name" class="col-form-label">He training programme-ah hian engvanga lo lut nge i nih? : </label>
                                    <input type="text" class="form-control" id="applicant_name" name="applicant_name">
                                </div>
                                <div class="form-group">
                                    <label for="course_id" class="col-form-label">Training programme hun chhung (duration) hi : </label>
                                    <select name="course_id" class="form-control" id="course_id">
                                        <option value="">A sei lutuk</option>
                                        <option value="">A tawi lutuk</option>
                                        <option value="">A tawk chauh</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="applicant_name" class="col-form-label">He training programme hi I hlawkpui takzet em? : </label>
                                    <input type="text" class="form-control" id="applicant_name" name="applicant_name">
                                </div>
                                <div class="form-group">
                                    <label for="relative_name" class="col-form-label">Mahni kutkawih eizawnna hi a tak taka kalpui I tum em? : </label>
                                    <input type="text" class="form-control" id="relative_name" name="relative_name">
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-form-label">Faculty zingah tunge tha I tih ber? : </label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-form-label">MFPRTC Management kalphung hi tha I ti em? (Tha I tih loh chuan eng nge sawisel duh I neih?) : </label>
                                    <textarea class="form-control"></textarea>
{{--                                    <input type="text" class="form-control" id="address" name="address">--}}
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-form-label">Ei leh in chungchangah sawisel duh I nei em? : </label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-form-label">Training Programme dangah ilo kal leh duh an gem? : </label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-form-label">Hostel kalphung hi tha I ti tawk em? : </label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-form-label">Sawi belh duh I neih apiang han sawi teh : </label>
                                    <textarea class="form-control"></textarea>
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
