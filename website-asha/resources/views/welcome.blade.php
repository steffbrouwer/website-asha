<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!-- Add Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
    <header class="flex justify-between items-center py-6 px-8 bg-gray-800 text-white">
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

        <!-- Navigation Links -->
        @if (Route::has('login'))
        <nav class="flex items-center space-x-4">
            <!-- Added new buttons for Projecten, Agenda, and Contact -->
            <a href="{{ route('projecten') }}" class="text-white px-4 py-2 rounded hover:bg-red-500 transition">
                Projecten
            </a>
            <a href="{{ route('agenda') }}" class="text-white px-4 py-2 rounded hover:bg-red-500 transition">
                Agenda
            </a>
            <a href="{{ route('contact') }}" class="text-white px-4 py-2 rounded hover:bg-red-500 transition">
                Contact
            </a>

            @auth
            <a href="{{ url('/dashboard') }}" class="text-white px-4 py-2 rounded hover:bg-red-500 transition">
                Dashboard
            </a>
            @else
            <a href="{{ route('login') }}" class="text-white px-4 py-2 rounded hover:bg-red-500 transition">
                Log in
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-white px-4 py-2 rounded hover:bg-red-500 transition">
                Register
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header>

    <!-- Centered Title and Description, positioned closer to the top -->
    <main class="flex-grow flex flex-col items-center justify-center mt-4 text-center"> 
        <h1 class="text-6xl font-extrabold text-gray-800 mb-4"> <!-- Increased weight and added margin-bottom -->
            Stichting Asha
        </h1>
        <p class="mt-4 text-gray-600 text-lg max-w-2xl px-4 leading-relaxed"> <!-- Added max-width and leading -->
            Stichting Asha (Asha = Hoop in het Hindi) is een vrijwilligersorganisatie van Surinaamse Hindostanen in de gemeente Utrecht. De organisatie is in 1976 opgericht en wil met haar activiteiten een positieve bijdrage leveren aan het gemeentelijke integratie- en participatiebeleid.
        </p>
    </main>
</body>

</html>
