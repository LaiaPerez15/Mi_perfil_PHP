<?php
$pageTitle = "Películas - Laia";
$pageStyle = "movies.css";
include('../includes/header.php');
?>

<section class="movies-hero">
  <div class="video-bg">
    <video autoplay muted loop playsinline>
      <source src="/laia-perfil/assets/video/f1-trailer.mp4" type="video/mp4">
    </video>
  </div>

  <div class="hero-content">
    <h1>🎬 Maratón de Cine – Estilo Laia</h1>
    
    <div class="hero-buttons">
      <a href="/laia-perfil/assets/video/f1-trailer.mp4" class="btn-play" target="_blank">▶ Reproducir</a>
      <a href="#galeria" class="btn-info">ℹ Más información</a>
    </div>
  </div>
</section>

<section id="galeria" class="movie-gallery-carousel">
  <div class="carousel-track">
    <div class="movie-card f1">
      <div class="overlay">
        <h3>F1 – El Velocista</h3>
        <p>Tráiler oficial del film de carreras más esperado del año.</p>
      </div>
    </div>

    <div class="movie-card merli">
      <div class="overlay">
        <h3>Merlí</h3>
        <p>Serie grabada en Barcelona que te hará pensar y sentir.</p>
      </div>
    </div>

    <div class="movie-card rapunzel">
      <div class="overlay">
        <h3>Enredados</h3>
        <p>Un clásico moderno lleno de humor, color y libertad.</p>
      </div>
    </div>

  </div>
</section>

<?php include('../includes/footer.php'); ?>
