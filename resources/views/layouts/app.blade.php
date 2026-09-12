<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Hotel Transilvânia') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-slate-900 text-slate-100 selection:bg-purple-600 selection:text-white">
        <div class="min-h-screen bg-slate-900">
            @include('layouts.navigation')

            @isset($header)
                <header class="bg-slate-800 border-b border-slate-700/60 shadow-lg">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                        <div class="text-xl font-bold tracking-tight text-purple-400">
                            {{ $header }}
                        </div>
                    </div>
                </header>
            @endisset

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
                @if (session('success'))
                    <div class="bg-emerald-900/80 border border-emerald-500 text-emerald-200 px-4 py-3 rounded-xl shadow-lg flex items-center justify-between" role="alert">
                        <span class="block sm:inline">✨ {{ session('success') }}</span>
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-rose-900/80 border border-rose-500 text-rose-200 px-4 py-3 rounded-xl shadow-lg flex items-center justify-between" role="alert">
                        <span class="block sm:inline">⚠️ {{ session('error') }}</span>
                    </div>
                @endif
            </div>

            <main class="py-6">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>