<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use Carbon\Carbon;

class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only'=>['quiz']]);
    }

    public function home(){
    	return view('pages/home'); 
    }

    public function quiz()
    {
        return view('pages/quiz');   
    }

    public function movies()
    {
        return view('pages/movies');
    }

    public function sheet()
    {
        return view('pages/sheet');
    }
    public function celebrity()
    {
        return view('pages/celebrity');
    }

    public function qOne()
    {
        return view('pages/questionOne');   
    }
    public function qTwo()
    {
        return view('pages/questionTwo');   
    }
    public function qThree()
    {
        return view('pages/questionThree');   
    }
    public function qFour()
    {
        return view('pages/questionFour');   
    }
    public function qFive()
    {
        return view('pages/questionFive');   
    }
    public function qSix()
    {
        return view('pages/questionSix');   
    }
    public function qSeven()
    {
        return view('pages/questionSeven');   
    }
    public function qEight()
    {
        return view('pages/questionEight');   
    }
    public function qNine()
    {
        return view('pages/questionNine');   
    }
    public function qTen()
    {
        return view('pages/questionTen');   
    }



}