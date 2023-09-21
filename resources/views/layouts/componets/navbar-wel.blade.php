<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img class="d-inline-block align-text-top" src="" alt="Logo">Transportation Solution System
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse offset-md-4" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-3 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-dark nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-dark nav-link" href="#QuienesS">Quienes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-dark nav-link" href="#AcercaDe">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-dark nav-link" href="#Contacta">Contactenos</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/dashboard') }}" class="btn btn-dark nav-link ">Dashboard</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="btn btn-outline-success nav-link">Iniciar sesion</a>
                            </li>

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="btn btn-outline-info nav-link">Registrarse</a>
                            </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>