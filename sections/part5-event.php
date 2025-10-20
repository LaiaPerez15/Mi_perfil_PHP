<?php
$pageTitle = "Evento - Laia";
$pageStyle = "event.css";
include('../includes/header.php');
$inscripcion = 25.0;
$taller = 15.5;
$total = $inscripcion + $taller;
?>
<section class="evento">
    <h2>🎫 Coste Total del Evento</h2>
    <div class="ticket">
        <ul>
            <li>Inscripción: <?= number_format($inscripcion,2,',','.'); ?> €</li>
            <li>Taller adicional: <?= number_format($taller,2,',','.'); ?> €</li>
            <li class="total"><strong>Total: <?= number_format($total,2,',','.'); ?> €</strong></li>
        </ul>
    </div>
</section>
<?php include('../includes/footer.php'); ?>
