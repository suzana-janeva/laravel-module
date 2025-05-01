<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\ServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceProviderTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_returns_view_with_service_providers_and_categories()
    {
        $category = Category::factory()->create();
        ServiceProvider::factory()->create([
            'category_id' => $category->id,
        ]);

        $response = $this->get('/service-providers');

        $response->assertStatus(200);
        $response->assertViewIs('serviceProviders.index');
        $response->assertViewHas(['serviceProviders', 'categories']);
    }

    public function test_index_filters_by_category()
    {
        $category1 = Category::factory()->create();
        $category2 = Category::factory()->create();

        $provider1 = ServiceProvider::factory()->create(['category_id' => $category1->id]);
        $provider2 = ServiceProvider::factory()->create(['category_id' => $category2->id]);

        $response = $this->get('/service-providers?category='.$category1->id);

        $response->assertStatus(200);
        $response->assertSee($provider1->name);
        $response->assertDontSee($provider2->name);
    }

    public function test_show_returns_view_with_service_provider()
    {
        $category = Category::factory()->create();

        $provider = ServiceProvider::factory()->create([
            'category_id' => $category->id,
        ]);

        $response = $this->get('/service-providers/'.$provider->id);

        $response->assertStatus(200);
        $response->assertViewIs('serviceProviders.show');
        $response->assertViewHas('serviceProvider', $provider);
    }
}