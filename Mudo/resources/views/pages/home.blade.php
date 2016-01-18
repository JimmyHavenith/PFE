@extends ('layout')
@section('mainContent')
    <section>
      <div id="latest">
        <div class="contener_slideshow">
          <div class="contener_slide">
            <div class="slide_1"><img src="../img/mad.png" alt=""><a href="/movies/76341">Intéressé par ce film ?</a></div>
            <div class="slide_2"><img src="../img/starwars.png" alt=""><a href="/movies/140607">Intéressé par ce film ?</a></div>
            <div class="slide_3"><img src="../img/salopards.png" alt=""><a href="/movies/273248">Intéressé par ce film ?</a></div>
            <div class="slide_4"><img src="../img/martian.png" alt=""><a href="/movies/286217">Intéressé par ce film ?</a></div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div id="slogan">
        <p>Fini les prises de têtes pour trouver un film,</p>
        <p>Passe le quiz et trouve ton bonheur !</p>
        <img src="../img/icons.svg" alt="">
      </div>
    </section>
    <section>
      <div class="toDoQuiz">
        <p>
          <a class="quiz-link" href="/quiz">
            <span class="quiz-link__text">Trouver mon film</span>
            <span class="quiz-link__bg"></span>
          </a>
        </p>
      </div>
    </section>
    <section class="popularity">
      <h2>Les films les plus populaires de 2015</h2>
      <div class="popularity_popularity">
        @foreach($popularity['results'] as $key => $value)
          @if($key<5)
            <div class="popularity_movies">
              <h3>{{ $value['title'] }}</h3>
              <a href="/movies/{{ $value['id'] }}" title="{{ $value['title'] }}">
                <img src="https://image.tmdb.org/t/p/w780/{{ $value['poster_path'] }}" alt="affiche du film {{ $value['title'] }}"/>
              </a>
            </div>
          @endif
        @endforeach
      </div>
    </section>
    <section class="vote">
      <h2>Les films les plus notés</h2>
      <div class="vote_vote">
        @foreach($vote['results'] as $key => $value)
          @if($key<5)
            <div class="vote_movies">
              <h3>{{ $value['title'] }}</h3>
              <a href="/movies/{{ $value['id'] }}" title="{{ $value['title'] }}">
                <img src="https://image.tmdb.org/t/p/w780/{{ $value['poster_path'] }}" alt="affiche du film {{ $value['title'] }}"/>
              </a>
            </div>
          @endif
        @endforeach
      </div>
    </section>
    <section class="cinema">
      <h2>Les films actuellement au cinéma</h2>
      <div class="cinema_cinema">
        @foreach($cinema['results'] as $key => $value)
          @if($key<5)
            <div class="cinema_movies">
              <h3>{{ $value['title'] }}</h3>
              <a href="/movies/{{ $value['id'] }}" title="{{ $value['title'] }}">
                <img src="https://image.tmdb.org/t/p/w780/{{ $value['poster_path'] }}" alt="affiche du film {{ $value['title'] }}"/>
              </a>
            </div>
          @endif
        @endforeach
      </div>
    </section>
@endsection
