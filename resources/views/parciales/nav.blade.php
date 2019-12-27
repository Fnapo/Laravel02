<!-- Vista parcial con la navegación -->

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <!-- Insertar un logo -->
    <!-- Puedo cambiar ul y li por div gracias a Bootstrap -->
    <div class="nav nav-pills">
        <div class="nav-item">
            <a class="nav-link {{desActivar('home')}}" href="{{route('home')}}">
                {{config('app.name')}}
            </a>
        </div>
    </div>
    <!-- Botón para expandir la nav en un móvil -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-der" id="navbarSupportedContent">
        <div class="nav nav-pills">
            <!-- Barra horizontal con 'nav'-->
            <!-- Cambia como obtener el nombre de la ruta actual, se hace con \Route::current()->getName()
            o \Route::currentRouteName()
            Route esta definida en \vendor\laravel\...\Route.php como hija de la clase static Facade -->
            <div class="nav-item">
                <a href="{{route('home')}}" class="nav-link {{desActivar('home')}}">@lang('Home')</a>
            </div>
            <div class="nav-item">
                <a href="{{route('about')}}" class="nav-link {{desActivar('about')}}">@lang('About')</a>
            </div>
            <div class="nav-item">
                <a href="{{route('proyectos.index')}}" class="nav-link {{desActivar('proyectos.index')}}">Proyectos</a>
            </div>
            <div class="nav-item">
                <a href="{{route('contacto')}}" class="nav-link {{desActivar('contacto')}}">@lang('Contact')</a>
            </div>
            @guest
            <div class="nav-item">
                <a href="{{route('login')}}" class="nav-link {{desActivar('login')}}">@lang('Login')</a>
            </div>
            @else
            <div>
                @if (auth()->user()->hasRole())
                <div class="nav-item">
                    <a href="{{route('usuarios.index')}}"
                        class="nav-link {{desActivar('usuarios.index')}}">@lang('Users')</a>
                </div>
                @endif
            </div>
            <div class="nav-item">
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <button type="submit" class="nav-link color-az">
                        @lang('Logout')
                    </button>
                </form>
            </div>
            @endguest
        </div>
    </div>
</nav>
