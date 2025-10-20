<?php
$pageTitle = "Películas - Laia";
$pageStyle = "movies.css";
include('../includes/header.php');
$horas = 8;
$peliculas = 4;
$lista = [
    ['titulo'=>'Inception','dur'=>148],
    ['titulo'=>'The Matrix','dur'=>136],
    ['titulo'=>'Interstellar','dur'=>169],
    ['titulo'=>'Amélie','dur'=>122],
];
?>
<section class="peliculas">
    <h2>🎬 Maratón de Películas</h2>
    <p>He planificado un maratón de <?= $peliculas; ?> películas durante <?= $horas; ?> horas.</p>
    <table class="movie-table">
        <thead><tr><th>Título</th><th>Duración (min)</th></tr></thead>
        <tbody>
            <?php foreach($lista as $item): ?>
                <tr>
                    <td><?= $item['titulo']; ?></td>
                    <td><?= $item['dur']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
<?php include('../includes/footer.php'); ?>
