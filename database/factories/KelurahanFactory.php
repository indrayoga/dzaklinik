<?php

namespace Database\Factories;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelurahan>
 */
class KelurahanFactory extends Factory
{
    protected $model = Kelurahan::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->city,
            'kelurahan_id' => Kecamatan::factory()
        ];
    }
}
