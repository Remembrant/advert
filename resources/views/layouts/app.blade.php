<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Leaflet CSS & JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                @session('message')
                    
                    <div id="success-message" class="hidden max-w-lg mx-auto mt-4 bg-green-100 text-green-800 p-4 rounded-lg border border-green-400 shadow-lg">
                        {{session('message')}}
                    </div>
                @endsession
                {{ $slot }}
            </main>
        </div>
    </body>
    <script>
        // Function to show the success message
        function showSuccessMessage() {
            const message = document.getElementById("success-message");
            message.classList.remove("hidden");
    
            // Hide after 3 seconds
            setTimeout(() => {
                message.classList.add("hidden");
            }, 3000);
        }
    
        // Call this function when needed
        showSuccessMessage();
    </script>
</html>
