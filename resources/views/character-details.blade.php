<!DOCTYPE html>
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-styles.css') }}" rel="stylesheet">


      <title>Rick and Morty API</title>
    </head>
    <body>
      <div class="container">
          <h1 class="text-center">{{ $character['name'] }}</h1> 
      <div class="row list-box single-character-box">
          <div class="col-4">
              <img src="{{ $character['image'] }}" alt="{{ $character['name'] }}">
          </div>
          <div class="col">
                <h1>Character Name: <span class="bold-detail">{{ $character['name'] }}</span></h1> 
                <h1>Species: <span class="bold-detail">{{ $character['species'] }}</span></h1> 
                <h1>Origin: <span class="bold-detail">@if ($character['origin']['name'] == 'unknown')
                            <span class="no-info">Not Specified</span>   
                        @else
                        {{ $character['origin']['name'] }}
                        @endif</span>
                </h1>
          </div>


  <div class="episodes-info-box">
    @php
        $episodes = $character['episode'];
    @endphp
        @if (count($episodes) == 1)
          <h1>This character is appearing at this single episode:</h1>
        
        @elseif (count($episodes) > 1)
          <h1>This character is appearing at the following episodes:</h1>
        @endif
  </div>  
   
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Episode</th>
        <th scope="col">Episode Title</th>
      </tr>
    </thead>
    <tbody>
   <!-- Get all episodes for single character -->
      @php
        $episodes = $character['episode'];
      @endphp

          @foreach ($episodes as $episodeItem)

              @php
                    $episodeResponse = Http::get($episodeItem);
                    $episode = $episodeResponse->json();
                    
                    $episodesCount = count($character['episode']);
              @endphp
                  <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $episode['episode'] }}</td>
                      <td>{{ $episode['name'] }}</td>
                  </tr>
          @endforeach
      </tbody>
      </table>

        </div>
      </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

