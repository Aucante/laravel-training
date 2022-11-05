@extends('base')

@section('content')
    <div class="container">
        <h1 class="display-4 text-center">
            Poster un nouvel article
        </h1>
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="col-12 my-2">
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Titre article">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 my-2">
                <div class="form-group">
                    <label>Sous titre</label>
                    <input type="text" name="subtitle" class="form-control is-invalid" placeholder="Sous-Titre article">
                    <small class="form-text text-muted">Décrivez le sous titre</small>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 my-2">
                <div class="form-group">
                    <label for="category">Catégorie</label>
                    <select name="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->label }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12 my-2">
                <div class="form-group">
                    <label>Contenu</label>
                    <textarea id="tiny-editor" name="content" class="form-control w-100"></textarea>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <script>
                    tinymce.init({
                        selector: '#tiny-editor'
                    });
                </script>
            </div>
            <div class="d-flex justify-content-center mb-5">
                <button type="submit" class="btn btn-primary">Poster l'article</button>
            </div>
        </form>
    </div>
@endsection
