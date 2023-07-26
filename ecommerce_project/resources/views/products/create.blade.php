<!-- resources/views/products/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        <div>
            <label for="details">Details:</label>
            <textarea id="details" name="details"></textarea>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection