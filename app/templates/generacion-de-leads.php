<?php ob_start(); ?>

<div class="container img-leads-generation" style="width: 1300px; height: 952px;    ">
    <div class="col-md-12">
            <h1 class="principal-leads">Generación de leads</h1>

            <div class="col-md-12">
                <div class="col-md-4">
                        <p>UNO realiza llamadas de prospección con bases de datos tanto específicas y generales, para definir el interés por adquirir los bienes y servicios de nuestros clientes. </p>
                </div>        
            </div>
            
            <div class="col-md-4">           

                    <h3 class="subtitulo-leads-generation">generación de leads en el <strong>ámbito digital</strong></h3>

                    <p>En el <strong>ámbito digital</strong> contamos con un buen número de medios y técnicas para la generación de leads a través de los distintos dispositivos conectados a internet, entre los que podemos destacar:</p>

                    <div class="email-marketing">
                        <h3>Email marketing</h3>
                        <p>En las campañas de captación de prospectos realizadas a través de correo electrónico es posible conseguir excelentes resultados siempre que se tengan en cuenta, entre otras, variables tan importantes como la segmentación del target, la hora del envío y la creatividad del diseñador.</p>
                    </div>    

                    <div class="publicidad-display">
                        <h3>Publicidad Display</h3>
                        <p>Cuando se realiza un buen emplazamiento en medios se pueden lograr interesantes volúmenes de leads a un coste razonable.</p>
                    </div>

                    <div class="acciones-en-social-media">
                        <h3>Acciones en social media</h3>
                        <p>Si bien la mayor parte de las personas se muestra reticente a la recepción de impactos publicitarios mientras interactúa en redes sociales, un gran número de ellas está dispuesta a ofrecer ciertos datos personales como su email o su teléfono a cambio de, por ejemplo, conseguir un cupón de descuento.</p>
                    </div>
            </div>       

            <div class="col-md-4">
                    <div class="form-leads-generation">
                        <h1><span>Para m&aacute;s detalles</span><br />
                         AGENDA UNA CITA
                        </h1>
                        
                        <?php
                        include 'functions/funciones.php';
                        formulario__rapido_leads_generation();?>
                    </div>

            </div>   

            <div class="col-md-4">
                    <h3 class="subtitulo-leads-generation">generación de leads en <strong>canales offline</strong></h3>

                    <p>En determinadas ocasiones se pueden conseguir prospectos a un coste relativamente bajo utilizando métodos y herramientas encuadradas fuera del mundo online como, por ejemplo:</p>

                    <div class="envio-de-publicidad-por-correo-tradicional">
                        <h3>- Envío de publicidad directa por correo tradicional</h3>
                        <p>A través del mailing físico se pueden conseguir resultados interesantes en la generación de leads, siempre y cuando se realice de forma  segmentada y personalizada.</p>
                    </div>    

                    <div class="expos">
                        <img src="imgs/expos.jpg" class="img-responsive">
                        <p>La generación de prospectos en ferias y congresos puede llegar a ser muy efectiva. No obstante, es necesario asegurarse de que la captación de datos se realiza entre personas que muestren un interés real por los productos y servicios de la empresa.</p>                    
                    </div>

                    <div class="campañas-de-street-marketing">
                        <h3>Campañas de street marketing</h3>
                        <p>Las acciones de street marketing (conjunto de técnicas de marketing utilizadas para promocionar productos, servicios o iniciativas en espacios públicos) se planifica a partir de dos aspectos fundamentales:</p>
                        <span>Dia de la actividad</span>
                        <span>Localización</span>
                    </div>
            </div>
        
    </div>
</div>

<?php $contenido = ob_get_clean(); ?>
<?php include 'layout.php'; ?>







