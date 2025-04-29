<?php

use App\Http\Controllers\ServiceProviderController;
use Illuminate\Support\Facades\Route;

Route::get('/service-providers', [ServiceProviderController::class, 'index']);
Route::get('/service-providers/{serviceProvider}', [ServiceProviderController::class, 'show']);
