<!-- resources/views/products/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Product Details</h1>
    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Price:</strong> {{ $product->price }}</p>
    <p><strong>Details:</strong> {{ $product->details }}</p>
@endsection