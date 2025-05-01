<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            DB::table("users")->insert([
                "name" => $faker->firstName(),
                "email" => $faker->email,
                "password" => Hash::make("12345678"),
                "created_at" => now()
            ]);
        }
    }
}
