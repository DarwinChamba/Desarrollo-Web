<?php

echo 'hola mundo';

$nombre = "Kevin Zapata";
$edad = 25;
$promedio = 8.75;
$PasaSemestre= True;

echo $nombre;
echo $edad;
echo $promedio;
echo $PasaSemestre;

$numero1 = 20;
$numero2 = 10;

echo $numero1 + $numero2; // Suma: 30
echo $numero1 - $numero2; // Resta: 10
echo $numero1 * $numero2; // Multiplicación: 200
echo $numero1 / $numero2; // División: 2
echo $numero1 % $numero2; // Suma 0

$numero1 = 20;
$numero2 = 10;

echo $numero1 == $numero2; // Igualdad = False
echo $numero1 != $numero2; // Desigualdad = True
echo $numero1 < $numero2; // Menor que = False
echo $numero1 <= $numero2; // Menor o igual que = False
echo $numero1 > $numero2; // Mayor que = True
echo $numero1 >= $numero2; // Mayor o igualq que = True
echo $numero1 === $numero2; // Igualdad Estricta = False
echo $numero1 !== $numero2; // Desigualdad Estricta = True

$numero = 5;

if ($numero > 0) {
    echo "El número es positivo.";
} else {
    echo "El número no es positivo.";
}

$nota = 75;
$faltas = 1;

if ($nota >= 60 && $faltas <= 2) {
    echo "El estudiante ha aprobado.";
} else {
    echo "El estudiante no ha aprobado.";
}

$usuario = "admin";
$contrasena = "1234";

if ($usuario == "admin" || $contrasena == "1234") {
    echo "Tienes acceso al sistema.";
} else {
    echo "Acceso denegado.";


$activo = false;

if (!$activo) {
    echo "La cuenta no está activa.";
} else {
    echo "La cuenta está activa.";
}   


$numero = 10;
echo "El valor de \$numero es: " . $numero;

$contador = 0;
$incremento = 5;

$contador += $incremento;
echo "El contador ahora es: " . $contador . "<br>";

$contador += $incremento;
echo "El contador ahora es: " . $contador . "<br>";

$contador += $incremento;
echo "El contador ahora es: " . $contador . "<br>";


$valor = 100;
$decremento = 20;

$valor -= $decremento;
echo "El valor ahora es: " . $valor . "<br>";

$valor -= $decremento;
echo "El valor ahora es: " . $valor . "<br>";

$valor -= $decremento;
echo "El valor ahora es: " . $valor . "<br>";
    

$base = 10;
$altura = 5;

$area = $base * $altura;
echo "El área del rectángulo es: " . $area . "<br>";

$base *= 2;
$altura *= 3;

$area = $base * $altura;
echo "El área del nuevo rectángulo es: " . $area . "<br>";


$distancia = 300; // en kilómetros
$tiempo = 5; // en horas

$velocidad = $distancia / $tiempo;
echo "La velocidad promedio es: " . $velocidad . " km/h <br>";

$distancia /= 2;
$tiempo /= 2;

$velocidad = $distancia / $tiempo;
echo "La velocidad promedio después de reducir la distancia y el tiempo es: " . $velocidad . " km/h <br>";


$numero = 25;
$divisor = 4;

$resto = $numero % $divisor;
echo "El resto de dividir " . $numero . " entre " . $divisor . " es: " . $resto . "<br>";

$numero = 40;
$divisor = 7;

$resto = $numero % $divisor;
echo "El resto de dividir " . $numero . " entre " . $divisor . " es: " . $resto . "<br>";

$numero = 10;

$numero += 5;
echo "El número es: " . $numero . "<br>";

$numero *= 2;
echo "El número ahora es: " . $numero . "<br>";

$numero -= 8;
echo "El número después de restar 8 es: " . $numero . "<br>";

$numero /= 3;
echo "El número después de dividir por 3 es: " . $numero . "<br>";


$numero = 10;

echo "Valor inicial de \$numero: " . $numero . "<br>";

$numero++; // Incremento
echo "Después de incrementar, \$numero es: " . $numero . "<br>";

$numero--; // Decremento
echo "Después de decrementar, \$numero es: " . $numero . "<br>";


$nombre = "Juan";
$apellido = "Pérez";

echo "Nombre completo: " . $nombre . " " . $apellido . "<br>";

$edad = 30;
echo "Hola, soy " . $nombre . " y tengo " . $edad . " años.<br>";


$titulo = "Bienvenido";
$subtitulo = "a nuestro sitio web";
$mensaje = $titulo . ", " . $subtitulo;

echo $mensaje . "<br>";


$numero = 10;

if ($numero > 0) {
    echo "El número es positivo.";
} elseif ($numero < 0) {
    echo "El número es negativo.";
} else {
    echo "El número es cero.";
}


$dia = "lunes";

switch ($dia) {
    case "lunes":
        echo "Hoy es lunes. Comienza una nueva semana.";
        break;
    case "martes":
        echo "Hoy es martes. A mitad de semana.";
        break;
    case "miércoles":
        echo "Hoy es miércoles. Día de mercado.";
        break;
    case "jueves":
        echo "Hoy es jueves. Cerca del fin de semana.";
        break;
    case "viernes":
        echo "Hoy es viernes. ¡Por fin es viernes!";
        break;
    default:
        echo "Día no reconocido.";
}

// Imprimir los números del 1 al 5 usando for
echo "Usando for:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}


// Imprimir los números del 1 al 5 usando while
echo "Usando while:<br>";
$j = 1;
while ($j <= 5) {
    echo $j . "<br>";
    $j++;
}


// Imprimir los números del 1 al 5 usando do/while
echo "Usando do/while:<br>";
$k = 1;
do {
    echo $k . "<br>";
    $k++;
} while ($k <= 5);


// Iterar sobre un array usando foreach
echo "Usando foreach:<br>";
$numeros = array(1, 2, 3, 4, 5);
foreach ($numeros as $numero) {
    echo $numero . "<br>";
}

?>