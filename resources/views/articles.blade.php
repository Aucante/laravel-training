@extends('base')

@section('content')
    <div class="container text-center my-3">
        <h1 class="display-3">Articles</h1>
    </div>
    <livewire:filters :categories="$categories"/>
    <div class="d-flex justify-content-center my-5">
        {{ $articles->links('vendor.pagination.custom') }}
    </div>
@stop
