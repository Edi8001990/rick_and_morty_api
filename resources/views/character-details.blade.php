<!DOCTYPE html>
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-styles.css') }}" rel="stylesheet">


      <title>Rick and Morty API</title>
    </head>
    <body>
      <div class="container">
      <div class="row text-center list-box">
      <h1>{{ $character['name'] }}</h1> 
      <h1>{{ $character['species'] }}</h1> 
      <h1>{{ $character['origin']['name'] }}</h1> 
        </div>
      </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

