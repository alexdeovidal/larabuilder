@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
    <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block">Name</label>
            <input type="text" name="name" required class="border p-2 w-full">
        </div>
        <div class="mb-4">
            <label for="email" class="block">Email</label>
            <input type="email" name="email" required class="border p-2 w-full">
        </div>
        <div class="mb-4">
            <label for="message" class="block">Message</label>
            <textarea name="message" required class="border p-2 w-full"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Send</button>
    </form>
@endsection