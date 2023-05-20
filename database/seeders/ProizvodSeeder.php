<?php

namespace Database\Seeders;

use App\Models\Kategorija;
use App\Models\Proizvod;
use Illuminate\Database\Seeder;

class ProizvodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategorijaIdTorte = Kategorija::where('naziv', 'Torte')->first()->id;
        $kategorijaIdKolaci = Kategorija::where('naziv', 'Kolači')->first()->id;
        $kategorijaIdKroasani = Kategorija::where('naziv', 'Kroasani')->first()->id;

        Proizvod::create([
            'naziv' => 'Čokoladna torta',
            'opis' => 'Sočna čokoladna torta sa kremastim filom.',
            'cena' => 1500.00,
            'kategorija_id' => $kategorijaIdTorte,
            'slika' => 'chocolate-cake.jpg',  
        ]);

        Proizvod::create([
            'naziv' => 'Voćna torta',
            'opis' => 'Osvežavajuća voćna torta sa sezonskim voćem.',
            'cena' => 1200.00,
            'kategorija_id' => $kategorijaIdTorte,
            'slika' => 'fruit-cake.jpg',  
        ]);

        Proizvod::create([
            'naziv' => 'Cheesecake',
            'opis' => 'Kremasti cheesecake sa ukusnim prelivom.',
            'cena' => 1300.00,
            'kategorija_id' => $kategorijaIdTorte,
            'slika' => 'cheesecake.jpg', 
        ]);

        Proizvod::create([
            'naziv' => 'Čokoladni kolač',
            'opis' => 'Bogat i čokoladni kolač za prave ljubitelje čokolade.',
            'cena' => 800.00,
            'kategorija_id' => $kategorijaIdKolaci,
            'slika' => 'chocolate-cake.jpg',  
        ]);

        Proizvod::create([
            'naziv' => 'Vanilice',
            'opis' => 'Mekane i ukusne vanilice sa pekmezom od šljiva.',
            'cena' => 300.00,
            'kategorija_id' => $kategorijaIdKolaci,
            'slika' => 'vanilice.jpg',  
        ]);

        Proizvod::create([
            'naziv' => 'Kroasani sa sirom',
            'opis' => 'Hrskavi kroasani punjeni kremastim sirom.',
            'cena' => 150.00,
            'kategorija_id' => $kategorijaIdKroasani,
            'slika' => 'croissants.jpg',  
        ]);

    }
}
