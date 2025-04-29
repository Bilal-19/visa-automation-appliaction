@extends('ApplicantLayout.main')

@section('main-section')
    <h3 class="text-3xl font-medium m-10">Personal Information</h3>

    @php
        $countries = [
            'American',
            'Canadian',
            'Chinese',
            'Japanese',
            'British',
            'German',
            'French',
            'Italian',
            'Spanish',
            'Russian',
            'Brazilian',
            'Mexican',
            'Australian',
            'South Korean',
            'Nigerian',
            'Egyptian',
            'Turkish',
            'Indonesian',
            'Pakistani',
        ];
    @endphp

    <form action="" class="w-full px-10" autocomplete="off">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-10 gap-y-5">
            <div class="flex flex-col">
                <label for="profilePicture" class="text-sm font-medium text-gray-800">Upload Profile Picture:</label>
                <input type="file" name="profilePicture" class="border-1 border-gray-400 rounded-md px-2 py-1">
            </div>

            <div class="flex flex-col">
                <label for="fullName" class="text-sm font-medium text-gray-800">Enter Your Full Name:</label>
                <input type="fullName" name="fullName"
                    class="border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none"
                    placeholder="As shown on passport or travel documents">
            </div>

            <div class="flex flex-col">
                <label for="dateOfBirth" class="text-sm font-medium text-gray-800">Select Date of Birth:</label>
                <input type="date" name="dateOfBirth"
                    class="border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none"
                    placeholder="As shown on passport or travel documents">
            </div>

            <div class="flex flex-col">
                <label for="age" class="text-sm font-medium text-gray-800">Enter Your Age:</label>
                <input type="number" name="age" min="1"
                    class="border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none"
                    placeholder="As shown on nationality card">
            </div>

            <div class="flex flex-col">
                <label for="nationality" class="text-sm font-medium text-gray-800">Select Nationality:</label>
                <select name="nationality" id="nationality"
                    class="border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none">
                    <option value="">----</option>
                    @foreach ($countries as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
@endsection
