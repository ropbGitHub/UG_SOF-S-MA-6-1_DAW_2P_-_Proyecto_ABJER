<?php
    require_once 'model/dao/CotizarDAO.php';
    
    class CotizarControl {
        private $model;

        public function __construct(){
            $this->model=new CotizarDAO();
        }

        //funciones del controlador

        public function index(){
            //llamar al modelo
            $resultados=$this->model->listar();
            //llamar a la vista
            require_once 'visual/modulos/cotizarPrado/cotizar.nuevo.php'; //tiene que cambiar "nuevo"por "listar"
        }
    }