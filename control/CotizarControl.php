<?php
    require_once 'model/dao/CotizarDAO.php';
    require_once 'model/dto/Cotizar.php';

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
            require_once 'visual/modulos/cotizarPrado/cotizar.list.php'; //tiene que cambiar "nuevo"por "listar"
        }
        //Funcion buscar
        public function buscar() {
            // leer parametros
            $busqueda = $_POST['busqueda'];
            //comunica con el modelo
            $resultados = $this->model->buscar($busqueda);
            // comunicarnos a la vista
            require_once 'visual/modulos/CotizarPrado/Cotizar.list.php';
        }

        //Funcion Nuevo
        public function nuevo() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {// guardar
            // verificaciones
                   //if(!isset($_POST['codigo'])){ header('');}
                // leer parametros
                $nombre = htmlentities($_POST['nombre']);
                $apellido = htmlentities($_POST['apellido']);
                $correo = htmlentities($_POST['email']);
                $cantPer = htmlentities($_POST['cantidad_per']);
                $fecha = htmlentities($_POST['fecha']);
                $tipoSalon = isset($_POST['salon']) ? htmlentities($_POST['salon']) : '';
                $tipoServicio = $_POST['servicio'];
                $chktServ = implode(",", $tipoServicio);
               
                //echo "<script>alert('msjBilly');</script>";
                //llamar al modelo
                $exito = $this->model->insertar($nombre, $apellido,$correo, $cantPer, $tipoSalon, $tipoServicio, $chktServ);
                $msj = 'Cotizacion guardado exitosamente';
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
                header('Location:index.php?c=cotizar&f=index');
               
            } else {
                // mostrar el formulario de nuevo producto
                require_once 'visual/modulos/cotizarPrado/cotizar.nuevo.php';
            }
        }


    }