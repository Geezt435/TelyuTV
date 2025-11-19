<x-guest-layout>
    <div class="flex justify-center py-16">
        <div class="bg-white w-full max-w-md shadow-md rounded-xl p-10">

            <h1 class="text-center text-xl font-bold mb-6">Daftar ke TelyuTV</h1>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{-- Full Name --}}
                <label class="block text-sm font-semibold mb-1">Nama Lengkap</label>
                <input type="text" name="fullname" value="{{ old('fullname') }}"
                    class="w-full border rounded-md px-3 py-2 mb-4"
                    placeholder="Name Lengkap..." required>
                @error('fullname')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                {{-- Email --}}
                <label class="block text-sm font-semibold mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="w-full border rounded-md px-3 py-2 mb-4"
                    placeholder="contoh@telkomuniversity.ac.id" required>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                {{-- Password --}}
                <label class="block text-sm font-semibold mb-1">Kata Sandi</label>
                <input type="password" name="password"
                    class="w-full border rounded-md px-3 py-2 mb-4" required>
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                {{-- Confirm Password --}}
                <label class="block text-sm font-semibold mb-1">Konfirmasi Kata Sandi</label>
                <input type="password" name="password_confirmation"
                    class="w-full border rounded-md px-3 py-2 mb-6" required>
                @error('password_confirmation')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                {{-- Submit --}}
                <button type="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-md font-semibold">
                    Daftar
                </button>

                <p class="text-center text-sm mt-4">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="text-red-500 font-semibold">Masuk Sekarang</a>
                </p>

            </form>
        </div>
    </div>
</x-guest-layout>
