@extends('AuthenticationLayout.main')

@section('main')
    <div
        class="relative w-full bg-[url('https://images.unsplash.com/photo-1454496406107-dc34337da8d6?q=80&w=1600&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] h-screen bg-cover bg-no-repeat bg-center">
        <div class="absolute inset-0 bg-black/60 text-white flex justify-center items-center">
            <div class="w-80 md:w-1/2">
                <h2 class="text-2xl md:text-3xl md:mx-15 mt-15">Sign in to your account</h2>
                <p class="text-sm md:mx-15 font-light">Welcome back! Please enter your details</p>
                <form action="" class="md:mx-15 mt-10 space-y-3">
                    <div class="flex flex-col">
                        <label for="email">Email:</label>
                        <input type="email" class="bg-gray-200 text-sm px-3 py-2 rounded-md focus:outline-none"
                            placeholder="Enter your email" name="email">
                    </div>

                    <div class="flex flex-col">
                        <label for="password">Password:</label>
                        <input type="password" class="bg-gray-200 text-sm px-3 py-2 rounded-md focus:outline-none"
                            placeholder="Enter your password" name="email">
                    </div>

                    <div class="text-end font-medium">
                        <a href="">Forget Password?</a>
                    </div>

                    <div>
                        <button class="bg-white text-black w-full px-3 py-2 rounded-md">Login</button>
                    </div>

                    <div class="text-center">
                        <p class="font-light">Don't have an account? <a href="" class="font-medium">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
