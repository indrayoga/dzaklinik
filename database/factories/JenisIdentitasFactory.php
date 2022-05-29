<?php

namespace Database\Factories;

use App\Models\JenisIdentitas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JenisIdentitas>
 */
class JenisIdentitasFactory extends Factory
{

    protected $model = JenisIdentitas::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->randomElement(['ktp','passport'])
        ];
    }
}
