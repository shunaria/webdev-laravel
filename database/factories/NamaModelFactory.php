<?php

namespace Database\Factories;

use App\Models\NamaModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NamaModel>
 */
class NamaModelFactory extends Factory
{
    protected $model = NamaModel::class;
    
    public function definition(): array
    {
        return [
            'Judul' => fake()->sentence(),
            'Isi' => fake()->paragraph(),
        ];
    }
}