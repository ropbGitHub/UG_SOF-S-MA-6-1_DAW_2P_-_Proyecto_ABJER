<?php
   require_once 'model/dao/GaleriaDAO.php';
    
   class GaleriaControl {
       private $model;

       public function __construct(){
           $this->model=new GaleriaDAO();
       }

       //funciones del controlador

       public function index(){
           //llamar al modelo
           $resultados=$this->model->listar();
           //llamar a la vista
           require_once 'visual/modulos/galeriaGonzalez/galeria.list.php';
       }

       public function nuevo() {
           if ($_SERVER['REQUEST_METHOD'] == 'POST') {// guardar
               // leer parametros
               $cantxPer = htmlentities($_POST['cantidad']);
            //    $issalon =htmlentities($_POST['salon']);
               $fecha = htmlentities($_POST['eventoF']);
               $sug = htmlentities($_POST['respuesta']);
               $ninios =isset($_POST['tipoPregunta'])? htmlentities($_POST['tipoPregunta']):'';              

               $exito = $this->model->insertar($fecha, $cantxPer, $ninios, $sug);
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
               header('Location:index.php?c=galeria&f=index');
              
           } else { // mostrar el formulario
   
               require_once 'model/dao/GaleriaDAO.php';
               $mod = new GaleriaDAO();
               $motivo = $mod->listar();

               require_once 'visual/modulos/galeriaGonzalez/galeria.nuevo.php';
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
                 header('Location:index.php?c=galeria&f=index');
      }
   }