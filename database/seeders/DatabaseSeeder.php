<?php

namespace Database\Seeders;

use App\Models\Categorias;
use App\Models\Materiales;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categoria = Categorias::factory(15)->create();
        $material = Materiales::factory(5)->create();
    }
}
