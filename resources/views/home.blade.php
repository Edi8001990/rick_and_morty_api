<!DOCTYPE html>
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-styles.css') }}" rel="stylesheet">


      <title>Rick and Morty API</title>
    </head>
    <body>
      <div class="container">
      <div class="row text-center">
      <h1>Rick and Morty API</h1> 
            @foreach ($characters as $character)
                <div class="col-md-3 character-box">
                    <img src="{{ $character['image'] }}" alt="{{ $character['name'] }}">
                   <a href="{{ route('character.show', ['id' => $character['name']]) }}"><h1>{{ $character['name'] }}</h1></a>
                   
                </div>
            @endforeach
        </div>
      </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>