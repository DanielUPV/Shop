<?php

    class Producto {
        public $id;
        public $nombre;
        public $descripcion;
        public $precio;
        public $precio_c;
        public $color;
        public $categoria;
        public $fabricante;

        function __construct(){
            $this->id = 0;
            $this->nombre = "";
            $this->descripcion = "";
            $this->precio = "";
            $this->precio_c = "";
            $this->color = "";
            $this->categoria = "";
            $this->fabricante = "";
        }
    }

    

?>