<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Make sure to include the Product model

class ProductController extends Controller
{
    public function __construct()
    {
        // Add the following line to enable the auth middleware
        $this->middleware('auth');
    }

    // Display a listing of the products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Show the form for creating a new product
    public function create()
    {
        return view('products.create');
    }

    // Store a newly created product in the database
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        // Create a new product
        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully');
    }

    // Display the specified product
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Show the form for editing the specified product
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Update the specified product in the database
    public function update(Request $request, Product $product)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        // Update the product
        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    // Remove the specified product from the database
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
