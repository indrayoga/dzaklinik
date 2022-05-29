<?php

namespace Database\Factories;

use App\Models\Agama;
use App\Models\JenisIdentitas;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Kota;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Provinsi;
use App\Models\StatusNikah;
use App\Models\Suku;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'no_rm' => $this->faker->randomAscii,
            'nama' => $this->faker->name,
            'jenis_identitas_id' => JenisIdentitas::factory(),
            'no_identitas' => $this->faker->random_int,
            'jenis_kelamin' => $this->faker->randomElement(['L','P']),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date('Y-m-d','1990-01-01'),
            'nama_ayah' => $this->faker->name,
            'nama_ibu' => $this->faker->name,
            'warga_negara' => $this->faker->randomElement(['wni','wna']),
            'status_nikah_id' => StatusNikah::factory(),
            'agama_id' => Agama::factory(),
            'pendidikan_id' => Pendidikan::factory(),
            'suku_id' => Suku::factory(),
            'pekerjaan_id' => Pekerjaan::factory(),
            'no_telepon' => $this->faker->phoneNumber,
            'gol_darah' => $this->faker->randomElement(['A','B','AB','O']),
            'rhesus' => $this->faker->random_int(0,1),
            'alamat' => $this->faker->address,
            'provinsi_id' => Provinsi::factory(),
            'kota_id' => Kota::factory(),
            'kecamatan_id' => Kecamatan::factory(),
            'kelurahan_id' => Kelurahan::factory(),
            'rt' => $this->faker->randomNumber(3),
            'rw' => $this->faker->randomNumber(3),
            'kodepos' => $this->faker->postcode,
        ];
    }
}
