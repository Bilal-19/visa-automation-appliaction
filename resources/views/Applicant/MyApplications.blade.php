@extends('ApplicantLayout.main')

@section('main-section')
    <div class="w-full">
        <table class="mx-auto w-3/4 my-10">
            <tr class="border text-start text-sm">
                <th class="p-2 border bg-gray-900 text-white font-medium">ID</th>
                <th class="p-2 border bg-gray-900 text-white font-medium">Applicant Name</th>
                <th class="p-2 border bg-gray-900 text-white font-medium">Passport Validity</th>
                <th class="p-2 border bg-gray-900 text-white font-medium">Applied On</th>
                <th class="p-2 border bg-gray-900 text-white font-medium">Status</th>
            </tr>

            @foreach ($fetchApplications as $record)
                <tr class="border-b text-sm">
                    <td class="p-2 font-light">{{ $record->id }}</td>
                    <td class="p-2 font-light">{{ $record->fullName }}</td>
                    <td class="p-2 font-light text-center">
                        {{ date("M d, Y", strtotime($record->passportIssueDate)) }}
                        to
                        {{ date("M d, Y", strtotime($record->passportDateExpiry)) }}
                    </td>
                    <td class="p-2 font-light text-center">
                        {{ date("d-M-Y", strtotime($record->created_at)) }}
                        at
                        {{ date("h:i a", strtotime($record->created_at)) }}
                    </td>
                    <td class="p-2 font-light">{{ $record->status }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
