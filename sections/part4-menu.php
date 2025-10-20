<?php
$pageTitle = "Menú - Laia";
$pageStyle = "menu.css";
include('../includes/header.php');
$plato = "Paella Valenciana";
$precio = 12.5;
?>
<section class="menu">
    <h2>🍽️ Menú Favorito</h2>
    <div class="card">
        <p class="dish"><?= $plato; ?></p>
        <p class="price"><?= number_format($precio, 2, ',', '.'); ?> €</p>
    </div>
</section>
<?php include('../includes/footer.php'); ?>
