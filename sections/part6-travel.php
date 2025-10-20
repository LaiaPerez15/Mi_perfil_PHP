<?php
$pageTitle = "Viaje - Laia";
$pageStyle = "travel.css";
include('../includes/header.php');
$destino = "Roma";
$dias = 5;
?>
<section class="viaje">
    <h2>✈️ Próximo Viaje</h2>
    <div class="card">
        <p>Mi próximo viaje será a <strong><?= $destino; ?></strong> durante <strong><?= $dias; ?></strong> días.</p>
    </div>
</section>
<?php include('../includes/footer.php'); ?>
