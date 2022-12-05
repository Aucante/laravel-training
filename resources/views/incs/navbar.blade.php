<nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img src="{{ asset('ExpertiseNutrition.png') }}" style="height: 50px"></a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto me-4">
                <li class="nav-item border-end pe-4">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item border-end pe-4">
                    <a class="nav-link active" aria-current="page" href="{{ route('categories') }}">Training</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('categories') }}">Nutrition</a>
                </li>
                @if(Auth::User())
                    @if(Auth::User()->role === 'ADMIN')
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('articles.index') }}">Espace Admin</a>
                        </li>
                    @endif
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                @else
                    <li class="nav-item me-2">
                        <a class="nav-link active btn btn-primary text-light" aria-current="page" href="{{route('login')}}">Sign in</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
