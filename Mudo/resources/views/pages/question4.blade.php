@extends ('layout')
	@section ('mainContent')
    <header>
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
