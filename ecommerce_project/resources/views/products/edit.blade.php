<!-- resources/views/products/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" value="{{ $product->price }}" required>
        </div>
        <div>
            <label for="details">Details:</label>
            <textarea id="details" name="details">{{ $product->details }}</textarea>
        </div>
        <div>
            <label for="category">Category:</label>
            <select id="category" name="category_id">
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if($category->id === $product->category_id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection