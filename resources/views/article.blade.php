@extends('base')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-10 offset-1">
                    <div class="card border-0 my-2">
                        <div class="card-body">
                            <h1 class="card-text display-3 mt-5">{{ $article->title }}</h1>
                            <div class="d-flex justify-content-center row">
                                <img src="{{ Voyager::image($article->image) }}" alt="{{ $article->subtitle }}" class="my-4">
                            </div>
                            <span class="badge bg-dark my-2">{{ $article->category->label }}</span>
                            <p class="card-text display-4 fs-1 mt-5">{{ $article->subtitle }}</p>
                            <p class="card-text display-6 fs-5 my-5">{{ Markdown::parse($article->content) }}</p>
                            <p class="card-text display-6 fs-6 my-5">Dernière modification : {!! $article->updated_at !!}</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center container">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <h1 class="display-6 border-bottom border-3">Commentaires</h1>
                    @foreach($comments as $comment)
                        <div class="card my-4">
                            <div class="card-header">
                                <div class="d-flex align-content-start">
                                    <img src="{{ Voyager::image($comment->user->avatar) }}" alt="{{ $comment->user->name }}-logo" class="img-thumbnail" style="height: 40px">
                                    <p class="display-6 fs-4 mt-3 ms-2">{{ $comment->user->name }}</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="display-6 fs-5">{{ $comment->content }}</p>
                            </div>
                            <div class="card-footer">
                                <p class="display-6 fs-6">{{ $comment->updated_at}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center container">
        <a href="{{ route('articles') }}"><button class="btn btn-primary rounded-0 my-4">Retour</button></a>
    </div>
@stop
