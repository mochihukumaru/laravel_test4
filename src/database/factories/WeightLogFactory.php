<?php

namespace Database\Factories;

use App\Models\WeightLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = WeightLog::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'date' => $this->faker->dateTimeBetween('-1year','now')->format('Y-m-d'),
            'weight' => $this->faker->randomFloat(1,50,100),
            'calories' => $this->faker->numberBetween(1500,3000),
            'exercise_time' => $this->faker->time('H:i:s'),
            'exercise_content' => $this->faker->sentence(),
        ];
    }
}
