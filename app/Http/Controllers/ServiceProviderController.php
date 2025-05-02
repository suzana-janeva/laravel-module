<?php

namespace App\Http\Controllers;

use App\Interfaces\ServiceProviderInterface;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;
use App\Models\Category;

class ServiceProviderController extends Controller
{
    protected $serviceProvider;
    
    public function __construct(ServiceProviderInterface $serviceProvider)
    {
        $this->serviceProvider = $serviceProvider;
    }

    public function index(Request $request)
    {
        $categories = Category::all();

        $serviceProviders = $this->serviceProvider->getAllServiceProviders($request->category);

        return view('serviceProviders.index', compact('serviceProviders', 'categories'));
    }

    public function show(ServiceProvider $serviceProvider)
    {
        return view('serviceProviders.show', compact('serviceProvider'));
    }
}
