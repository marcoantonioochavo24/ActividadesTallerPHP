<?php

// Autor: Marco Antonio Ochavo Fernández
// Actividades apuntes pag.11

/* Crea un archivo PHP que haga:
    - Declare una variable llamada nombre con tu nombre
    - Imprima "Hola, mi nombre es [tu nombre]"
    - Use comentarios explicativos
    - Defina una constante PI = 3.1416 y la muestre
    - Use dos variables que solo cambien en mayúsculas para probar sensibilidad
*/


// Declaro una variable con mi nombre
$nombre = "Marco";


// Imprimo un saludo con mi nombre
echo "Hola, mi nombre es $nombre<br>";


// Defino una constante llamada PI y la muestro
define("PI", 3.1416);
echo "El valor de PI es: " . PI . "<br>";


// Prueba de sensibilidad a mayúsculas y minúsculas
$variable = "minúscula";
$Variable = "mayúscula";

echo "Primera variable: $variable<br>";
echo "Segunda variable: $Variable<br>";

?>



