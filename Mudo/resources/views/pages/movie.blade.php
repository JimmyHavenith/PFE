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
      </div>
      <div id="backdrop"  style="background-image: url('https://image.tmdb.org/t/p/original/{{ $movie['backdrop_path'] }}'); background-repeat: no-repeat; background-size: cover; width: 100%; height: 394px; ">
      </div>
    </header>
    <section class="contenu">
      <section>
        <div class="features">
          <div class="continueQuiz">
            <input type="button" title="Retourner à la page précédente" value="Continuer le quiz" onclick="history.back();">
          </div>
          <div class="features_features">
            <ul>
              <li class="mview"><a title="Marquer ce film comme étant déjà vu !" href="#">Marquer comme vu</a></li>
              <li class="wishlist"><a title="Ajouter ce film dans sa liste de films à voir !"a href="#">Watchlist</a></li>
            </ul>
          </div>
        </div>
      </section>
      <section>
        <img src="https://image.tmdb.org/t/p/w780/{{ $movie['poster_path'] }}" alt="">
        <div class="infos">
          <h2>{{ $movie['title'] }}</h2>
          <div class="infos_infos">
            <p class="dtg">{{ $movie['release_date'] }}</p>
            <p class="dtg">{{ $movie['runtime'] }}min</p>
          </div>
          <div class="infos_sup">
            <p class="infosSup">Genres :
              @foreach($movie['genres'] as $key => $genre)
                {{ $genre['name'] }} |
              @endforeach
            </p>
            <p class="infosSup">Réalisateur : <a href="#">{{ $credits['crew'][0]['name'] }}</a></p>
            <p class="infosSup">Casting :</a></p>
            <p class="cast"><a href="../person/{{ $credits['cast']['0']['id'] }}">{{ $credits['cast'][0]['name'] }}</a> dans le role de {{ $credits['cast'][0]['character'] }}</p>
            <p class="cast"><a href="../person/{{ $credits['cast']['1']['id'] }}">{{ $credits['cast'][1]['name'] }}</a> dans le role de {{ $credits['cast'][1]['character'] }}</p>
            <p class="cast"><a href="../person/{{ $credits['cast']['2']['id'] }}">{{ $credits['cast'][2]['name'] }}</a> dans le role de {{ $credits['cast'][2]['character'] }}</p>
            <p class="cast"><a href="../person/{{ $credits['cast']['3']['id'] }}">{{ $credits['cast'][3]['name'] }}</a> dans le role de {{ $credits['cast'][3]['character'] }}</p>
            <p class="cast"><a href="../person/{{ $credits['cast']['4']['id'] }}">{{ $credits['cast'][4]['name'] }}</a> dans le role de {{ $credits['cast'][4]['character'] }}</p>
            <p>
              <a href="#">Voir au complet</a>
            </p>
            <p>Titre original : {{ $movie['original_title'] }}</p>
            <p>Nationalité : {{ $movie['production_countries'][0]['name'] }}</p>
          </div>
        </div>
      </section>
      <section>
        <div class="overview">
          <p>
            {{ $movie['overview'] }}
          </p>
        </div>
      </section>
      <!-- <section>
        <div class="tags">
          <p>Tags</p>
          <p class="tags_tags">
          </p>
        </div>
      </section> -->
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
