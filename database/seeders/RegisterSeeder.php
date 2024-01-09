<?php

namespace Database\Seeders;
use App\Models\Register;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Register::factory(30)->create();

        Register::create([
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
        ]);
    }
}
