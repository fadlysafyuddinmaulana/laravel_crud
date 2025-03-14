@extends('layout')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Product Name" required>
        <input type="text" name="description" placeholder="Description">
        <input type="number" name="price" step="0.01" placeholder="Price" required>
        <button type="submit">Save</button>
    </form>
@endsection
