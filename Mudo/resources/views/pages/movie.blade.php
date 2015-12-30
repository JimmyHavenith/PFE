<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Müdo | {{ $movie['title'] }}</title>
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>
    <header>
      <div id="menu">
        <h1><a href="/acceuil">Müdo</a></h1>
        <div class="disconnect">
          <a href="connect.html">se déconnecter</a>
        </div>
        <div class="search">
          <img src="#" alt="">
        </div>
        <div class="markView">
          <p>
            Marquer comme vu
          </p>
        </div>
      </div>
      <div id="backdrop"  style="background-image: url('https://image.tmdb.org/t/p/original/{{ $movie['backdrop_path'] }}'); background-repeat: no-repeat; background-size: cover; width: 100%; height: 394px; ">
      </div>
    </header>
    <section class="contenu">
      <section>
        <img src="https://image.tmdb.org/t/p/w780/{{ $movie['poster_path'] }}" alt="">
        <div class="infos">
          <h2>{{ $movie['title'] }}</h2>
          <p class="dtg">{{ $movie['release_date'] }}</p>
          <p class="dtg">{{ $movie['runtime'] }}min</p>
          <p class="dtg">{{ $movie['genres'][0]['name'] }}</p>
          <p class="synopsis">
            {{ $movie['overview'] }}
          </p>
          <p>Réalisateur : <a href="#">{{ $credits['crew'][0]['name'] }}</a></p>
          <p>Avec : <a href="../person/{{ $credits['cast']['0']['id'] }}">{{ $credits['cast'][0]['name'] }}</a>
        </div>
      </section>
      <section>
        <div class="fanArt">
        </div>
      </section>
      <section>
        <div class="trailer">
          <iframe src="https://www.youtube.com/embed/{{ $trailers['youtube'][0]['source']}}" frameborder="0" allowfullscreen></iframe>
        </div>
      </section>
    </section>
  </body>
</html>
