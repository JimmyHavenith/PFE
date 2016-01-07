<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Müdo | Accueil</title>
    <link rel="stylesheet" href="/css/main.css">
  </head>
  <body>
    <header>
      <div id="menu">
        <h1><a href="/acceuil">Müdo</a></h1>
        <div class="findFilm">
          @if( Auth::check() )
            <a href="{!! action('Auth\AuthController@getLogout') !!}">
              se déconnecter
            </a>
          @else
            <a href="{!! action('Auth\AuthController@getLogin') !!}">
              se connecter
            </a>
          @endif
          <!-- <?php if( isset($_SESSION['connected'] )) :?>
            <a href="{!! action('Auth\AuthController@getLogin') !!}">
              se déconnecter
            </a>
          <?php else :?>
            <a href="{!! action('Auth\AuthController@getLogout') !!}">
              se connecter
            </a>
          <?php endif; ?> -->
          <!-- <a href="{!! action('Auth\AuthController@getLogin') !!}">Trouver mon film</a> -->
        </div>
        <div class="search">
          <img src="#" alt="">
        </div>
      </div>
      <div id="latest">
        <img src="../img/mad.png" alt="">
      </div>
    </header>
    <section>
      <div id="slogan">
        <p>Fini les prises de têtes pour trouver un film,</p>
        <p>Passe le quizz et trouve ton bonheur !</p>
        <img src="../img/icons.svg" alt="">
      </div>
    </section>
    <section>
      <div id="toDoQuiz">
        <p>
          @if( Auth::check() )
            <a href="/quiz">
              Trouver mon film
            </a>
          @else
            <a href="{!! action('Auth\AuthController@getLogin') !!}">
              Trouver mon film
            </a>
          @endif
        </p>
      </div>
    </section>
  </body>
</html>
