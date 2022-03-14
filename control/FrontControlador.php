<?php

require_once 'config/config.php';
class FrontControlador {

    public function ruteo() {
        // leer parametros
        $controlador = (!empty($_REQUEST['c']))?htmlentities($_REQUEST['c']):CONTROLADOR_PRINCIPAL;
               
         $controlador = ucwords(strtolower($controlador))."Control";
         
        $funcion = (!empty($_REQUEST['f']))?htmlentities($_REQUEST['f']):FUNCION_PRINCIPAL;

        require_once 'control/' . $controlador . '.php';
        $cont = new $controlador();
        $cont->$funcion();
    }

}
