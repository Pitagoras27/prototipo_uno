<?php ob_start(); ?>

<div class="container">        
        <div class="separador-de-bloques">
        <h1>Telemarketing</h1>
        <p style="width: 60%;">Es una forma de marketing directo en la que un asesor utiliza el teléfono o cualquier otro medio de comunicación para contactar con clientes potenciales y comercializar los productos y servicios de nuestros socios de negocio.</p>
        
        <div class="telemarketing-fondo">
            
            <div class="col-md-8 container-left-telemarketing" style="padding-top: 183px;">
                <h2>Asesores altamente calificados</h2>
                <h1>MEJORE SU INVERSIÓN</h1>
                <ul class="telemarketing-aprobacion">
                    <li>Campaña de ventas</li>
                    <li>Información y postventa</li>
                    <li>Apoyo a la fuerza de ventas</li>
                    <li>Venta cruzada de productos</li>
                </ul>
            </div>
            
            <div class="col-md-4" style="padding-top: 90px;">
                <img src="imgs/aprovecha-esta-oportunidad-de-uno-call-center.png" class="img-responsive" style="position: absolute;">
                 <?php
                        include 'functions/funciones.php';
                        formulario__rapido('104px');
                 ?>
            </div>    
        
            <div style="clear:both;"></div>
        </div>
            
            
            <div class="col-md-11 especificaciones-telemarketing">
                <div class="separador-de-bloques">
                    <h2>Campaña de ventas</h2>
                    <p class="a">Hoy en día, el reto de las organizaciones es crear la mejor experiencia, en un cliente, que tiene acceso a más herramientas tecnológicas, a diversos canales, con un amplio conocimiento acerca de los productos y servicios que desea adquirir, y la exigencia de una forma de atención personalizada que se anticipe a sus necesidades.</p>
                </div>    

                <div class="separador-de-bloques">
                    <h2>Información y postventa</h2>
                    <p class="b">La información de post venta es primordial para la permanencia del cliente con la marca y el posicionamiento de la misma, por lo que nos enfocamos en un servicio de calidad y cordialidad convirtiendo la experiencia del cliente en rentabilidad para las empresas fortaleciendo una relación a largo plazo.</p>
                </div>
                
                <div class="separador-de-bloques">
                    <h2>Apoyo a la fuerza de ventas</h2>
                    <p class="c">La fuerza de ventas tradicional es primordial para las empresas, pero a veces necesitan apoyo para hacer su trabajo de una forma más eficiente, es ahí donde entramos nosotros, haciendo back office que apoye a fortalecer a los equipos de venta, ayudando así a incrementar la productividad de la empresa.</p>
                </div>    

                <div class="separador-de-bloques">
                    <h2>Venta cruzada de productos</h2>
                    <p class="d">También tenemos la posibilidad de generar venta cruzada de productos y/o servicios de acuerdo a las alianzas que se generen.</p>
                </div>    
            </div>
            
            
</div>


<?php 
$contenido = ob_get_clean(); 
//$contenido = ob_get_contents();
//ob_end_clean();
?>
<?php include 'layout.php'; ?>