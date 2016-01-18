<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Müdo</title>
    <link rel="stylesheet" href="../css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../js/slider.js" type="text/javascript"></script>
  </head>
  <body>
    <header>
      <div id="menu">
        <h1><a title="Accéder à la page d'accueil" href="/accueil">Müdo</a></h1>
        <div class="findFilm">
          @if( Auth::check() )
          <ul class="menuProfil">
            <li class="menuProfil_item">
              <a href="#" class="user">{{ Auth::user()->name }}</a>
              <ul class="sousmenu_ul">
                <li class="sousmenu_li"><a title="accéder à mon profil" href="#">mon profil</a></li>
                <li class="sousmenu_li"><a title="commencer un quiz pour trouver un film" href="/question">commencer un quiz</a></li>
                <li class="sousmenu_li"><a title="Trouver un film grâce à l'option découverte" href="#">découverte</a></li>
                <li class="sousmenu_li"><a title="se déconnecter" href="{!! action('Auth\AuthController@getLogout') !!}">se déconnecter</a></li>
              </ul>
            </li>
          </ul>
          @else
          <ul class="menuProfil">
            <li class="menuProfil_item">
              <a title="se connecter à mon compte" class="user" href="{!! action('Auth\AuthController@getLogin') !!}">se connecter</a>
            </li>
          </ul>
          @endif
        </div>
        <div class="search">
          <form class="search_search" method="post">
            <input type="text" name="text" value="">
            <input type="submit" name="submit" value="OK">
          </form>
          <img src="#" alt="">
        </div>
      </div>
    </header>
		@yield('mainContent')
    <footer>
      <p class="condition">
        This product uses the TMDb API but is not endorsed or certified by TMDb
      </p>
      <p class="logo">
        <a href="https://www.themoviedb.org">
          <img src="../img/tmdb.png" alt="" />
        </a>
      </p>
    </footer>
  </body>
</html>
