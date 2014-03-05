<?php 
 ob_start();
?>

<div class="container">
    <div class="col-md-8">
        <h1>Estudios de mercado</h1>
    </div>
</div>

<?php
$contenido = ob_get_clean();
include 'layout.php';
?>