@extends ('layout')
	@section ('mainContent')
		<section class="quiz-page">
			<div class="quiz-yesorno">
				<h2>
					@foreach($questions as $question)
						<p>{{ $question->title }}</p>
						<?php
						$tag=$question->tag;
						$img=$question->image;
						?>
					@endforeach
				</h2>
				<div class="yesorno">
					<div class="yes">
						<a href="/question4/{{ $tag }}">yes</a>
					</div>
					<div class="no">
						<a href="">no<input type="button" onclick='window.location.reload(false)' value="Rafraichir"/></a>
					</div>
				</div>
			</div>
      <div id="latest">
        <img src="../{{ $img }}" alt="">
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
