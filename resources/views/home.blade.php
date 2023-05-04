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
    <h1>Template Blade and Vite</h1>
    <div>
        <ul>
            @foreach ($Movies as $Movie)
                <li>
                    <h2>{{ $Movie->title }}</h2>
                    <h3>Originial title: {{ $Movie->original_title }}</h3>
                    <div>Nationality: {{ $Movie->nationality }}</div>
                    <div>Date: {{$Movie->date}}</div>
                    <div>Rating: {{$Movie->vote}}</div>

                </li>
            @endforeach
        </ul>
    </div>
    
</body>
</html>