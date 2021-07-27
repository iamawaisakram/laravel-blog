<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $hobbies = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);


        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Family Post',
            'excerpt' => 'Excerpt for my First post',
            'slug' => "my-family-post",
            'body' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>",
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'excerpt' => 'Excerpt for my Second post',
            'slug' => "my-work-post",
            'body' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>",
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My Hobby Post',
            'excerpt' => 'Excerpt for my Third post',
            'slug' => "my-hobby-post",
            'body' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>",
        ]);
    }
}
