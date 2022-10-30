@extends('base')

@section('content')
    <div class="container">
        <h1 class="display-4 text-center">
            Poster un nouvel article
        </h1>
        <form action="{{ route('article.store') }}" method="POST">
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" name="title" class="form-control" placeholder="Titre article">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Sous titre</label>
                    <input type="text" name="subtitle" class="form-control" placeholder="Sous-Titre article">
                    <small class="form-text text-muted">Décrivez le sous titre</small>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Contenu</label>
                    <textarea name="content" class="form-control w-100"></textarea>
                    <small class="form-text text-muted">Décrivez le sous titre</small>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-5">
                <button type="submit" class="btn btn-primary">Poster l'article</button>
            </div>
        </form>
    </div>
@endsection
