@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                    <div class="card border-0 my-2">
                        <div class="card-body">
                            <h1 class="card-text display-5 mt-5 text-center">{{ $article->title }}</h1>
                            <div class="d-flex row text-center">
                                <img src="{{ Voyager::image($article->image) }}" alt="{{ $article->subtitle }}" class="my-4">
                            </div>
                            <p class="card-text display-4 fs-1 mt-5 text-center">{{ $article->subtitle }}</p>
                            <p class="card-text display-6 fs-5 my-5">{{ Markdown::parse($article->content) }}</p>
                            <p class="card-text display-6 fs-6 my-5 text-center">Last modification : {!! $article->updated_at !!} | {{ $article->category->label }}</p>
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
                    <h2 class="display-6 fs-3 border-bottom border-2 my-3">Comment space</h2>
                    @if(Auth::User())
                        <form action="{{ route('comment.store', $article->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" placeholder="Write here your comment ..."></textarea>
                                        @error('content')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary">Post</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @else
                        <div>
                            <p>You must be logged in to add a comment. <a class="btn btn-link fw-bold" href="{{ route('login') }}">Login</a></p>
                        </div>
                    @endif
                    @foreach($comments as $comment)
                        <div class="card my-4 border-0 border-bottom border-top">
                            <div class="card-header bg-light border-0 border-bottom">
                                <div class="d-flex align-content-start">
                                    <img src="{{ Voyager::image($comment->user->avatar) }}" alt="{{ $comment->user->name }}-logo" class="img-thumbnail" style="height: 30px">
                                    <p class="display-6 fs-5 mt-2 ms-2">{{ $comment->user->name }}</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="display-6 fs-5">{{ $comment->content }}</p>
                            </div>
                            <div class="card-footer border-0 border-top">
                                <div class="d-flex justify-content-between">
                                    <p class="display-6 fs-6">{{ $comment->updated_at}}</p>
                                    <div class="d-flex">
                                        @if(Auth::User())
                                            @if($comment->user_id === Auth::User()->id)
                                            <span type="button" class="badge bg-primary my-2" onclick="document.getElementById('modal-open-{{ $comment->id }}').style.display='block'"><i class="fa-regular fa-trash-can"></i></span>
                                            <form action="{{ route('comment.destroy', $comment->id) }}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <div class="modal" id="modal-open-{{ $comment->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Delete</h5>
                                                                <button type="button" class="btn-close" onclick="document.getElementById('modal-open-{{ $comment->id }}').style.display='none'" data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true"></span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are you sure to delete the comment?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Delete</button>
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="document.getElementById('modal-open-{{ $comment->id }}').style.display='none'">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center container mb-4">
        <a href="{{ route('articles') }}"><button class="btn btn-primary rounded-0 my-4">Back</button></a>
    </div>
@stop
