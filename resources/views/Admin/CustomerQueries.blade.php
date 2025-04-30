@extends('AdminLayout.main')

@section('section')
    <main class="flex-1 p-6 overflow-x-auto">
        <div class="w-full mt-5 bg-white rounded p-6">
            <h2 class="text-xl font-semibold">Customer Enquiries</h2>
            <p class="text-sm text-gray-700 mb-4">{{ count($fetchEnquiries) }} records found</p>
            <form action="{{ route('Customer.Enquiries') }}" method="get"
                class="w-full text-sm border flex flex-row space-x-2" autocomplete="off">
                <input type="search" class="w-4/5 border border-gray-500 py-1 px-3 rounded-md focus:outline-none"
                    placeholder="Search by name or email" name="search">
                <button class="bg-gray-900 text-white rounded-md w-1/5"><i class="fa-solid fa-magnifying-glass"></i>
                    Search</button>
            </form>
            <div class="overflow-x-auto">
                <table class="min-w-max md:w-full">
                    <tr class="border-b border-gray-500 text-sm text-gray-700 text-start">
                        <th class="p-3 font-medium">Name</th>
                        <th class="p-3 font-medium">Email</th>
                        <th class="p-3 font-medium">Message</th>
                        <th class="p-3 font-medium">Date & Time</th>
                    </tr>
                    @foreach ($fetchEnquiries as $record)
                        <tr class="border-b border-gray-300 text-xs">
                            <td class="p-3">{{ $record->name }}</td>
                            <td class="p-3">{{ $record->email }}</td>
                            <td class="p-3">{{ $record->message }}</td>
                            <td class="p-3">{{ date('d-M-Y | h:i:sa', strtotime($record->created_at)) }}
                        </tr>
                    @endforeach
                </table>
                <p class="my-5">{{$fetchEnquiries}}</p>
            </div>
        </div>
    </main>
    </div>
@endsection
