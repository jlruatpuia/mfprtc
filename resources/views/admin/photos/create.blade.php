@extends('layouts.admin')
@section('title', 'Add Photo')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Photo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.photos') }}">Photos</a></li>
                        <li class="breadcrumb-item active">Add New</li>
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
                            <h3 class="card-title">Add New Photo</h3>
                        </div>
                        <!-- /.card-header -->
                        <form method="post" action="{{ route('admin.photo.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="path">Photo:</label><br />
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('path') is-invalid @enderror" id="path" name="path">
                                            <label class="custom-file-label" for="path">Choose file</label>
                                        </div>
                                    </div>
                                    @error('path')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <label for="description">Description:</label>--}}
{{--                                    <input type="text" name="description" class="form-control" id="description" placeholder="Product Name">--}}
{{--                                </div>--}}
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

@endsection
@section('js-after')
    <script src="{{ asset('admin/js/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
