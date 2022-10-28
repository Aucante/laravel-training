@extends('base')

@section('content')
    <div class="container text-center my-3">
        <h1>Articles</h1>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-6 offset-3">
                @foreach($articles as $article)
                    <div class="card my-2">
                        <div class="card-body">
                            <p class="card-text">{{ $article->title }}</p>
                            <p class="card-text">{{ $article->subtitle }}</p>
                            <p class="card-text">{{ $article->content }}</p>
                            <a href="{{ route('article', $article->id) }}"><button class="btn btn-primary rounded-0">Lire la suite</button></a>
                        </div>
                    </div>
                @endforeach
                    <div class="mt-5">
                        {{ $articles->links('vendor.pagination.custom') }}
                    </div>
            </div>
        </div>
    </div>
@stop
