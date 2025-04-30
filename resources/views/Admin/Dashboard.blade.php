@extends('AdminLayout.main')

@section('section')
    <main class="flex-1 p-6 overflow-x-auto">
        <div class="w-full mt-5 bg-white rounded p-6">
            <h2 class="text-xl font-semibold mb-5">Admin Dashboard</h2>

            <div class="grid grid-cols-3 gap-10">
                <div class="bg-gray-200 rounded-md p-5 text-center border-x-1 border-b-4 border-gray-900">
                    <h3 class="font-medium text-xl">Total Visa Applicants</h3>
                    <p class="md:text-lg">
                        <i class="fa-solid fa-users-between-lines text-blue-700"></i> 100
                    </p>
                </div>

                <div class="bg-gray-200 rounded-md p-5 text-center border-x-1 border-b-4 border-gray-900">
                    <h3 class="font-medium text-xl">Approved Applications</h3>
                    <p class="md:text-lg">
                        <i class="fa-solid fa-users-line text-green-700"></i> 100
                    </p>
                </div>

                <div class="bg-gray-200 rounded-md p-5 text-center border-x-1 border-b-4 border-gray-900">
                    <h3 class="font-medium text-xl">Reject Applications</h3>
                    <p class="md:text-lg">
                        <i class="fa-solid fa-users-slash text-red-700"></i> 100
                    </p>
                </div>
            </div>
        </div>
    </main>
    </div>
@endsection
