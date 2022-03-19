<?php
    require_once 'model/dao/QADAO.php';
    require_once 'model/dto/QA.php';
    
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
                $nombre = htmlentities($_POST['nombre']);
                $apellido = htmlentities($_POST['apellido']);
                $categoria = htmlentities($_POST['cbxCategoria']);
                $tipoPreg =isset($_POST['tipoPregunta'])? htmlentities($_POST['tipoPregunta']):'';
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

       public function editar(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// actualizar
            // verificaciones
                   //if(!isset($_POST['codigo'])){ header('');}
                // leer parametros
                  $id = htmlentities($_POST['id']);
                  $nombre = htmlentities($_POST['nombre']);
                  $apellido = htmlentities($_POST['apellido']);
                  $categoria = htmlentities($_POST['cbxCategoria']);
                  $tipoPreg =isset($_POST['tipoPregunta'])? htmlentities($_POST['tipoPregunta']):'';
                  $pregunta = htmlentities($_POST['txaPregunta']);
                  $respuesta = htmlentities($_POST['txaRespuesta']);
      
                  //llamar al modelo
                  $exito = $this->model->actualizar($id, $nombre, $apellido, $categoria, $tipoPreg, $pregunta, $respuesta);
                  $msj = 'Actualizado exitosamente';
                  $color = 'primary';
                  if (!$exito) {
                      $msj = "No se pudo realizar la actualizacion";
                      $color = "danger";
                  }
                  if(!isset($_SESSION)){ session_start();};
                  $_SESSION['mensaje'] = $msj;
                  $_SESSION['color'] = $color;
                      header('Location:index.php?c=qa&f=index');
                  
              } else {
      
                  require_once 'model/dao/QADAO.php';
                  $mod = new QADAO();
                  $motivo = $mod->listar();
      
                  //leeer parametros
                  $id= $_REQUEST['id'];
                  
                  //comunicando con el modelo
                  $prod = $this->model->buscarxId($id);
                  require_once 'visual/modulos/QAMatamoros/QA.editar.php';
              }
        }

        public function buscar() {
            // leer parametros
            $busqueda = $_POST['busqueda'];
            //comunica con el modelo
            $resultados = $this->model->buscar($busqueda);
            // comunicarnos a la vista
            require_once 'visual/modulos/QAMatamoros/QA.list.php';
        }

    }