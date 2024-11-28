<x-login-layout>
    <div class="max-w-lg mx-auto w-full">
        <div class="text-center mb-6">
            <a href="{{ url('/') }}" class="block">
                <img class="h-8 mx-auto" src="{{ asset('storage/images/cleon-logo.jpg') }}" alt="Logo">
                <h3 class="text-2xl font-semibold text-dark mt-4">Selamat Datang di Cleon!</h3>
            </a>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-base font-semibold mb-2">Username</label>
                <input id="username" name="username" type="text" placeholder="Masukkan username anda"
                    class="block w-full rounded-md py-2.5 px-4 border-gray-300 focus:ring-primary focus:border-primary">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-base font-semibold mb-2">Password</label>
                <input id="password" name="password" type="password" placeholder="Masukkan password anda"
                    class="block w-full rounded-md py-2.5 px-4 border-gray-300 focus:ring-primary focus:border-primary">
            </div>
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 border-gray-300 rounded">
                    <label for="remember" class="ml-2 text-sm">Ingat saya</label>
                </div>
            </div>
            <button type="submit"
                class="w-full py-2.5 bg-blue-500 text-white text-base font-semibold rounded-md transition duration-300 ease-in-out transform hover:bg-blue-600 hover:scale-105 focus:ring-2 focus:ring-blue-300 focus:outline-none">
                Login
            </button>
        </form>

        <div class="flex items-center my-6">
            <div class="flex-auto mt-px border-t border-dashed border-gray-800"></div>
            <div class="mx-4 text-dark">Layanan</div>
            <div class="flex-auto mt-px border-t border-dashed border-gray-800"></div>
        </div>

        <div class="mt-6">
            <div class="grid grid-cols-2 gap-2">
                <!-- Trial Akses -->
                <div class="bg-white border border-gray-300 rounded-md p-3 text-center hover:bg-gray-100 transition-transform transform hover:scale-105 hover:shadow-lg">
                    <a href="https://wa.me/6285643145334" target="_blank" class="block text-blue-500 font-medium text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 mx-auto mb-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        Info Trial Akses
                    </a>
                    <p class="text-xs text-gray-500 mt-1">Hubungi WhatsApp untuk akses trial.</p>
                </div>

                <!-- Daftar Baru -->
                <div class="bg-white border border-gray-300 rounded-md p-3 text-center hover:bg-gray-100 transition-transform transform hover:scale-105 hover:shadow-lg">
                    <a href="http://registrasi.cleon.info/register.php?uamip=111.92.166.142" class="block text-blue-500 font-medium text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 mx-auto mb-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                        </svg>
                        Daftar Baru
                    </a>
                    <p class="text-xs text-gray-500 mt-1">Buat akun baru untuk Cleon.</p>
                </div>

                <!-- Top Up -->
                <div class="bg-white border border-gray-300 rounded-md p-3 text-center hover:bg-gray-100 transition-transform transform hover:scale-105 hover:shadow-lg">
                    <a href="http://topup.cleon.info/topup.php?uamip=111.92.166.142" target="_blank" class="block text-blue-500 font-medium text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 mx-auto mb-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        Isi Ulang Paket
                    </a>
                    <p class="text-xs text-gray-500 mt-1">Isi ulang paket Anda.</p>
                </div>

                <!-- Cek Paket -->
                <div class="bg-white border border-gray-300 rounded-md p-3 text-center hover:bg-gray-100 transition-transform transform hover:scale-105 hover:shadow-lg">
                    <a href="/check-paket" target="_blank" class="block text-blue-500 font-medium text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 mx-auto mb-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12Zm0 0H12a.75.75 0 0 1 .75-.75v-.75a.75.75 0 0 1 .75.75h.008l.008.008v-.008v.75a.75.75 0 0 1-.75.75v-.75" />
                        </svg>
                        Cek Paket
                    </a>
                    <p class="text-xs text-gray-500 mt-1">Periksa status paket Anda.</p>
                </div>
            </div>
        </div>
    </div>
</x-login-layout>