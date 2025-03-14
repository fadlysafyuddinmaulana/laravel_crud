@extends('layout')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>Description: {{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
    <a href="{{ route('products.index') }}">Back</a>
@endsection
