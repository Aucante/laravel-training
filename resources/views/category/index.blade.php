@extends('base')

@section('content')
    <h1 class="container display-5 my-5 border-bottom">
        Catégories
    </h1>
    <div class="d-flex justify-content-center my-5">
        <div class="container text-center">
            <div class="row">
                @foreach($categories as $category)
                    <div data-aos="fade-right" class="col-md-6 my-4">
                        <a href="{{ route('category', $category->label) }}">
                            <div class="card bg-dark text-white rounded-0 border-0">
                                <div class="inner">
                                    <img
                                        src="{{ Voyager::image($category->image) }}"
                                        class="card-img"
                                        style="height: 240px; width: 100%"
                                        alt="{{ $category->label }}"
                                    />
                                    <div class="d-flex align-items-center justify-content-center card-img-overlay rounded-0 gradient-custom-4">
                                        <div class="d-flex align-items-center justify-content-center text-center my-4">
                                            <div class="row">
                                                <div class="d-flex align-items-center justify-content-center my-4">
                                                    <p class="card-title display-5 text-center text-uppercase">{{ $category->label }}</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-light py-2">
                                                        Découvrez
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@stop
