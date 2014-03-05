<?php
 /* ------------ C O N T R O L A D O R   F R O N T A L -------------*/
	
 // web/index.php

 // carga del modelo y los controladores
 session_start();

 
 //require_once __DIR__ . '/../app/sesion.php';
 require_once __DIR__ . '/../app/Config.php'; 
 require_once __DIR__ . '/../app/Model.php';
 require_once __DIR__ . '/../app/Controller.php'; 

/* enrutamiento:  tienen marcadas las rutas de la petición  */

 $map = array( 
	 'login' => array('controller' =>'Controller', 'action' =>'login'),
	// 'registro' => array('controller' =>'Controller', 'action' =>'registro'),
     'inicio' => array('controller' =>'Controller', 'action' =>'inicio'),
     'contacto' => array('controller' =>'Controller', 'action' =>'contacto'),
     'generacion-de-leads' => array('controller' => 'Controller', 'action' =>'generacion_de_leads'),
     'telemarketing' => array('controller' => 'Controller', 'action' =>'telemarketing'),
     'remainder' => array('controller' => 'Controller', 'action' =>'remainder'),
     'experiencia-del-cliente'  => array('controller' => 'Controller', 'action' =>'experiencia_del_cliente'),
     'estudios-de-mercado'  => array('controller' => 'Controller', 'action' =>'estudios_de_mercado'),
     //'estudios-de-mercado' => array('controller' => 'Controller', 'action' =>'estudios_de_mercado'),
     'backoffice' => array('controller' =>'Controller', 'action' =>'backoffice'),
     'bases' => array('controller' =>'Controller', 'action' =>'bases'),
     'galeria' => array('controller' =>'Controller', 'action' =>'galerias'),
     'comunidades' => array('controller' =>'Controller', 'action' =>'comunidades'),
     'consultoria-y-asesoria' => array('controller' =>'Controller', 'action' =>'consultoria_y_asesoria'),
     'atencion-al-cliente' => array('controller' =>'Controller', 'action' =>'atencion_al_cliente'),
     'listar' => array('controller' =>'Controller', 'action' =>'listar'),
     'insertar' => array('controller' =>'Controller', 'action' =>'insertar'),
     'buscar' => array('controller' =>'Controller', 'action' =>'buscarPorNombre'),
     'ver' => array('controller' =>'Controller', 'action' =>'ver')
 );
 
 // Parseo de la ruta para saber que acción disparar. Defino inicio como default
	 if (isset($_GET['ctl'])) {
		 if (isset($map[$_GET['ctl']])) {
			 $ruta = $_GET['ctl'];
		 } else {
			 header('Status: 404 Not Found');
			 echo '<html><body><h1>Error 404: No existe la ruta <i>' .
					 $_GET['ctl'] .
					 '</p></body></html>';
			 exit;
		 }
	 } else {
		$ruta = 'inicio';
	 }
	 
 $controladora = $map[$ruta];
 
 
 // Ejecución del controlador asociado a la ruta. Muestra si la ruta esta definida en la tabla de rutas ($map)
 // quito new porque (aparentemente) no me sirve  ' call_user_func( array ( new $controlador['controller'], $controlador['action']) ); '

 
       //$security = new Security();
       //$activeSession = $security->isActiveSession();

   //if (isset($_SESSION['ca_user']) && isset($_SESSION['ca_appname'])) {   
       
            if (method_exists($controladora['controller'],$controladora['action'])) {
           //	   echo array ( $controladora['controller'], $controladora['action']);
                  call_user_func( array ( $controladora['controller'], $controladora['action']) );
                  
                  
                  if (!isset($_GET['ctl'])) {                    
                    session_destroy();
                    }
                  
            } else {

                header('Status: 404 Not Found');
                echo '<html><body><h1>Error 404: El controlador <i>' .
                        $controlador['controller'] .
                        '->' .
                        $controlador['action'] .
                        '</i> no existe</h1></body></html>';
            }
            /*
}      else      {

        header('Location:http://localhost/prototipo_uno/web/sesion.php');                        

}              
             * 
             */     