<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\ServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_category_has_many_service_providers()
    {
        $category = Category::factory()->create();

        $serviceProviders = ServiceProvider::factory()->count(3)->create([
            'category_id' => $category->id,
        ]);

        $this->assertCount(3, $category->serviceProviders);
    }
}