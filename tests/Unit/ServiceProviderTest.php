<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\ServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceProviderTest extends TestCase
{
    use RefreshDatabase;

    public function test_service_provider_belongs_to_category()
    {
        $category = Category::factory()->create();

        $serviceProvider = ServiceProvider::factory()->create([
            'category_id' => $category->id,
        ]);

        $this->assertInstanceOf(Category::class, $serviceProvider->category);
        
        $this->assertEquals($category->id, $serviceProvider->category->id);
    }
}