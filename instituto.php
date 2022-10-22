<?php

    class alumno{
        public $nombre;
        public $apellidos;
        public $dni;
        public $direccion;
        public $email;

        function alumno($nombre,$apellidos,$dni,$direccion,$email){
            $this -> nombre = $nombre;
            $this -> apellidos = $apellidos;
            $this -> dni = $dni;
            $this -> direccion = $direccion;
            $this -> email = $email;
        }

        function getNombre(){
            return $this -> nombre;
        }
        function getApellidos(){
            return $this -> apellidos;
        }
        function getDni(){
            return $this -> dni;
        }
        function getDireccion(){
            return $this -> direccion;
        }
        function getEmail(){
            return $this -> email;
        }

        function setNombre($nombre){
            $this->nombre = $nombre;
        }
        function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }
        function setDni($dni){
            $this->dni = $dni;
        }
        function setDireccion($direccion){
            $this->direccion = $direccion;
        }
        function setEmail($email){
            $this->email = $email;
        }
    }

    class asignatura{
        public $codigo;
        public $descripcion;

        function asignatura($codigo,$descripcion){
            $this->codigo = $codigo;
            $this->descripcion = $descripcion;
        }

        function getCodigo(){
            return $this -> codigo;
        }
        function getDescripcion(){
            return $this -> descripcion;
        }

        function setCodigo($codigo){
            $this->codigo = $codigo;
        }
        function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }
    }

?>