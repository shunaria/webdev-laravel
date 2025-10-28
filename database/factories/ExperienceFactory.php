<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Experience;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    protected $model = Experience::class;
    
    public function definition(): array
    {
        return [
            'Judul' => fake()->sentence(),
            'Isi' => fake()->paragraph(),
        ];
    }
}