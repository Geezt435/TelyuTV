<x-main-layout>
    <div class="bg-white border-b border-gray-100 shadow-sm pt-8 pb-10 mb-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-sm font-semibold text-primary-red uppercase tracking-wider mb-2">JELAJAHI KATEGORI</p>
            <h1 class="text-4xl font-extrabold text-gray-900 mb-2">{{ $category->name }}</h1>
            <p class="text-lg text-text-muted max-w-2xl">
                {{ $category->description }}
            </p>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- ======================================================= -->
        <!-- FILTER/SORTING BAR -->
        <!-- ======================================================= -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 border-b pb-4">
            <h2 class="text-xl font-semibold text-gray-700 mb-3 sm:mb-0">
                Semua Konten (120 Video)
            </h2>

            <div class="flex items-center space-x-4">
                <span class="text-sm font-medium text-gray-700">Urutkan:</span>
                <select
                    class="py-2 px-3 border border-gray-300 rounded-lg text-sm focus:ring-primary-red focus:border-primary-red transition-all">
                    <option>Terbaru</option>
                    <option>Paling Populer</option>
                    <option>Durasi Terlama</option>
                    <option>Durasi Terpendek</option>
                </select>
            </div>
        </div>

        <!-- ======================================================= -->
        <!-- CONTENT GRID -->
        <!-- ======================================================= -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

            <!-- Card 1: Ayam Bakar Madu -->


            @foreach($contents as $content)
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                <div class="relative">
                    <img src="{{ $content->thumbimg }}"
                        alt="{{ $content->title }}" class="content-image" onerror="this.onerror=null; this.src='https://placehold.co/600x338/38A169/white?text=Content+Image+Not+Found';">
                    <span
                        class="absolute top-2 right-2 bg-black bg-opacity-70 text-white text-xs font-semibold px-2 py-0.5 rounded-full">15:30</span>
                </div>
                <div class="p-4">
                    <h2 class="text-base font-bold text-gray-900 mb-2 line-clamp-2">{{ $content->title }}</h2>
                    <p class="text-xs font-medium text-text-muted mb-1">by {{ $content->user->fullname ?? 'Unknown' }}</p>
                    <h3 class="text-base text-gray-500 mb-3 line-clamp-2">{{ $content->description }}
                    </h3>
                    <div class="flex items-center text-xs text-text-muted space-x-3">
                        <div class="flex items-center">
                            <i data-lucide="eye" class="w-3 h-3 mr-1"></i>
                            <span>{{ $content->views }}</span>
                        </div>
                        <div class="flex items-center">
                            <i data-lucide="heart" class="w-3 h-3 mr-1"></i>
                            <span>45</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination Placeholder -->
        <div class="flex justify-center mt-8">
            <button
                class="py-2 px-4 bg-red-600 text-white font-semibold text-sm rounded-lg hover:bg-red-800 transition-colors duration-200 shadow-md">
                Lihat Lebih Banyak
            </button>
        </div>
    </div>

</x-main-layout>
