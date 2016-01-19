<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DirectorController extends Controller
{

    public function show($id)
    {
      $token  = new \Tmdb\ApiToken('API_KEY');
      $client = new \Tmdb\Client($token, ['secure' => false]);
      $person = $client->getPeopleApi()->getPerson($id, array('language' => 'fr'));
      $credits = $client->getPeopleApi()->getMovieCredits($id);
      return view('pages/director', [
          'person' => $person,
          'credits' => $credits,
      ]);
    }

}
