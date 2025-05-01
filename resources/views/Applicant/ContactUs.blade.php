@extends('ApplicantLayout.main')

@section('main-section')
    <div
        class="w-full flex flex-row justify-center items-center h-screen bg-[url('https://images.unsplash.com/photo-1655722724451-0df658a2ab23?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover">
        <div class="w-80 md:w-1/2 bg-white mx-auto p-5 rounded-md">
            <h3 class="text-3xl font-medium text-center text-teal-500">Contact Us</h3>
            <form action="{{ route('CreateEnquiry') }}" method="post" autocomplete="off">
                @csrf
                <input type="text" name="userName" placeholder="Enter your name"
                    class="text-sm border-x-1 border-t-1 border-b-4 border-gray-700 w-full my-3 px-3 py-2 rounded-md focus:outline-none">
                <input type="email" name="userEmail" placeholder="Enter your email"
                    class="text-sm border-x-1 border-t-1 border-b-4 border-gray-700 w-full my-3 px-3 py-2 rounded-md focus:outline-none">
                <textarea rows="5" name="userMessage" placeholder="Enter your message"
                    class="text-sm border-x-1 border-t-1 border-b-4 border-gray-700 w-full my-3 px-3 py-2 rounded-md focus:outline-none resize-none"></textarea>
                <button class="text-white bg-gray-900 px-3 py-2 rounded-md w-full cursor-pointer"><i class="fa-solid fa-paper-plane"></i> Send Message</button>
            </form>
        </div>
    </div>
@endsection
