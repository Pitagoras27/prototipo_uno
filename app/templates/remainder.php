<?php
ob_start();
include 'functions/funciones.php';
?>

<div class="container">
    <div class="col-md-12">
        <div class="col-md-8">
            
            <div class="separador-de-bloques">
                <h1>Remainder</h1>
            </div>
            
            <div class="separador-de-bloques">
                <h3 class='remainder_arroy_banner_list'>Mensajes grabados masivos</h3>
                <p>Ofrecemos la oportunidad de acercar a sus clientes recordatorios, invitaciones, información y promociones de una manera más personalizada y con costos menores a una llamada. (reportes)</p>
            </div>        
            
            <div class="separador-de-bloques">
                <h3 class='remainder_arroy_banner_list'>Promociones e invitaciones a expos y eventos</h3>
                <p>Ayudamos a difundir invitaciones en cualquier idioma a todos sus clientes a través de e-mails, SMS, mensajes de voz, cartas de notificación de deuda (carteo).</p>
            </div>
            
            <div class="separador-de-bloques">
                <h3 class='remainder_arroy_banner_list'>Recordatorio de pagos</h3>
                <p>Brindamos una mejor atención a los clientes con nuestros recordatorios de pagos futuros, pagos pendientes y pagos vencidos, a través de diferentes medios como SMS, e-mail y mensajes grabados, todos con programación de envío que ayuda a tener una mejor administración </p>
            </div>
            
            <div class="separador-de-bloques">
                <h3 class='remainder_arroy_banner_list'>Campañas políticas</h3>
                <p>UNO call center le ofrece la mejor tecnología para marketing político vía mensajes cortos a celulares (SMS) y llamadas telefónicas pregrabadas y personalizadas. Contamos con equipos de marcación predictiva si usted desea que su campaña sea hecha por agentes. </p>
                <p><strong>Si usted es un despacho de marketing político o bien un candidato que desea realizar su campaña por los nuevos medios de comunicación, UNO tiene una solución para usted.</strong></p>
            </div>    
            
            <img src='imgs/remainder.png' class='img-responsive' style='margin-top: 50px;' />
            
            <h5 style='text-align: center; margin-top: 50px;'><strong>Uno cuenta con una plataforma de marketing político, que permite la comunicación con los votantes a través del envío mensajes cortos a celulares (SMS), así como a través de llamadas pregrabadas, personalizadas opcionalmente por nombre.</strong></h5>
        </div>
        
        
            <?php  cloud_tags();  ?>
        
            <div class='col-md-4'>
                <div style="background-color: #FFFBFA; border-radius: 10px; border:  #FADEDF solid 1px; ">   
                    <img src="imgs/llamenos.png" class="img-responsive" />
                </div>
            </div>    
            
            <div class='col-md-4'>
                <?php formulario__rapido('30px'); ?>
            </div>
        
             <div class="col-md-4" style="margin-top: 37px;">                            
                
                <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> 
                <script src="js/jquery.lazylinepainter-1.4.1.min.js"></script>            
                <script src="js/script.lazy.line.painter.js" type="text/javascript"></script>
                
                <div id='btn'>
                    
                    <img src="imgs/frases-uno-contact-center-1.png" class="img-responsive" style="position: absolute; top: 10px; left: 30px;" />
                </div> 
            
            </div>
        
        
    </div>    
</div>

<?php
$contenido = ob_get_clean();
include 'layout.php';
?>
