<?php
    require_once 'model/dao/UsuarioDAO.php';
    
    class UsuarioControl {
        private $model;

        public function __construct(){
            $this->model=new UsuarioDAO();
        }

        //funciones del controlador

        public function index(){
            //llamar al modelo
            $resultados=$this->model->listar();
            //llamar a la vista
            require_once 'visual/modulos/usuarioPerez/usuario.nuevo.php'; //tiene que cambiar "nuevo"por "listar"
        }
    }