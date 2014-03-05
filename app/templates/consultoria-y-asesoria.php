<?php ob_start(); ?> 

        <title>Kwicks Horizontal Example</title>

        <link rel='stylesheet' type='text/css' href='css/jquery.kwicks.css' />
        <style type='text/css'>
            .kwicks {
                width: 671px;
                height: 100px;
            }
            .kwicks > li {
                height: 100px;
                /* overridden by kwicks but good for when JavaScript is disabled */
                width: 220px;
                margin-left: 8px;
                float: left;
            }

            #panel-1 { background:url(imgs/asesoria-de-diagnostico.jpg) no-repeat; width: 220px; height: 93px;  }
            #panel-2 { background:url(imgs/asesoria-de-implementacion.jpg) no-repeat; width: 220px; height: 93px;  }
            #panel-3 { background:url(imgs/asesoria-de-re-ingenieria.jpg) no-repeat; width: 220px; height: 93px; }
            
        </style>

        
<div class="container">
    
    <h1>Consultor&iacute;a y asesor&iacute;a</h1>
    
    <p>Nuestra asesoría va enfocada bajo la perspectiva cliente-proveedor, a través de este servicio se pueden generar modelos de negocio para comercializar productos, gestionar cobranza, atención a clientes e incluso implementación de Programas de lealtad, a través de fases como prospección, retención, reactivación y Prevención (Encuestas de Satisfacción).    </p>
    <p>También podemos blindar campañas u operaciones existentes a través de estrategias de Auditoria, Validación o Autenticación.</p>
    <img src="imgs/equipo-consultoria-y-asesoria-uno.jpg" width="656" height="418" />     
    
    
    
    
    <h2>Aenean vitae risus imperdiet</h2>
    
    <p>En UNO brindamos servicios profesionales orientados a dar asesoría acorde a los diferentes niveles que se requieran:</p>
    
    <ul>
        <li>Asesor&iacute;a de diagn&oacute;stico </li>
        <li>Asesor&iacute;a de Implementaci&oacute;n</li>
        <li>Asesor&iacute;a de Re ingenier&iacute;a.</li>
    </ul>
    
        <ul class='kwicks kwicks-horizontal'>
            <li id='panel-1'></li>
            <li id='panel-2'></li>
            <li id='panel-3'></li>                       
        </ul>

</div>    

        
        
        
        <script src='libs/kwiks/jquery.kwicks-2.2.1.js' type='text/javascript'></script>

        <script type='text/javascript'>
            $().ready(function() {
                $('.kwicks').kwicks({
                    maxSize : 440,
                    behavior: 'menu'
                });
            });
        </script>



 <?php $contenido = ob_get_clean(); ?>

 <?php include 'layout.php' ?>
