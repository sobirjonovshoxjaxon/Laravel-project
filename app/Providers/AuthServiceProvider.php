<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Post;
use App\Models\User;
use App\Policies\PostPolicy;
use App\Models\Category;
use App\Policies\CategoryPolicy;
use App\Models\Tag;
use App\Policies\TagPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Category::class => CategoryPolicy::class,
        Tag::class => TagPolicy::class,
        Comment::class => CommentPolicy::class,
        Post::class => PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        
        // Gate::define('update-post', function (User $user, Post $post) {
        //     return $user->id === $post->user_id;
        // });

        // Gate::define('delete-post', function (User $user, Post $post) {
        //     return $user->id === $post->user_id;
        // });
    }
}
