@extends ('layout')
@section('mainContent')
    <div>
      @if( $movie['backdrop_path'] == true)
        <div id="backdrop"  style="background-image: url('https://image.tmdb.org/t/p/original/{{ $movie['backdrop_path'] }}'); background-repeat: no-repeat; background-size: cover; width: 100%; height: 394px; ">
      @else
        <div id="backdrop"  style="background-image: url('../img/listeFilm.png'); background-repeat: no-repeat; background-size: cover; width: 100%; height: 394px; ">
      @endif
    </div>
    <section class="contenu">
      <section>
        <div class="features">
          <div class="continueQuiz">
            <input type="button" title="Retourner à la page précédente" value="Continuer le quiz" onclick="history.back();">
          </div>
          <div class="features_features">
            @if( Auth::check() )
              <ul>
                <li class="mview"><a title="Marquer ce film comme étant déjà vu !" href="#">Marquer comme vu</a></li>
                <li class="wishlist"><a title="Ajouter ce film dans sa liste de films à voir !"a href="#">Watchlist</a></li>
              </ul>
            @else
            @endif
          </div>
        </div>
      </section>
      <section>
        <img class="profil" src="https://image.tmdb.org/t/p/w780/{{ $movie['poster_path'] }}" alt="Affiche du film {{ $movie['title'] }}" title="{{ $movie['title'] }}">
        <div class="infos">
          <h2>{{ $movie['title'] }}</h2>
          <div class="infos_infos">
            <p class="dtg">{{ $movie['release_date'] }}</p>
            <p class="dtg">{{ $movie['runtime'] }}min</p>
          </div>
          <div class="infos_sup">
            <p class="infosSup">Genres :
              @foreach($movie['genres'] as $key => $genre)
                {{ $genre['name'] }}
              @endforeach
            </p>
            <p class="infosSup">Réalisateur :
              @if($credits['crew'] == true)
                <a href="../director/{{ $credits['crew'][0]['id']}}" title="Voir la fiche de {{ $credits['crew'][0]['name'] }}">{{ $credits['crew'][0]['name'] }}</a></p>
              @else
                Cette information n'est pas disponible
              @endif
            </p>
            <p class="infosSup">Casting :</a></p>
            @if($credits['cast'] == true)
              <table class="cast">
                @foreach($credits['cast'] as $key => $casting)
                  @if($key < 5)
                    <tr>
                      <td class="cast-actor"><a href="../person/{{ $casting['id'] }}" title="voir la fiche de {{ $casting['name'] }}">{{ $casting['name'] }}</a></td>
                      <td class="cast-character">{{ $casting['character'] }}</td>
                    </tr>
                  @endif
                @endforeach
                <tr>
                  <td></td>
                  <td class="cast-character"><a href="#">Voir au complet</a></td>
                </tr>
              </table>
            @else
              <p>Ces informations ne sont pas disponibles</p>
            @endif
            <p>Titre original : {{ $movie['original_title'] }}</p>
            <p>Nationalité : {{ $movie['production_countries'][0]['name'] }}</p>
          </div>
        </div>
      </section>
      <section>
        <div class="overview">
          <p>
            @if($movie['overview'] == true)
              {{ $movie['overview'] }}
            @else
              Nous ne disposons pas d'un résumé du film {{ $movie['title'] }}
            @endif
          </p>
        </div>
      </section>
      <section>
        @if($images['backdrops'] == true)
          <div id="galerie">
            <div class="slider">
                @foreach($images['backdrops'] as $key => $image)
                  <a href="#" class="thumbnail" alt="la mer">
                    <img data-img="https://image.tmdb.org/t/p/w780/{{ $image['file_path'] }}" src="https://image.tmdb.org/t/p/w780/{{ $image['file_path'] }}" alt="image du film {{ $movie['title'] }}" title="{{ $movie['title'] }}">
                  </a>
                @endforeach
            </div>
            <div class="suiv"></div>
            <div class="prec"></div>
          </div>
        @else
          <div id="galerie" style="display:none"></div>
        @endif
      </section>
      <section>
        <div class="trailer">
          @if( $trailers['youtube'] == true)
            <iframe src="https://www.youtube.com/embed/{{ $trailers['youtube'][0]['source']}}" frameborder="0" allowfullscreen></iframe>
          @else
          @endif
        </div>
      </section>
    </section>
@endsection
