<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    {{-- Logo --}}
    <link rel="icon" type="image/png" href="/favicon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans antialiased">

    {{-- Top Navbar --}}
    <header class="bg-white border-b sticky top-0 z-40">
        <div class="max-w-full mx-auto px-6 flex items-center justify-between h-16">

            {{-- Logo --}}
            <div class="flex items-center gap-3">
                <img src="/logo.PNG" class="h-7" alt="logo">
                <span class="font-semibold text-lg">{{ config('app.name') }}</span>
            </div>

            {{-- Main Nav --}}
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="/dashboard" class="hover:text-red-600">Beranda</a>
                <a href="/kategori" class="hover:text-red-600">Kategori</a>
                <a href="/komunitas" class="hover:text-red-600">Komunitas</a>
            </nav>

            {{-- Right Actions --}}
            <div class="flex items-center gap-6">

                {{-- Profile --}}
                <a href="/profile" class="flex items-center gap-2">
                    <img src="{{ Auth::user()->avatar ?? '/default-avatar.png' }}" class="h-8 w-8 rounded-full object-cover">
                    <span class="hidden md:inline text-sm font-medium">{{ Auth::user()->fullname }}</span>
                </a>

                {{-- Logout --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-sm text-red-600 hover:underline">Keluar</button>
                </form>

            </div>
        </div>
    </header>

    <div class="flex">

        {{-- Sidebar --}}
        <aside class="w-60 bg-white border-r min-h-screen p-6 hidden md:block">
            <ul class="space-y-4 text-sm">

                <li>
                    <a href="/dashboard" class="block hover:text-red-600">MusicTV</a>
                </li>

                <li>
                    <a href="/category/foodtv" class="block hover:text-red-600">FoodTV</a>
                </li>

                <li>
                    <a href="/category/studytv" class="block hover:text-red-600">StudyTV</a>
                </li>

                <li>
                    <a href="/category/gamestv" class="block hover:text-red-600">GamesTV</a>
                </li>

                <li>
                    <a href="/category/moviestv" class="block hover:text-red-600">MoviesTV</a>
                </li>

                <li>
                    <a href="/komunitas" class="block hover:text-red-600">Komunitas</a>
                </li>

            </ul>
        </aside>

        {{-- Main Content --}}
        <main class="flex-1 p-8">
            {{ $slot }}
        </main>
    </div>

</body>
</html>
