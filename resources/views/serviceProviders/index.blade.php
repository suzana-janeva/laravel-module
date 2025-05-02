@extends('layouts.app')

@section('title', 'Service Providers')

@section('content')
    <h1 class="text-3xl mb-4">Service Providers</h1>
    
    <!-- Category filter -->
    <form action="{{ url('/service-providers') }}" method="GET" class="mb-4">
    <label for="category">Select a category</label>
        <select id="category" name="category" class="p-2 border rounded bg-white">
            <option value="">Select a category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <button type="submit" class="bg-blue-600 text-white p-2 rounded">Filter</button>
    </form>

    <!-- Service provider list -->
    <ul class="space-y-4">
        @foreach($serviceProviders as $provider)
            <li class="p-4 bg-white shadow-md rounded">
                <a href="{{ url('/service-providers/' . $provider->id) }}" class="text-xl text-blue-600 hover:underline">
                    <img src="{{ $provider->logo }}" alt="{{ $provider->name }} Logo" class="w-16 h-16 inline-block mr-4" loading="lazy">
                    <strong>{{ $provider->name }}</strong> - {{ $provider->category->name }}
                </a>
                <p class="mt-2">{{ $provider->short_description }}</p>
            </li>
        @endforeach
    </ul>
@endsection