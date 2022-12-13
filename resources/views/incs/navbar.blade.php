@inject('categoriesList', 'App\Helper\CategoryHelper')

<nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img src="{{ asset('ExpertiseNutrition.png') }}" style="height: 50px"></a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto me-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                @foreach($categoriesList->findCategories()->getData() as $key => $value)
                    @php
                        $length = count($value->all());
                    @endphp
                    @for($i = 0; $i < $length; $i++)
                        <li class="nav-item border-start ps-4">
                            <a class="nav-link active" aria-current="page" href="{{ route('category', $value->get($i)->label) }}">{{ $value->get($i)->label }}</a>
                        </li>
                    @endfor
                @endforeach

                @if(Auth::User())
                    @if(Auth::User()->role_id === 1)
                        <li class="nav-item">
                            <a class="nav-link active border-start ps-4" aria-current="page" href="{{ route('voyager.login') }}">Admin Access</a>
                        </li>
                    @endif
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                @else
                    <li class="nav-item me-2">
                        <a class="nav-link active btn btn-primary text-light px-4" aria-current="page" href="{{route('login')}}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
