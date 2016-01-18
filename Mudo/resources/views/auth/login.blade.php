<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Müdo | Connexion</title>
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>
    <article>
      <section class="background-image-connect">
        <div class="name-logo">
          <h1>
            <a href="/accueil" title="Retourner à la page d'accueil">Müdo</a>
          </h1>
        </div>
        <div class="formulaire">
          <h2>Connexion</h2>
          <p>Inscris toi si ce n'est pas déjà fais pour découvrir toutes les nouvelles possibilités qui s'offrent à toi !</p>
          <form method="POST" class="register" action="/auth/login">
            {!! csrf_field() !!}
            <div>
              <label for="email">Email</label>
              <input type="email" name="email" id="email" value="{{ old('email') }}">
            </div>
            <div>
              <label for="password">Mot de passe</label>
              <input type="password" name="password" id="password">
            </div>
            <div>
              <input type="checkbox" name="remember"> Se souvenir de moi
            </div>
            <div>
              <button type="submit">Se connecter</button>
            </div>
            <div>
              <p class="notRegister">
                <a href="{!! action('Auth\AuthController@getRegister') !!}">Pas encore inscrit ?</a>
              </p>
            </div>
            @include('errors.userErrors')
          </form>
        </div>
      </section>
    </article>
  </body>
</html>
