@extends('layouts.admin')
@section('title', 'Trainings')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Training Applications</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.trainings') }}">Trainings</a></li>
                        <li class="breadcrumb-item active">Applications</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
{{--                    <h3 class="card-title">List of Training Applications</h3>--}}
                    <div class="row">
{{--                        <div class="col">--}}
                            <form class="form-inline" method="get" action="{{ route('admin.trainings.applications_by_course') }}">
                                @csrf
{{--                                <label class="sr-only" for="course_id">Select Course</label>--}}
                                <div class="form-group mx-sm-3 mb-2">
                                    <select id="course_id" name="course_id" class="form-control select2bs4" style="width:100%">
                                        <option value=""> -- SELECT COURSE -- </option>
                                        @foreach($trainings as $training)
                                            <option value="{{ $training->id }}" {{ $training->id == $course_id ? 'selected' : '' }}>{{ $training->course_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                            </form>
{{--                        </div>--}}
                    </div>

                </div>
                <div class="card-body">

                    <table id="applicationsTable" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Applicant Name</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Phone No</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($apps as $index => $app)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="card-title">
                                                <a href="{{ route('admin.trainings.applicant', $app->id) }}">{{ $app->name }}</a>
                                            </h6>
                                        </div>
                                    </div>
                                    {{--                        <div class="row">--}}
                                    {{--                            <div class="col">--}}
                                    {{--                                <p class="text-muted">{{ $training->description }}</p>--}}
                                    {{--                            </div>--}}
                                    {{--                        </div>--}}
                                </td>
                                <td class="text-center">{{ $app->address }}</td>
                                <td class="text-center">{{ $app->contact }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="#" class="btn btn-outline-success"
                                           data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('admin.training.edit', ['id' => $app->id]) }}" class="btn btn-outline-primary"
                                           data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('admin.training.delete', ['id' => $app->id]) }}" class="btn btn-outline-danger"
                                           data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this?');">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty

                        @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
@section('css-after')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/js/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/js/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link href="{{ asset('admin/js/select2/css/select2.min.css') }}">
    <link href="{{ asset('admin/js/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" rel="stylesheet" />
@endsection
@section('js-after')
    <!-- DataTables -->
    <script src="{{ asset('admin/js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/js/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // $('#course_id').select2({
            //     theme: 'bootstrap4',
            // });
            $('#applicationsTable').DataTable({
                'responsive': true,
                'autoWidth': false,
            });

        });
    </script>
@endsection
