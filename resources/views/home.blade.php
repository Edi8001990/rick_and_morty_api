<!DOCTYPE html>
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-styles.css') }}" rel="stylesheet">


      <title>Rick and Morty API</title>
    </head>
    <body>
      <div class="container">
      <div class="row text-center list-box">
      <h1>Rick and Morty API</h1> 
            @foreach ($characters as $character)
                <div class="col-md-3 character-box">
                    <img src="{{ $character['image'] }}" alt="{{ $character['name'] }}">
                   <a class="text-decoration-none" href="{{ route('character-details.show-details', ['id' => $character['id']]) }}"><h1>{{ $character['name'] }}</h1></a>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $characters->links() }}
        </div>
      </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


