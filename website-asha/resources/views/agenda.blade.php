<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
    <!-- Add Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for the hamburger menu */
        .menu-transition {
            transition: max-height 0.3s ease-in-out; /* Smooth transition */
            overflow: hidden; /* Prevent overflow when hidden */
            max-height: 0; /* Start with height 0 */
        }

        .menu-transition-active {
            max-height: 500px; /* Arbitrary large value to allow for dropdown */
        }
    </style>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
    <header class="flex justify-between items-center py-6 px-4 md:px-8 bg-gray-800 text-white relative z-10">
        <!-- Clickable Home Icon on the left that redirects to the welcome page -->
        <div class="flex items-center">
            <a href="{{ url('/') }}">
                <svg class="h-8 w-8 text-white lg:h-10 lg:w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7m-9-5v18m-5-5h5m0 0h5m0 0h5m0 0h5v-5m-5 5v5m-5-5h5" />
                </svg>
            </a>
        </div>

        <!-- Hamburger Button for Mobile -->
        <button id="hamburger-button" class="flex md:hidden focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Navigation Links -->
        @if (Route::has('login'))
        <nav class="hidden md:flex items-center space-x-2 md:space-x-4"> <!-- Hide on mobile -->
            <a href="{{ route('projecten') }}" class="text-white px-3 py-2 rounded hover:bg-red-500 transition">
                Projecten
            </a>
            <a href="{{ route('agenda') }}" class="text-white px-3 py-2 rounded hover:bg-red-500 transition">
                Agenda
            </a>
            <a href="{{ route('contact') }}" class="text-white px-3 py-2 rounded hover:bg-red-500 transition">
                Contact
            </a>

            @auth
            <a href="{{ url('/dashboard') }}" class="text-white px-3 py-2 rounded hover:bg-red-500 transition">
                Dashboard
            </a>
            @else
            <a href="{{ route('login') }}" class="text-white px-3 py-2 rounded hover:bg-red-500 transition">
                Log in
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-white px-3 py-2 rounded hover:bg-red-500 transition">
                Register
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="menu-transition hidden md:hidden z-20 mt-2">
        <nav class="flex flex-col items-center py-4 space-y-2 bg-gray-800 text-white">
            <a href="{{ route('projecten') }}" class="text-white px-3 py-2 rounded hover:bg-red-500 transition">
                Projecten
            </a>
            <a href="{{ route('agenda') }}" class="text-white px-3 py-2 rounded hover:bg-red-500 transition">
                Agenda
            </a>
            <a href="{{ route('contact') }}" class="text-white px-3 py-2 rounded hover:bg-red-500 transition">
                Contact
            </a>
            @auth
            <a href="{{ url('/dashboard') }}" class="text-white px-3 py-2 rounded hover:bg-red-500 transition">
                Dashboard
            </a>
            @else
            <a href="{{ route('login') }}" class="text-white px-3 py-2 rounded hover:bg-red-500 transition">
                Log in
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-white px-3 py-2 rounded hover:bg-red-500 transition">
                Register
            </a>
            @endif
            @endauth
        </nav>
    </div>

    <!-- Centered Title and Description for Agenda Page -->
    <main class="flex-grow flex flex-col items-center justify-center mt-4 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold text-gray-800 mb-4">
            Agenda
        </h1>
        <p class="mt-4 text-gray-600 text-base md:text-lg max-w-xl px-4 leading-relaxed">
            Stay updated with our upcoming events and activities. Check back often for the latest updates on our agenda!
        </p>
    </main>

    <script>
        // JavaScript for toggling the mobile menu
        const hamburgerButton = document.getElementById('hamburger-button');
        const mobileMenu = document.getElementById('mobile-menu');

        hamburgerButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden'); // Toggle hidden class
            mobileMenu.classList.toggle('menu-transition-active'); // Toggle active class for animation
        });
    </script>
</body>

</html>
