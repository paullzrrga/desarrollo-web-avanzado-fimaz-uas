<?php
      require_once("../../models/torneosModel.php");

      private torneosController{

        private $model;

        public function __construct()
        {
            $this->model = new torneosModel();
        }
        //crear meotodo controlador que mandara llamar la funcion insert de nuestro modelo 
        //tambien mandara los parametro necesarios para gauradar en la tabla torneos
        //si los datos se guardan redireccionaremos al usario a la pantalla de incio de lo
        //contrario se matendara en la pantalla del formulario de captura de datos del torneo
        public function saveTorneo($nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3, $otroPremio, 
        $usuario, $contrasena){
            //recordemos que la funcion insert del modelo regresa el ultimo id generado
            $id $this->model->insert(nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3, 
            $usuario, $contrasena);
            return($id!-false) ? header("Location: admin.php") : header("Location: frmInsert.php");
            
        }
        //metodo que manda ejecutar ka funcion real del modelo torneo
        public function readTorneos(){
            return $this->model->read() ? $this->model->read() : false;
            
        }
      }
?>