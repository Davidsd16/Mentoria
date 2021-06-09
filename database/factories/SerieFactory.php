<?php

namespace Database\Factories;

use App\Models\Serie;
use Illuminate\Database\Eloquent\Factories\Factory;

class SerieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Serie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->jobTitle(),
            'cast'=> $this->faker->name(),
            'seasson'=> $this->faker->randomNumber(1,20),
            'description'=> $this->faker->paragraph(1),
            'opinion'=> $this->faker->paragraph(1),
        ];
    }
}
