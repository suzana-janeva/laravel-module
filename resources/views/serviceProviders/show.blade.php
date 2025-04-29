@extends('layouts.app')

@section('title', 'Service Provider Details')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <div class="container mx-auto p-4">
            <h1 class="text-4xl font-bold mb-6">{{ $serviceProvider->name }}</h1>

            <div class="bg-white p-6 shadow-md rounded-lg mb-6">
                <div class="flex">
                    <img src="{{ $serviceProvider->logo }}" alt="{{ $serviceProvider->name }} Logo" class="w-32 h-32 object-cover rounded-full mr-6">
                    <div>
                        <h2 class="text-2xl font-semibold">{{ $serviceProvider->name }}</h2>
                        <p class="text-gray-600">{{ $serviceProvider->short_description }}</p>
                        <p class="text-blue-600 mt-4">{{ $serviceProvider->category->name }}</p>
                    </div>
                </div>
        </div>
    </div>
@endsection