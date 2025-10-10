<?php

// Autor: Marco Antonio Ochavo Fernández
// Actividades pag.38

/* Crea un archivo PHP que haga:
    - Crea un array de 5 elementos (puede ser de frutas, nombres o números)
    - Recorre el array con un bucle foreach y muestra cada valor
    - Modifica uno de los elementos del array y vuelve a mostrar el array
    - Cuenta el número de elementos en el array
    - Crea un segundo array con otros 3 elementos y únelos al primero
    - Elimina un elemento del array combinado
    - Convierte el array final en una cadena de texto usando implode() y muéstralo en pantalla
*/


// Creo un array de 5 elementos (por ejemplo, frutas)
$frutas = ["manzana", "naranja", "pera", "plátano", "melón"];


// Recorro el array con foreach y mostrar cada valor
echo "Lista de frutas:<br>";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}


// Modifico uno de los elementos del array (cambiamos por ejemplo 'pera' por 'kiwi')
$frutas[2] = "kiwi"; // El índice 2 es el tercer elemento
echo "<br>Array después de modificar 'pera' por 'kiwi':<br>";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}


// Contar el número de elementos en el array
$total = count($frutas);
echo "<br>Número total de frutas: $total<br>";


// Creo un segundo array con 3 elementos y unirlos al primero
$otrasFrutas = ["sandía", "uva", "limón"];
$todasFrutas = array_merge($frutas, $otrasFrutas);

echo "<br>Array combinado con más frutas:<br>";
foreach ($todasFrutas as $fruta) {
    echo $fruta . "<br>";
}


// Elimino un elemento del array combinado (por ejemplo, eliminamos 'plátano')
unset($todasFrutas[3]); // índice 3, que corresponde a 'plátano'


// Convierto el array final en una cadena de texto y mostrarlo
$cadenaFrutas = implode(", ", $todasFrutas);
echo "<br>Array final como cadena de texto:<br>";
echo $cadenaFrutas; 

?>