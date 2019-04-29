@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>List of Products 
            <small><a href="{{ route('products.create') }}" class="btn btn-info">New Product</a></small>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="search col-md-offset-7">
            <form action="{{ route('products.index') }}" method="get" >
                <div class="input-group mb-5" style="display: flex;">
                    <input type="text" class="form-control" placeholder="Search Product" name="q">
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead class="thead-dark" >
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
            <th>Barcode</th>
            <th style="width: 16%"> Action</th>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->type }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->barcode }}</td>
                    <td >
                       
                        <form method="POST" action="{{ route('products.destroy', $product->id) }}" style="display: flex;justify-content: space-between">
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>

@endsection