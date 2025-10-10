<?php

// Autor: Marco Antonio Ochavo Fernández
// Actividades apuntes pag.21

/* Crea un archivo PHP que haga:
    - Definir dos variables numéricas y hacer operaciones básicas
    - Comparar si una variable es mayor, menor o igual que la otra
    - Usar operador ternario para saber si una variable es par o impar
    - Verificar con operadores lógicos si ambas variables son mayores de 10
    - Implementa operadores de incremento y decremento y muestra cómo cambian los valores de las variables
*/


// Operaciones básicas 
$a = 15;
$b = 4;

echo "Suma: " . ($a + $b) . "<br>";            // 15 + 4 = 19
echo "Resta: " . ($a - $b) . "<br>";           // 15 - 4 = 11
echo "Multiplicación: " . ($a * $b) . "<br>";  // 15 * 4 = 60
echo "División: " . ($a / $b) . "<br>";        // 15 / 4 = 3.75
echo "Módulo: " . ($a % $b) . "<br>";          // 15 % 4 = 3


// Comparar la variable
if ($a > $b) {
    echo "$a es mayor que $b<br>";
} elseif ($a < $b) {
    echo "$a es menor que $b<br>";
} else {
    echo "$a es igual que $b<br>";
}


// Operador ternario
$esPar = ($a % 2 == 0) ? "par" : "impar";
echo "$a es $esPar<br>";


// Verificar con operadores lógicos
if ($a > 10 && $b > 10) {
    echo "Ambas variables son mayores de 10<br>";
} else {
    echo "Al menos una variable no es mayor de 10<br>";
}


// Incremento y decremento
echo "Valor de a: $a<br>";
echo "Pre-incremento: " . ++$a . "<br>";  // Incrementa antes de usar (a = 16)
echo "Post-decremento: " . $a-- . "<br>"; // Usa y luego decrementa (muestra 16, luego a = 15)
echo "Valor actual de a: $a<br>";



