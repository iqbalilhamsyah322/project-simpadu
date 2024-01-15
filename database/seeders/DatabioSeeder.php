<?php

namespace Database\Seeders;
use App\Models\Databio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Databio::factory(30)->create();

        Databio::create([
        'jumlah_sd' => fake()->randomNumber(),
        'jumlah_smp' => fake()->randomNumber(),
        'jumlah_sma' => fake()->randomNumber(),
        'jumlah_kuliah' => fake()->randomNumber(),
        'pdam' => fake()->randomElement(['Rp.100.000', 'Rp.300.000']),
        'pln' => fake()->randomElement(['Rp.100.000', 'Rp.300.000']),
        'rumah' => fake()->randomElement(['Rumah', 'Sewa', 'Kontrak']),
        'daya_pln' => fake()->randomNumber(),
        'beasiswa' => fake()->randomElement(['Iya', 'Tidak']),
        ]);
    }
}
