<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [

            [
                'name' => 'Web Development',
                'description' => 'Services related to building and maintaining websites and web applications.',
            ],

            [
                'name' => 'Mobile App Development',
                'description' => 'Development of mobile applications for Android and iOS platforms.',
            ],

            [
                'name' => 'Digital Marketing',
                'description' => 'Marketing services focused on SEO and social media engagement.',
            ],
            
            [
                'name' => 'Graphic Design',
                'description' => 'Creative services including logo design, branding and visual content.',
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
