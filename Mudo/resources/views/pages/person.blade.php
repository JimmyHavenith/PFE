<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Müdo | {{ $person['name'] }}</title>
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
      <div id="backdrop"  style="background-image: url('https://image.tmdb.org/t/p/original/{{ $taggedImages['results'][0]['file_path'] }}'); background-repeat: no-repeat; background-size: cover; width: 100%; height: 394px; ">
      </div>
    </header>
    <section class="contenu">
      <section>
        <img src="https://image.tmdb.org/t/p/original/{{ $person['profile_path'] }}" alt="">
        <div class="infos">
          <h2>{{ $person['name'] }}</h2>
          <p class="dtg">{{ $person['birthday'] }}</p>
          <p class="dtg">{{ $person['deathday'] }}</p>
          <p class="dtg"><a href="{{ $person['homepage'] }}">Sa page personnelle</a></p>
          <p class="synopsis">
            {{ $person['biography'] }}
          </p>
        </div>
      </section>
    </section>
    <section>
      <h2>Vous l'avez probablement vu dans ... </h2>
      <?php foreach($credits['cast'] as $key => $value): ?>
      <div class="movies">
        <a href="movie/{{ $value['id'] }}">
          <img src="https://image.tmdb.org/t/p/w780/{{ $value['poster_path'] }}" alt="">
        </a>
      </div>
      <?php endforeach; ?>
    </section>
  </body>
</html>
