<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Category::create([
            'category' => 'Web dasturlash',
            'slug' => 'web-dasturlash'
        ]);

        Category::create([
            'category' => 'Gaming dasturlash',
            'slug' => 'gaming-dasturlash',
        ]);

        Category::create([
            'category' => 'Android dasturlash',
            'slug' => 'android-dasturlash',
        ]);

        Category::create([
            'category' => 'Texnologiya',
            'slug' => 'texnologiya',
        ]);

        Category::create([
            'category' => 'Desktop dasturlash',
            'slug' => 'desktop-dasturlash',
        ]);
    }
}
