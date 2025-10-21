<?php
$pageTitle = "Laia - Perfil";

// Array de cartas de colores con barra inferior
$menus = [
    ['title' => 'Perfil', 'link' => '/laia-perfil/sections/part1-profile.php', 'color' => '142, 252, 204'],
    ['title' => 'Música', 'link' => '/laia-perfil/sections/part2-music.php', 'color' => '142, 252, 157'],
    ['title' => 'Películas', 'link' => '/laia-perfil/sections/part3-movies.php', 'color' => '215, 252, 142'],
    ['title' => 'Menú', 'link' => '/laia-perfil/sections/part4-menu.php', 'color' => '252, 252, 142'],
    ['title' => 'Evento', 'link' => '/laia-perfil/sections/part5-event.php', 'color' => '252, 208, 142'],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="/laia-perfil/assets/css/base.css">
    <link rel="stylesheet" href="/laia-perfil/assets/css/menu.css">
    <script defer src="/laia-perfil/assets/js/script.js"></script>
</head>
<body>
<header>
    <div class="container">
        <div class="logo-section">
            <img src="/laia-perfil/img/logo.png" alt="Logo Laia" class="logo">
            <h1>Laia — Perfil público</h1>
        </div>
    </div>
</header>

<main>
    <!-- Carrusel 3D de cartas de colores con barra inferior -->
    <div class="wrapper">
        <div class="inner" style="--quantity: <?= count($menus) ?>;">
            <?php foreach ($menus as $index => $menu): ?>
                <div class="card" style="--index: <?= $index ?>; --quantity: <?= count($menus) ?>; --color-card: <?= $menu['color'] ?>;">
                    <a href="<?= $menu['link'] ?>">
                        <span><?= $menu['title'] ?></span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<footer>
    &copy; <?= date('Y') ?> Laia — Todos los derechos reservados
</footer>
</body>
</html>
