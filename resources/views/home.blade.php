<!DOCTYPE html>
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-styles.css') }}" rel="stylesheet">


      <title>Rick and Morty API</title>
    </head>
    <body>
      <ul>
       @foreach ($animals as $animals)
        <li>{{$animals}}</li>
        @endforeach
      </ul>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>