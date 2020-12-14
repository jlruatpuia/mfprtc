@extends('layouts.admin')
@section('title', 'Trainings')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Applicant Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="../../dist/img/user4-128x128.jpg"
                                     alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ $applicant->name }}</h3>

{{--                            <p class="text-muted text-center">Software Engineer</p>--}}

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>D.O.B</b> <a class="float-right">{{ $applicant->dob }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-phone-alt"></i></b> <a class="float-right">{{ $applicant->contact }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b><i class="fa fa-at"></i></b> <a class="float-right">{{ $applicant->email }}</a>
                                </li>
                            </ul>
                            <strong><i class="fas fa-book mr-1"></i> Qualification</strong>
                            <p class="text-muted">{{ $applicant->qualification }}</p>
                            <hr>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>
                            <p class="text-muted">{{ $applicant->address }}</p>
                            <hr>
                            <strong><i class="fas fa-user-alt mr-1"></i> Relative's Name</strong>
                            <p class="text-muted">
                                {{ $applicant->relative_name }}
                            </p>
                            <hr>
                            <strong><i class="fas fa-file-alt mr-1"></i> Document Uploaded</strong>
                            <p class="text-muted">
                                {{ $applicant->relative_name }}
                            </p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card card-info  ">
                        <div class="card-header">
                            <h3 class="card-title">Application Detail</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course Name</th>
                                    <th>Date</th>
                                    <th>Applied on</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($trainings as $index => $training)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td>
                                            <a href="{{ route('admin.trainings.applications_by_course2', $training->id) }}">
                                            {{ $training->course_name }}
                                            </a>
                                        </td>
                                        <td>{{ durationToDate($training->duration) }}</td>
                                        <td>{{ $training->created_at }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">No Applications...</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>

                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
