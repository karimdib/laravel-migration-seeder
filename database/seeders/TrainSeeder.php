<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

use App\Models\train;
use Hamcrest\Type\IsNumeric;
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
        for ($i = 0; $i < 100; $i++) {
            DB::table('trains')->insert([
                'azienda' => $faker->randomElement(['Tren Italia', 'Intercity', 'Italo', 'Freccia Argento', 'Renfe', 'Frecciarossa 1000', 'Eurocity']),
                'stazione_di_arrivo' => $faker->randomElement(['Termini', 'Milano Centrale ', 'Napoli Centrale', 'Genova Prinicipe', 'Genova Brignole', 'Roma Centrale', 'Bologna centrale']),
                'orario_di_partenza' => $faker->dateTimeBetween('00:00:00', '11:59:59'),
                'orario_di_arrivo' => $faker->dateTimeBetween('12:00:00', '23:59:59'),
                'codice_treno' => $faker->unique()->bothify('?##?##'),
                'numero_carrozze' => $faker->numberBetween(1, 250),
                'in_orario' => $faker->boolean(),
                'cancellato' => $faker->boolean(),
                'giorno_transito' => $faker->date(),
            ]);
        }
    }
}
