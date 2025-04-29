@extends('ApplicantLayout.main')

@section('main-section')
    <h3 class="text-3xl font-medium text-center pt-10">Frequently Asked <span class="text-teal-500">Questions</span></h3>
    <div class="w-full" id="faqs">
    </div>

    @push("script")
        <script src="{{asset("js/faqs.js")}}"></script>
    @endpush
@endsection
