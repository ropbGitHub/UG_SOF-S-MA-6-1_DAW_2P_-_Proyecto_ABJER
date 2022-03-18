<?php
    require_once 'model/dao/QADAO.php';
    
    class QaControl {
        private $model;

        public function __construct(){
            $this->model=new QADAO();
        }

        //funciones del controlador

        public function index(){
            //llamar al modelo
            $resultados=$this->model->listar();
            //llamar a la vista
            require_once 'visual/modulos/QAMatamoros/QA.list.php'; //tiene que cambiar "nuevo"por "listar"
        }
    }