<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceProvider>
 */
class ServiceProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'short_description' => $this->faker->sentence(10),
            'logo' => 'https://picsum.photos/100/100?random=' . rand(1, 1000),
            'category_id' => Category::inRandomOrder()->first()?->id ?? 1,
        ];
    }
}
