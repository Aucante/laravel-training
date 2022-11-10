@extends('base')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-10 offset-1">
                    <div class="card border-0 my-2">
                        <div class="card-body">
                            <h1 class="card-text display-1">{{ $article->title }}</h1>
                            <p class="card-text display-3 mt-5">{{ $article->subtitle }}</p>
                            <span class="badge bg-dark mb-4">{{ $article->category->label }}</span>
                            <div class="d-flex justify-content-center row">
                                <img src="{{ Voyager::image($article->image) }}" alt="{{ $article->subtitle }}" class="w-25 my-4">
                            </div>
                            <p class="card-text display-6 fs-5">{{ Markdown::parse($article->content) }}</p>
                            <p class="card-text display-6 fs-5 my-5">Dernière modification : {!! $article->updated_at !!}</p>
                            <a href="{{ route('articles') }}"><button class="btn btn-primary rounded-0">Retour</button></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@stop
