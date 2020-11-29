@extends('layouts.admin')
@section('title', 'Trainings')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Trainings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Trainings</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card-header">
            <h3 class="card-title">List of Training</h3>
            <a href="{{ route('admin.training.new') }}" class="btn btn-default float-right"><i class="fa fa-plus"></i> Add New</a>
        </div>
        <div class="card-body">
            @if($trainings->count() > 0)

                <table id="productsTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Course Name</th>
                        <th class="text-center">Date</th>
                        <th class="text-center"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($trainings as $index => $training)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                    <h6 class="card-title">{{ $training->course_name }}</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <p class="text-muted">{{ $training->description }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">{{ $training->duration }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('admin.training.edit', ['id' => $training->id]) }}" class="btn btn-primary"
                                       data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('admin.training.delete', ['id' => $training->id]) }}" class="btn btn-danger"
                                       data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this?');">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
        @endif
    </section>
    <!-- /.content -->
@endsection
@section('css-after')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/js/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/js/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('js-after')
    <!-- DataTables -->
    <script src="{{ asset('admin/js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(function () {
            $("#productsTable").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
