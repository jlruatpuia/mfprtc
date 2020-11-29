@extends('layouts.admin')
@section('title', 'Photo Gallery')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Photo Gallery</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Photo Gallery</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card-header">
            <h3 class="card-title">Photo Gallery</h3>
{{--            <a href="{{ route('admin.photo.new') }}" class="btn btn-default float-right">--}}
{{--                <i class="fa fa-plus"></i> Add New</a>--}}
            <a href="javascript:void(0);" class="btn btn-default float-right" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add New</a>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    @if($photos->count() > 0)
                        @foreach($photos as $photo)
                            <div class="col-xs-6 col-md-3">
                                <div class="card">

                                    <a href="{{ url('storage/gallery/' . $photo->path) }}" data-lightbox="photos">
                                        <img class="card-img-top" src="{{ url('storage/gallery/thumb/' . $photo->path) }}" alt="">
                                    </a>
{{--                                    <div class="card-body">--}}
{{--                                        <p class="card-text">{{ $photo->description }}</p>--}}
{{--                                    </div>--}}
                                    <div class="card-footer">
                                        <span class="float-right">
                                            <a href="{{ route('admin.photo.delete', ['id' => $photo->id]) }}" class="mr-2 text-danger" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this?');">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </span>
{{--                                        <div class="btn-group float-right" role="group" aria-label="Basic example">--}}
{{--                                            <a href="#" class="mr-2 text-primary" data-toggle="tooltip" title="Edit"> <i class="fa fa-edit"></i> </a>--}}
{{--                                            --}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col">
                            <div class="alert alert-info">
                                <h5><i class="icon fas fa-info"></i> Alert!</h5>
                                Currently there are no photos.
                                <a href="{{ route('admin.photo.new') }}">Add Now</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-footer">
            <span class="float-right">{{ $photos->links() }}</span>
        </div>
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                --}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    --}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>
    <div class="modal fade" id="addModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Photo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route('admin.photo.store') }}" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
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
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <br />
    <!-- /.content -->
@endsection
@section('css-after')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
@endsection
@section('js-after')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="{{ asset('admin/js/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection

