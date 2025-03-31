@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Edit Product</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block">Product Name</label>
            <input type="text" name="name" value="{{ $product->name }}" required class="border p-2 w-full">
        </div>
        <div class="mb-4">
            <label for="price" class="block">Price</label>
            <input type="number" name="price" value="{{ $product->price }}" required class="border p-2 w-full">
        </div>
        <div class="mb-4">
            <label for="description" class="block">Description</label>
            <textarea name="description" class="border p-2 w-full">{{ $product->description }}</textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
@endsection