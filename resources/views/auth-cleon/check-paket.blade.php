<x-cleon-blanklayout>
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="max-w-2xl w-full bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Header -->
            <div class="bg-blue-700 p-6">
                <h1 class="text-2xl font-bold text-white text-center">Cek Paket Internet</h1>
            </div>

            <!-- Content -->
            <div class="p-6">
                <!-- User Info -->
                <div class="mb-6">
                    <h2 class="text-gray-700 font-semibold mb-2">Masukkan Username Kamu:</h2>
                    <input type="text" id="username" class="border rounded-lg p-2 w-full bg-white text-gray-900" placeholder="Masukkan Username Anda" />
                </div>

                <!-- Paket Info -->
                <div class="mb-6" id="paket-info" style="display: none;">
                    <h2 class="text-gray-700 font-semibold mb-4">Paket Kamu:</h2>
                    <div class="border rounded-lg p-4 bg-gray-200">
                    <h3 class="text-gray-900 font-bold">Data Paket untuk <span id="username-display"></span> akan ditampilkan di sini.</h3>
                        <div id="package-details" style="color: #333;"></div>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex gap-4 justify-center">
                    <button 
                        id="checkPaketBtn"
                        class="w-48 px-6 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition-colors"
                        onclick="checkPaket()">
                        Cek Paket
                    </button>
                    <button 
                        onclick="window.close()" 
                        class="w-48 px-6 py-2 bg-red-700 text-white rounded-lg hover:bg-red-800 transition-colors">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function checkPaket() {
     var username = document.getElementById("username").value;
     var packageDetails = document.getElementById("package-details");
     if (username) {
         // Show loading message
         packageDetails.innerHTML = "Loading...";
         document.getElementById("paket-info").style.display = "block";
         document.getElementById("username-display").innerText = username;

         // Fetch package info from the external URL
         fetch('http://cleon.jogjamedianet.com/checker/cuser.php?user=' + username)
             .then(response => response.text())
             .then(data => {
                 packageDetails.innerHTML = data;
             })
             .catch(error => {
                 console.error('Error fetching package info:', error);
                 packageDetails.innerHTML = 'Tidak dapat memuat data paket. Silakan coba lagi.';
             });
     } else {
         alert("Silakan masukkan username terlebih dahulu.");
     }
 }


        // Handle window close for different browsers
        function closeWindow() {
            window.open('','_parent','');
            window.close();
        }
    </script>
</x-cleon-blanklayout>
