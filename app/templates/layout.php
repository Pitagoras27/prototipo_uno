<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html lang="en">
     <head>
         <title>UNO Contact Solutions Bureau</title>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />         
         <meta http-equiv="X-UA-Compatible" content="IE=edge" /><!-- Etiqueta proporcionada por Bootstrap ???-->         

         <link rel="stylesheet" href="dist/css/bootstrap.min.css" />         
         <link rel="stylesheet" id="camera-css"  href="css/camera.css" type="text/css" media="all" />         
         <link rel="stylesheet" href="<?php echo 'css/' . Config::$mvc_vis_css; ?>" />
         
         <script src="https://code.jquery.com/jquery.js"></script> 
         <script src="dist/js/bootstrap.min.js"></script>
                  
         <!--<script type='text/javascript' src='scripts/jquery.min.js'></script>-->
         <script type='text/javascript' src='scripts/jquery-1.7.2.min.js'></script>
         <!--<script type='text/javascript' src='http://code.jquery.com/jquery-1.10.2.min.js'></script>-->
         <!-- Desabilito esta opción porque no es posible ejecutar correctamente lazi line paiter-->
         <!--<script type='text/javascript' src='scripts/jquery.mobile.customized.min.js'></script>         -->
         <script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
         <script type='text/javascript' src='scripts/camera.min.js'></script>
         <script type='text/javascript' src='scripts/jquery.tagcanvas.min.js'></script>   
         <script type='text/javascript' src='js/script-cloud-tags.js'></script>
         
         
         <link rel='stylesheet' href='css/floatbox.css' />
         <script type='text/javascript' src='libs/floatbox/framebox.js'></script>
         
     </head>
     
     <body>
         
         <div class="logo"><a href="index.php?ctl=inicio"></a></div>
         <div class="menu-oculto"></div>
            
         
 <!--        
         <div id="cabecera">
             <h1>Información de alimentos</h1>
         </div>
-->
  
     <nav class="navbar navbar-default" role="navigation">
         <div class="container-fluid">
             <!-- Conmutación de la navegación para dispositivos mobiles -->
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <!--<a class="navbar-brand" href="#">Call center UNO</a>-->
             </div>

             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav">
                     <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nosotros<b class="caret"></b></a><span>Qui&eacute;nes somos</span>
                         <ul class="dropdown-menu">
                             <li><a href="index.php?ctl=comunidades">Comunidades</a></li>
                             <li><a href="index.php?ctl=galeria">Galer&iacute;a</a></li>
                         </ul>
                     </li>                     
                     <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios<b class="caret"></b></a><span>Lo mejor que hacemos</span>
                         <ul class="dropdown-menu">
                             <li class="dropdown-submenu">
                                 <a href="#">Call Center</a>
                                 <ul class="dropdown-menu">
                                     <li><a href="index.php?ctl=telemarketing">Telemarketing</a></li>
                                 </ul>
                             </li>
                             <li class="dropdown-submenu">
                                 <a href="#">Contact Center</a>
                                 <ul class="dropdown-menu">
                                     <li><a href="index.php?ctl=generacion-de-leads">Generacion de leads</a></li>
                                 </ul>
                             </li>
                             <li class="dropdown-submenu">
                                 <a href="#">Consultor&iacute;a</a>
                                 <ul class="dropdown-menu">
                                     <li><a href="index.php?ctl=consultoria-y-asesoria">Consultor&iacute;a y asesor&iacute;a</a></li>
                                     <li><a href="index.php?ctl=backoffice">Backoffice</a></li>
                                 </ul>
                             </li>                     
                         </ul>
                     </li>
                     <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Seguridad<b class="caret"></b></a><span>Informaci&oacute;n segura</span>
                         <ul class="dropdown-menu">
                             <li><a href="index.php?ctl=bases">Bases de datos</a></li>
                         </ul>
                     </li>
                     <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicio al cliente<b class="caret"></b></a><span>Cordialidad con todos</span>
                         <ul class="dropdown-menu">
                             <li><a href="index.php?ctl=atencion-al-cliente">Atenci&oacute;n al cliente</a></li>
                             <li><a href="index.php?ctl=remainder">Remainder</a></li>
                             <li><a href="index.php?ctl=experiencia-del-cliente">Experiencia del cliente</a></li>
                             <li><a href="index.php?ctl=estudios-de-mercado">Estudios de mercado</a></li>
                         </ul>
                     </li>
                     <li><a href="#">Tecnolog&Iacute;a</a><span>Sistemas avanzados</span></li>
                     <li><a href="index.php?ctl=contacto">Contacto</a><span>Te escuchamos</span></li>
                 </ul>
                 
             </div><!-- /.navbar-collapse -->
         </div><!-- /.container-fluid -->
     </nav>                                              
     
      <div class="container-banner" role="main">             
             <?php echo $contenido ?>
      </div>

        <div class="icons-redes">
            <a href="" class="icon-google"></a>    
            <a href="" class="icon-youtube"></a>
            <a href="" class="icon-face"></a>
            <a href="" class="icon-twitter"></a>
            <a href="" class="icon-rss"></a>
        </div>
        <div class="clearfix"></div>


         <div id="pie">
             <hr/>
             <div align="center">- pie de página -</div>
             
             <p style="margin-top: 80px; background-color: #333333; width: 100%; text-align: center;">Camino a Santa teresa 187C 2ndo piso Col. Parques del Pedregal, Delegación Tlalpan CP. 14010, México D.F.</p>
         </div>
     </body>
 </html>
