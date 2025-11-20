<x-main-layout>
    <div class="max-w-4xl mx-auto py-10">

        <h1 class="text-3xl font-bold mb-6">
            Kategori: {{ $name }}
        </h1>

        @if ($posts->count() == 0)
        <p class="text-gray-500">Belum ada postingan dalam kategori ini.</p>
        @endif

        <div class="space-y-4">
            @foreach ($posts as $post)
            <div class="p-4 bg-white rounded shadow">
                <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                <p class="text-gray-600">{{ Str::limit($post->content, 150) }}</p>

                <a href="{{ route('post.show', $post->slug) }}" class="text-red-600 hover:text-red-800 font-semibold">
                    Baca Selengkapnya →
                </a>
            </div>
            @endforeach
        </div>

    </div>

</x-main-layout>
