<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Will-Consulting') }}</title>
        
        <link href="{{ asset('admin/images/favicon/favicon.png') }}" rel="shortcut icon" type="image/png">
        <link href="{{ asset('admin/images/favicon.png') }}" rel="apple-touch-icon" sizes="57x57">
        <link href="{{ asset('admin/images/favicon.png') }}" rel="apple-touch-icon" sizes="72x72">
        <link href="{{ asset('admin/images/favicon.png') }}" rel="apple-touch-icon" sizes="114x114">
        <link href="{{ asset('admin/images/favicon.png') }}" rel="apple-touch-icon" sizes="144x144">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="#">
                    <img class="w-100" src="admin/images/1.jpg" alt="Img">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
