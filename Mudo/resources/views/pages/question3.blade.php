@extends ('layout')
	@section ('mainContent')
    <header>
      <div id="menuQuiz">
        <h1><a href="/acceuil">Müdo</a></h1>
        <div class="disconnect">
          <a href="{!! action('Auth\AuthController@getLogout') !!}">Se déconnecter</a>
        </div>
        <div class="search">
          <img src="#" alt="">
        </div>
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
    </header>
    <section>
			<?php foreach($response['results'] as $key => $value): ?>
				<div class="movies">
					<a href="/movies/<?php echo $value['id']; ?>" class="movieLink"></a>
					<img src="https://image.tmdb.org/t/p/w780/<?php echo($value['poster_path']); ?>" alt="" />
					<h2>
						<p><?php echo($value['original_title']); ?></p>
						<p class="date"><?php echo($value['release_date']); ?></p>
					</h2>
				</div>
			<?php endforeach; ?>
    </section>
