@extends('layout')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf @method('PUT')
        <input type="text" name="name" value="{{ $product->name }}" required>
        <input type="text" name="description" value="{{ $product->description }}">
        <input type="number" name="price" step="0.01" value="{{ $product->price }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
