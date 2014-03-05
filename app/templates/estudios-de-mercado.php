<?php 
 ob_start();
?>

<div class="container">
    <h1>Estudios de mercado</h1>
</div>

<?php
$contenido = ob_get_clean();
include 'layout.php';
?>