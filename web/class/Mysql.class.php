<?php
class database {

    private $conexion;
    public $res;

    public function __construct() {
        if (!isset($this->conexion)) {
            $this->conexion = new mysqli("localhost", "root", "");
            $this->conexion->query("SET NAMES 'utf8'");
            $this->conexion->select_db("uno_des");
        }
        return $this->conexion;
    }

    public function Consulta($query) {
        if (!isset($this->res)) {
            $this->res = $this->conexion->query($query);
        }        
        return $this->res;
    }

}
