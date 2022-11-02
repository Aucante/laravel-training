@extends('base')

@section('content')
<div class="container my-5">
    <h1 class="display-3 text-center py-4">Articles</h1>
    <div class="d-flex justify-content-center">
        <a href="{{ route('article.create') }}" class="btn btn-info">Ajouter un article</a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr class="table-active">
            <th scope="col">ID</th>
            <th scope="col">Titre</th>
            <th scope="col">Sous titre</th>
            <th scope="col">Crée le</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->subtitle }}</td>
                <td>{{ $article->dateFormatted() }}</td>
                <td class="d-flex">
                    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-warning">Modifier</a>
                    <button type="button" class="btn btn-danger" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='block'">Supprimer</button>
                    <form action="{{ route('article.delete', $article->id) }}" method="POST">
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
    <div class="mt-5">
        {{ $articles->links('vendor.pagination.custom') }}
    </div>
</div>
@endsection
