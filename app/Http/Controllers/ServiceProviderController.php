<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $serviceProviders = ServiceProvider::with('category')
            ->when($request->category, function ($query) use ($request) {
                return $query->where('category_id', $request->category);
            })
            ->get();

        return view('serviceProviders.index', compact('serviceProviders', 'categories'));
    }

    public function show(ServiceProvider $serviceProvider)
    {
        return view('serviceProviders.show', compact('serviceProvider'));
    }
}
