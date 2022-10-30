@extends('base')

@section('content')
<div class="container my-5">
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
                    <a href="#" class="btn btn-warning">Editer</a>
                    <a href="#" class="btn btn-danger">Supprimer</a>
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
