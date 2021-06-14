<?php

namespace Database\Factories;

use App\Models\Ruang;
use Illuminate\Database\Eloquent\Factories\Factory;

class RuangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ruang::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "kodeRuang"=>$this->faker->regexify('[A-Z]{2}[0-9]{3}'),
            "namaRuang"=>$this->faker->word(),
        ];
    }
}
