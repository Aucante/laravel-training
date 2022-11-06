@extends('base')

@section('content')
    <div class="container text-center my-3">
        <h1 class="display-3">Articles</h1>
    </div>
    <div class="d-flex justify-content-center ">
        @foreach($categories as $category)
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="{{ $category->id }}"/>
                    <label for="{{ $category->id }}" class="custom-control-label mx-2">
                        <i class="fas fa-{{ $category->icon }}"></i>
                        {{ $category->label }}
                    </label>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <div class="col-md-6 offset-md-3">
                    @foreach($articles as $article)
                        <div class="card my-4">
                            <div class="card-body">
                                <p>
                                    <span class="badge bg-info">{{ $article->category->label }}</span>
                                </p>
                                <p class="card-text display-6">{{ $article->title }}</p>
                                <p class="card-text">{{ substr($article->content, 0,370) }}<a href="{{ route('article', $article->slug) }}" class="text-info text-decoration-none"> ... Lire la suite</a></p>
                                <a href="{{ route('article', $article->slug) }}"><button class="btn btn-primary rounded-0 mt-2">Lire la suite</button></a>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-center my-5">
                        {{ $articles->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
