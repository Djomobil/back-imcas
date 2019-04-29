@extends('layout')

@section('content')


    <h1>Edit Product</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif

    <form method="post" action="{{ route('products.update', $product->id) }}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Name : </label>
            <input type="text" class="form-control" id="name" placeholder="Name of product" value="{{ $product->name }}" name="name">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="type">Type : </label>
            <input type="text" class="form-control" id="type" placeholder="Type of product" value="{{ $product->type }}" name="type">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="price">Price : </label>
            <input type="number" class="form-control" id="price" placeholder="Price of product" value="{{ $product->price }}" name="price">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="barcode">Barcode : </label>
            <input type="text" class="form-control" id="barcode" placeholder="Barcode of product" value="{{ $product->barcode }}" name="barcode">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <button type="submit" class="btn btn-primary">Save product</button>
    </form>

@endsection