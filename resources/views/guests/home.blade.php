<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/vue.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    <div id="app">
       <div class="container-fluid bg-dark">
        <nav class="navbar navbar-dark bg-dark border-bottom">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">IMDB</a>
            </div>
          </nav>
        <div class="container">
            <div class="row py-5">
                <div class="col-8">
                    <slider :carousel-list="{{json_encode($moviesCarousel)}}"></slider>
                </div>
                <div class="col-4">
                    <form action="" method="get">

                        <select name="categories" id="">
                            <option value="">Mostra tutti</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{ Request::query("categories") == $category->id ? "selected" : '' }}>{{ $category->name }}</option>
                            @endforeach
                            
                        </select>
                        <button class="btn btn-success">Filtra</button>
                    </form>
                    <sidebar :movie-list="{{json_encode($filteredCategory)}}"></sidebar>

                    {{-- lista con blade --}}
                    {{-- <ul>
                        @foreach($filteredCategory as $movie)
                        <li>{{$movie->title}}</li>
                        @endforeach
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
    
</div>
@dump($filteredCategory)
</body>
</html>
