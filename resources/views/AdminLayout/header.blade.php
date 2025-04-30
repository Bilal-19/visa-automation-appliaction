<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Visa Web Application Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">


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

<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Topbar -->
    <header class="bg-gray-900 text-white py-4 px-6 flex justify-between items-center">
        <h1 class="text-lg md:text-2xl font-semibold">Visa Automation CRM</h1>
        <button id="menu-btn" class="md:hidden text-white text-md">
            <i class="fas fa-bars"></i>
        </button>
    </header>

    <!-- Main Layout -->
    <div class="flex flex-1">
        <!-- Sidebar -->
        <aside id="sidebar"
            class="bg-gray-900 text-black w-64 space-y-4 py-6 px-4 absolute md:relative z-10 top-16 left-0 md:top-0 md:flex md:flex-col transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out h-min-screen">
            <nav class="space-y-9 text-sm">
                <a href="{{route("Dashboard")}}"
                    class="flex items-center space-x-2 px-4 py-2 border-b {{ request()->routeIs("Dashboard") ? 'bg-white text-black rounded hover:bg-gray-200' : 'text-white' }}">
                    <i class="fa-solid fa-house"></i>
                    <span class="inline">Dashboard</span>
                </a>
                <a href="#"
                    class="flex items-center space-x-2 px-4 py-2 border-b {{ request()->routeIs('#') ? 'bg-white text-black rounded hover:bg-gray-200' : 'text-white' }}">
                    <i class="fa-solid fa-users"></i>
                    <span class="inline">Registered Users</span>
                </a>
                <a href="{{route("Visa.Applicants")}}"
                    class="flex items-center space-x-2 px-4 py-2 border-b {{ request()->routeIs('Visa.Applicants') ? 'bg-white text-black rounded hover:bg-gray-200' : 'text-white' }}">
                    <i class="fa-solid fa-users-between-lines"></i>
                    <span class="inline">Visa Applicants</span>
                </a>
                <a href="#"
                    class="flex items-center space-x-2 px-4 py-2 border-b {{ request()->routeIs('#') ? 'bg-white text-black rounded hover:bg-gray-200' : 'text-white' }}">
                    <i class="fa-solid fa-users-line"></i>
                    <span class="inline">Approve Applicants</span>
                </a>
                <a href="#"
                    class="flex items-center space-x-2 px-4 py-2 border-b {{ request()->routeIs('#') ? 'bg-white text-black rounded hover:bg-gray-200' : 'text-white' }}">
                    <i class="fa-solid fa-users-slash"></i>
                    <span class="inline">Rejected Applicants</span>
                </a>
                <a href="#"
                    class="flex items-center space-x-2 px-4 py-2 border-b {{ request()->routeIs('#') ? 'bg-white text-black rounded hover:bg-gray-200' : 'text-white' }}">
                    <i class="fa-solid fa-question"></i>
                    <span class="inline">Customer Enquiries</span>
                </a>
                <a href="#"
                    class="flex items-center space-x-2 px-4 py-2 border-b {{ request()->routeIs('#') ? 'bg-white text-black rounded hover:bg-gray-200' : 'text-white' }}">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="inline">Log Out</span>
                </a>
            </nav>
        </aside>
