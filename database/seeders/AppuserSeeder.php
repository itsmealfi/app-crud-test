<?php

namespace Database\Seeders;

use App\Models\Appuser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppuserSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for($i=0;$i<10;$i++){
            Appuser::create([
                'userid'=>$faker->uuid,
                'name'=>$faker->name,
                'email'=>$faker->email,
                'age'=>$faker->numberBetween(18,70)
            ]);
        }
    }
}