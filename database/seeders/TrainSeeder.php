<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\String_;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            'azienda' => 'tren Italia',
            'stazione_di_arrivo' => 'Stazione Genova Brignole',
            'orario_di_partenza' => '10:33',
            'orario_di_arrivo' => '10:44',
            'codice_treno' => 'ffa44443',
            'numero_carrozze' => 55,
            'in_orario' => 'si',
            'cancellato' => 'no',
        ]);
    }
}
