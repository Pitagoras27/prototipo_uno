<?php
 ob_start();
 include 'functions/funciones.php';
?>

<div class="container">
    <div class="col-md-12">
        <div class="col-md-8">
            <h1>Experiencia del cliente</h1> 
            <p>Maecenas condimentum orci in dui lobortis, sit amet ultricies sem pretium. Sed pretium nunc sed justo sodales, id venenatis augue dignissim. Vivamus volutpat vestibulum sodales. Aliquam quis bibendum purus. Vivamus ut cursus tellus. Duis euismod purus nisl, in porttitor elit placerat commodo. Quisque ligula erat, pulvinar ultricies porttitor vitae, mattis non orci. Aenean libero mauris, euismod ut tincidunt vel, venenatis scelerisque dui.<p>
            <p>Praesent adipiscing ut tellus ac molestie. Ut sem lacus, placerat ac nisi ut, volutpat facilisis justo. Suspendisse dictum tincidunt massa, ac condimentum eros rutrum sit amet. Cras rutrum tincidunt neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            
            <h2>Aumente la satisfacción de sus clientes e incremente sus <br>ventas y utilidades</h2>
            
            <p>Nuestras prioridades son:</p>
            
        <div class="col-md-6">    
            <img src="imgs/experiencia-del-cliente-uno-csb.png" class="img-responsive" />
        </div>    
        
        <div class="col-md-6">
            <ul class="style-vineta">
                <li>Satisfacción de  clientes</li>
                <li>Comportamiento del mercado</li>
                <li>Sistemas de grabación 99% del estudio</li>
                <li>Contamos con la capacidad para el desarrollo y montaje de cuestionarios</li>
                <li>Integramos el desarrollo CATI</li>
                <li>Consulta de avances en línea</li>
                <li>Alternativas de monitoreo remoto</li>
                <li>Sistemas de grabación 99% del estudio</li>
            </ul>
        </div>
                        
                <img src="imgs/llama-ahora-uno-call-center.jpg" class="img-responsive" />            
                
        </div>
        
        <div class="col-md-4">
            <div style="background-color: #FFFBFA; border-radius: 10px; border:  #FADEDF solid 1px; margin-bottom: 50px; ">
                <img src="imgs/llamenos.png" class="img-responsive" />
            </div>
            
            <h2 class="call-to-action"><span>Aprovecha esta oportunidad </span><br />HOY MISMO !!</h2> 
            <?php formulario__rapido('30px'); ?>
        </div>
        
        <div class="col-md-4 testimonial">
            <h3>TESTIMONIAL</h3>
            <p><strong>Suspendisse ut ligula</strong></p>
            
            <p>Nam suscipit venenatis adipiscing. Nunc cursus hendrerit metus, quis dapibus tortor elementum vitae. Quisque molestie nibh tellus. Fusce diam erat, lacinia non eleifend in, imperdiet in orcias.</p>
        </div>
    </div>
</div>    



<?php
$contenido = ob_get_clean();
include 'layout.php';
?>