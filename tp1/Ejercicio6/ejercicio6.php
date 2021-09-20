<?php
    class Saludar{
        private $nombre;
        private $apellido;

        /**
         * @return mixed
         */
        public function getNombre()
        {
            return $this->nombre;
        }

        /**
         * @param mixed $nombre
         */
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        /**
         * @return mixed
         */
        public function getApellido()
        {
            return $this->apellido;
        }

        /**
         * @param mixed $apellido
         */
        public function setApellido($apellido)
        {
            $this->apellido = $apellido;
        }

        /**
         * @param $nombre
         * @param $apellido
         */
        public function __construct($nombre, $apellido)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }

        public function saludoFormal($horario)
        {
            $msg = "";
            if ($horario >= 5 && $horario <= 13) {
                    $msg = "Buenos Dias ";
            } else if ($horario >= 13 && $horario <= 21){
                $msg = "Buenas tardes ";
            } else if ($horario >= 21 || $horario <= 5){
                $msg = "Buenas noches ";
            } else {
                $msg = "Horario invalido ";
            }
            echo $msg . $this->nombre . " " . $this->apellido;
        }
        public function saludoInformal($horario)
        {
            $msg = "!Hola " . $this->nombre . "! Que tengas ";
            if ($horario >= 5 && $horario <= 13) {
                $msg = $msg . "un buen dia.";
            } else if ($horario >= 13 && $horario <= 21){
                $msg = $msg . "unas buenas tardes.";
            } else if ($horario >= 21 || $horario <= 5){
                $msg = $msg . "unas buenas noches.";
            } else {
                $msg = "Horario invalido ";
            }
            echo $msg;
        }

    }
    if (isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['horario'])){
    $persona = new Saludar($_GET['nombre'],$_GET['apellido']);

    echo $persona->saludoFormal($_GET['horario']) . "<br>";
    echo $persona->saludoInformal($_GET['horario']) . "<br>";
}