<x-cleon-layout>
    <!-- Hero Section -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:flex lg:items-center lg:gap-12">
                <!-- Image Column -->
                <div class="lg:w-1/2 mb-8 lg:mb-0">
                    <div class="relative">
                        <img src="{{ asset('storage/images/perusahaan.jpeg') }}" alt="Cleon Internet Provider" class="rounded-lg shadow-xl animate-fade-in">
                        <div class="absolute -bottom-4 -right-4 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-2xl opacity-70 animate-blob"></div>
                        <div class="absolute -top-4 -left-4 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-2xl opacity-70 animate-blob animation-delay-2000"></div>
                    </div>
                </div>

                <!-- Text Column -->
                <div class="lg:w-1/2">
                    <h1 class="text-4xl font-bold text-gray-900 mb-6">Tentang Cleon</h1>
                    <p class="text-lg text-gray-600 mb-8">
                        Cleon adalah penyedia layanan internet terpercaya yang berkomitmen untuk memberikan koneksi internet berkualitas tinggi kepada pelanggan kami. Dengan teknologi terkini dan tim support yang handal, kami memastikan Anda mendapatkan pengalaman internet terbaik.
                    </p>
                    <div class="flex items-center space-x-4">
                        <span class="text-blue-600 font-semibold">Melayani sejak 2016</span>
                        <div class="h-1 w-20 bg-blue-600 rounded"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Grid -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Fitur Unggulan Kami</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Unlimited -->
                <div class="group bg-white p-6 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-10 h-10 mx-auto" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 text-center mb-2">Unlimited</h3>
                    <p class="text-gray-600 text-center text-sm">Nikmati internet tanpa batas kuota sepanjang waktu</p>
                </div>

                <!-- Faster Connect -->
                <div class="group bg-white p-6 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 text-center mb-2">Faster Connect</h3>
                    <p class="text-gray-600 text-center text-sm">Koneksi cepat dengan latency rendah untuk pengalaman online lancar</p>
                </div>

                <!-- Upgrade Speed -->
                <div class="group bg-white p-6 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 text-center mb-2">Upgrade Speed</h3>
                    <p class="text-gray-600 text-center text-sm">Fleksibilitas untuk meningkatkan kecepatan sesuai kebutuhan</p>
                </div>

                <!-- Support 24/7 -->
                <div class="group bg-white p-6 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-10 h-10 mx-auto" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 text-center mb-2">Fast Support 24/7</h3>
                    <p class="text-gray-600 text-center text-sm">Dukungan teknis siap siaga 24 jam setiap hari</p>
                </div>

                <!-- Connection Stable -->
                <div class="group bg-white p-6 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 text-center mb-2">Connection Stable</h3>
                    <p class="text-gray-600 text-center text-sm">Koneksi stabil dan handal untuk aktivitas online tanpa gangguan</p>
                </div>

                <!-- Phone Call -->
                <div class="group bg-white p-6 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 text-center mb-2">Phone Call</h3>
                    <p class="text-gray-600 text-center text-sm">Layanan telepon darurat 24 jam untuk bantuan teknis</p>
                </div>

                <!-- Speed Download -->
                <div class="group bg-white p-6 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 text-center mb-2">Speed Download</h3>
                    <p class="text-gray-600 text-center text-sm">Kecepatan download hingga 10Mbps untuk streaming lancar</p>
                </div>

                <!-- Speed Upload -->
                <div class="group bg-white p-6 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 text-center mb-2">Speed Upload</h3>
                    <p class="text-gray-600 text-center text-sm">Kecepatan upload hingga 8Mbps untuk upload file tanpa hambatan</p>
                </div>

            </div>
        </div>
    </div>

    <!-- Product Showcase -->
    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Paket Internet Kami</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Paket SS -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 flex flex-col h-full">
                    <div class="bg-blue-600 text-white py-4">
                        <h3 class="text-2xl font-bold text-center">Paket SS</h3>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <div class="text-center mb-4">
                            <p class="text-gray-600 mb-4">Mulai dari</p>
                            <span class="text-blue-600 text-5xl font-bold">3,5</span>
                            <span class="text-gray-600 text-2xl">Mbps</span>
                        </div>
                        <ul class="space-y-3 mb-6 flex-grow">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Upload 4 Mbps</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Kuota 70 GB</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">30 Hari</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Support 24/7</span>
                            </li>
                        </ul>
                        <div class="text-center mt-auto">
                            <span class="text-4xl font-bold text-gray-900">Rp 50.000</span>
                            <span class="text-gray-600">/bulan</span>
                        </div>
                    </div>
                    <div class="p-4 bg-gray-50">
                        <a href="http://topup.cleon.info/topup.php?uamip=111.92.166.142"
                            class="block w-full py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 text-center">
                            Pilih Paket
                        </a>
                    </div>
                </div>

                <!-- Paket Kuota -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 flex flex-col h-full">
                    <div class="bg-blue-600 text-white py-4">
                        <h3 class="text-2xl font-bold text-center">Paket Kuota</h3>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <div class="text-center mb-4">
                            <p class="text-gray-600 mb-4">Mulai dari</p>
                            <span class="text-blue-600 text-5xl font-bold">4,5</span>
                            <span class="text-gray-600 text-2xl">Mbps</span>
                        </div>
                        <ul class="space-y-3 mb-6 flex-grow">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Upload 4 Mbps</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Kuota 10GB</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">5 Hari</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Support 24/7</span>
                            </li>
                        </ul>
                        <div class="text-center mt-auto">
                            <span class="text-4xl font-bold text-gray-900">Rp 5.000</span>
                            <span class="text-gray-600">/5 hari</span>
                        </div>
                    </div>
                    <div class="p-4 bg-gray-50">
                        <a href="http://topup.cleon.info/topup.php?uamip=111.92.166.142"
                            class="block w-full py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 text-center">
                            Pilih Paket
                        </a>
                    </div>
                </div>

                <!-- Paket Unlimited -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 flex flex-col h-full">
                    <div class="bg-blue-600 text-white py-4">
                        <h3 class="text-2xl font-bold text-center">Paket Unlimited</h3>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <div class="text-center mb-4">
                            <p class="text-gray-600 mb-4">Mulai dari</p>
                            <span class="text-blue-600 text-5xl font-bold">3,5</span>
                            <span class="text-gray-600 text-2xl">Mbps</span>
                        </div>
                        <ul class="space-y-3 mb-6 flex-grow">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Upload 4 Mbps</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Unlimited</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">30 Hari</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Support 24/7</span>
                            </li>
                        </ul>
                        <div class="text-center mt-auto">
                            <span class="text-4xl font-bold text-gray-900">Rp 100.000</span>
                            <span class="text-gray-600">/bulan</span>
                        </div>
                    </div>
                    <div class="p-4 bg-gray-50">
                        <a href="http://topup.cleon.info/topup.php?uamip=111.92.166.142"
                            class="block w-full py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 text-center">
                            Pilih Paket
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class="bg-blue-700 py-16 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-4">
                    <div class="text-4xl font-bold mb-2">1000+</div>
                    <div class="text-blue-200">Pelanggan Aktif</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold mb-2">24/7</div>
                    <div class="text-blue-200">Layanan Support</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold mb-2">99.9%</div>
                    <div class="text-blue-200">Uptime</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold mb-2">8</div>
                    <div class="text-blue-200">Tahun Pengalaman</div>
                </div>
            </div>
        </div>
    </div>

    <!-- CSS Animation -->
    <style>
        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }

            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
</x-cleon-layout>