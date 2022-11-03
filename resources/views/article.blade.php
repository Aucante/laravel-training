@extends('base')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-10 offset-1">
                    <div class="card border-0 my-2">
                        <div class="card-body">
                            <h1 class="card-text display-1">{{ $article->title }}</h1>
                            <p class="card-text display-3 my-5">{{ $article->subtitle }}</p>
                            <p class="card-text display-6 fs-5">{!! $article->content !!}</p>
                            <p class="card-text display-6 fs-5 my-5">Dernière modification : {!! $article->updated_at !!}</p>
                            <a href="{{ route('articles') }}"><button class="btn btn-primary rounded-0">Retour</button></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@stop
