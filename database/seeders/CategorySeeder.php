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
            'user_id' => '1',
            'category' => 'Web dasturlash',
            'slug' => 'web-dasturlash'
        ]);

        Category::create([
            'user_id' => '1',
            'category' => 'Gaming dasturlash',
            'slug' => 'gaming-dasturlash',
        ]);

        Category::create([
            'user_id' => '1',
            'category' => 'Android dasturlash',
            'slug' => 'android-dasturlash',
        ]);

        Category::create([
            'user_id' => '1',
            'category' => 'Texnologiya',
            'slug' => 'texnologiya',
        ]);

        Category::create([
            'user_id' => '1',
            'category' => 'Desktop dasturlash',
            'slug' => 'desktop-dasturlash',
        ]);
    }
}
