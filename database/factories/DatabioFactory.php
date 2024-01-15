<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DatabioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jumlah_sd' => fake()->randomNumber(),
            'jumlah_smp' => fake()->randomNumber(),
            'jumlah_sma' => fake()->randomNumber(),
            'jumlah_kuliah' => fake()->randomNumber(),
            'pdam' => fake()->randomElement(['Rp.100.000', 'Rp.300.000']),
            'pln' => fake()->randomElement(['Rp.100.000', 'Rp.300.000']),
            'rumah' => fake()->randomElement(['Rumah', 'Sewa', 'Kontrak']),
            'daya_pln' => fake()->randomNumber(),
            'beasiswa' => fake()->randomElement(['Iya', 'Tidak']),
        ];
    }
}
