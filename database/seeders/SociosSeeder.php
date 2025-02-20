<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\socios;
use Faker\Factory as Faker;

class SociosSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i<10; $i++){
            $socios = new socios();
            $socios->nombre =$faker->name;
            $socios->email =$faker->email;
            $socios->created_at = date('Y-m-d H:m:s');
            $socios->updated_at = date('Y-m-d H:m:s');
            $socios->save();
        }
    }
}
