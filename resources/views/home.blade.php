@extends('base')

@section('content')
<video id="background-video" autoplay loop muted>
    <source src="{{ asset('hanteln2.mp4') }}" type="video/mp4">
</video>

<div class="content container" style="margin-top: 120px">
    <h1 class="display-1 text-light my-4">EXPERTISE NUTRITION</h1>
    <h2 class="display-6 fs-3 text-light my-4">Optimiser votre nutrition - Optimiser votre entraînement</h2>
    <div class="d-flex justify-content-center container">
        <a href="{{ route('articles') }}"><button class="btn btn-lg btn-light fs-4 my-4">Découvrir</button></a>
    </div>
</div>

@endsection

<style>
    #background-video {
        height: 100vh;
        width: 100vw;
        object-fit: cover;
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: -1;
    }

    h1, h2, #btnVideo {
        color: white;
        font-weight: bold;
        text-align: center;
    }

    h1 {
        font-size: 6rem;
        margin-top: 30vh;
    }

    h2 { font-size: 3rem; }

    #btnVideo {
        font-size: 1.5rem;
        background: 0;
        border: 0;
        margin-left: 50%;
        transform: translateX(-50%);
    }
</style>

