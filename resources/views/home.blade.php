<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/4/tinymce.min.js'></script>
    <livewire:styles />
</head>
<body>
<video id="background-video" autoplay loop muted>
    <source src="{{ asset('hanteln2.mp4') }}" type="video/mp4">
</video>

<div class="content container" style="margin-top: 190px">
    <h1 class="display-1 text-light my-4">EXPERTISE NUTRITION</h1>
    <h2 class="display-6 fs-3 text-light my-4">Nutrition optimization - Training optimization</h2>
    <div class="d-flex justify-content-center container">
        <a href="{{ route('articles') }}"><button class="btn btn-lg btn-light fs-4 my-4">Discover</button></a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/981bdc1aa4.js" crossorigin="anonymous"></script>
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

    h1, h2{
        color: white;
        font-weight: bold;
        text-align: center;
    }

    h1 {
        font-size: 6rem;
        margin-top: 30vh;
    }

    h2 { font-size: 3rem; }
</style>
</body>
</html>

