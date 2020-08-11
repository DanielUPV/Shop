<?php

    class Conexion {
        private $servidor;
        private $usuario;
        private $clave;
        private $base;
        private $puerto;
        private $conexion;

        public  function __construct(){
            $this->servidor = "localhost";
            $this->usuario = "root";
            $this->clave = "";
            $this->base = "crud";
            $this->puerto = "3307";
            $this->conexion = new mysqli($this->servidor,$this->usuario,$this->clave,$this->base,$this->puerto);
        }

        public function ejecutarConsulta($sql){
            $contenedor  = $this->conexion->query($sql);
            return $contenedor->fetch_all();
        }

        public function ejecutarActualizaciones($sql){
            $this->conexion->query($sql);
        }

        public function cerrarConexion(){
            $this->conexion->close();
        }
    }

?>