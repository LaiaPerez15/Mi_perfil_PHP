<?php
$pageTitle = "Menú - Laia";
$pageStyle = "menu.css";
include('../includes/header.php'); // ajusta la ruta si hace falta

// Definición del menú
$menu = [
    "Entrantes" => [
        ["name" => "Chocos", "desc" => "Fritos y crujientes", "price" => 8.00],
        ["name" => "Bravas", "desc" => "Patatas con salsa especial", "price" => 5.00],
        ["name" => "Croquetas de jamón ibérico", "desc" => "Tamaño casero", "price" => 6.50],
    ],
    "Principales" => [
        ["name" => "Ensalada de tomate con queso de cabra", "desc" => "Tomate de temporada y vinagreta", "price" => 7.50],
        ["name" => "Spaghetti a la carbonara", "desc" => "Receta tradicional", "price" => 9.50],
        ["name" => "Risotto de setas", "desc" => "Cremoso con mezcla de setas", "price" => 11.50],
    ],
    "Segundos" => [
        ["name" => "Canelones", "desc" => "Rellenos y gratinados", "price" => 9.00],
        ["name" => "Fideuá", "desc" => "Con alioli", "price" => 12.00],
        ["name" => "Pollo rebozado con patatas", "desc" => "Crujiente y casero", "price" => 10.50],
    ],
    "Postres" => [
        ["name" => "Coulant de chocolate con helado de vainilla", "desc" => "", "price" => 5.50],
        ["name" => "Granizado de limón natural", "desc" => "", "price" => 4.00],
        ["name" => "Crema catalana", "desc" => "", "price" => 5.00],
    ],
    "Bebidas" => [
        ["name" => "Refrescos", "desc" => "Coca-Cola, Fanta, etc.", "price" => 2.50],
        ["name" => "Cerveza", "desc" => "Caña o botella", "price" => 3.00],
        ["name" => "Agua", "desc" => "Con o sin gas", "price" => 1.50],
    ],
    "Vinos" => [
        ["name" => "Vino rosado espumoso", "desc" => "", "price" => 4.50],
        ["name" => "Vino blanco", "desc" => "", "price" => 4.00],
        ["name" => "Vino tinto", "desc" => "", "price" => 4.50],
    ],
];

// Rutas de fotos
$photoLeft = "../img/portada-comida.png"; // imagen principal
$photoRight1 = "../img/vino.png";         // imagen lateral 1
$photoRight2 = "../img/spaguetti.png";    // imagen lateral 2
?>

<section class="menu-page">
    <div class="menu-card">
        <header class="menu-header">
            <div class="hero" style="background-image: url('<?= $photoLeft ?>');"></div>
        </header>

        <div class="menu-body">
            <div class="menu-columns">
                <div class="menu-left">
                    <?php
                    $leftSections = ["Entrantes", "Principales", "Segundos"];
                    foreach ($leftSections as $section):
                        if (!isset($menu[$section])) continue;
                    ?>
                    <section class="section">
                        <h2><?= $section ?></h2>
                        <ul class="items">
                            <?php foreach ($menu[$section] as $item): ?>
                            <li class="menu-item">
                                <div class="item-info">
                                    <span class="item-name"><?= htmlspecialchars($item['name']) ?></span>
                                    <?php if (!empty($item['desc'])): ?>
                                    <span class="item-desc"><?= htmlspecialchars($item['desc']) ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="item-price"><?= number_format($item['price'], 2, ',', '.') ?> €</div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </section>
                    <?php endforeach; ?>
                </div>

                <aside class="menu-right">
                    <div class="photo-grid">
                        <div class="photo">
                            <img src="<?= $photoRight1 ?>" >
                        </div>
                        <div class="photo">
                            <img src="<?= $photoRight2 ?>">
                        </div>
                    </div>

                    <div class="side-sections">
                        <?php foreach (["Postres", "Bebidas", "Vinos"] as $sec): if (!isset($menu[$sec])) continue; ?>
                        <section class="section small">
                            <h3><?= $sec ?></h3>
                            <ul class="items small">
                                <?php foreach ($menu[$sec] as $item): ?>
                                <li class="menu-item">
                                    <div class="item-info">
                                        <span class="item-name"><?= htmlspecialchars($item['name']) ?></span>
                                    </div>
                                    <div class="item-price"><?= number_format($item['price'], 2, ',', '.') ?> €</div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </section>
                        <?php endforeach; ?>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<?php include('../includes/footer.php'); ?>
