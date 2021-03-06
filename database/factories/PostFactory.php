<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'slug' => $this->faker->unique()->slug(),
            'title' => $this->faker->sentence(),
            'excerpt' => collect($this->faker->paragraphs(2))->map(function ($item) {
                return "<p>{$item}</p>";
            })->implode(''),
            'body' => collect($this->faker->paragraphs(12))->map(function ($item) {
                return "<p>{$item}</p>";
            })->implode(''),
        ];
    }
}
