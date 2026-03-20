<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected $model = \App\Models\Project::class;

    public function definition(): array
    {
        return [
            'label' => $this->faker->sentence(3),                // random project label
            // Faker placeholder images (width x height)
            'before' => $this->faker->imageUrl(400, 300, 'before', true, 'Before'),
            'after'  => $this->faker->imageUrl(400, 300, 'after', true, 'After'),
            'user_id' => User::inRandomOrder()->first()?->id,   // random existing user
        ];
    }
}