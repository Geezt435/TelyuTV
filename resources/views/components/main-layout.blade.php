<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    {{-- Logo --}}
    <link rel="icon" type="image/png" href="/favicon.png">

    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Load Lucide Icons for aesthetic vectors -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Load Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <style>
        /* Custom font import for better aesthetics */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            /* Ensure the body doesn't cause overflow */
            overflow-x: hidden;
        }

        /* Make the main content area scrollable */
        .main-content-scroll {
            height: calc(100vh - 4rem);
            /* 100vh minus the height of the 16 (4rem) tall header */
            overflow-y: auto;
        }
    </style>
</head>

<body class="bg-gray-100 antialiased">

    <!-- Top Navbar (Fixed) -->
    <header class="bg-white border-b sticky top-0 z-40 shadow-sm h-16 flex items-center">
        <div class="max-w-full mx-auto px-6 flex items-center justify-between w-full">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div>
                    <img src="/logo.PNG" class="h-8" alt="logo">
                </div>
                <span class="font-semibold text-lg text-red-600">{{ config('app.name') }}</span>
            </div>

            <!-- Main Nav (Top-Right) -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="{{ route('dashboard') }}"
                    class="text-gray-600 hover:text-red-600 transition duration-150">Beranda</a>
                <a href="{{ route('kategori') }}"
                    class="text-gray-600 hover:text-red-600 transition duration-150">Kategori</a>
                <a href="{{ route('komunitas') }}"
                    class="text-gray-600 hover:text-red-600 transition duration-150">Komunitas</a>
            </nav>

            <!-- Right Actions -->
            <div class="flex items-center gap-6">

                {{-- Profile --}}
                <a href="{{ route('profile') }}" class="flex items-center gap-2">
                    <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : '/default-avatar.png' }}"
                        class="h-8 w-8 rounded-full object-cover">
                </a>

                {{-- Logout --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-sm text-red-600 hover:text-red-800 transition">Keluar</button>
                </form>

            </div>
        </div>
    </header>

    <!-- Main Container: Sidebar and Content Area -->
    <div class="flex">

        <!-- Left Sidebar (Fixed Width, Full Height) -->
        <aside class="w-60 bg-white border-r min-h-screen p-6 shadow-md hidden md:block">
            <ul class="space-y-3 text-sm">

                <li>
                    <a href="#music"
                        class="flex items-center p-2 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition duration-150">
                        <span class="w-5 h-5 mr-3"><i data-lucide="music" class="w-6 h-6"></i></span> MusicTV
                    </a>
                </li>

                <li>
                    <a href="#food"
                        class="flex items-center p-2 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition duration-150">
                        <span class="w-5 h-5 mr-3"><i data-lucide="utensils" class="w-6 h-6"></i></span> FoodTV
                    </a>
                </li>

                <li>
                    <a href="#study"
                        class="flex items-center p-2 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition duration-150">
                        <span class="w-5 h-5 mr-3"><i data-lucide="book" class="w-6 h-6"></i></span> StudyTV
                    </a>
                </li>

                <li>
                    <a href="#games"
                        class="flex items-center p-2 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition duration-150">
                        <span class="w-5 h-5 mr-3"><i data-lucide="gamepad-2" class="w-6 h-6"></i></span> GamesTV
                    </a>
                </li>

                <li>
                    <a href="#movies"
                        class="flex items-center p-2 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition duration-150">
                        <span class="w-5 h-5 mr-3">
                            <i data-lucide="film" class="w-6 h-6"></i>
                        </span> MoviesTV
                    </a>
                </li>

                <li>
                    <a href="{{ route('favorites') }}"
                        class="flex items-center p-2 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition duration-150">
                        <span class="w-5 h-5 mr-3">
                            <i data-lucide="heart" class="w-6 h-6"></i>
                        </span> Favoritku
                    </a>
                </li>

            </ul>
        </aside>

        <!-- Main Content Area (Fills remaining space, is scrollable) -->
        <main class="flex-1 main-content-scroll">

            {{ $slot }}

        </main>
    </div>

    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>

</body>

</html>
