@extends('base')

@section('content')
    @include('components.carousel')
    <div class="d-flex justify-content-center my-5">
        <div class="container text-center">
            <div class="row">
                <h1 class="container display-5 my-5 border-bottom">
                    Last articles
                </h1>
                @foreach($articles as $article)

                    <div data-aos="fade-right" class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 my-4">
                        <a href="{{ route('article', $article->slug) }}">
                            <div class="card bg-dark rounded-0 border-0 text-white">
                                <div class="inner">
                                    <img
                                        src="{{ Voyager::image($article->image) }}"
                                        class="card-img"
                                        style="height: 240px; width: 100%"
                                        alt="{{ $article->subtitle }}"
                                    />
                                    <div class="d-flex align-items-center justify-content-center card-img-overlay rounded-0 gradient-custom-4">
                                        <div class="d-flex align-items-center justify-content-center text-center my-4">
                                            <div class="row">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <p class="card-title display-6 fs-4 text-center text-uppercase my-4">{{ $article->title }}</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-light py-2">
                                                        Read more
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <h2 class="container display-5 my-5 border-bottom">
                More articles
            </h2>
            <div class="col-md-10 offset-md-1 col-lg-8 px-1 my-4 offset-lg-2">
                <a href="{{ route('categories') }}"><button class="container btn btn-primary">Discover here</button></a>
            </div>
        </div>
    </div>
    @include('components.gradient')
@stop
