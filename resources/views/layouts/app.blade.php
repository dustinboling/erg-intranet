<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Eugene Realty Group') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('head')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Eugene Realty Group') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @auth
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('folders.index') }}" class="nav-link">Resources</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('calendars.index') }}" class="nav-link">Calendars</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="nav-link">Company Directory</a>
                            </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a href="https://leads.realgeeks.com/leads" target="_blank" class="nav-link">Real Geeks</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://apps.rackspace.com/index.php" target="_blank" class="nav-link">Webmail</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="https://leads.realgeeks.com/leads" target="_blank" class="nav-link">Real Geeks</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://apps.rackspace.com/index.php" target="_blank" class="nav-link">Webmail</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/dashboard" class="dropdown-item">{{ __('Dashboard') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="my-4">
            <p style="font-size:0.75rem;font-weight:300;color:#7c858e;" class="mt-4 text-center">
                <a href="https://internal.eugenerealtygroup.com" class="text-primary dim no-underline">ERG Intranet</a>
                <span class="px-1">&middot;</span>
                &copy; {{ date('Y') }} Eugene Realty Group LLC
                <span class="px-1">&middot;</span>
                <a href="http://www.dustinboling.com" target="_blank" class="text-primary dim no-underline">Web Development</a> by <a href="mailto:dustin@dustinboling.com" target="_blank" class="text-primary dim no-underline">Dustin</a>
                <span class="px-1">&middot;</span>
                v{{ Laravel\Nova\Nova::version() }}
            </p>
        </footer>
    </div>
    @stack('scripts')
</body>
</html>
