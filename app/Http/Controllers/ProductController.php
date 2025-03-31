<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('pages.products.show', compact('product'));
    }

    public function create()
    {
        return view('pages.products.create'); // Create view to be added
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        Product::create($validated);
        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('pages.products.edit', compact('product')); // Edit view to be added
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $product->update($validated);
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}