<x-main-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($categories as $category)
        <div
            class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">

            <div class="flex items-center space-x-4 mb-4">
                <i data-lucide="{{ $category->favicon_logo }}" class="w-8 h-8 text-red-600"></i>
            </div>

            <div class="flex items-center space-x-4 mb-4">
                <h2 class="text-xl font-bold text-gray-900">{{ $category->name }}</h2>
            </div>

            <p class="text-gray-500 mb-6 text-sm">
                {{ $category->description }}
            </p>

            <a href="{{ route('kategori.detail', $category->name) }}"
                class="w-full block text-center py-3 px-4 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-800 transition-colors duration-200 shadow-md">
                Jelajahi
            </a>
        </div>
        @endforeach

    </div>

</x-main-layout>
