<?php
$pageTitle = "Música - Laia";
$pageStyle = "music.css";
include('../includes/header.php');

$cancion = "There's Nothing Holdin' Me Back";
$artista = "Shawn Mendes";
$spotifyLink = "https://open.spotify.com/track/7JJmb5XwzOO8jgpou264Ml"; 
?>

<section class="music-section">
  <div class="video-bg"></div>

  <div class="music-content">
    <!-- Contenedor de la portada con animaciones -->
    <div class="cover-container">
      <div class="heartbeat"></div>
      <div class="wave"></div>
      <div class="cover"></div>
    </div>

    <h2 class="song-title"><?= $cancion; ?></h2>
    <p class="artist"><?= $artista; ?></p>

    <div class="lyrics">
      <p>No, nothing holding me back...</p>
      <p>She pulls me in enough to keep me guessing...</p>
      <p>And maybe I should stop and start confessing...</p>
    </div>

    <a href="<?= $spotifyLink; ?>" target="_blank" class="spotify-btn">
      🎧 Escuchar en Spotify
    </a>
  </div>
</section>

<?php include('../includes/footer.php'); ?>
