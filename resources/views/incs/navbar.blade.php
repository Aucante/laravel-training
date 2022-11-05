<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand ms-4" href="{{ route('articles') }}">HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0">
                @if(Auth::User())
                    @if(Auth::User()->role === 'ADMIN')
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('articles.index') }}">Espace Admin</a>
                        </li>
                    @endif
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-dark">Deconnexion</button>
                    </form>
                @else
                    <li class="nav-item me-2">
                        <a class="nav-link active btn btn-dark text-light" aria-current="page" href="{{route('login')}}">Connexion</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
