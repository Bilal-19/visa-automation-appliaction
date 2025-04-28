<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    {{-- Google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

        {{-- Font Awesome CDN --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <div class="container-fluid">
        <nav class="dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="..." class="h-8" alt="Iron Pulse Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
                        Automate Visa Applications
                    </span>
                </a>

                <button
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded=true>
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>

                <div class="w-full md:block md:w-auto text-sm" id="navbar-default">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="/"
                                class="block py-1 px-3 rounded-sm md:bg-transparent dark:text-white font-regular hover:font-light">
                                Apply for Visa
                            </a>
                        </li>
                        <li>
                            <a href="/"
                                class="block py-1 px-3 rounded-sm md:bg-transparent dark:text-white font-regular hover:font-light">
                                Track Application
                            </a>
                        </li>
                        <li>
                            <a href="/"
                                class="block py-1 px-3 rounded-sm md:bg-transparent dark:text-white font-regular hover:font-light">
                                FAQs
                            </a>
                        </li>
                        <li>
                            <a href="/"
                                class="block py-1 px-3 rounded-sm md:bg-transparent dark:text-white font-regular hover:font-light">
                                Contact
                            </a>
                        </li>

                        <li>
                            @if (Auth::check())
                                <a href="{{route("logOut")}}" class="block py-1 px-3 text-gray-900 rounded-sm bg-gray-100">
                                    <i class="fa-solid fa-person-walking-arrow-right"></i>
                                    Log Out</a>
                            @else
                                <a href="{{route("login")}}" class="block py-1 px-3 text-gray-900 rounded-sm bg-gray-100">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    Log In</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
