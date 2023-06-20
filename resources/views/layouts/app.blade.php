<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Waste Sorting Application') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="app" class="bg-cover bg-center"
        style="background-image: url('https://images.pexels.com/photos/802221/pexels-photo-802221.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
        <div class="bg-gray-900 bg-opacity-75">
            {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Waste Sorting
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('citizendata') }}">History</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/selectexport') }}">Export</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/qrscanners') }}">QR Scanner</a>
                            </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav> --}}
            <div class="min-h-full">
                <nav class="bg-neutral text-neutral-content shadow-lg">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="flex h-16 items-center justify-between">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <p class="text-2xl font-bold">Waste Sorting</p>
                                </div>
                            </div>

                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    @guest
                                        @if (Route::has('login'))
                                            <a href="{{ route('login') }}"
                                                class="btn btn-ghost rounded-md px-3 py-2 text-sm font-medium">Login</a>
                                        @endif
                                        {{-- @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="btn btn-ghost rounded-md px-3 py-2 text-sm font-medium">Register</a>
                                @endif --}}
                                    @else
                                        <a href="{{ url('/') }}"
                                            class="btn btn-ghost rounded-md px-3 py-2 text-sm font-medium">Home</a>
                                        <a href="{{ url('citizendata') }}"
                                            class="btn btn-ghost rounded-md px-3 py-2 text-sm font-medium">History</a>
                                        <a href="{{ url('/selectexport') }}"
                                            class="btn btn-ghost rounded-md px-3 py-2 text-sm font-medium">Export</a>
                                        <a href="{{ url('/qrscanners') }}"
                                            class="btn btn-ghost rounded-md px-3 py-2 text-sm font-medium">QR
                                            Scanner</a>
                                        <div class="flex items-center">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-ghost block rounded-md py-2 px-3 text-base font-medium">Logout</button>
                                            </form>
                                        </div>
                                    @endguest
                                </div>
                            </div>
                            <div class="-mr-2 flex md:hidden">
                                <!-- Mobile menu button -->
                                <button type="button" id="mobile-menu-button"
                                    class="inline-flex items-center justify-center rounded-md btn btn-ghost focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                    aria-controls="mobile-menu" aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <!-- Menu open: "hidden", Menu closed: "block" -->
                                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                    <!-- Menu open: "block", Menu closed: "hidden" -->
                                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Mobile menu, show/hide based on menu state. -->
                        <div class="hidden md:hidden" id="mobile-menu">
                            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                @guest
                                    @if (Route::has('login'))
                                        <a href="{{ route('login') }}"
                                            class="btn btn-ghost block rounded-md py-2 px-3 text-base font-medium">Login</a>
                                    @endif
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="btn btn-ghost block rounded-md py-2 px-3 text-base font-medium">Register</a>
                                    @endif
                                @else
                                    <a href="{{ url('/') }}"
                                        class="btn btn-ghost block rounded-md py-2 px-3 text-base font-medium">Home</a>
                                    <a href="{{ url('citizendata') }}"
                                        class="btn btn-ghost block rounded-md py-2 px-3 text-base font-medium">History</a>
                                    <a href="{{ url('/selectexport') }}"
                                        class="btn btn-ghost block rounded-md py-2 px-3 text-base font-medium">Export</a>
                                    <a href="{{ url('/qrscanners') }}"
                                        class="btn btn-ghost block rounded-md py-2 px-3 text-base font-medium">QR
                                        Scanner</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-ghost block rounded-md py-2 px-3 text-base font-medium">Logout</button>
                                    </form>

                                @endguest
                            </div>
                        </div>
                    </div>
                </nav>

                <main>
                    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
                mobileMenuButton.setAttribute('aria-expanded', !expanded);
                mobileMenu.classList.toggle('hidden', expanded);
            });
        });
    </script>
</body>

</html>
