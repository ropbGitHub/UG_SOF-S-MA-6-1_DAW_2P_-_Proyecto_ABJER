<?php
    require_once 'model/dao/ContactoDAO.php';
    
    class ContactoControl {
        private $model;

        public function __construct(){
            $this->model=new ContactoDAO();
        }

        //funciones del controlador

        public function index(){
            //llamar al modelo
            $resultados=$this->model->listar();
            //llamar a la vista
            require_once 'visual/modulos/contactoAlvear/contacto.nuevo.php';
        }
    }