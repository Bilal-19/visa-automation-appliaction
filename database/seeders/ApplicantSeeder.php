<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i <= 3; $i++) {
            DB::table("applicants")->insert([
                "profilePicture" => $faker->imageUrl(),
                "fullName" => $faker->name,
                "dateOfBirth" => $faker->dateTimeBetween("-50 years", "-1 year"),
                "age" => $faker->numberBetween(1, 85),
                "nationality" => $faker->randomElement([
                    "American",
                    "Canadian",
                    "Chinese",
                    "Japanese",
                    "British",
                    "German",
                    "French",
                    "Italian",
                    "Spanish",
                    "Russian",
                    "Brazilian",
                    "Mexican",
                    "Australian",
                    "South Korean",
                    "Nigerian",
                    "Egyptian",
                    "Turkish",
                    "Indonesian",
                    "Pakistani"
                ]),
                "gender" => $faker->randomElement(["Male", "Female"]),
                "passportIssueCountry" => $faker->randomElement([
                    "American",
                    "Canadian",
                    "Chinese",
                    "Japanese",
                    "British",
                    "German",
                    "French",
                    "Italian",
                    "Spanish",
                    "Russian",
                    "Brazilian",
                    "Mexican",
                    "Australian",
                    "South Korean",
                    "Nigerian",
                    "Egyptian",
                    "Turkish",
                    "Indonesian",
                    "Pakistani"
                ]),
                "passportIssueDate" => $faker->dateTimeBetween("-1 year", now(), "Asia/Karachi"),
                "passportDateExpiry" => $faker->dateTimeBetween("1 year", "+ 5 years", "Asia/Karachi"),
                "maritalStatus" => $faker->randomElement([
                    "Single",
                    "Married",
                    "Common Law"
                ]),
                "phoneNumber" => $faker->phoneNumber(),
                "occupation" => $faker->randomElement(["Software Developer", "Electrician", "Mechanic"]),
                "residenceAddress" => $faker->streetAddress(),
                "travelDate" => $faker->dateTimeBetween(now(), "+ 5 years", "Asia/Karachi"),
                "stateOfEntry" => $faker->randomElement([
                    "American",
                    "Canadian",
                    "Chinese",
                    "Japanese",
                    "British",
                    "German",
                    "French",
                    "Italian",
                    "Spanish",
                    "Russian",
                    "Brazilian",
                    "Mexican",
                    "Australian",
                    "South Korean",
                    "Nigerian",
                    "Egyptian",
                    "Turkish",
                    "Indonesian",
                    "Pakistani"
                ]),
                "lengthOfStay" => $faker->randomElement(['Less than 180 days', 'Between 180 days and 4 years', 'Definitive']),
                "visaType" => $faker->randomElement([
                    "Tourist Visa",
                    "Student Visa",
                    "Work Visa",
                    "Business Visa",
                    "Transit Visa",
                    "Family Visa",
                ]),
                "travelPurpose" => $faker->realText(50),
                "status" => $faker->randomElement([
                    "pending",
                    "approved",
                    "rejected"
                ]),
                "userID" => 1
            ]);
        }
    }
}
