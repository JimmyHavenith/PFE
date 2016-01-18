<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{

    public function show($id)
    {
      $token  = new \Tmdb\ApiToken('579fa093874ff0018a90f6279b579e86');
      $client = new \Tmdb\Client($token, ['secure' => false]);
      $movie = $client->getMoviesApi()->getMovie($id, array('language' => 'fr'));
      $credits = $client->getMoviesApi()->getCredits($id);
      $images = $client->getMoviesApi()->getImages($id);
      $response = $client->getDiscoverApi()->discoverMovies([
          'page' => 1,
          'language' => 'fr',
      ]);
      $trailers = $client->getMoviesApi()->getTrailers($id);
      return view('pages/movie', [
          'movie' => $movie,
          'credits' => $credits,
          'images' => $images,
          'response' => $response,
          'trailers' => $trailers,
      ]);
    }
}
