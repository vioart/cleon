<x-cleon-layout>
    <div class="container mx-auto py-10">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="w-full md:w-1/2 flex items-center justify-center">
                <img src="{{ asset('storage/faq/faq.png') }}" alt="Map" class="w-full rounded-lg">
            </div>
            <div class="w-full md:w-1/2 md:max-h-[80vh] md:overflow-y-auto">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">Frequently Asked Questions (FAQ)</h1>
                <p class="text-gray-600 mb-8">
                    Temukan jawaban atas pertanyaan-pertanyaan yang sering diajukan terkait layanan Cleon. Kami hadir untuk memastikan pengalaman Anda berjalan lancar
                </p>

                <div id="accordion-collapse" data-accordion="collapse">
                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-1"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-1">
                                <span>Apa itu Cleon ?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Cleon adalah suatu layanan yang disediakan oleh PT. Sarana InsanMuda Selaras dalam pengembangan Wifi. Cleon cocok dipasang pada kost, kontrakan, kantor, maupun warung-warung yang ramai dikunjungi</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-2"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span>Apakah saya mendapakan TV Kabel langganan gratis ?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Jika anda seorang mitra Cleon maka akan mendapatkan Free TV langganan di satu titik. Syarat dan ketentuan juga berlaku</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-3"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-3">
                                <span>Mengapa harus menggunakan Cleon ?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Cleon sebagai alternatif layanan yang memberikan kemudahan bagi pelanggan dalam menikmati layanan internet dimana tidak perlu berlangganan cukup dengan membeli voucher ketika akan menggunakan internet</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-4">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-4"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-4">
                                <span>Seberapa cepat koneksi internet Cleon ?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Sesuai dengan paket yang digunakan oleh masing-masing user</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-5">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-5"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-5">
                                <span>Fitur apa sajakah yang ditawarkan oleh Cleon ?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Fitur Layanan : </p>
                                <ul class="list-disc pl-6 text-gray-600 ml-4">
                                    <li>Gratis Survey dan Instalasi*</li>
                                    <li>Perangkat dipinjamkan*</li>
                                    <li>Speed Akses per user</li>
                                    <li>Ada Program Kemitraan dan Freelance</li>
                                    <li>Free Akses untuk Content dan Jogja Medianet selama masih masa aktif user</li>
                                    <li>Mendapatkan Free 1 Titik TV Kabel JMN</li>
                                    <li>Jaringan yang luas</li>
                                    <li>Layanan Support 24 Jam</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-6">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-6"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-6">
                                <span>Berapa biaya yang diperlukan untuk menggunakan Layanan internet Cleon ?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Tidak ada biaya yang dikeluarkan untuk pemasangan Cleon Internet. Jika ingin menggunakan Cleon Internet dapat membeli vocher yang berkisaran dari harga Rp 2000,-</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-7">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-7"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-7">
                                <span>Bagaimana saya bisa berlangganan Cleon ?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-7" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Kunjungi alamat website <a href="www.cleon.info">www.cleon.info</a> Atau hubungi kontak dibawah ini</p>
                                <ul class="list-disc pl-6 text-gray-600 ml-4">
                                    <li>+62-856-4314-5334</li>
                                    <li>+62-857-4332-8040</li>
                                    <li>+62-822-2598-8821</li>
                                    <li>+62-813-1415-2347</li>
                                    <li>JL. Sidobali No.8 Yogyakarta, 55165</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-8">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-8"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-8">
                                <span>Paket apa saja yang ditawarkan Cleon ?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-8" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Cleon menyediakan banyak pilihan paket, anda bisa melihatnya dengan <a href="">Klik Disini</a> </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-9">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-9"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-9">
                                <span>Mengapa saya tidak bisa login?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-9" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-4 border-t border-gray-200">
                                <img src="{{ asset('storage/faq/gagallogin.jpeg') }}" alt="Gambar Besar" class="mx-auto rounded-lg" style="max-width: 20%; height: auto;">
                                <p class="text-gray-600">Potensi double voucher, kemungkinan duplikat satu voucher dipakai dua user. Akun tidak valid, penggunaan huruf kapital dan huruf kecil berpengaruh saat registrasi atau mendaftar akun Cleon. Kemungkinan akun masih dalam keadaan online atau belum dilogout</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-10">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-10"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-10">
                                <span>Apa yang dimaksud dengan top-up?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-10" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Top up yaitu menambah masa aktif akun dengan cara memasukkan card number dan pin voucher yang baru</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-11">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-11"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-11">
                                <span>Mengapa saya tidak bisa top-up?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-11" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-4 border-t border-gray-200">
                                <img src="{{ asset('storage/faq/gagal-topup.jpg') }}" alt="Gambar Besar" class="mx-auto rounded-lg" style="max-width: 20%; height: auto;">
                                <p class="text-gray-600">Potensi double voucher, kemungkinan duplikat satu voucher dipakai dua user Akun tidak valid, peggunaan huruf kapital dan huruf kecil berpengaruh saat registrasi atau mendaftar akun Cleon</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-12">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-12"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-12">
                                <span>Bagaimana jika saya lupa password untuk Login ?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-12" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Jika lupa password untuk login, bisa hubungi customer care di nomor berikut :</p>
                                <p class="text-gray-600">+62-822-2598-8821 / +62-813-1415-2347</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-13">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-13"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-13">
                                <span>Kenapa Koneksi internet saya mengalami penurunan atau lambat?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-13" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Jika menggunakan paket unlimited, apabila pemakaian sudah mencapai 12GB maka kecepatan akses akan menurutn atau mengalami down speed 0.5 Mbps.</p>
                                <p class="text-gray-600">Pengaruh cuaca juga dapat mempengaruhi kecepatan koneksi internet</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-14">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-14"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-14">
                                <span>Mengapa saya tidak bisa connect internet ?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-14" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Perangkat mungkin belum mendapatkan IP. Jarak atau radius sinyal mungkin terlalu jauh atau terlalu sedikit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-15">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-15"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-15">
                                <span>Mengapa tidak bisa Logout ?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-15" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Jika tidak bisa Logout maka dapat megunjungi alamat web cleon di cleon.info</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2 id="accordion-collapse-heading-16">
                            <button type="button"
                                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-800 hover:bg-gray-50"
                                data-accordion-target="#accordion-collapse-body-16"
                                aria-expanded="false"
                                aria-controls="accordion-collapse-body-16">
                                <span>Jika terjadi koneksi dari AP ke Router ada Tenda, perlu direstart baik di Router dan AP?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-16" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Hubungi admin untuk dibantu/dipandu proses restartnya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-cleon-layout>