<?php


namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;

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
        $faker = \Faker\Factory::create('en_US');

        return [
            'user_id' => User::factory(),
            'title' => $faker->sentence(6),
            'content' => $faker->paragraph(5),
        ];
    }
}
