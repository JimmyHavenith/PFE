@extends ('layout')
@section('mainContent')
	<section class="quiz-page">
		<div class="quiz-yesorno">
			<h2 class="resultats">
				Voici les films correspondant à vos trois réponses positives !
			</h2>
			<div class="toDoQuiz2">
				<p>
					<a class="quiz-link2" href="/question">
						<span class="quiz-link__text2">Recommencer le quiz ?</span>
						<span class="quiz-link__bg2"></span>
					</a>
				</p>
			</div>
		</div>
		<div id="latest">
			<img src="../img/television.png" alt="">
		</div>
	</section>
  <section>
		<div class="movies_result">
			@foreach($response['results'] as $key => $value)
				<div class="movies">
					<a href="/movies/{{ $value['id'] }}" class="movieLink" title="{{ $value['title'] }}"></a>
					<img src="https://image.tmdb.org/t/p/w780/{{ $value['poster_path'] }}" alt="affiche du film {{ $value['title'] }}" title="{{ $value['title'] }}" />
					<h2>
						<p>{{ $value['title'] }}</p>
						<p class="date">{{ $value['release_date'] }}</p>
					</h2>
				</div>
			@endforeach
		</div>
  </section>
@endsection
