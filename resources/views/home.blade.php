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
    <div class="container">
        <div class="row">
            @foreach ($Movies as $Movie)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $Movie->title }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $Movie->original_title }}</h6>
                  <div class="card-text">
                    <div>Nationality: {{ $Movie->nationality }}</div>
                    <div>Date: {{$Movie->date}}</div>
                    <div>Rating: {{$Movie->vote}}</div>
                  </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</body>
</html>