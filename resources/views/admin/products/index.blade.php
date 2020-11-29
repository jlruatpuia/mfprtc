@extends('layouts.admin')
@section('title', 'Products')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card-header">
            <h3 class="card-title">Products List</h3>
            <a href="{{ route('admin.product.new') }}" class="btn btn-default float-right"><i class="fa fa-plus"></i> Add New</a>
        </div>
        <div class="card-body">
            @if($products->count() > 0)

            <table id="productsTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Product</th>
                    <th class="text-center">Price</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <div class="row">
                            <div class="col-2">
                                <img src="{{ url('storage/products/' . $product->photo) }}" class="img-circle" style="width: 64px; height: 64px" alt="">
                            </div>
                            <div class="col-10">
                                <h6 class="card-title">{{ $product->name }}</h6><br />
                                <p class="text-muted">{{ $product->description }}</p>
                            </div>
                        </div>
                    </td>
                    <td>&#x20B9; {{ $product->price }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('admin.product.edit', ['id' => $product->id]) }}" class="btn btn-primary"
                               data-toggle="tooltip" title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{ route('admin.product.delete', ['id' => $product->id]) }}" class="btn btn-danger" data-toggle="tooltip"
                               title="Delete" onclick="return confirm('Are you sure you want to delete this?');">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @else
            <div class="col">
                <div class="alert alert-info">
                    <h5><i class="icon fas fa-info"></i> Alert!</h5>
                    Currently there are no products.
                    <a href="{{ route('admin.product.new') }}">Add Now</a>
                </div>
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
