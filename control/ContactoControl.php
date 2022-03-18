<?php
    require_once 'model/dao/ContactoDAO.php';
    require_once 'model/dto/Contacto.php';

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
            require_once 'visual/modulos/contactoAlvear/contacto.list.php';
        }

        public function buscar() {
            // leer parametros
            $busqueda = $_POST['busqueda'];
            //comunica con el modelo
            $resultados = $this->model->buscar($busqueda);
            // comunicarnos a la vista
            require_once 'visual/modulos/contactoAlvear/contacto.list.php';
        }

        public function nuevo() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {// guardar
            // verificaciones
                   //if(!isset($_POST['codigo'])){ header('');}
                // leer parametros
                $ced = htmlentities($_POST['cedula']);
                $nom = htmlentities($_POST['nombre']);
                $fecha = htmlentities($_POST['fecha']);
                $id_motivo = htmlentities($_POST['motivo']);
                $correo = htmlentities($_POST['correo']);
                $telefono = htmlentities($_POST['telefono']);
               
                //echo "<script>alert('msjBilly');</script>";
                //llamar al modelo
                $exito = $this->model->insertar($ced, $nom, $fecha, $id_motivo, $correo, $telefono);
                $msj = 'Contacto guardado exitosamente';
                $color = 'primary';
                if (!$exito) {
                    $msj = "No se pudo realizar el guardado";
                    $color = "danger";
                }
                if(!isset($_SESSION)){ session_start();};
                $_SESSION['mensaje'] = $msj;
                $_SESSION['color'] = $color;
                    //llamar a la vista
                  //  $this->index();
                header('Location:index.php?c=contacto&f=index');
               
            } else { // mostrar el formulario
    
                require_once 'model/dao/MotivoDAO.php';
                $mod = new MotivoDAO();
                $motivo = $mod->listar();
    
                // mostrar el formulario de nuevo producto
                require_once 'visual/modulos/contactoAlvear/contacto.nuevo.php';
            }
        }

        public function editar(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {// actualizar
          // verificaciones
                 //if(!isset($_POST['codigo'])){ header('');}
              // leer parametros
                $id = htmlentities($_POST['id']);
                $ced = htmlentities($_POST['cedula']);
                $nom = htmlentities($_POST['nombre']);
                $fecha = htmlentities($_POST['fecha']);
                $id_motivo = htmlentities($_POST['motivo']);
                $correo = htmlentities($_POST['correo']);
                $telefono = htmlentities($_POST['telefono']);
             
                //llamar al modelo
                $exito = $this->model->actualizar($id, $ced, $nom, $fecha, $id_motivo, $correo, $telefono);
                $msj = 'Contacto actualizado exitosamente';
                $color = 'primary';
                if (!$exito) {
                    $msj = "No se pudo realizar la actualizacion";
                    $color = "danger";
                }
                if(!isset($_SESSION)){ session_start();};
                $_SESSION['mensaje'] = $msj;
                $_SESSION['color'] = $color;
            //llamar a la vista
                //  $this->index();
                    header('Location:index.php?c=contacto&f=index');
                
            } else { // mostrar el formulario, cargando los datos del producto

                require_once 'model/dao/MotivoDAO.php';
                $mod = new MotivoDAO();
                $motivo = $mod->listar();

                //leeer parametros
                $id= $_REQUEST['id'];
                
                //comunicando con el modelo
                $prod = $this->model->buscarxId($id);
                // mostrar el formulario de editar producto
                require_once 'visual/modulos/contactoAlvear/contacto.editar.php';
            }
        }

        public function eliminar(){
        
            //leeer parametros
               $id= $_REQUEST['id'];//$_SESSION['usuario'];
            //comunicando con el modelo
            $exito = $this->model->eliminar($id);
            $msj = 'Producto eliminado exitosamente';
               $color = 'primary';
               if (!$exito) {
                   $msj = "No se pudo eliminar la actualizacion";
                   $color = "danger";
               }
                if(!isset($_SESSION)){ session_start();};
               $_SESSION['mensaje'] = $msj;
               $_SESSION['color'] = $color;
           //llamar a la vista
               //  $this->index();
                  header('Location:index.php?c=contacto&f=index');
       }
    }