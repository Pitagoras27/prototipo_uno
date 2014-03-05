<?php 

    function formulario__rapido($parametro)
    {
        echo("
            <!-- FORMULARIOS RÁPIDOS -->
                <div class='formsRapidos' style='margin-top: $parametro;'>

                    <div class='form-group'>
                        <label for='name'>
                            Nombre:</label>
                        <input type='text' class='form-control' id='name' placeholder='Ingresa tu nombre' required />
                    </div>    

                    <div class='form-group'>
                        <label for='email'>
                            Correo electr&oacute;nico:</label>
                        <div class='input-group'>
                            <span class='input-group-addon'><span class='glyphicon glyphicon-envelope'></span>
                            </span>
                            <input type='email' class='form-control' id='email' placeholder='Ingresa tu email' required='required' /></div>
                    </div>

                    <div class='form-group'>
                        <label for='name'>Mensaje</label>
                        <textarea name='message' id='message' class='form-control' rows='5' cols='25' required='required' placeholder='Mensaje'></textarea>
                    </div>    

                    <div class='col-md-12'>
                        <button type='submit' class='btn btn-primary pull-right' id='btnContactUs'>
                            Env&iacute;a tu mensaje</button>
                    </div>
                </div>                
        <!-- END -->
        ");
    }
    
    function formulario__rapido_leads_generation(){
        echo("
                <div class='row formsRapidos-leads-genration' style='margin-left: 30px; margin-right: 30px'>

                    <div class='form-group'>
                        <label for='name'>
                            Nombre:</label>
                        <input type='text' class='form-control' id='name' placeholder='Ingresa tu nombre' required />
                    </div>    

                    <div class='form-group'>
                        <label for='email'>
                            Correo electr&oacute;nico:</label>
                        <div class='input-group'>
                            <span class='input-group-addon'><span class='glyphicon glyphicon-envelope'></span>
                            </span>
                            <input type='email' class='form-control' id='email' placeholder='Ingresa tu email' required='required' /></div>
                    </div>

                    <div class='form-group'>
                        <label for='name'>Mensaje</label>
                        <textarea name='message' id='message' class='form-control' rows='5' cols='25' required='required' placeholder='Mensaje'></textarea>
                    </div>    

                    <div class='col-md-12'>
                        <button type='submit' class='btn btn-primary pull-right' id='btnContactUs'>
                            Env&iacute;a tu mensaje</button>
                    </div>
                </div>
        ");
    }
    
    function cloud_tags(){
        echo("
            <div class='col-md-4' style='padding-top: 60px'>
            <h3>¿Cuál servicio te interesa?</h3>
            <div id='myCanvasContainer' class='cloud_tags'>
                <canvas  height='250' id='myCanvas'>
                    <p>Anything in here will be replaced on browsers that support the canvas element</p>
                </canvas>
            </div>
            <div id='tags'>
                <ul>
                    <li><a href='http://www.google.com' target='_blank'>Renta tecnolog&iacute;a</a></li>
                    <li><a href='/'>Programas de lealtad y retenci&oacute;n de clientes</a></li>
                    <li><a href=''>Bases de datos</a></li>
                    <li><a href=''>Consultor&iacute;a</a></li>
                    <li><a href=''>Atenci&oacute;n a clientes</a></li>
                    <li><a href=''>Capacitaci&oacute;n y mejora continua</a></li>
                    <li><a href=''>Estudios de mercado</a></li>
                    <li><a href=''>Generaci&oacute;n de leads</a></li>
                    <li><a href=''>Rremainder</a></li>
                    <li><a href=''>Cobranza</a></li>
                    <li><a href='' style='font-size:60px;'>Telemarketing</a></li>
                    <li><a href=''>Backoffice</a></li>
                </ul>
            </div>
        </div>
        ");
    }
 ?>