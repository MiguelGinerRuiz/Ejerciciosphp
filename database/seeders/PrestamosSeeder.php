<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\prestamos;
use Faker\Factory as Faker;

class PrestamosSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i<10; $i++){
            $prestamo = new prestamos();
            $prestamo->libro_id =$faker->numberBetween(1,10);
            $prestamo->socio_id =$faker->numberBetween(1,10);
            $prestamo->created_at = date('Y-m-d H:m:s');
            $prestamo->updated_at = date('Y-m-d H:m:s');
            $prestamo->save();
        }
    }
}
