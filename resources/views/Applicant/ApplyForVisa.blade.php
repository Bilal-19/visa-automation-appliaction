@extends('ApplicantLayout.main')

@section('main-section')
    <h3 class="text-xl md:text-3xl font-medium m-10 text-center">Visa Application Form</h3>

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

        $visaCategories = ['Tourist Visa', 'Student Visa', 'Work Visa', 'Business Visa', 'Transit Visa', 'Family Visa'];
    @endphp

    <form action="{{route('CreateApplicant')}}" class="w-80 mx-auto md:w-full md:px-10" autocomplete="off" method="post" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-4 md:gap-x-10 gap-y-5">
            <div class="flex flex-col">
                <label for="profilePicture" class="text-sm font-medium text-gray-800">Upload Profile Picture:</label>
                <input type="file" name="profilePicture" class="border-1 border-gray-400 rounded-md px-2 py-1">
            </div>

            <div class="flex flex-col">
                <label for="fullName" class="text-sm font-medium text-gray-800">Full Name:</label>
                <input type="fullName" name="fullName"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none"
                    placeholder="As shown on passport or travel documents">
            </div>

            <div class="flex flex-col">
                <label for="dateOfBirth" class="text-sm font-medium text-gray-800">Date of Birth:</label>
                <input type="date" name="dateOfBirth"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none"
                    placeholder="As shown on passport or travel documents">
            </div>

            <div class="flex flex-col">
                <label for="age" class="text-sm font-medium text-gray-800">Age:</label>
                <input type="number" name="age" min="1"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none"
                    placeholder="As shown on nationality card">
            </div>

            <div class="flex flex-col">
                <label for="nationality" class="text-sm font-medium text-gray-800">Nationality:</label>
                <select name="nationality" id="nationality"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none">
                    <option value="">----</option>
                    @foreach ($countries as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col">
                <label for="gender" class="text-sm font-medium text-gray-800">Gender:</label>
                <select name="gender" id="gender"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none">
                    <option value="">----</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="flex flex-col">
                <label for="passportIssueCountry" class="text-sm font-medium text-gray-800">Passport Issuing
                    Country:</label>
                <select name="passportIssueCountry" id="passportIssueCountry"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none">
                    <option value="">----</option>
                    @foreach ($countries as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col">
                <label for="passportIssueDate" class="text-sm font-medium text-gray-800">Passport Issue Date:</label>
                <input type="date" name="passportIssueDate"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none">
            </div>

            <div class="flex flex-col">
                <label for="passportDateExpiry" class="text-sm font-medium text-gray-800">Passport Expiry Date:</label>
                <input type="date" name="passportDateExpiry"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none">
            </div>

            <div class="flex flex-col">
                <label for="maritalStatus" class="text-sm font-medium text-gray-800">Marital Status:</label>
                <select name="maritalStatus" id="maritalStatus"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none">
                    <option value="">----</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Common Law">Common Law</option>
                </select>
            </div>

            <div class="flex flex-col">
                <label for="phoneNumber" class="text-sm font-medium text-gray-800">Phone Number:</label>
                <input type="number" name="phoneNumber"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none"
                    placeholder="As shown on your nationality card">
            </div>

            <div class="flex flex-col">
                <label for="occupation" class="text-sm font-medium text-gray-800">Occupation:</label>
                <input type="text" name="occupation"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none"
                    placeholder="Enter your occupation">
            </div>

            <div class="flex flex-col md:col-span-2">
                <label for="residenceAddress" class="text-sm font-medium text-gray-800">Residence Address:</label>
                <input type="text" name="residenceAddress"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none"
                    placeholder="Enter your residence address">
            </div>

            <div class="flex flex-col">
                <label for="travelDate" class="text-sm font-medium text-gray-800">Travel Date:</label>
                <input type="date" name="travelDate"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none">
            </div>

            <div class="flex flex-col">
                <label for="stateOfEntry" class="text-sm font-medium text-gray-800">State of Entry:</label>
                <select name="stateOfEntry" id="stateOfEntry"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none">
                    <option value="">----</option>
                    @foreach ($countries as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col">
                <label for="lengthOfStay" class="text-sm font-medium text-gray-800">Length of Stay:</label>
                <select name="lengthOfStay" id="lengthOfStay"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none">
                    <option value="">----</option>
                    <option value="Less than 180 days">Less than 180 days</option>
                    <option value="Between 180 days and 4 years">Between 180 days and 4 years</option>
                    <option value="Definitive">Definitive</option>
                </select>
            </div>

            <div class="flex flex-col">
                <label for="visaType" class="text-sm font-medium text-gray-800">Visa Type:</label>
                <select name="visaType" id="visaType"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none">
                    <option value="">----</option>
                    @foreach ($visaCategories as $val)
                        <option value="{{ $val }}">{{ $val }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col md:col-span-2">
                <label for="travelPurpose" class="text-sm font-medium text-gray-800">Travel Purpose:</label>
                <input type="text" name="travelPurpose"
                    class="text-sm border-1 border-gray-400 rounded-md px-2 py-1 focus:outline-none"
                    placeholder="Enter purpose of your travel">
            </div>
        </div>

        <button class="my-5 text-white bg-black px-3 py-1 rounded-md cursor-pointer">Submit Application</button>
    </form>
@endsection
