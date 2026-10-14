<?php

namespace Database\Seeders;

use App\Models\sewa;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        Kategori::factory()->count(3)->create();
    }
}
