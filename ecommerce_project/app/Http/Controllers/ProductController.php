<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create',compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate and save the product data to the database
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric|min:0',
            'details' => 'nullable|json',
            'category_id' => 'nullable|exists:categories,id', // Make sure category_id exists in the categories table
        ]);

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Validate and update the product data in the database
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric|min:0',
            'details' => 'nullable|json',
            'category_id' => 'nullable|exists:categories,id', // Make sure category_id exists in the categories table
        ]);

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}

