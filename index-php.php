<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title>Libreria Dischi</title>
  </head>
  <body>


    <header>

      <div class='header-container'>
        <img src='http://pluspng.com/img-png/spotify-logo-png-open-2000.png' alt="">
      </div>

    </header>


    <main>

      <div class='main-container'>
        <?php foreach ($database as $cd) { ?>
          <div class="cd">
            <img src="<?= $cd['poster']; ?>" />
            <h3><?= $cd['title'] ?></h3>
            <small><?= $cd['author']; ?></small>
            <strong><?= $cd['year']; ?></strong>
          </div>
        <?php } ?>
      </div>

    </main>


    <footer>

    </footer>


  </body>
</html>
