<?php
    class Alumno {
        public $nombre;
        public $apellidos;
        public $direccion;
        public $dni;
        public $email;
    
        function __construct($nombre, $apellidos, $direccion, $dni, $email){
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->direccion = $direccion;
            $this->dni = $dni;
            $this->email = $email;
        }
        
        function get_nombre() {
            return $this->nombre;
        }

        function set_nombre($nombre) {
            $this->nombre = $nombre;
        }

        function get_apellidos() {
            return $this->apellidos;
        }

        function set_apellidos($apellidos) {
            $this->apellidos = $apellidos;
        }

        function get_direccion() {
            return $this->direccion;
        }

        function set_direccion($direccion) {
            $this->direccion = $direccion;
        }

        function get_dni() {
            return $this->dni;
        }

        function set_dni($dni) {
            $this->dni = $dni;
        }

        function get_email() {
            return $this->email;
        }

        function set_email($email) {
            $this->email = $email;
        }
    }
?>