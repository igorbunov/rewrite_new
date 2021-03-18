<?php

namespace Database\Factories;

use App\Models\ProjectKeyword;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectKeywordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProjectKeyword::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_id' => rand(1, 10),
            'keyword' => $this->faker->word(),
            'repeat_plan' => rand(1, 5),
            'repeat_fact' => rand(0, 1)
        ];
    }
}
