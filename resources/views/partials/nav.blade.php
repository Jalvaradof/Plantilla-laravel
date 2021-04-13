<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    {{-- <div class="container-fluid"> --}}
    @guest
        <div class="logo">
            <img src="/img/BancamigaLogo.svg" class="mr-3" alt="Bancamiga" width="200" height="50">
        </div>
    @endguest
    <div class="container-fluid welcome">
        @auth
            <span class="ml-1 text-primary">
                Bienvenido {{ auth()->user()->samaccountname }} -
                {{ \Carbon\Carbon::parse(session('last_conexion'))->format('d/m/Y')}}
                {{ \Carbon\Carbon::parse(session('last_conexion'))->format('g:i:s A')}}
            </span>
        @endauth
    </div>
    <div class="container-fluid">
        <ul class="nav nav-pills ml-auto">
            @auth
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ auth()->user()->name }} {{ auth()->user()->last_name }} 
                        <i class="icon ion-md-person ml-2"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        {{-- <a class="dropdown-item" href="#">
                            <p class="text-primary">
                                <i class="icon ion-md-man mr-2"></i>
                                Mi perfil
                            </p>
                            
                        </a> --}}
                        <a class="dropdown-item" href="#"
                           onclick="confirmLogout()">
                            <p class="text-primary">
                                <i class="icon ion-md-power mr-2" style="color: #FF0000"></i>
                                Cerrar Sesión
                            </p>
                        </a>
                    </div>
                </li>
        @else
                <li class="nav-item">
                    <a class="nav-link {{-- {{ setActive('login')  }} --}}" href="{{ route('login') }}">
                        Login
                        <i class="icon ion-md-log-in ml-1"></i>
                    </a>
                </li>
        @endauth
        </ul>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
