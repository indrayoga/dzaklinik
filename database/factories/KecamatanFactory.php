<?php

namespace Database\Factories;

use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kecamatan>
 */
class KecamatanFactory extends Factory
{
    protected $model = Kecamatan::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->city,
            'kota_id' => Kota::factory()
            //
        ];
    }
}
