<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@tes.com',
        //     'password' => Hash::make('dadit123'),
        // ]);
        //Batch with Faker
        
            $faker = Faker::create('id_ID');
        for($i=1; $i <=10; $i++){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('dadit123'),

            ]);
        }
    }
}
