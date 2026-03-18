<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entrenador;
use App\Models\Sessio;

class FitXarxaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        $entrenador = Entrenador::create([
            'nom' => 'Joan',
            'cognoms' => 'Garcia',
            'imatge' => 'null'
        ]);

        Sessio::create([
            'titol' => 'Spinning',
            'dataP' => '2026-06-10',
            'places' => 20,
            'entrenador_id' => $entrenador->id
        ]);

        Sessio::create([
            'titol' => 'Zumba',
            'dataP' => '2026-06-11',
            'places' => 25,
            'entrenador_id' => $entrenador->id
        ]);
    }
}
