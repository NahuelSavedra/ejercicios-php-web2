<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>TP1</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-dark-gray">

    <h1 class="w3-center">Carlos Nahuel Savedra</h1>
    <!-- Ejercicio 1 -->
    <div class="w3-container w3-center w3-sand w3-margin w3-padding">
        <h2>Ejercicio 1 - Semaforo</h2>
        <p class="w3-opacity">Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
            “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
            “avance” o “estado desconocido” ante un caso no esperado.
            a) función semaforo_a($color): Resuelva la solución utilizando if else
            b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
            c) función semaforo_c($color): Resuelva la solución utilizando switch
        </p>
        <form action="Ejercicio1/ejercicio1.php" method="get">
            <label> Ingrese el color del semaforo:</label>
            <input type="text" name="color">
            <button class="w3-button w3-indigo" type="submit">Enviar</button>
        </form>
    </div>
    <!-- Ejercicio 2 -->
    <div class="w3-container w3-center w3-sand w3-margin w3-padding">
        <h2>Ejercicio 2 - Binomio cuadrado perfecto</h2>
        <p class="w3-opacity">Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
            recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)
            2
            a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
            potencia
            b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
            desarrollada del binomio: a
            2 + 2*a*b + b
            2
        </p>
        <form action="Ejercicio2/ejercicio2.php" method="get">
            <label> Ingrese el valor de a:</label>
            <input type="number" name="a">
            <label> Ingrese el valor de b:</label>
            <input type="number" name="b">
            <button class="w3-button w3-indigo" type="submit">Enviar</button>
        </form>
    </div>
    <!-- Ejercicio 3 -->
    <div class="w3-container w3-center w3-sand w3-margin w3-padding">
        <h2>Ejercicio 3 - Concatenar textos</h2>
        <p class="w3-opacity">Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva
            ambos textos concatenados como uno solo
        </p>
        <form action="Ejercicio3/ejercicio3.php" method="get">
            <label> Ingrese el primer texto :</label>
            <input type="text" name="texto1">
            <label> Ingrese el segundo texto:</label>
            <input type="text" name="texto2">
            <button class="w3-button w3-indigo" type="submit">Enviar</button>
        </form>
    </div>
    <!-- Ejercicio 4 -->
    <div class="w3-container w3-center w3-sand w3-margin w3-padding">
        <h2>Ejercicio 4 - Incrementar</h2>
        <p class="w3-opacity">Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
            la función, el valor del parámetro haya sido incrementado en 1
            (Ver pasaje de parámetros por referencia)
        </p>
        <form action="Ejercicio4/ejercicio4.php" method="get">
            <label> Ingrese el numero a incrementar :</label>
            <input type="number" name="numero">
            <button class="w3-button w3-indigo" type="submit">Enviar</button>
        </form>
    </div>
    <!-- Ejercicio 5 -->
    <div class="w3-container w3-center w3-sand w3-margin w3-padding">
        <h2>Ejercicio 5 - Sumatoria</h2>
        <p class="w3-opacity">Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
            valores.
            a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
            b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
            c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while</p>
        <form action="Ejercicio5/ejercicio5.php" method="get">
            <label> Ingrese los valores a sumar separados por ",":</label>
            <input type="text" name="valores-array">
            <button class="w3-button w3-indigo" type="submit">Enviar</button>
        </form>
    </div>
    <!-- Ejercicio 6 -->
    <div class="w3-container w3-center w3-sand w3-margin w3-padding">
        <h2>Ejercicio 6 - Nombre completo</h2>
        <p class="w3-opacity">Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una
            persona.
            Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder
            concatenado al nombre un prefijo dependiendo del horario:
            05hs a 13hs “Buenos días”
            13hs a 21hs “Buenas tardes”
            21hs a 05hs “Buenas noches”
            Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”
            Dicha clase debe implementar también el método saludoInformal( $horario ) el cual debe responder
            sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
            perteneciente al horario .</p>
        <form action="Ejercicio6/ejercicio6.php" method="get">
            <label> Ingrese el nombre:</label>
            <input type="text" name="nombre">
            <label> Ingrese el apellido:</label>
            <input type="text" name="apellido">
            <label> Ingrese el horario:</label>
            <input type="number" min="0" max="24" name="horario">
            <button class="w3-button w3-indigo" type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>