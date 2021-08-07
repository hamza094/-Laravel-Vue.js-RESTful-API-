<?php

namespace Database\Factories;

use App\Models\Investment;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvestmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Investment::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'=>$this->faker->numberBetween($min = 10000, $max = 90000),
            'currency'=>$this->faker->currencyCode,
            'amount'=>$this->faker->numberBetween($min = 1000, $max = 9000),
            'shares'=>$this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 60)
        ];
    }
}
