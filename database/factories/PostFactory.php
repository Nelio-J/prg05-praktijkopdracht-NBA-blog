<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => User::factory(),
            'category_id' => $this->faker->randomDigit(['1, 30']),
            'slug' => $this->faker->slug,
            'title'  => $this->faker->sentence,
            'image' => 'thumbnails/default-hoop-hub-thumbnail.png',
            'excerpt' => $this->faker->sentence,
            'content' => '<p>' .implode('<p></p>', $this->faker->paragraphs(6)) . '</p>',
            'status' => 'Published'
        ];
    }
}
