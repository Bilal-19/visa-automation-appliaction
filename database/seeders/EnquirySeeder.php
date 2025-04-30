<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class EnquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i <= 5; $i++) {
            DB::table("enquiry")->insert([
                "name" => $faker->firstName(),
                "email" => $faker->email,
                "message" => $faker->realText(50),
                "created_at" => now()
            ]);
        }
    }
}
