<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csv = fopen(base_path("csv/ultima.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csv)) !== FALSE) {
            if (!$firstline) {
                Student::create([
                    "name" => $data['0'],
                    "code" => $data['1']
                ]);
            }
            $firstline = false;
        }
        fclose($csv);
    }
}
