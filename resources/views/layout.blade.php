<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <title>@yield('title')</title> {{-- Validar mejor opción --}}

    {{-- Imagen bancamiga --}}
    <link  rel="icon"   href="/img/logoc.png" type="image/png"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/all.js') }}" defer=""></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

<body>
    @auth
        <div class="d-flex">
            <div id="sidebar-container" class="bg-light">
                <div class="logo">
                    <img src="/img/BancamigaLogo.svg" class="mr-3" alt="Bancamiga" width="200" height="50">
                </div> 
                <div class="menu"> 
                    <ul class="nav nav-pills flex-column">
                        <li>
                            <a class="nav-link {{ setActive('home')  }}" href="{{ route('home') }}">
                                <i class="fas fa-home fa-1.2x mr-1" size="small"></i>
                                @lang('Home')
                            </a>
                        </li>
                        <li>
                            <a class="nav-link {{ setActive('contact')  }}" href="{{ route('contacts.index') }}">
                                <i class="icon ion-md-chatboxes mr-2"></i>
                                @lang('Contact')
                            </a>
                        </li>
                    </ul>
            </div>
        </div> 
    @endauth    
    <div class="w-100 d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials.nav')
            @include('partials.session-info')
        </header>

        <main class="py-1">
            @yield('content')
        </main>

        <footer class="bg-gris text-center text-black-50 py-3 shadow">
            {{ config('app.name') }} | Copyright @ {{ date('Y') }}
        </footer>
    </div>
</body>
</html>