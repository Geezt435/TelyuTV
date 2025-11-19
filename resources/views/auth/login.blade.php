<x-guest-layout>
    <div class="flex justify-center py-16 ">
        <div class="bg-white w-full max-w-md shadow-md rounded-xl p-10">

            <h1 class="text-center text-xl font-bold mb-6">Masuk ke TelyuTV</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Email --}}
                <label class="block text-sm font-semibold mb-1">Email</label>
                <input type="email" name="email" required
                    class="w-full border rounded-md px-3 py-2 mb-4"
                    placeholder="contoh@telkomuniversity.ac.id">

                {{-- Password --}}
                <div class="flex justify-between">
                    <label class="text-sm font-semibold mb-1">Kata Sandi</label>
                    <a href="{{ route('password.request') }}" class="text-red-500 text-sm">Lupa Kata Sandi?</a>
                </div>

                <input type="password" name="password" required
                    class="w-full border rounded-md px-3 py-2 mb-4">

                <button type="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-md font-semibold">
                    Masuk
                </button>

                <p class="text-center text-sm mt-4">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-red-500 font-semibold">Daftar Sekarang</a>
                </p>

            </form>
        </div>
    </div>
</x-guest-layout>
