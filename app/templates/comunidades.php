 <?php ob_start(); ?> 

<div class="container">
    
    
    <div class="col-md-12">
        <div class="col-md-9">
        <h1>Comunidades</h1>
        
        <p>
            Los éxitos que en UNO hemos alcanzado son gracias al fuerte equipo que nos respalda, que se compone de personal altamente especializado y una innovadora tecnología, que nos permite acercar a nuestros socios atractivas Propuestas Comerciales con oportunidad de trabajar con nuestras campañas de telemarketing, in bound, out bound, etc. 
        </p>
    
        <p>
            Brindandoles el respaldo necesario para la implementación de las campañas, que abarca desde capacitaciones de la campaña hasta el desarrollo del mejor sistema que se adapte a sus necesidades. Todo esto para llegar al alcance de nuestros objetivos que están orientados a un ganar, ganar.
        </p>
        
        <img class="img-responsive" src="imgs/comunidades-uno-contact-solutions-bureau.jpg"  />
        <img class="img-responsive" src="imgs/llama-ahora-uno-call-center.jpg" />
        </div>
        
        <div class="col-md-3">
            <img src='imgs/aprovecha-esta-oportunidad-de-uno-call-center.png' class='img-responsive' style='position: absolute;' />
        
            <?php
            include 'functions/funciones.php';
            formulario__rapido('104px');
            ?>
            
            <div class='container-imgs-frases'>
                <img src='imgs/frases-uno-contact-center.png' class='img-responsive' /> 
            </div>
            
        </div>
    </div>

<?php $contenido = ob_get_clean(); ?>
 <?php include 'layout.php' ?>