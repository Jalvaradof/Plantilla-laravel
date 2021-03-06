<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    <div class="container-fluid">
        <div class="logo">
             <img src="/img/BancamigaLogo.svg" class="mr-3" alt="Bancamiga" width="200" height="50">
        </div>
        <ul class="nav nav-pills ml-auto">
            @if(auth()->check())
                @if(auth()->user()->hasRoles(['recepcionista']))
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('visitors*')  }}" href="{{ route('visitors.index') }}">
                            @lang('Visitors')
                            <i class="icon ion-md-contacts ml-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('visits*')  }}" href="{{ route('visits.index') }}">
                            @lang('')Visitas
                             <i class="icon ion-ios-people ml-1"></i>
                        </a>
                    </li>
                @endif
                @if(auth()->user()->hasRoles(['rr.hh']))
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('assigned-floor*')  }}" href="{{ route('assigned-floor.index') }}">
                            Asignación de Pisos
                            <i class="icon ion-ios-switch mr-2"></i>
                        </a>
                    </li>
                @endif
            @endif
            @auth
                <li class="nav-item dropdown p-1">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} {{ Auth::user()->last_name }}
                        <i class="icon ion-md-person ml-2"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('users.show', $user = auth()->user()->name ) }}">
                            <p class="text-primary">
                                <i class="icon ion-md-man mr-2"></i>
                                Mi perfil
                            </p>
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                            <p class="text-primary">
                                <i class="icon ion-md-power mr-2" style="color: #FF0000"></i>
                                Cerrar Sesión
                            </p>

                        </a>
                    </div>
                </li>

            @else
                <li class="nav-item">
                    <a class="nav-link {{ setActive('login')  }}" href="{{ route('login') }}">
                        Login fsd
                        <i class="icon ion-md-log-in ml-1"></i>
                        <i class="fas fa-sign-in-alt fa-1.2x"></i>
                    </a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>



