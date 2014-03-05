<?php ob_start(); ?> 

<div class="container">
    
    <div class="col-md-12">
        <div class="col-md-9">
            
            <h1>BASES DE DATOS</h1>
            
            <p>El Banco de Datos lo vamos formando de acuerdo a compras o intercambio de datos que se realizan dentro del Contact Center, esto nos facilita la generación de una amplia gama de información que puede ser utilizada por el mismo Contact Center o por socios de negocio que así lo convengan.</p>
            <p>La inteligencia de Bases de Datos es un enfoque de UNO hacia el mejoramiento de prospectos que podemos acercar a las campañas, perfilando a los clientes para que se les puedan ofrecer los productos y/o servicios que realmente necesitan, buscando el mayor impacto en la productividad que de ahí se pudiera generar.</p>
            
            <img src="imgs/inteligencia-de-bases-de-datos-telemarketing-uno.png" class="img-responsive" />
            
            <img class="img-responsive" src="imgs/llama-ahora-uno-call-center.jpg" style="margin: 50px 0 0  35px;" />
        </div>
    
    
        <div class="col-md-3">

            <?php 
                include 'functions/funciones.php';
                formulario__rapido();
            ?>             
            
        </div>
        
        <div class="col-md-3" style="padding: 0; margin-top: 50px; ">
            <div style="background-color: #FFFBFA; border-radius: 10px; border:  #FADEDF solid 1px; ">   
                <img src="imgs/llamenos.png" class="img-responsive" />
            </div>  
       </div>     
        
        <div class="col-md-3" style="margin-top: 67px; margin-left: -40px;">                            
                
                <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> 
                <script src="js/jquery.lazylinepainter-1.4.1.min.js"></script>            
                <script src="js/script.lazy.line.painter.js" type="text/javascript"></script>
                
                <div id='btn'>
                    
                    <img src="imgs/frases-uno-contact-center-2.png" class="img-responsive" style="position: absolute; top: 14px; left: 40px;" />
                </div> 
            
         </div>
    </div>    
    
    
    
</div>

 <?php $contenido = ob_get_clean(); ?>

 <?php include 'layout.php' ?>