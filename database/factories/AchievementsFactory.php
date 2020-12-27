<?php

namespace Database\Factories;

use App\Models\Achievements;
use Illuminate\Database\Eloquent\Factories\Factory;

class AchievementsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Achievements::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
        ];
    }
}
