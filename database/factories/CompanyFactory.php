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
            'name' => $this->faker->name(),
            'about' => $this->faker->sentence('40'),
            'user_id'=>1,
            'location'=>'Kentuky',
            'type'=>'Busniess',
            'rg_no'=>'421004',
            'url'=>'https://mocah.org/thumbs/341907-Lancer-Rogue-Company-Video-Game.jpg'
        ];
    }
}
