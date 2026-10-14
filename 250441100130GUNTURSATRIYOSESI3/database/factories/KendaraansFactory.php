<?php

namespace Database\Factories;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnggotaFactory extends Factory
{
    protected $model = Kendaraan::class;

    public function definition(): array
    {
        return [
            'kendaraan_id' => Kendaraan::factory(), 
 
            'plat_nomor' => strtoupper( 
                fake()->unique()->bothify('Plat-###') 
            ), 
 
            'merek' => words(8, true), 
 
            'jenis' => enum('mobil', 'motor'), 
 
            'tarif_per_hari' => INT, 
 
            'created_at' => null,
        ];
    }
}
