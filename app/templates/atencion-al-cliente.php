<?php ob_start(); ?> 

    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/vendor/jquery.min.js"></script>
    <script type="text/javascript" src="libs/slideandfade/jquery.slideandfade.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>    

<div class="container">

    <div class="display-screen-description" id="display-screen1">
            <div class="displayBox" id="displayBox1_0">
                <div class="imagen-atencion-al-cliente"></div>
                <div class="fragment" id="a" style="color:#f2b244; font-size:24px; left:50px;">Solución de incidencias </div>
                <div class="fragment" id="b" style="color:#254470; font-size:12px; top:60px; left:90px;"><strong>Recepción de pagos</strong></div>
                <div class="fragment" id="c" style="color:#f96122; font-size:44px; top:70px; left:350px; ">Atención al cliente</div>
                <div class="fragment" id="d" style="color: #a2adbf; font-size: 34px; top: 118px; left: 10px;" >Gestión de sujerencias</div>
                <div class="fragment" id="e" style="color:#45628e; top:28px; left: 530px;" >Información del producto</div>
                <div class="fragment" id="f" style="color:#a2adbf; top: 220px; left: 120px;" >Reservaciones</div>
                <div class="fragment" id="g" style="color:#f96122;top: 150px; left: 300px;" >Confirmación de citas</div>
                <div class="fragment" id="h" style="color:#f2b244; top: 183px; left: 100px;">Campañas promocionales </div>
                <div class="fragment" id="i" style="color:#a2adbf; top: 90px; left: 40px;" >Gestión de reclamaciones</div>
                <div class="fragment" id="j" style="color:#c50103; top: 100; left:430px;" >Información de servicios</div>
                <div class="fragment" id="k" style="color:#45628e;top:110px; left: 400px;" >Atención de llamadas de bienvenida</div>
                <div class="fragment" id="l" style="color:#f2b244; top: 160px; left: 560px;" >Toma de ordenes</div>
            </div>
    </div>
    
    <h1>Cómo lo hacemos</h1>
    <h2>Las  sociones UNO que optimizan la experiencia del cliente se centran en lo siguiente</h2>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis neque molestie tortor interdum pretium. Maecenas egestas eros leo, non hendrerit ligula ultrices eu. Sed ullamcorper ligula sapien, quis volutpat nunc suscipit id.</p>
    <p>Mauris accumsan ipsum a velit placerat tincidunt. Nulla lobortis dapibus feugiat. Fusce aliquet quis elit vitae facilisis. Nam venenatis ullamcorper viverra. Ut nulla eros, hendrerit sit amet dapibus eu, faucibus quis eros. Donec sodales eros sed justo placerat, non pretium ante ornare.</p>
    <p>In hendrerit mi eu sagittis elementum. Sed condimentum at est id commodo. Ut sed lectus ut elit egestas dapibus. </p>


</div>
 <?php $contenido = ob_get_clean(); ?>

 <?php include 'layout.php' ?>
