<?php

namespace Database\Seeders;

use App\Models\Narudzbina;
use App\Models\Proizvod;
use App\Models\User;
use Illuminate\Database\Seeder;

class NarudzbinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $korisnikId = User::first()->id;
        $proizvodId1 = Proizvod::where('naziv', 'Čokoladna torta')->first()->id;
        $proizvodId2 = Proizvod::where('naziv', 'Vanilice')->first()->id;

        Narudzbina::create([
            'datum' => now(),
            'korisnik_id' => $korisnikId,
            'proizvod_id' => $proizvodId1,
        ]);

        Narudzbina::create([
            'datum' => now(),
            'korisnik_id' => $korisnikId,
            'proizvod_id' => $proizvodId2,
        ]);
    }
}
