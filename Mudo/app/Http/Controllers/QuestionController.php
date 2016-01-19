<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use App\Question;
use Carbon\Carbon;
use DB;
use Input;

class QuestionController extends Controller
{

    public function index()
    {
        $questions = Question::orderByRaw('RAND()')->take(1)->get();
        return view('pages.question', [
          'questions' => $questions,
        ]);
    }
    public function show($tag)
    {
        $token  = new \Tmdb\ApiToken('API_KEY');
        $client = new \Tmdb\Client($token, ['secure' => false]);
        $questions = Question::orderByRaw('RAND()')->take(1)->get();
        session(['ids'=>$tag]); // on stock l'id dans le tag
        $response = $client->getDiscoverApi()->discoverMovies([
            'page' => 1,
            'language' => 'fr',
            'with_keywords' => $tag,
        ]);
        return view('pages/question2', [
            'response' => $response,
            'questions' => $questions,
        ]);
    }
    public function showDeux($tag)
    {
        $ids = session('ids'); // on récupère l'id
        $ids.='|'.$tag;
        session(['ids'=>$ids]); // on stock l'id
        $token  = new \Tmdb\ApiToken('API_KEY');
        $client = new \Tmdb\Client($token, ['secure' => false]);
        $questions = Question::orderByRaw('RAND()')->take(1)->get();
        $response = $client->getDiscoverApi()->discoverMovies([
            'page' => 1,
            'language' => 'fr',
            'with_keywords' => $ids,
        ]);
        return view('pages/question3', [
            'response' => $response,
            'questions' => $questions,
        ]);
    }
    public function showTrois($tag)
    {
      $ids = session('ids');
      $idss = session('ids');
      $idss.='|'.$tag.'|'.$ids;
      session(['ids'=>$idss]);
      $token  = new \Tmdb\ApiToken('API_KEY');
      $client = new \Tmdb\Client($token, ['secure' => false]);
      $questions = Question::orderByRaw('RAND()')->take(1)->get();
      $response = $client->getDiscoverApi()->discoverMovies([
          'page' => 1,
          'language' => 'fr',
          'with_keywords' => $idss,
      ]);
      return view('pages/question4', [
          'response' => $response,
          'questions' => $questions,
      ]);
    }
}
