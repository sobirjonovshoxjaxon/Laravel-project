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
            'user_id' => '1',
            'tag' => 'Xokim',
        ]);
        Tag::create([
            'user_id' => '1',
            'tag' => 'Yangiliklar',
        ]);
        Tag::create([
            'user_id' => '1',
            'tag' => 'Samolyot',
        ]);
        Tag::create([
            'user_id' => '1',
            'tag' => 'IT yangiliklar',
        ]);
        Tag::create([
            'user_id' => '1',
            'tag' => 'Texnologiya',
        ]);
        Tag::create([
            'user_id' => '1',
            'tag' => 'shohjahon',
        ]);
    }
}
