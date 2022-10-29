<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if(Auth::User())
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Deconnexion</i></a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Connexion</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
