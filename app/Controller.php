<?php

class Controller {

    public function login() {
        require __DIR__ . '/templates/login.php';
    }
/*
    public function registro() { //carga la página de registro y la clase para crear el nuevo usuario
        $params = array(
            'nombre' => '',
            'correo' => '',
            'user' => '',
            'pass' => ''
        );

        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

        if ($m->validarDatosRegistro(
                        $_POST['nom'], $_POST['mail'], $_POST['user'], $_POST['pass'], $_POST['repeat_pass']
                )) {
            $m->insertarDatos(
                    $_POST['nom'], $_POST['mail'], $_POST['user'], $_POST['pass']
            );
        }

        require __DIR__ . '/templates/registro.php';
    }
 
 */

    public function inicio() {
        $params = array(
            'mensaje' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis neque molestie tortor interdum pretium. Maecenas egestas eros leo, non hendrerit ligula ultrices eu. Sed ullamcorper ligula sapien, quis volutpat nunc suscipit id. Mauris accumsan ipsum a velit placerat tincidunt. Nulla lobortis dapibus feugiat. Fusce aliquet quis elit vitae facilisis. Nam venenatis ullamcorper viverra. Ut nulla eros, hendrerit sit amet dapibus eu, faucibus quis eros. Donec sodales eros sed justo placerat, non pretium ante ornare. In hendrerit mi eu sagittis elementum. Sed condimentum at est id commodo. Ut sed lectus ut elit egestas dapibus. ',
            'fecha' => date('d-m-y'),
        );
        require __DIR__ . '/templates/inicio.php';
    }

    public function contacto() {
        require __DIR__ . '/templates/contacto.php';
    }
    
    public function generacion_de_leads(){
        require __DIR__.'/templates/generacion-de-leads.php';
    }
    
    public function telemarketing(){
        require __DIR__.'/templates/telemarketing.php';
    }
    
    public function remainder(){
        require __DIR__.'/templates/remainder.php';
    }
    
    public function experiencia_del_cliente(){
        require __DIR__.'/templates/experiencia-del-cliente.php';
    }
    
    public function estudios_de_mercado(){
        require __DIR__.'/templates/estudios-de-mercado.php';
    }


    public function backoffice() {
        require __DIR__ . '/templates/backoffice.php';
    }
    
    public function bases() {
        require __DIR__ . '/templates/bases.php';
    }
    
    public function galerias() {
        require __DIR__ . '/templates/galeria.php';
    }
    
      public function comunidades() {
        require __DIR__ . '/templates/comunidades.php';
    }

    public function consultoria_y_asesoria() {
        require __DIR__ . '/templates/consultoria-y-asesoria.php';
    }

    public function atencion_al_cliente() {
        require __DIR__ . '/templates/atencion-al-cliente.php';
    }

    public function listar() {
        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

        $params = array(
            'alimentos' => $m->dameAlimentos(),
        );

        require __DIR__ . '/templates/mostrarAlimentos.php';
    }

    public function insertar() {
        $params = array(
            'nombre' => '',
            'energia' => '',
            'proteina' => '',
            'hc' => '',
            'fibra' => '',
            'grasa' => '',
        );

        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // comprobar campos formulario
            if ($m->validarDatos($_POST['nombre'], $_POST['energia'], $_POST['proteina'], $_POST['hc'], $_POST['fibra'], $_POST['grasa'])) {
                $m->insertarAlimento($_POST['nombre'], $_POST['energia'], $_POST['proteina'], $_POST['hc'], $_POST['fibra'], $_POST['grasa']);
                header('Location: index.php?ctl=listar');
            } else {
                $params = array(
                    'nombre' => $_POST['nombre'],
                    'energia' => $_POST['energia'],
                    'proteina' => $_POST['proteina'],
                    'hc' => $_POST['hc'],
                    'fibra' => $_POST['fibra'],
                    'grasa' => $_POST['grasa'],
                );
                $params['mensaje'] = 'No se ha podido insertar el alimento. Revisa el formulario';
            }
        }

        require __DIR__ . '/templates/formInsertar.php';
    }

    public function buscarPorNombre() {
        $params = array(
            'nombre' => '',
            'resultado' => array(),
        );

        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $params['nombre'] = $_POST['nombre'];
            $params['resultado'] = $m->buscarAlimentosPorNombre($_POST['nombre']);
        }

        require __DIR__ . '/templates/buscarPorNombre.php';
    }

    public function ver() {
        if (!isset($_GET['id'])) {
            throw new Exception('Página no encontrada');
        }

        $id = $_GET['id'];

        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

        $alimento = $m->dameAlimento($id);

        $params = $alimento;

        require __DIR__ . '/templates/verAlimento.php';
    }

}