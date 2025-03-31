@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Products</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach($products as $product)
            <div class="border p-4">
                <img src="/images/sample-product.jpg" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                <h3 class="text-lg font-semibold mt-2">{{ $product->name }}</h3>
                <p class="text-gray-600">${{ $product->price }}</p>
                <a href="{{ route('products.show', $product->id) }}" class="mt-2 inline-block bg-blue-500 text-white px-4 py-2 rounded">View</a>
            </div>
        @endforeach
    </div>
@endsection