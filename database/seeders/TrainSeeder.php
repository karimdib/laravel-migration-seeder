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
        for ($i = 0; $i < 5; $i++) {
            DB::table('trains')->insert([
                'azienda' => ' Freccia Rossa',
                'stazione_di_arrivo' => 'Stazione Roma Centrale',
                'orario_di_partenza' => '19:15',
                'orario_di_arrivo' => '20:45',
                'codice_treno' => rand(13322, 403433),
                'numero_carrozze' => 35,
                'in_orario' => 'si',
                'cancellato' => 'no',
                'giorno_transito' => '2023-12-13',
            ]);
        }
    }
}
