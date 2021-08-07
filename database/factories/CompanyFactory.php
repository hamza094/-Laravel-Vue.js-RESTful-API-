<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->company,
            'about' => $this->faker->sentence('40'),
            'location'=>$this->faker->city,
            'type'=>$this->faker->jobTitle,
            'rg_no'=>$this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'url'=>'https://placeimg.com/640/480/tech'
        ];
    }
}
