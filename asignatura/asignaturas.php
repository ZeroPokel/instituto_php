<?php

    class Asignatura {
        public $codigo;
        public $descripcion;

        function __construct($codigo, $descripcion){
            $this->codigo = $codigo;
            $this->descripcion = $descripcion;
        }
        
        function get_codigo() {
            return $this->codigo;
        }

        function set_codigo($codigo) {
            $this->codigo = $codigo;
        }

        function get_descripcion() {
            return $this->descripcion;
        }

        function set_descripcion($descripcion) {
            $this->descripcion = $descripcion;
        }
    }
?>