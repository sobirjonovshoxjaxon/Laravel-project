<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
             // 10 ta post yaratiladi
        Post::factory(10)->create()->each(function ($post) {
            // Tasodifiy 2 ta tag biriktiriladi
            $tagIds = Tag::inRandomOrder()->take(2)->pluck('id');
            $post->tags()->attach($tagIds);
        });
    }
}
