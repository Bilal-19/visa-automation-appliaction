@extends('AdminLayout.main')

@section('section')
    <main class="flex-1 p-6 overflow-x-auto">
        <div class="w-full mt-5 bg-white rounded p-6">
            <h2 class="text-xl font-semibold">Rejected Visa Applicants</h2>
            <p class="text-sm text-gray-700 mb-4">{{ count($fetchApplicants) }} records found</p>
            <form action="{{ route('Visa.RejectedApplicants') }}" method="get" class="w-full text-sm border flex flex-row space-x-2"
                autocomplete="off">
                <input type="search" class="w-4/5 border border-gray-500 py-1 px-3 rounded-md focus:outline-none"
                    placeholder="Search by applicant name, nationality or length of stay" name="search">
                <button class="bg-gray-900 text-white rounded-md w-1/5"><i class="fa-solid fa-magnifying-glass"></i>
                    Search</button>
            </form>
            <div class="overflow-x-auto">
                <table class="min-w-max md:w-full">
                    <tr class="border-b border-gray-500 text-sm text-gray-700 text-start">
                        <th class="p-3 font-medium">Applicant Name</th>
                        <th class="p-3 font-medium">Nationality</th>
                        <th class="p-3 font-medium">Travel Date</th>
                        <th class="p-3 font-medium">Length of Stay</th>
                        <th class="p-3 font-medium">Status</th>
                    </tr>
                    @foreach ($fetchApplicants as $record)
                        <tr class="border-b border-gray-300 text-xs">
                            <td class="p-3">{{ $record->fullName }}</td>
                            <td class="p-3">{{ $record->nationality }}</td>
                            <td class="p-3">{{ date('d-M-Y', strtotime($record->travelDate)) }}</td>
                            <td class="p-3">{{ $record->lengthOfStay }}</td>
                            <td class="p-3 text-center">
                                @if ($record->status == 'approved')
                                    <span class="bg-green-800 text-white px-2 rounded-md">Approved</span>
                                @elseif ($record->status == 'rejected')
                                    <span class="bg-red-800 text-white px-2 rounded-md">Rejected</span>
                                @else
                                    <span class="bg-orange-800 text-white px-2 rounded-md">Pending</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
                <p class="my-5">{{$fetchApplicants}}</p>
            </div>
        </div>
    </main>
    </div>
@endsection
