<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Expertise Nutrition</title>
    <link rel="shortcut icon" href="{{ asset('ExpertiseNutritionLogo1.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/4/tinymce.min.js'></script>
    <livewire:styles />
</head>
<body>
@include('incs.navbar')
<div class="container justify-content-center">
    @include('incs.flash')
</div>
@yield('content')
@include('incs.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/981bdc1aa4.js" crossorigin="anonymous"></script>
<livewire:scripts />
</body>
</html>
