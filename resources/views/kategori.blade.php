<x-main-layout>
    <div class="bg-white p-8">

        <!-- Header Text -->
        <header class="text-left mb-10">
            <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight mb-2">
                Jelajahi Kategori
            </h1>
            <p class="text-lg text-gray-600">
                Temukan beragam konten menarik dari kategori pilihan kami.
            </p>
        </header>

        <!-- Category Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Card 1: MusicTV -->
            <div
                class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center space-x-4 mb-4">
                    <!-- Icon: Music -->
                    <i data-lucide="music" class="w-8 h-8 text-red-600"></i>
                </div>
                <div class="flex items-center space-x-4 mb-4">
                    <!-- Icon: Music -->
                    <h2 class="text-xl font-bold text-gray-900">MusicTV</h2>
                </div>
                <p class="text-gray-500 mb-6 text-sm">
                    Temukan konser live, video musik, dan wawancara eksklusif dengan artis favorit.
                </p>
                <button
                    class="w-full py-3 px-4 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-800 transition-colors duration-200 shadow-md">
                    Jelajahi
                </button>
            </div>

            <!-- Card 2: FoodTV -->
            <div
                class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center space-x-4 mb-4">
                    <!-- Icon: Utensils -->
                    <i data-lucide="utensils" class="w-8 h-8 text-red-600"></i>
                </div>
                <div class="flex items-center space-x-4 mb-4">
                    <!-- Icon: Utensils -->
                    <h2 class="text-xl font-bold text-gray-900">FoodTV</h2>
                </div>
                <p class="text-gray-500 mb-6 text-sm">
                    Saksikan acara memasak, tutorial resep, dan ulasan makanan lezat dari koki-koki.
                </p>
                <button
                    class="w-full py-3 px-4 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-800 transition-colors duration-200 shadow-md">
                    Jelajahi
                </button>
            </div>

            <!-- Card 3: StudyTV -->
            <div
                class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center space-x-4 mb-4">
                    <!-- Icon: Book Open -->
                    <i data-lucide="book-open" class="w-8 h-8 text-red-600"></i>
                </div>
                <div class="flex items-center space-x-4 mb-4">
                    <h2 class="text-xl font-bold text-gray-900">StudyTV</h2>
                </div>
                <p class="text-gray-500 mb-6 text-sm">
                    Akses materi pembelajaran, webinar, dan tips belajar dari para ahli di berbagai bidang.
                </p>
                <button
                    class="w-full py-3 px-4 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-800 transition-colors duration-200 shadow-md">
                    Jelajahi
                </button>
            </div>

            <!-- Card 4: GamesTV -->
            <div
                class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center space-x-4 mb-4">
                    <!-- Icon: Gamepad -->
                    <i data-lucide="gamepad" class="w-8 h-8 text-red-600"></i>
                </div>
                <div class="flex items-center space-x-4 mb-4">
                    <!-- Icon: Gamepad -->
                    <h2 class="text-xl font-bold text-gray-900">GamesTV</h2>
                </div>
                <p class="text-gray-500 mb-6 text-sm">
                    Nikmati streaming game, ulasan game terbaru, dan turnamen e-sports dengan.
                </p>
                <button
                    class="w-full py-3 px-4 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-800 transition-colors duration-200 shadow-md">
                    Jelajahi
                </button>
            </div>

            <!-- Card 5: MoviesTV -->
            <div
                class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center space-x-4 mb-4">
                    <!-- Icon: Clapperboard -->
                    <i data-lucide="clapperboard" class="w-8 h-8 text-red-600"></i>
                </div>
                <div class="flex items-center space-x-4 mb-4">
                    <!-- Icon: Clapperboard -->
                    <h2 class="text-xl font-bold text-gray-900">MoviesTV</h2>
                </div>
                <p class="text-gray-500 mb-6 text-sm">
                    Tonton film-film pilihan, dokumenter, dan serial TV terbaru yang menarik dan.
                </p>
                <button
                    class="w-full py-3 px-4 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-800 transition-colors duration-200 shadow-md">
                    Jelajahi
                </button>
            </div>

            <!-- Hidden placeholder for a clean layout on 2-column view -->
            <div class="hidden lg:block"></div>

        </div>
    </div>
</x-main-layout>
