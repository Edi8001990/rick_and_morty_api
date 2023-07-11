<!DOCTYPE html>
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-styles.css') }}" rel="stylesheet">


      <title>Rick and Morty API</title>
    </head>
    <body>
      <div class="container">
      <div class="row  list-box">
      <img src="{{ $character['image'] }}" alt="{{ $character['name'] }}">
      <h1>{{ $character['name'] }}</h1> 
      <h1>{{ $character['species'] }}</h1> 
      <h1>@if ($character['origin']['name'] == 'unknown')
                  Not Specified   
              @else
              {{ $character['origin']['name'] }}
              @endif
       </h1>
      
      <ul class="list-group">
      @php
        $episodes = $character['episode'];
      @endphp

          @foreach ($episodes as $episodeItem)

              @php
                    $episodeResponse = Http::get($episodeItem);
                    $episode = $episodeResponse->json();
                    
                    $episodesCount = count($character['episode']);
              @endphp

            <li class="list-group-item list-group-item-action">{{ $loop->iteration }}. {{ $episode['name'] }}</li>
          @endforeach
       </ul>
        </div>
      </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

