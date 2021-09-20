<?php
    if (isset($_GET['color'])) {
        $color = $_GET['color'];

        echo semaforo_a($color) ." resultado ejecutando semaforo_a <br>";
        echo semaforo_b($color) ." resultado ejecutando semaforo_b <br>";
        echo semaforo_c($color) ." resultado ejecutando semaforo_c <br>";


    }


    function semaforo_a($color)
        {
            if ($color == "rojo") {
                echo "frene";
            } else if ($color == "amarillo") {
                echo "precaucion";
            } else if ($color == "verde") {
                echo "avance";
            } else {
                return "estado desconocido";
            }
        }

    function semaforo_b($color)
        {
            echo ($color == "rojo") ? "frene" :
                ($color == "amarillo" ? "precaucion" :
                    ($color == "verde" ? "avance" : "estado desconocido"));
        }

    function semaforo_c($color)
        {
            switch ($color) {
                case "rojo":
                    echo "frene";
                    break;
                case "amarillo":
                    echo "precaucion";
                    break;
                case "verde":
                    echo "avance";
                    break;
                default:
                    echo "estado desconocido";
            }
        }

