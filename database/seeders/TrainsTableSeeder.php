<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++){
            $train = new Train();

            $train->azienda = $faker->word();
            $train->stazione_di_partenza = $faker->word();
            $train->stazione_di_arrivo = $faker->word();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->ean13();
            $train->numero_carrozze = $faker->numberBetween(0, 20);
            $train->in_orario = $faker->time();
            $train->cancellato = $faker->boolean();

            $train->save();
        }
    }
}
