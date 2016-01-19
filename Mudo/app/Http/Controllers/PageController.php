<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use Carbon\Carbon;

class PageController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth', ['only'=>['quiz']]);
    // }

    public function quiz()
    {
        return view('pages/quiz');
    }

    public function latest(){
      $token  = new \Tmdb\ApiToken('API_KEY');
      $client = new \Tmdb\Client($token, ['secure' => false]);
      $popularity = $client->getDiscoverApi()->discoverMovies([
        'page' => 1,
        'language' => 'fr',
        'sort_by' => 'popularity.desc',
        'release_date.gte' => '2015-01-01',
      ]);
      $vote = $client->getDiscoverApi()->discoverMovies([
        'page' => 1,
        'language' => 'fr',
        'sort_by' => 'vote_count.desc',
      ]);
      $cinema = $client->getDiscoverApi()->discoverMovies([
        'page' => 1,
        'language' => 'fr',
        'primary_release_date.gte' =>'2015-12-15',
        'primary_release_date.lte' => '2016-02-01',
      ]);
      return view('pages/home', [
          'popularity' => $popularity,
          'vote' => $vote,
          'cinema' => $cinema,
      ]);
    }
}
