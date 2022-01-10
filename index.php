<?php
 require_once __DIR__ . "/server.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Php ajax dischi</title>
</head>
<body>
    <header>
      <div class="logo">
        <img src="img/logo-spotify.png" alt="Spotify Logo">
      </div>
    </header>

    <main>
      <div class="container">
        <div class="cards-list">
          <?php foreach($database as $disc) { ?>
            <div class="card">
              <div class="album-img">
                <img src=' <?php echo $disc["poster"] ?>' alt="">
              </div>
              <div class="album-info">
                <h3 class="title">
                <?php echo $disc["title"] ?>
                </h3>
                <div class="author">
                  <?php echo $disc["author"] ?>
                </div>
                <div class="year">
                  <?php echo $disc["year"] ?>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </main>
  <!-- import vue -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <!-- import axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- import script -->
  <script src="js/script.js"></script>
</body>
</html>