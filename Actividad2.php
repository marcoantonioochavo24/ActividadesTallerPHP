<?php

// Autor: Marco Antonio Ochavo Fernández
// Actividades apuntes pag.16

/* Crea un archivo PHP que haga:
    - Definir variables de distintos tipos y mostrar tipo y valor de cada variable con var_dump()
    - Crear un array asociativo con datos de una persona y mostrar contenido 
    - Definir una constante llamada NOMBRE_CURSO y mostrar
    - Crear una función que reciba un array de números y devuelva la suma y llamarla
    - Variable con valor null y uso de is_null()
*/


$numeroEntero = 10;             // Entero
$numeroDecimal = 3.14;          // Flotante
$cadenaTexto = "Hola mundo";    // Cadena de texto
$esVerdadero = true;            // Booleano

// Muestro con var_dump
var_dump($numeroEntero);
var_dump($numeroDecimal);   
var_dump($cadenaTexto);
var_dump($esVerdadero);


// Creo array y muestro
$persona = [
    "nombre" => "Carlos",
    "edad" => 25,
    "ciudad" => "Sevilla"
];

echo "<br>Datos de la persona:</br>";
var_dump($persona);


// Defino una constante llamada NOMBRE_CURSO y muestro
define("NOMBRE_CURSO", "Programación PHP");
echo "<br>Curso actual: " . NOMBRE_CURSO;


// Creo función que reciba array de números y devuelva suma
function sumarArray($numeros) {
    $suma = 0;
    foreach($numeros as $valor) {
        $suma += $valor;
    }
    return $suma;
}

//La llamo
$arrayEjemplo = [5, 10, 15];
echo "<br><br>La suma del array es: " . sumarArray($arrayEjemplo);


// Variable con valor null y uso de is_null() 
$variableNula = null;

if (is_null($variableNula)) {
    echo "<br><br>La variable está vacía (null)";
} else {
    echo "<br><br>La variable tiene algún valor"; 
}

?>