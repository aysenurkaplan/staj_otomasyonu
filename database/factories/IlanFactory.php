<?php

namespace Database\Factories;

use App\Models\Ilan;
use Illuminate\Database\Eloquent\Factories\Factory;

class IlanFactory extends Factory
{
    /**
     * The name of the factor's corresponding model.
     * 
     * @var string
     */
    protected $model=Ilan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'baslık'=>$this->faker->sentence(rand(3,5)),
            'description'=>$this->faker->text(200),
        ];
    }
}
