<x-cleon-layout>
    <!-- Hero Section -->
    <div class="relative bg-white py-16">
        <div class="flex flex-col-reverse lg:flex-row items-center justify-between">
            <!-- Text Content -->
            <div class="lg:w-1/2 mt-8 lg:mt-0">
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                    Internet Cepat & Stabil untuk Kebutuhan Digital Anda
                </h1>
                <p class="text-lg text-gray-600 mb-8">
                    Nikmati koneksi internet super cepat dengan teknologi fiber optik terkini. Streaming, gaming, dan work from home tanpa lag!
                </p>
                <a href="/login-cleon" class="bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-700 transition duration-300 inline-flex items-center">
                    <span>Daftar Sekarang</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <!-- Image -->
            <div class="lg:w-1/2">
                <img src="{{ asset('storage/faq/home.jpg') }}" alt="Internet Service" class="rounded-lg shadow-xl">
            </div>
        </div>
    </div>

    <!-- Alur Penggunaan Section -->
    <div class="py-16 bg-gray-50">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Alur Penggunaan Layanan</h2>
            <p class="text-gray-600">Mudah dan cepat dalam 5 langkah sederhana</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <!-- Step 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center transform hover:-translate-y-1 transition duration-300">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Registrasi</h3>
                <p class="text-gray-600">Daftar akun baru dengan mudah</p>
            </div>

            <!-- Step 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center transform hover:-translate-y-1 transition duration-300">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Login</h3>
                <p class="text-gray-600">Masuk ke akun Anda</p>
            </div>

            <!-- Step 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center transform hover:-translate-y-1 transition duration-300">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Status Billing</h3>
                <p class="text-gray-600">Cek tagihan Anda</p>
            </div>

            <!-- Step 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center transform hover:-translate-y-1 transition duration-300">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Top Up</h3>
                <p class="text-gray-600">Isi ulang paket internet</p>
            </div>

            <!-- Step 5 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center transform hover:-translate-y-1 transition duration-300">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Logout</h3>
                <p class="text-gray-600">Keluar dari akun</p>
            </div>
        </div>
    </div>

    <!-- Kelebihan Fitur Section -->
    <div class="py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Kelebihan Layanan Kami</h2>
            <p class="text-gray-600">Nikmati berbagai keunggulan dari Cleon Internet</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Fitur 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <div class="text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Banyak Paket</h3>
                <p class="text-gray-600">Pilihan paket internet yang beragam sesuai kebutuhan Anda</p>
            </div>

            <!-- Fitur 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <div class="text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Instalasi Gratis</h3>
                <p class="text-gray-600">Biaya pemasangan gratis untuk semua paket</p>
            </div>

            <!-- Fitur 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <div class="text-blue-600 mb-4">
                    <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Customer Service</h3>
                <p class="text-gray-600">Layanan pelanggan 24/7 siap membantu Anda</p>
            </div>

            <!-- Fitur 4 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <div class="text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Penggunaan Mudah</h3>
                <p class="text-gray-600">Dapat digunakan dimanapun selama dalam jaringan internet Cleon</p>
            </div>
        </div>
    </div>

    <!-- Info CLEON Section -->
    <div class="py-16 bg-gradient-to-r from-blue-500 to-blue-700 text-white">
        <div class="container mx-auto px-4 md:px-6 max-w-6xl text-center">
            <h2 class="text-4xl font-bold mb-6">Info CLEON</h2>

            <!-- Doorprize Announcement -->
            <div class="bg-white text-gray-800 rounded-lg shadow-lg p-6 mb-8 max-w-4xl mx-auto">
                <h3 class="text-2xl font-semibold mb-4">Daftar User Beruntung</h3>
                <p class="text-lg">
                    Selamat kepada para pengguna yang telah memenangkan doorprize CLEON! <br>
                    <a href="/doorprize" class="text-indigo-600 font-bold underline hover:text-indigo-800 transition duration-300">
                        Cek Daftarnya di sini.
                    </a>
                </p>
            </div>

            <!-- Panduan CLEON -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Panduan 1 -->
                <div class="bg-white text-gray-800 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <h3 class="text-xl font-semibold mb-4">Panduan CLEON Terbaru (Versi 1)</h3>
                    <p class="text-base mb-4">
                        Pelajari cara menggunakan CLEON, mulai dari koneksi, registrasi, login, hingga top-up dengan mudah.
                    </p>
                    <a href="{{ asset('storage/panduan/panduan-singkat.pdf') }}" class="text-purple-600 font-semibold underline hover:text-purple-800 transition duration-300">
                        BACA DI SINI
                    </a>
                </div>

                <!-- Panduan 2 -->
                <div class="bg-white text-gray-800 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <h3 class="text-xl font-semibold mb-4">Panduan CLEON Terbaru (Versi 2)</h3>
                    <p class="text-base mb-4">
                        Update terbaru panduan CLEON dengan langkah-langkah lebih lengkap dan detail.
                    </p>
                    <a href="{{ asset('storage/panduan/panduan-cleon-baru.pdf') }}" class="text-purple-600 font-semibold underline hover:text-purple-800 transition duration-300">
                        BACA DI SINI
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-cleon-layout>