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
                    <a href="#" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('article.delete', $article->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Supprimer</button>
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
