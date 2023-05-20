<?php

namespace Database\Seeders;

use App\Models\Kategorija;
use Illuminate\Database\Seeder;

class KategorijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategorija::create(['naziv' => 'Torte']);
        Kategorija::create(['naziv' => 'Kolači']);
        Kategorija::create(['naziv' => 'Kroasani']);
    }
}
