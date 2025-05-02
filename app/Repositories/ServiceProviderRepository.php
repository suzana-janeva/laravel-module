<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\Models\ServiceProvider;

class ServiceProviderRepository implements ServiceProviderRepositoryInterface
{
    public function getAllServiceProviders($categoryId = null): Collection
    {
        $serviceProvider = ServiceProvider::with('category')
            ->when($categoryId, function ($query) use ($categoryId) {
                return $query->where('category_id', $categoryId);
            })
            ->get();

        return $serviceProvider;
    }

    public function getServiceProviderById($id): ServiceProvider
    {
        $serviceProvider = ServiceProvider::findOrFail($id);

        return $serviceProvider;
    }
}
