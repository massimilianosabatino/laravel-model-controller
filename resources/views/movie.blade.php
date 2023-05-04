<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Blade and Vite</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1>{{ $Movie->title }}</h1>
        <h2>{{ $Movie->original_title }}</h2>
        <div>Nationality: {{ $Movie->nationality }}</div>
        <div>Date: {{ $Movie->date }}</div>
        <div>Rating: {{ $Movie->vote }}</div>
    </div>

</body>

</html>
