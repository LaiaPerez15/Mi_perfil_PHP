<?php
$pageTitle = "Perfil - Laia";
$pageStyle = "../css/profile.css";
include('../includes/header.php');

$nombre = "Laia";
$descripcion = "Soy desarrolladora junior apasionada por la tecnología y el diseño web. Me encanta crear experiencias digitales atractivas, optimizadas y llenas de personalidad.";
$edad = "19 años";
$ciudad = "Badalona";
?>

<section class="perfil">
    <div class="perfil-portada">
        <div class="halo">
            <img src="/laia-perfil/img/laia.png" alt="Foto de Laia" class="perfil-img">
        </div>
    </div>

    <div class="perfil-info">
        <h2><?= $nombre; ?></h2>
        <p class="meta"><?= $edad; ?> — <?= $ciudad; ?></p>
        <p class="desc"><?= $descripcion; ?></p>
    </div>
</section>

<?php include('../includes/footer.php'); ?>
