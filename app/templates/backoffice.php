<?php ob_start(); ?> 

<style>
                        
                        div#demo {  
                                width:349px; 
                                height:277px;
                                position:absolute;
                                left:50%;
                                margin:80px 0 0 -175px;
                        } 
                        
                        div#demo .fraseUno{
                            top: 0;
                        }

</style>


<div class="container">
    
    <div class="col-md-12">
        <div class="col-md-9">
            <h1>Backoffice</h1>
            
            <p>El backoffice se refiere a los servicios que se gestionan dentro de la misma empresa, donde no hay intervención  con los clientes. Se refiere a todo lo que está detrás del cliente.</p>
            <p>Contamos con el personal indicado, para generar un seguimiento puntual (Backoffice) a tramites especificos (incidencias), y de esta manera canalizarlos y dar seguimiento, en busca de los resultados adecuados y congruentes a tu operación.</p>
            <p>Una vez obtenida la resultado esperado, se genera el cierre de incidencias, obteniendo una evalución del proceso realizado.</p>
            
            <img src="imgs/backoffice-call-center-uno.png" class="img-responsive" />
        </div>    
        
         <div class="col-md-3">
           <h2>Quisaum est quiv</h2>
           <ul class="style-vineta">
               <li><a href="">Lorem</a></li>
               <li><a href="">Ipsum</a></li>
               <li><a href="">Dolor</a></li>
               <li><a href="">Sit amet</a></li>
               <li><a href="">Consectetur</a></li>
               <li><a href="">Dolorem ipsum</a></li>
           </ul>
       </div>
      
        
        <div class="col-md-3">        
        
        <?php 
            include 'functions/funciones.php';
            formulario__rapido('34px');
        ?>
        
        </div>
                
        
        <div class="col-md-3" style="margin-top: 67px; margin-left: -40px;">                            
                
                <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> 
                <script src="js/jquery.lazylinepainter-1.4.1.min.js"></script>            
                <script src="js/script.lazy.line.painter.js" type="text/javascript"></script>
                
                <div id='btn'>
                    
                    <img src="imgs/frases-uno-contact-center-1.png" class="img-responsive" style="position: absolute; top: 14px; left: 40px;" />
                </div> 
            
         </div>
        
        
</div>


 <?php $contenido = ob_get_clean(); ?>

 <?php include 'layout.php' ?>