<x-main-layout>
    <div class="max-w-5xl mx-auto space-y-4 p-8">

        <!-- ======================================================= -->
        <!-- POST CREATION WIDGET -->
        <!-- ======================================================= -->
        <div class="bg-white p-5 rounded-xl shadow-lg border border-gray-100 mb-6">
            <div class="flex items-start space-x-3">
                <!-- Avatar Placeholder -->
                <img src="https://placehold.co/40x40/ED6C6C/white?text=U" alt="User Avatar" class="avatar">

                <div class="flex-grow">
                    <textarea
                        class="w-full resize-none border-none focus:ring-0 placeholder-gray-500 text-gray-700 p-0 text-sm"
                        rows="3"
                        placeholder="Bagikan pemikiran, pertanyaan, atau ide Anda...">Apa yang ada di pikiran Anda?</textarea>

                    <div class="flex justify-end mt-3 border-t pt-3">
                        <button
                            class="py-2 px-4 bg-primary-red text-white font-semibold text-sm rounded-lg hover:bg-red-800 transition-colors duration-200 shadow-md">
                            Posting
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======================================================= -->
        <!-- POST FEED -->
        <!-- ======================================================= -->

        <!-- Post 1: Siti Nurhaliza (Web Dev) -->
        <div class="bg-white p-5 rounded-xl shadow-md border border-gray-100">
            <div class="flex items-start justify-between mb-2">
                <div class="flex items-start space-x-3">
                    <img src="https://placehold.co/40x40/FF5733/white?text=SN" alt="Avatar Siti" class="avatar">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Siti Nurhaliza</p>
                        <p class="text-xs text-text-muted">2 jam lalu</p>
                    </div>
                </div>
                <i data-lucide="more-horizontal" class="w-5 h-5 text-gray-400 cursor-pointer"></i>
            </div>

            <p class="text-sm text-gray-700 mb-4">
                Baru saja menyelesaikan proyek kelompok untuk mata kuliah Pemrograman Web! Sangat melelahkan, tapi
                sepadan. Ada yang sudah pernah coba pakai framework React untuk proyek akhir? Berikan tipnya dong!
                <span class="text-blue-600 font-medium cursor-pointer">#TelyuTV #WebDev #ProyekAkhir</span>
            </p>

            <!-- Interaction Bar -->
            <div class="flex items-center space-x-6 text-xs text-text-muted border-t pt-3">
                <div class="flex items-center cursor-pointer hover:text-primary-red transition-colors">
                    <i data-lucide="heart" class="w-4 h-4 mr-1"></i>
                    <span>15 Suka</span>
                </div>
                <div class="flex items-center cursor-pointer hover:text-gray-900 transition-colors">
                    <i data-lucide="message-square" class="w-4 h-4 mr-1"></i>
                    <span>7 Komentar</span>
                </div>
            </div>
        </div>

        <!-- Post 2: Budi Santoso (Sci-Fi Movie) -->
        <div class="bg-white p-5 rounded-xl shadow-md border border-gray-100">
            <div class="flex items-start justify-between mb-2">
                <div class="flex items-start space-x-3">
                    <img src="https://placehold.co/40x40/3498DB/white?text=BS" alt="Avatar Budi" class="avatar">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Budi Santoso</p>
                        <p class="text-xs text-text-muted">4 jam lalu</p>
                    </div>
                </div>
                <i data-lucide="more-horizontal" class="w-5 h-5 text-gray-400 cursor-pointer"></i>
            </div>

            <p class="text-sm text-gray-700 mb-4">
                Ada rekomendasi film Sci-Fi yang bagus di TelyuTV Movies? Sedang butuh tontonan seru untuk menemani
                begadang. Prefer yang alurnya kompleks!
                <span class="text-blue-600 font-medium cursor-pointer">#MoviesTV #SciFi #RekomendasiFilm</span>
            </p>

            <!-- Interaction Bar -->
            <div class="flex items-center space-x-6 text-xs text-text-muted border-t pt-3">
                <div class="flex items-center cursor-pointer hover:text-primary-red transition-colors">
                    <i data-lucide="heart" class="w-4 h-4 mr-1"></i>
                    <span>28 Suka</span>
                </div>
                <div class="flex items-center cursor-pointer hover:text-gray-900 transition-colors">
                    <i data-lucide="message-square" class="w-4 h-4 mr-1"></i>
                    <span>12 Komentar</span>
                </div>
            </div>
        </div>

        <!-- Post 3: Dian Lestari (Digital Innovation/AI) -->
        <div class="bg-white p-5 rounded-xl shadow-md border border-gray-100">
            <div class="flex items-start justify-between mb-2">
                <div class="flex items-start space-x-3">
                    <img src="https://placehold.co/40x40/FFC300/white?text=DL" alt="Avatar Dian" class="avatar">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Dian Lestari</p>
                        <p class="text-xs text-text-muted">1 hari lalu</p>
                    </div>
                </div>
                <i data-lucide="more-horizontal" class="w-5 h-5 text-gray-400 cursor-pointer"></i>
            </div>

            <p class="text-sm text-gray-700 mb-4">
                Diskusi yang menarik di kelas 'Inovasi Digital' hari ini. Bagaimana menurut kalian, apakah teknologi AI
                akan sepenuhnya menggantikan peran manusia di masa depan? Mari kita berdiskusi dengan sopan!
                <span class="text-blue-600 font-medium cursor-pointer">#TelyuTV #InovasiDigital #AI</span>
            </p>

            <!-- Interaction Bar -->
            <div class="flex items-center space-x-6 text-xs text-text-muted border-t pt-3">
                <div class="flex items-center cursor-pointer hover:text-primary-red transition-colors">
                    <i data-lucide="heart" class="w-4 h-4 mr-1 fill-primary-red text-primary-red"></i>
                    <span>45 Suka</span>
                </div>
                <div class="flex items-center cursor-pointer hover:text-gray-900 transition-colors">
                    <i data-lucide="message-square" class="w-4 h-4 mr-1"></i>
                    <span>30 Komentar</span>
                </div>
            </div>
        </div>

        <!-- Post 4: Bio Fahmi (Gaming) -->
        <div class="bg-white p-5 rounded-xl shadow-md border border-gray-100">
            <div class="flex items-start justify-between mb-2">
                <div class="flex items-start space-x-3">
                    <img src="https://placehold.co/40x40/2ECC71/white?text=BF" alt="Avatar Bio" class="avatar">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Bio Fahmi</p>
                        <p class="text-xs text-text-muted">2 hari lalu</p>
                    </div>
                </div>
                <i data-lucide="more-horizontal" class="w-5 h-5 text-gray-400 cursor-pointer"></i>
            </div>

            <p class="text-sm text-gray-700 mb-4">
                Sedang mencari teman mabar Mobile Legends. Ada yang mau push rank bareng? Role apa saja boleh, yang
                penting serius tapi santai! Add ID: TelyuGamer.
                <span class="text-blue-600 font-medium cursor-pointer">#Bio #GamesTV #MobileLegends #Mabar</span>
            </p>

            <!-- Interaction Bar -->
            <div class="flex items-center space-x-6 text-xs text-text-muted border-t pt-3">
                <div class="flex items-center cursor-pointer hover:text-primary-red transition-colors">
                    <i data-lucide="heart" class="w-4 h-4 mr-1"></i>
                    <span>30 Suka</span>
                </div>
                <div class="flex items-center cursor-pointer hover:text-gray-900 transition-colors">
                    <i data-lucide="message-square" class="w-4 h-4 mr-1"></i>
                    <span>15 Komentar</span>
                </div>
            </div>
        </div>

        <!-- Post 5: Anisa Putri (Cooking/Food) -->
        <div class="bg-white p-5 rounded-xl shadow-md border border-gray-100">
            <div class="flex items-start justify-between mb-2">
                <div class="flex items-start space-x-3">
                    <img src="https://placehold.co/40x40/E74C3C/white?text=AP" alt="Avatar Anisa" class="avatar">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Anisa Putri</p>
                        <p class="text-xs text-text-muted">2 hari lalu</p>
                    </div>
                </div>
                <i data-lucide="more-horizontal" class="w-5 h-5 text-gray-400 cursor-pointer"></i>
            </div>

            <p class="text-sm text-gray-700 mb-4">
                Akhirnya bisa masak resep baru dari FoodTV! Ayam Betutu ala Bali. Lumayan pedas, tapi enak banget! Ada
                rekomendasi resep lain yang wajib dicoba?
                <span class="text-blue-600 font-medium cursor-pointer">#FoodTV #ResepMasakan #AyamBetutu</span>
            </p>

            <!-- Interaction Bar -->
            <div class="flex items-center space-x-6 text-xs text-text-muted border-t pt-3">
                <div class="flex items-center cursor-pointer hover:text-primary-red transition-colors">
                    <i data-lucide="heart" class="w-4 h-4 mr-1"></i>
                    <span>20 Suka</span>
                </div>
                <div class="flex items-center cursor-pointer hover:text-gray-900 transition-colors">
                    <i data-lucide="message-square" class="w-4 h-4 mr-1"></i>
                    <span>8 Komentar</span>
                </div>
            </div>
        </div>


    </div>
</x-main-layout>
