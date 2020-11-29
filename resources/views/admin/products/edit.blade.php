@extends('layouts.admin')
@section('title', 'Edit Product')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.products') }}">Products</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                <div class="col-md-2">
                    <div class="card card-secondary" >
                        <div class="card-header">
                            <h6 class="card-title">{{ $product->name }}</h6>
                        </div>
                        <img class="card-img-top" src="{{ url('storage/products/thumb/' . $product->photo) }}" alt="{{ $product->photo }}">
                        <div class="card-body">
                            <h6 class="card-text">{{ $product->description }}</h6><br />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <form method="post" action="{{ route('admin.product.update', ['id' => $product->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <input name="_method" type="hidden" value="put">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product_name">Name of Product:</label>
                                    <input type="text" name="product_name" class="form-control @error('product_name') is-invalid @enderror"
                                           id="product_name" placeholder="Product Name" value="{{ $product->name }}">
                                    @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea id="description" name="description" class="form-control" placeholder="Product Description">{{ $product->description }}</textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="price">Price:</label>
                                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"
                                           id="price" placeholder="Price"  step=".01" value="{{ $product->price }}">
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="photo">New Photo:</label><br />
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="photo" name="photo">
                                            <label class="custom-file-label" for="photo">Choose file</label>
                                        </div>
                                    </div>
                                    @error('photo')
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

@endsection
@section('js-after')
    <script src="{{ asset('admin/js/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
