<?php

include_once 'Mysql.class.php';

if (isset($_GET['User']) && isset($_GET['Pass'])) {
    $User = trim($_GET['User']);
    $pass = trim($_GET['Pass']);   
    
    $eventos = array();
    $Sql = "select * from usuarios where correo='" . $User . "' and pass_php='" . $pass . "';";
    $Conexion = new database();
    $conectar = $Conexion->Consulta($Sql);    
    while ($reg = $conectar->fetch_array()) {
        $eventos[] = $reg;
    }

    if (!empty($eventos)) {
        @session_start();
        $session = array(
            'ca_user' => $User,
            'ca_appname' => 'UNOcsb'
        );
        $_SESSION = $session;
    }
    
    echo json_encode($eventos);
    return false;
}

