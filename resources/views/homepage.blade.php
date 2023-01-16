<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movies</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                @foreach ($movies as $movie)

                    <div class="card col-2 p-3 m-3">
                        <ul>
                            <li>Titolo: {{$movie->title}}</li>
                            <li>Titolo originale: {{$movie->original_title}}</li>
                            <li>Nazionalità: {{$movie->nationality}}</li>
                            <li>Uscita: {{$movie->date}}</li>
                            <li>Voto: {{$movie->vote}}</li>
                        </ul>
                    </div>
                    
                @endforeach
            </div>
        </div>

            
        
    </main>

</body>

</html>
