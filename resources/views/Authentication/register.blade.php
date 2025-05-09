@extends('AuthenticationLayout.main')

@section('main')
    <div
        class="relative w-full bg-[url('https://images.unsplash.com/photo-1522199873717-bc67b1a5e32b?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] h-screen bg-cover bg-no-repeat bg-center">
        <div class="absolute inset-0 bg-black/20 text-white flex justify-center items-center">
            <div class="w-80 md:w-1/2 bg-gray-300 text-black rounded-md">
                <h2 class="text-2xl md:text-3xl md:mx-15 mt-15">Create your account</h2>
                <p class="text-sm md:mx-15 font-light">Welcome to Visa Application Portal</p>
                <form action="{{route("create.account")}}" method="post" class="md:mx-15 mt-10 space-y-3" autocomplete="off">
                    @csrf
                    <div class="flex flex-col">
                        <label for="name">Name:</label>
                        <input type="name" class="bg-gray-200 text-sm px-3 py-2 rounded-md focus:outline-none placeholder:text-black"
                            placeholder="Enter your name" name="name">
                    </div>

                    <div class="flex flex-col">
                        <label for="email">Email:</label>
                        <input type="email" class="bg-gray-200 text-sm px-3 py-2 rounded-md focus:outline-none placeholder:text-black"
                            placeholder="Enter your email" name="email">
                    </div>

                    <div class="flex flex-col">
                        <label for="password">Password:</label>
                        <input type="password" class="bg-gray-200 text-sm px-3 py-2 rounded-md focus:outline-none placeholder:text-black"
                            placeholder="Enter your password" name="password">
                    </div>

                    <div class="flex flex-col my-6">
                        <button class="bg-black text-white w-full px-3 py-2 rounded-md cursor-pointer">Create Account</button>
                    </div>

                    <div class="text-center mb-10">
                        <p class="font-light">Already have an account? <a href="{{route("login")}}" class="font-medium">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
