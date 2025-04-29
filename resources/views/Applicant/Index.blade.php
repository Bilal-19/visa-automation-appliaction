@extends('ApplicantLayout.main')

@push("title")
    <title>Home</title>
@endpush

@section('main-section')
    <div class="w-full pt-15 px-10 md:px-20">
        <h2 class="text-3xl font-medium">Welcome to Ababeel Visa Agency - Your Trusted Visa Assistance Platform</h2>
        <p class="text-lg">Apply. Track. Travel.</p>
        <p class="text-sm font-light">
            Get your visa with ease. Whether you're applying for a tourist, student, work, or business visa, we simplify the
            process so you can focus on your journey ahead.
        </p>
    </div>

    <div class="w-full grid grid-col-1 md:grid-cols-2 gap-12 py-10 px-10 md:px-20" id="visa-process-steps">
    </div>

    <h3 class="text-center text-3xl font-medium mt-20">Why Choose Us?</h3>

    <div class="container mx-auto grid grid-col-1 md:grid-cols-4 gap-12 py-10 px-10 md:px-20">
        <div class="text-center">
            <img src="{{ asset('images/reliable.png') }}" alt="reliable" class="h-12 mx-auto">
            <h4 class="font-medium text-md">Fast & Reliable Processing</h4>
        </div>

        <div class="text-center">
            <img src="{{ asset('images/secure.webp') }}" alt="reliable" class="h-12 mx-auto">
            <h4 class="font-medium text-md">Secure Online Submissions</h4>
        </div>

        <div class="text-center">
            <img src="{{ asset('images/realtime.webp') }}" alt="reliable" class="h-12 mx-auto">
            <h4 class="font-medium text-md">Real-Time Application Status</h4>
        </div>

        <div class="text-center">
            <img src="{{ asset('images/expert.png') }}" alt="reliable" class="h-12 mx-auto">
            <h4 class="font-medium text-md">Expert Support</h4>
        </div>
    </div>

    <h3 class="text-center text-3xl font-medium mt-20">Visa Services We Offer</h3>

    <div class="container mx-auto py-10 px-10 md:px-20 grid grid-cols-2 md:grid-cols-6 gap-10" id="visa-categories">
    </div>

    @push('script')
        <script src="{{ asset('js/applicant-script.js') }}"></script>
    @endpush
@endsection
