<?php
// Header común. Usa rutas absolutas desde la raíz del servidor:
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Laia - Perfil'; ?></title>
    <link rel="stylesheet" href="/laia-perfil/assets/css/base.css">
    <?php if (isset($pageStyle) && $pageStyle): ?>
        <link rel="stylesheet" href="/laia-perfil/assets/css/<?= $pageStyle; ?>">
    <?php endif; ?>
    <script defer src="/laia-perfil/assets/js/script.js"></script>
</head>
<body>
<header>
    <div class="container">
        <img src="/laia-perfil/img/logo.png" alt="Logo Laia" class="logo">
        <h1>Laia — Perfil público</h1>
        <nav>
            <ul class="nav">
                <li><a href="/laia-perfil/index.php">Inicio</a></li>
                <li><a href="/laia-perfil/sections/part1-profile.php">Perfil</a></li>
                <li><a href="/laia-perfil/sections/part2-music.php">Música</a></li>
                <li><a href="/laia-perfil/sections/part3-movies.php">Películas</a></li>
                <li><a href="/laia-perfil/sections/part4-menu.php">Menú</a></li>
                <li><a href="/laia-perfil/sections/part5-event.php">Evento</a></li>
                <li><a href="/laia-perfil/sections/part6-travel.php">Viaje</a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
