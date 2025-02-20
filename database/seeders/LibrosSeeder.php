<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\libros;
use Faker\Factory as Faker;

class LibrosSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i<10; $i++){
            $libro = new libros();
            $libro->titulo =$faker->name;
            $libro->autor =$faker->name;
            $libro->editorial =$faker->name;
            $libro->created_at = date('Y-m-d H:m:s');
            $libro->updated_at = date('Y-m-d H:m:s');
            $libro->save();
        }
    }
}
