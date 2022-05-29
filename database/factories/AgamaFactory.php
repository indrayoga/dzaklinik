<?php

namespace Database\Factories;

use App\Models\Agama;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agama>
 */
class AgamaFactory extends Factory
{

    protected $model = Agama::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nama' => $this->faker->randomElement(['islam','kristen','katolik','hindhu','budha','konghucu'])
        ];
    }
}
