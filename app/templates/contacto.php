<?php 
ob_start();
?>
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?sensor=false'></script>
<script type="text/javascript">
   function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(19.296907,-99.19175),
          zoom: 15,
          title: 'Ponte en contacto con nosotros, con gusto te atenderemos',
          icon: '/imgs/marcaMaps.png',
          mapTypeId: google.maps.MapTypeId.ROADMAP   
        };
		
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
   }     
</script>

<body onLoad="initialize()">
    
    <div class="jumbotron jumbotron-sm" style="padding-top: 10px; padding-bottom: 20px; background-color: #F4F4F4; margin-bottom:50px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h1 class="h1 icon-contact" style="font-size: 53px;">Cont&aacute;ctenos <small>No dude en contactar con nosotros</small></h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="padding-left: 0;">
                <div class="well well-sm">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Nombre:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        Empresa:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Empresa" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Correo electr&oacute;nico:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        <input type="email" class="form-control" id="email" placeholder="Ingresa tu email" required="required" /></div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Asunto:</label>
                                    <select id="subject" name="subject" class="form-control" required="required">
                                        <option value="na" selected="">Elige una opci&oacute;n:</option>
                                        <option value="service">Atenci&oacute;n al cliente</option>
                                        <option value="suggestions">Sugerencias</option>
                                        <option value="product">Soporte</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Mensaje</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                              placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="checkbox">
                                            <label>
                                                <input id="aviso-de-privacidad" type="checkbox" name="aviso" value="1" disabled><a href="#">Aviso de Privacidad</a>
                                            </label>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>                                                                                        
                            
                           
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                    Env&iacute;a tu mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <form>
                    <legend style="border-bottom: none;"><span class="glyphicon glyphicon-globe"></span>Nuestra oficina</legend>
                    <address>
                        <strong>UNO ISB</strong><br>
                        Camino a Santa teresa 187C 2ndo piso<br>
                         Col. Parques del Pedregal, Delegación Tlalpan<br>
                          CP. 14010, México D.F. <br>                                                    
                        
                          <p><abbr title="Phone" style="border-bottom: none">Telef&oacute;no:</abbr>1454 1400</p>
                          
                    </address>
                    <address>
                        <strong>Envíanos un mail-.</strong><br>
                        <a href="mailto:#">first.last@example.com</a>
                    </address>
                </form>
            </div>
        </div>
        
        <div class="col-md-8" style="padding-left: 0;">
            <div id="map_canvas" style="width:100%; height:300px;"></div>
            <img src='imgs/contacto-bottom.png' class='img-responsive' />
        </div>
        
        
    </div>
   
</body>

 <?php $contenido = ob_get_clean(); ?>

 <?php include 'layout.php' ?>