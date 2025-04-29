@extends('ApplicantLayout.main')

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
    <div class="w-full grid grid-col-1 md:grid-cols-2 gap-12 py-10 px-10 md:px-20">
        <div class="border-t-1 border-x-1 border-b-4 p-5 rounded-md bg-gray-200 shadow-md text-center">
            <img src="{{ asset('images/reliable.png') }}" alt="reliable" class="h-12 mx-auto">
            <h4 class="font-medium text-lg">Fast & Reliable Processing</h4>
            <p class="font-light text-sm">We streamline the visa application process with step-by-step guidance and
                real-time status tracking.</p>
        </div>

        <div class="border-t-1 border-x-1 border-b-4 p-5 rounded-md bg-gray-200 shadow-md text-center">
            <img src="{{ asset('images/secure.webp') }}" alt="reliable" class="h-12 mx-auto">
            <h4 class="font-medium text-lg">Secure Online Submissions</h4>
            <p class="font-light text-sm">Your documents are safe with us. We follow the highest data protection standards.</p>
        </div>

        <div class="border-t-1 border-x-1 border-b-4 p-5 rounded-md bg-gray-200 shadow-md text-center">
            <img src="{{ asset('images/realtime.webp') }}" alt="reliable" class="h-12 mx-auto">
            <h4 class="font-medium text-lg">Real-Time Application Status</h4>
            <p class="font-light text-sm">Track every step of your application—from submission to approval.</p>
        </div>

        <div class="border-t-1 border-x-1 border-b-4 p-5 rounded-md bg-gray-200 shadow-md text-center">
            <img src="{{ asset('images/expert.png') }}" alt="reliable" class="h-12 mx-auto">
            <h4 class="font-medium text-lg">Expert Support</h4>
            <p class="font-light text-sm">Our team is available to guide you at each stage of the visa process.
            </p>
        </div>
    </div>

    @push('script')
        <script src="{{ asset('js/applicant-script.js') }}"></script>
    @endpush
@endsection
