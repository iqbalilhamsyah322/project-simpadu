<?php

namespace Database\Factories;
use App\Models\Register;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RegisterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'ktp' => fake()->randomNumber(),
            'tanggal' => fake()->datetime(),
            'agama' => fake()->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'pendidikan' => fake()->randomElement(['SD', 'SMP', 'SMA']),
            'pekerjaan' => fake()->randomElement(['Tambang', 'Nguli', 'Buruh Hari', 'Kurir', 'Ojek']),
            'pendapatan' => fake()->randomElement(['Rp.100.000 - Rp.500.000', 'Rp.50.000 - Rp.200.000', 'Rp.75.000 - Rp.300.000']),
            'penghasilan' => fake()->randomElement(['Rp.100.000', 'Rp.50.000', 'Rp.75.000']),
            'status' => fake()->randomElement(['Meninggal', 'Hidup']),
            'alamat' => fake()->streetAddress(),
            'no_hp' => fake()->randomNumber(),
            'provinsi' => fake()->randomElement(['Kalimantan Selatan']),
            'kab' => fake()->randomElement(['Banjarmasin', 'Balangan', 'Banjar', 'Barito Kuala']),
            'kec' => fake()->randomElement(['Paringin', 'Aluh-aluh', 'Alalak', 'Barito']),
            'kel' => fake()->randomElement(['Kelayan Timur', 'Barisih Selatan', 'Banjar', 'Barito']),
        ];
    }
}
