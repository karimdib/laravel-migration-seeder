<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

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
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('trains')->insert([
                'azienda' => $faker->name,
                'stazione_di_arrivo' => $faker->name,
                'orario_di_partenza' => $faker->time(),
                'orario_di_arrivo' => $faker->time(),
                'codice_treno' => $faker->name,
                'numero_carrozze' => 9,
                'in_orario' => $faker->boolean(),
                'cancellato' => $faker->boolean(),
                'giorno_transito' => $faker->date(),
            ]);
        }
    }
}
