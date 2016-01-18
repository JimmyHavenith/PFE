@extends ('layout')
@section('mainContent')
    <div>
      <div id="backdrop"  style="background-image: url('https://image.tmdb.org/t/p/original/{{ $taggedImages['results'][0]['file_path'] }}'); background-repeat: no-repeat; background-size: cover; width: 100%; height: 394px; ">
    </div>
    <section class="contenu">
      <section class="actor">
        <h2>{{ $person['name'] }}</h2>
        @if($person['profile_path'] == true )
          <img class="profil_actor" src="https://image.tmdb.org/t/p/original/{{ $person['profile_path'] }}" alt="photo de profil de l'acteur" title="{{ $person['name'] }}">
        @else
          <img class="profil_actor" src="../img/profil.png" alt="photo de profil de l'acteur" title="{{ $person['name'] }}">
        @endif
        <div class="infos_actor">
          <ul>
            <li>
              Date de naissance :
              @if( $person['birthday'] == true )
                {{ $person['birthday'] }}
              @else
                Cette information n'est pas disponible
              @endif
            </li>
            <li>
              Date de décès :
              @if( $person['deathday'] == true )
                {{ $person['deathday'] }}
              @else
                /
              @endif
            </li>
            <li><a href="{{ $person['homepage'] }}" title="aller voir la page personnelle de {{ $person['name'] }}">Cliquer ici pour voir sa page personnelle</a></li>
            <li>
              <p>
                @if( $person['biography'] == true )
                  {{ $person['biography'] }}
                @else
                  Nous ne disposons pas de la biographie de {{ $person['name'] }}
                @endif
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="actor">
        <div class="movies_actor">
          <h3>Vous l'avez probablement vu dans ... </h3>
          <div class="affiches">
            @foreach($credits['cast'] as $key => $value)
              @if($key < 5)
                <a href="/movies/{{ $value['id'] }}">
                  <img src="https://image.tmdb.org/t/p/w780/{{ $value['poster_path'] }}" alt="film dans lequel a joué l'acteur">
                </a>
              @endif
            @endforeach
          </div>
        </div>
      </section>
    </section>
@endsection
