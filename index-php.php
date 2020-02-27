<?php
  include __DIR__ . '/dist/php/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font-family: Roboto -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
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
      <?php
        foreach($db as $track) {
      ?>
        <div class="main__tracks__track">
          <div class="main__tracks__track__poster">
            <img src="<?php echo $track['poster'] ?>" alt="Album poster" title="<?php echo $track['title'] ?>">
          </div>
          <h2 class="main__tracks__track__title">
          <?php
            echo $track['title'];
          ?>
          </h2>
          <h3 class="main__tracks__track__author">
          <?php
            echo $track['author'];
          ?>
          </h3>
          <h3 class="main__tracks__track__year">
          <?php
            echo $track['year'];
          ?>
          </h3>
        </div>
      <?php } ?>
      </section>
    </main>
  </div>
  <div class="footer-wrapper">
    <footer class="footer">

    </footer>
  </div>
</body>
</html>
