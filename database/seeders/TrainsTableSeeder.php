<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 1; $i <= 15; $i++) {
            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->dateTime();
            $train->orario_arrivo = $faker->dateTime();
            $train->codice_treno = $faker->randomNumber(6);
            $train->totale_carrozze = $faker->randomNumber(2);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();


            $train->save();
        }
    }
}
