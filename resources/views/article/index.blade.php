@extends('base')

@section('content')
<div class="container my-5">
    <h1 class="display-3 text-center py-4">Tableau de bord</h1>
    <div class="d-flex justify-content-center mb-3">
        <a href="{{ route('articles.create') }}" class="btn btn-dark mb-4">Ajouter un article</a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr class="table-active text-center">
            <th scope="col">ID</th>
            <th scope="col">Titre</th>
            <th scope="col">Sous titre</th>
            <th scope="col">Slug</th>
            <th scope="col">Crée le</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr class="text-center">
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->subtitle }}</td>
                <td>{{ $article->slug }}</td>
                <td>{{ $article->dateFormatted() }}</td>
                <td class="d-flex justify-content-center">
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Modifier</a>
                    <button type="button" class="btn btn-danger" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='block'">Supprimer</button>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <div class="modal" id="modal-open-{{ $article->id }}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Suppresion élément</h5>
                                        <button type="button" class="btn-close" onclick="document.getElementById('modal-open').style.display='none'" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Vous allez supprimer l'élément</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Supprimer</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="document.getElementById('modal-open').style.display='none'">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-5">
        {{ $articles->links('vendor.pagination.custom') }}
    </div>
</div>
@endsection
