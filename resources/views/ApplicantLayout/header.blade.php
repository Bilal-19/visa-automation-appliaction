<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('title')
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    {{-- Google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    {{-- Font Awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: "Open Sans", sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif;
        }
    </style>
</head>

<body>
    <div class="w-full bg-gray-900 text-white flex flex-col md:flex-row justify-between md:items-center h-fit py-3.5">
        <div class="flex items-center justify-between ml-2">
            <a href="/">
                <img src="{{ asset('images/header_logo.png') }}" alt="Ababeel Logo" />
            </a>
            <button aria-label="toggle-button"
                class="sm:block md:hidden mx-5 inline-flex size-10 items-center justify-center transition hover:cursor-pointer bg-white text-[#051527] rounded-md"
                id="menu-toggle" aria-controls="navbar-default" aria-expanded="false">
                <i class="fas fa-bars text-md"></i>
            </button>
        </div>

        <div class="flex flex-col md:flex-row mx-5 md:m-0 space-x-5 hidden md:block" id="navbar-default">
            <a href="{{ route('ApplyForVisa') }}"
                class="hover:underline underline-offset-4 text-md my-1 md:my-0 {{ request()->routeIs('ApplyForVisa') ? 'text-teal-300 underline' : '' }}">Apply
                for Visa</a>
            <a href="{{ route('MyApplications') }}"
                class="hover:underline underline-offset-4 text-md my-1 md:my-0 {{ request()->routeIs('MyApplications') ? 'text-teal-300 underline' : '' }}">My
                Applications</a>
            <a href="#" class="hover:underline underline-offset-4 text-md my-1 md:my-0">FAQs</a>
            <a href="#" class="hover:underline underline-offset-4 text-md my-1 md:my-0">Contact Us</a>
        </div>

        <div class="mx-5 space-x-4 hidden md:block">
            @if (Auth::check())
                <a href="{{ route('logOut') }}" class="block py-1 px-3 text-gray-900 rounded-sm bg-gray-100">
                    <i class="fa-solid fa-person-walking-arrow-right"></i>
                    Log Out</a>
            @else
                <a href="{{ route('login') }}" class="block py-1 px-3 text-gray-900 rounded-sm bg-gray-100">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    Log In</a>
            @endif
        </div>

    </div>
