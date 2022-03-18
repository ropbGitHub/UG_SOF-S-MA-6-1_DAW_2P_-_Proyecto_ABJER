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
            require_once 'visual/modulos/QAMatamoros/QA.list.php';
        }

        public function nuevo() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {// guardar
                // leer parametros
                $nombre = htmlentities($_POST['txtNombre']);
                $apellido = htmlentities($_POST['txtApellido']);
                $categoria = htmlentities($_POST['cbxCategoria']);
                $tipoPreg =isset($_POST['radPreg'])? htmlentities($_POST['radPreg']):'';
                $pregunta = htmlentities($_POST['txaPregunta']);
                $respuesta = htmlentities($_POST['txaRespuesta']);
               
                //llamar al modelo
                $exito = $this->model->insertar($nombre, $apellido, $categoria, $tipoPreg, $pregunta, $respuesta);
                $msj = 'Pregunta guardada';
                $color = 'primary';
                if (!$exito) {
                    $msj = "No se pudo guardar";
                    $color = "danger";
                }
                if(!isset($_SESSION)){ session_start();};
                $_SESSION['mensaje'] = $msj;
                $_SESSION['color'] = $color;
                    //llamar a la vista
                  //  $this->index();
                header('Location:index.php?c=qa&f=index');
               
            } else { // mostrar el formulario
    
                require_once 'model/dao/QADAO.php';
                $mod = new QADAO();
                $motivo = $mod->listar();
    
                // mostrar el formulario de nuevo producto
                require_once 'visual/modulos/QAMatamoros/QA.nuevo.php';
            }
        }

        public function eliminar(){
        
            //leeer parametros
               $id= $_REQUEST['id'];//$_SESSION['usuario'];
            //comunicando con el modelo
            $exito = $this->model->eliminar($id);
            $msj = 'Eliminado exitosamente';
               $color = 'primary';
               if (!$exito) {
                   $msj = "No se pudo eliminar";
                   $color = "danger";
               }
                if(!isset($_SESSION)){ session_start();};
               $_SESSION['mensaje'] = $msj;
               $_SESSION['color'] = $color;
           //llamar a la vista
               //  $this->index();
                  header('Location:index.php?c=qa&f=index');
       }
    }