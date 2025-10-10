<?php

// Autor: Marco Antonio Ochavo Fernández
// Actividades pag.29

/* Crea un archivo PHP que haga:
    - Utilice una estructura condicional if-else para verificar si un número es positivo, negativo o cero
    - Utilice un bucle for para imprimir los números del 1 al 10
    - Utilice un bucle while que sume los números del 1 al 100 y muestre el resultado
    - Utilice switch para mostrar el día de la semana basado en un número (1-7)
    - Cree un array de nombres y use foreach para imprimir cada nombre
*/


// Verifico si un número es positivo, negativo o cero (con if-else)
$numero = -5;

if ($numero > 0) {
    echo "$numero es positivo<br>";
} elseif ($numero < 0) {
    echo "$numero es negativo<br>";
} else {
    echo "$numero es cero<br>";
}


// Bucle for para imprimir del 1 al 10
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}


// Bucle while para sumar del 1 al 100
$suma = 0;
$i = 1;
while ($i <= 100) {
    $suma += $i;
    $i++;
}

echo "La suma del 1 al 100 es: $suma<br>";


// Switch para mostrar el día según un número del 1 al 7
$diaNumero = 6;

switch ($diaNumero) {
    case 1:
        echo "Lunes<br>";
        break;
    case 2:
        echo "Martes<br>";
        break;
    case 3:
        echo "Miércoles<br>";
        break;
    case 4:
        echo "Jueves<br>";
        break;
    case 5:
        echo "Viernes<br>";
        break;
    case 6:
        echo "Sábado<br>";
        break;
    case 7:
        echo "Domingo<br>";
        break;
    default:
        echo "Número inválido<br>";
}


// Foreach para imprimir los nombres de un array
$nombres = ["Ana", "Luis", "Carlos", "Marta"];

foreach ($nombres as $nombre) {
    echo $nombre . "<br>";
}

?>



