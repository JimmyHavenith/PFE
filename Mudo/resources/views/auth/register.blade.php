<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Müdo | Inscription</title>
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>
    <article>
      <section class="background-image-register">
        <div class="name-logo">
          <h1>
            <a href="/acceuil">Müdo</a>
          </h1>
        </div>
        <div class="formulaire">
          <h2>Inscription</h2>
          <p>Rejoins le monde merveilleux du septième art</p>
          <form method="POST" class="register" action="/auth/register">
            {!! csrf_field() !!}

            <div>
              <label for="name">Pseudo</label>
              <input type="text" name="name" value="{{ old('name') }}">
            </div>
            <div>
              <label for="email">Email</label>
              <input type="email" name="email" value="{{ old('email') }}">
            </div>
            <div>
              <label for="password">Mot de passe</label>
              <input type="password" name="password">
            </div>
            <div>
              <label for="password">Confirmer votre mot de passe</label>
              <input type="password" name="password_confirmation">
            </div>
            <div>
              <button type="submit">Register</button>
            </div>
          </form>
        </div>
      </section>
    </article>
  </body>
</html>
