<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cleon - Layanan Internet</title>

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    .mobile-menu-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #2E2E48;
      z-index: 50;
      transform: translateX(-100%);
      transition: transform 0.3s ease-in-out;
    }

    .mobile-menu-overlay.active {
      transform: translateX(0);
    }

    .mobile-menu-content {
      padding: 1rem;
      height: 100%;
      overflow-y: auto;
      padding-top: 80px;
    }

    #mobileSubmenu {
      transition: all 0.3s ease-in-out;
    }

    #mobileSubmenu.hidden {
      display: none;
    }

    #dropdownNavbar {
      min-width: 180px;
    }

    .auth-button {
      min-width: 100px;
      text-align: center;
    }

    .close-button {
      position: static;
      top: 20px;
      right: 20px;
      padding: 10px;
      color: white;
      cursor: pointer;
    }

    .mobile-menu-header {
      position: absolute;
      top: 20px;
      left: 20px;
      right: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .mobile-logo {
      display: flex;
      align-items: center;
    }

    .mobile-logo img {
      height: 32px;
      margin-right: 10px;
    }

    .mobile-logo span {
      color: white;
      font-size: 1.25rem;
      font-weight: 600;
    }

    .navbar-gradient {
      background: linear-gradient(180deg, #ffffff 0%, #fafafa 100%);
    }
  </style>
</head>

<body class="bg-white text-white">
  <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900 fixed w-full top-0 z-50 shadow-sm border-b border-gray-100">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
      <a href="/" class="flex items-center">
        <img src="{{ asset('storage/images/cleon-logo.png') }}" class="h-6 mr-3 sm:h-9" alt="Cleon Logo">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Cleon</span>
      </a>
      <div class="flex items-center lg:order-2">
        <div class="hidden mt-2 mr-4 sm:inline-block">
          <span></span>
        </div>

        <div class="hidden lg:flex">
          <a href="/login-cleon"
            class="auth-button text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Login</a>
          <a href="http://registrasi.cleon.info/register.php?uamip=111.92.166.142"
            class="auth-button text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Register</a>
        </div>

        <button id="mobile-menu-button" type="button"
          class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="mobile-menu-2" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">

        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
          <li>
            <a href="/"
              class="block py-2 pl-3 pr-4 text-gray-700 transition duration-150 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-600 lg:p-0 {{ request()->is('home*') ? 'lg:text-blue-600 text-blue-600' : 'text-gray-700' }}">Home</a>
          </li>
          <li>
            <a href="/product"
              class="block py-2 pl-3 pr-4 text-gray-700 transition duration-150 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-600 lg:p-0 {{ request()->is('product*') ? 'lg:text-blue-600 text-blue-600' : 'text-gray-700' }}">Product</a>
          </li>
          <li>
            <a href="http://topup.cleon.info/topup.php?uamip=111.92.166.142"
              class="block py-2 pl-3 pr-4 text-gray-700 transition duration-150 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-600 lg:p-0 {{ request()->is('topup*') ? 'lg:text-blue-600 text-blue-600' : 'text-gray-700' }}">Top Up</a>
          </li>
          <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
              class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-blue-600 transition duration-150 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-600 lg:p-0 lg:w-auto {{ request()->is('about*') ? 'lg:text-blue-600 text-blue-600' : 'text-gray-700' }}">About
              <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
              </svg>
            </button>
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownNavbarLink">
                <li>
                  <a href="/about/profile"
                    class="block px-4 py-2 transition duration-150 hover:text-blue-600 {{ request()->is('about/profile*') ? 'text-blue-600' : 'text-gray-700' }}">Profile</a>
                </li>
                <li>
                  <a href="/about/tos"
                    class="block px-4 py-2 transition duration-150 hover:text-blue-600 {{ request()->is('about/tos*') ? 'text-blue-600' : 'text-gray-700' }}">ToS</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="/contact"
              class="block py-2 pl-3 pr-4 text-gray-700 transition duration-150 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-600 lg:p-0 {{ request()->is('contact*') ? 'lg:text-blue-600 text-blue-600' : 'text-gray-700' }}">Contact</a>
          </li>
          <li>
            <a href="/faq"
              class="block py-2 pl-3 pr-4 text-gray-700 transition duration-150 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-600 lg:p-0 {{ request()->is('faq*') ? 'lg:text-blue-600 text-blue-600' : 'text-gray-700' }}">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="mobile-menu-overlay lg:hidden" id="mobile-menu-overlay">
    <div class="mobile-menu-header">
      <div class="mobile-logo">
        <img src="{{ asset('storage/images/cleon-logo.png') }}" alt="Cleon Logo">
      </div>
      <button id="close-menu-button" class="close-button">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
    <div class="mobile-menu-content">
      <ul class="flex flex-col font-medium">
        <li>
          <a href="/"
            class="block py-2 pl-3 pr-4 transition duration-150 {{ request()->is('home*') ? 'text-white' : 'text-gray-400 hover:text-white' }}">Home</a>
        </li>
        <li>
          <a href="/product"
            class="block py-2 pl-3 pr-4 transition duration-150 {{ request()->is('product*') ? 'text-white' : 'text-gray-400 hover:text-white' }}">Product</a>
        </li>
        <li>
          <a href="http://topup.cleon.info/topup.php?uamip=111.92.166.142"
            class="block py-2 pl-3 pr-4 transition duration-150 {{ request()->is('topup*') ? 'text-white' : 'text-gray-400 hover:text-white' }}">Top Up</a>
        </li>
        <li class="relative">
          <button
            class="flex items-center justify-between w-full py-2 pl-3 pr-4 transition duration-150 {{ request()->is('about*') ? 'text-white' : 'text-gray-400 hover:text-white' }}"
            onclick="toggleMobileSubmenu()">
            About
            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
          </button>
          <ul id="mobileSubmenu" class="hidden pl-8">
            <li>
              <a href="/about/profile"
                class="block py-2 transition duration-150 {{ request()->is('about/profile*') ? 'text-white' : 'text-gray-400 hover:text-white' }}">Profile</a>
            </li>
            <li>
              <a href="/about/tos"
                class="block py-2 transition duration-150 {{ request()->is('about/tos*') ? 'text-white' : 'text-gray-400 hover:text-white' }}">ToS</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="/contact"
            class="block py-2 pl-3 pr-4 transition duration-150 {{ request()->is('contact*') ? 'text-white' : 'text-gray-400 hover:text-white' }}">Contact</a>
        </li>
        <li>
          <a href="/faq"
            class="block py-2 pl-3 pr-4 transition duration-150 {{ request()->is('faq*') ? 'text-white' : 'text-gray-400 hover:text-white' }}">FAQ</a>
        </li>
      </ul>
      <div class="flex justify-center mt-4 space-x-2">
        <a href="/login-cleon"
          class="auth-button text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Login</a>
        <a href="http://registrasi.cleon.info/register.php?uamip=111.92.166.142"
          class="auth-button text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Register</a>
      </div>
    </div>
  </div>

  <main class="mt-20">
    <div class="max-w-screen-xl mx-auto px-4">
      {{ $slot }}
    </div>
  </main>

  <footer class="bg-blue-950 text-white py-6 mt-12">
    <div class="max-w-7xl mx-auto text-center">
      <p>&copy; 2024 Cleon. All rights reserved.</p>
    </div>
  </footer>

  <script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const closeMenuButton = document.getElementById('close-menu-button');

    mobileMenuButton.addEventListener('click', () => {
      const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
      mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
      mobileMenuOverlay.classList.toggle('active');
    });

    closeMenuButton.addEventListener('click', () => {
      mobileMenuButton.setAttribute('aria-expanded', 'false');
      mobileMenuOverlay.classList.remove('active');
    });

    function toggleMobileSubmenu() {
      const submenu = document.getElementById('mobileSubmenu');
      submenu.classList.toggle('hidden');
    }
  </script>
</body>

</html>