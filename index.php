<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- libreria jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- libreria handlebars per templates -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js" integrity="sha256-/PJBs6QWvXijOFIX04kZpLb6ZtSQckdOIavLWKKOgXU=" crossorigin="anonymous"></script>
  <!-- font-family: Roboto -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <script src="dist/js/app.js" charset="utf-8"></script>

  </script>
  <!-- foglio di stile principale -->
  <link rel="stylesheet" href="dist/css/app.css">
  <title>Php Ajax Dischi</title>
</head>
<body>
  <div class="header-wrapper">
    <header class="header">
      <img class="header__logo" src="img/logo.png" alt="Spotify" Title="Spotify">
    </header>
  </div>
  <div class="main-wrapper">
    <main class="main">
      <section class="main__tracks">

      </section>
    </main>
  </div>
  <div class="footer-wrapper">
    <footer class="footer">

    </footer>
  </div>
  <script id="track-template" type="text/x-handlebars-template">
    <div class="main__tracks__track">
      <div class="main__tracks__track__poster">
        <img src="{{poster}}" alt="Album poster" title="{{title}}">
      </div>
      <h2 class="main__tracks__track__title">
        {{title}}
      </h2>
      <h3 class="main__tracks__track__author">
        {{author}}
      </h3>
      <h3 class="main__tracks__track__year">
        {{year}}
      </h3>
    </div>
  </script>
</body>
</html>
