<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('profilePicture');
            $table->string('fullName');
            $table->date('dateOfBirth');
            $table->integer('age');
            $table->enum('nationality', [
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
            ]);
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('passportIssueCountry', [
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
            ]);
            $table->date('passportIssueDate');
            $table->date('passportDateExpiry');
            $table->enum('maritalStatus', ['Single', 'Married', 'Common Law']);
            $table->string('phoneNumber');
            $table->string('occupation');
            $table->string('residenceAddress');
            $table->date('travelDate');
            $table->enum('stateOfEntry', [
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
            ]);
            $table->enum('lengthOfStay', ['Less than 180 days', 'Between 180 days and 4 years', 'Definitive']);
            $table->enum('visaType', [
                "Tourist Visa",
                "Student Visa",
                "Work Visa",
                "Business Visa",
                "Transit Visa",
                "Family Visa",
            ]);
            $table->string('travelPurpose', 100);

            // Foreign Key Reference
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
