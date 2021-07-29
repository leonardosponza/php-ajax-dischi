<?php
require __DIR__ . '/db/dischi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vue Dischi</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div id="app">

  <div class="album">
    <?php foreach($dischi as $album) {?>
      <div class="dischi">
        <img src="<?= $album['poster']; ?>" alt="<?= $album['title']; ?>">
        <h3><?= $album['title']; ?></h3>
        <div class="color">
          <div><?= $album['author']; ?></div>
          <div><?= $album['year']; ?></div>
        </div>
      </div>

    <?php } ?>