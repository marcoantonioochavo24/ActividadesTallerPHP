<?php

// Autor: Marco Antonio Ochavo Fernández
// Actividades pag.50

/* Crea un archivo PHP que haga:
    - 1. Defina una clase Coche que tenga las propiedades marca, modelo y año.Agregue un método acelerar()que imprima "El coche está acelerando".
    - 2. Crea una clase Electrodomestico con las propiedades nombrey precio. Luego, crea una clase Lavadoraque herede Electrodomesticoy tenga un método lavar().
    - 3. Definir una clase Animal con un método hacerSonido(). Luego, crea una clase Gato que herede Animal y sobrescribe el método hacerSonido()para que imprima "El gato maúlla".
    - 4. Defina un espacio de nombres Vehiculos que contenga una clase Camion y otro espacio de nombres llamado Transporteque contenga una clase Camioneta. Luego, crea instancias de ambas clases para probar cómo se diferencian.
    - 5. Utiliza parent::en una clase hija para llamar al método de la clase padre antes de escribirlo, tal como hicimos con Animal y Perro.
*/

// ACT1. Clase Coche
class Coche {
    // Propiedades
    public $marca;
    public $modelo;
    public $anio;

    // Constructor
    public function __construct($marca, $modelo, $anio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
    }

    // Metodo acelerar
    public function acelerar() {
        echo "El coche está acelerando.<br>";
    }
}

// Prueba de la clase Coche
$coche1 = new Coche("Audi", "RS5", 2024);
echo "Coche: $coche1->marca $coche1->modelo ($coche1->anio)<br>";
$coche1->acelerar();

echo "<br><br>"; // Para dejar espacio (salto linea)


// ACT2. Clase Electrodomestico y subclase Lavadora
class Electrodomestico {
    public $nombre;
    public $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
}

class Lavadora extends Electrodomestico {
    public function lavar() {
        echo "La lavadora está lavando la ropa.<br>";
    }
}

// Prueba de la clase Lavadora
$miLavadora = new Lavadora("Balay", 598);
echo "Electrodoméstico: $miLavadora->nombre, Precio: $miLavadora->precio €<br>";
$miLavadora->lavar();

echo "<br><br>";


// ACT3. Clase Animal y subclase Gato
class Animal {
    public function hacerSonido() {
        echo "El animal hace un sonido.<br>";
    }
}

class Gato extends Animal {
    public function hacerSonido() {
        echo "El gato maúlla.<br>";
    }
}

// Prueba de la clase Gato
$miGato = new Gato();
$miGato->hacerSonido();


