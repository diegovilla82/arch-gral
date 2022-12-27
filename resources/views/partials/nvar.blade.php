<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="{{ url('/images/logopie.fw_.png') }}" >
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item {{ request()->is('login')? 'active':'' }}">
                                <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
                            </li>
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else

                            <li class="nav-item px-3 {{ request()->is('archivos')? 'active':'' }}">
                                    <a class="nav-link  {{ request()->is('archivos')? 'btn btn-outline-success':'' }}" href="{{ route('archivos.index') }}">Archivos</a>
                            </li>
                            <li class="nav-item px-3 {{ request()->is('home')? 'active':'' }}">
                            <a class="nav-link {{ request()->is('home')? 'btn btn-outline-success':'' }}" href="{{ url('/home') }}">Bucador <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item px-3 {{ request()->is('buscador-por-caja')? 'active':'' }}">
                            <a class="nav-link {{ request()->is('buscador-por-caja')? 'btn btn-outline-success':'' }}" href="{{ url('/buscador-por-caja') }}">Portada Caja <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item px-3 dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       Salir
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
