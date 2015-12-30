<?php
$token  = new \Tmdb\ApiToken('579fa093874ff0018a90f6279b579e86');
// $client = new \Tmdb\Client($token);
$client = new \Tmdb\Client($token, ['secure' => false]);

$movies = $client->getKeywordsApi()->getMovies(12377);
$genres = $client->getGenresApi()->getMovies(35);


$response = $client->getDiscoverApi()->discoverMovies([
    'page' => 1,
    'language' => 'en',
    'with_keywords' => 12377,
    'with_genres' => '27, 53',
		'release_date.lte' => '2000-01-01',
]);
?>
@extends ('layout')
	@section ('mainContent')
    <section>
			<?php foreach($response['results'] as $key => $value): ?>
				<div class="movies">
					<a href="movie/<?php echo $value['id']; ?>" class="movieLink"></a>
					<img src="https://image.tmdb.org/t/p/w780/<?php echo($value['poster_path']); ?>" alt="" />
					<h2>
						<p><?php echo($value['original_title']); ?></p>
						<p class="date"><?php echo($value['release_date']); ?></p>
					</h2>
				</div>
			<?php endforeach; ?>
    </section>
