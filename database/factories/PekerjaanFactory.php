<?php

namespace Database\Factories;

use App\Models\Pekerjaan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pekerjaan>
 */
class PekerjaanFactory extends Factory
{
    protected $model = Pekerjaan::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nama' => $this->faker->jobTitle
        ];
    }
}
