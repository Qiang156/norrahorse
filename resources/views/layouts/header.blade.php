<nav x-data="{ open: false }" class="bg-norra">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-5">

        <div class="flex justify-between py-4">
            
            <!-- Logo -->
            <div class="flex items-center">
                <a class="logo" href="/" title="" aria-label="store logo">
                    <img src="https://norrahorse.fi/media/logo/stores/4/norra_logo_musta_laatikko_1.png" width="112">
                </a>
            </div>

            <!-- shopping cart -->
            <div class="sm:-my-px sm:ml-10 sm:flex">
                <a href="" class="flex items-center text-white">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                </a>
            </div>        
        </div>

        <!-- Responsive Navigation Menu -->
        <div class="flex justify-start items-center uppercase pb-5 text-sm font-bold space-x-5">
            <x-navbar />
        </div>

    </div>

</nav>
