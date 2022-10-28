@extends('base')

@section('content')
    <div class="container text-center my-3">
        <h1>Article</h1>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-6 offset-3">
                    <div class="card my-2">
                        <div class="card-body">
                            <p class="card-text">{{ $article->title }}</p>
                            <p class="card-text">{{ $article->subtitle }}</p>
                            <p class="card-text">{{ $article->content }}</p>
                            <a href="{{ route('articles') }}"><button class="btn btn-primary rounded-0 my-">Retour</button></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@stop
