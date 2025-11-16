<x-main-layout>


    <div class="bg-white rounded-xl shadow p-10 border border-purple-200">
        <h2 class="text-2xl font-semibold mb-6">Profil Pengguna</h2>

        <div class="flex items-start gap-10">

            {{-- Left column: avatar --}}
            <div class="flex flex-col items-center w-60">
                <img src="{{ $user->avatar ? asset('storage/'.$user->avatar) : 'https://via.placeholder.com/120' }}"
                    class="w-32 h-32 rounded-full object-cover shadow">

                <form action="{{ route('profile.avatar') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                    @csrf
                    <input type="file" name="avatar" class="mb-2">
                    <button class="px-4 py-2 bg-red-600 text-white rounded-md text-sm">
                        Ganti Avatar
                    </button>
                </form>
            </div>

            {{-- Right column: details --}}
            <div class="flex-1 grid grid-cols-2 gap-6">

                <div>
                    <h3 class="text-lg font-bold mb-2">Detail Pengguna</h3>

                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <label class="block mb-1 text-sm font-semibold">Nama Lengkap</label>
                        <input type="text" name="fullname" value="{{ $user->fullname }}"
                            class="w-full border rounded-md px-3 py-2 mb-4">

                        <label class="block mb-1 text-sm font-semibold">Email</label>
                        <input type="email" value="{{ $user->email }}" disabled
                            class="w-full border rounded-md px-3 py-2 mb-4 bg-gray-100">

                        <label class="block mb-1 text-sm font-semibold">Bio</label>
                        <textarea name="bio" rows="4"
                            class="w-full border rounded-md px-3 py-2 mb-4">{{ $user->bio }}</textarea>

                        <label class="block mb-1 text-sm font-semibold">Lokasi</label>
                        <input type="text" name="location" value="{{ $user->location }}"
                            class="w-full border rounded-md px-3 py-2 mb-4">

                        <button class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md mt-2">
                            Edit Profil
                        </button>
                    </form>

                </div>

                <div>
                    <h3 class="text-lg font-bold mb-2">Pengaturan Preferensi</h3>

                    <form action="{{ route('profile.preferences') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <x-toggle name="email_notify" :checked="$user->email_notify" label="Notifikasi Email" />
                        <x-toggle name="dark_mode" :checked="$user->dark_mode" label="Aktifkan Mode Gelap" />
                        <x-toggle name="adult_content" :checked="$user->adult_content"
                            label="Sembunyikan Konten Dewasa" />

                        <label class="block mb-1 text-sm font-semibold mt-4">Bahasa Antarmuka</label>
                        <select name="language" class="w-full border rounded-md px-3 py-2">
                            <option value="id" @selected($user->language=='id')>Bahasa Indonesia</option>
                            <option value="en" @selected($user->language=='en')>English</option>
                        </select>

                        <button class="mt-4 px-4 py-2 bg-red-600 text-white rounded-md">
                            Simpan Preferensi
                        </button>
                    </form>
                </div>

            </div>

        </div>

    </div>
</x-main-layout>
