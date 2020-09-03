
@foreach ($movies as $movie)
  <div class="movie">
    <h2>Titolo: {{$movie->title}}</h2>
    <p><strong>Descrizione:</strong> {{$movie->description}}</p>
    <p><strong>Anno:</strong> {{$movie->year}}</p>
    <p><strong>Valutazione:</strong> {{$movie->rating}}</p>
    <a href="{{ route('movies.show', $movie->id) }}">Dettagli</a>
  </div>

@endforeach
