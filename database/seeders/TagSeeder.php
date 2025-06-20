<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'tag' => 'Xokim',
        ]);
        Tag::create([
            'tag' => 'Yangiliklar',
        ]);
        Tag::create([
            'tag' => 'Samolyot',
        ]);
        Tag::create([
            'tag' => 'IT yangiliklar',
        ]);
        Tag::create([
            'tag' => 'Texnologiya',
        ]);
        Tag::create([
            'tag' => 'shohjahon',
        ]);
    }
}
