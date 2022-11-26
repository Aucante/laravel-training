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
    <!-- Espace commentaires -->
    <div class="d-flex justify-content-center container">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <h2 class="display-6 fs-3 border-bottom border-2 my-3">Espace commentaires</h2>
                    @if(Auth::User())
                        <form action="{{ route('comment.store', $article->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <input type="text" name="content" class="form-control @error('content') is-invalid @enderror" placeholder="Ecrivez votre commentaire ...">
                                        @error('content')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @else
                        <div>
                            <p>Vous devez être connecté pour ajouter un commentaire. <a class="btn btn-link fw-bold" href="{{ route('login') }}">Se connecter</a></p>
                        </div>
                    @endif
                    @foreach($comments as $comment)
                        <div class="card my-4">
                            <div class="card-header">
                                <div class="d-flex align-content-start">
                                    <img src="{{ Voyager::image($comment->user->avatar) }}" alt="{{ $comment->user->name }}-logo" class="img-thumbnail" style="height: 30px">
                                    <p class="display-6 fs-5 mt-2 ms-2">{{ $comment->user->name }}</p>
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
    <div class="d-flex justify-content-center container mb-4">
        <a href="{{ route('articles') }}"><button class="btn btn-primary rounded-0 my-4">Retour</button></a>
    </div>
@stop
