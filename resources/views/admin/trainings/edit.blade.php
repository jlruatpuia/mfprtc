@extends('layouts.admin')
@section('title', 'Edit Training')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Training</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.trainings') }}">Trainings</a></li>
                        <li class="breadcrumb-item active">Edit Training</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md"></div>
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Training</h3>
                        </div>
                        <!-- /.card-header -->
                        <form method="post" action="{{ route('admin.training.update', ['id' => $training->id]) }}">
                            @csrf
                            <input type="hidden" name="_method" value="put">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="course_name">Name of Course:</label>
                                    <input type="text" id="course_name"  name="course_name" class="form-control @error('course_name') is-invalid @enderror"
                                           placeholder="Course Name" value="{{ $training->course_name }}">
                                    @error('course_name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea id="description" name="description" class="form-control" placeholder="Course Description">{{ $training->description }}</textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="duration">Duration:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control float-right" id="duration" name="duration" value="{{ $training->duration }}">
                                    </div>
                                    @error('duration')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md"></div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
@section('css-after')
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin/js/daterangepicker/daterangepicker.css') }}">
@endsection

@section('js-after')
    <!-- InputMask -->
    <script src="{{ asset('admin/js/moment/moment.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('admin/js/daterangepicker/daterangepicker.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#duration').daterangepicker();
        })
    </script>
@endsection

