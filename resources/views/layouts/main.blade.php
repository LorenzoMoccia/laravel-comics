<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Molisana | @yield('page-title', 'La pasta più buona del mondo')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')

    <main>
        @yield('page-content')

        <div class="main-container">
            <div class="jumbo-container">
            
            </div>
            
            <div class="movie-section">
                <div class="movie-container">
                    @foreach($movies as $movie)
                    <div class="movie">
                    <img src="{{$movie['thumb']}}" alt="" class="movie-thumb">
                    <p class="movie-series">{{strtoupper($movie['series'])}}</p>
                    </div>

                    @endforeach 
                
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>

</html>