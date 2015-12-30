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
            <a href="/question2/{{ $tag }}">yes</a>
          </div>
          <div class="no">
            <a href="/question">no</a>
          </div>
        </div>
      </div>
      <div id="latest">
        <img src="{{ $img }}" alt="">
      </div>
    </header>
    <section>
      <div class="loading">
        <h3>En attente de propositions de films </br><span>...</span></h3>
      </div>
    </section>
