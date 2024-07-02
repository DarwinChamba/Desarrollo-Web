<?php 
echo 'Funciones para los arrays';
echo '<br>';
$arreglo=[5,6,4,2,3];
//imprimiendo un valor dada la posicion
echo $arreglo[2] . '<br>';
//pagregar valor en una posicion especifica
$arreglo[0]=666;
//agrega un nuevo valor al final del arreglo
array_push($arreglo,555);
//elimina el elemento del arreglo que se encunetra en la ultima posicion
array_pop($arreglo);
//agrega un nuevo elmento al inicio del arreglo
array_unshift($arreglo,777);
//elimina el primer elmento del arreglo
array_shift($arreglo);

echo 'la cantidad de elementos es :' . count($arreglo). '<br>';
$arreglo1=[];
//comprueba si el arreglo esta vacio
var_dump(empty($arreglo1));
echo '<br>';

$isEmpty=(empty($arreglo))? 'Esta vacio': 'No se encuentra vacio';
echo $isEmpty. '<br>';
//comprueba si un elemento se encuentra dentro del arreglo
if(in_array(33,$arreglo)){
    echo'si se encuentra dentro del arreglo'. '<br>';
}else{
    echo 'No se encuentra dentro del arreglo '. '<br>';
}

foreach($arreglo as $valor){
    echo $valor .' ';
}
echo  '<br>';

echo 'Funciones para las cadenas' . '<br>';
$cadena='  Hola mi nombre es Darwin Chamba  ';
//elimina los espacios de la derecha y de la izquierda
echo trim($cadena) . '<br>';
//elimina los espacios de la izquierda
echo ltrim('   Hola mundo') . '<br>';
//eliminar los espacios de la derecha
echo rtrim('   Hola mundo   ') . '<br>';
//devuelve la longitud de la cadena
echo strlen($cadena) . '<br>';
//compara cadenas
echo strcmp('hola','Hola') . '<br>';
echo strcasecmp('Hola','hola') . '<br>';
//convierte la primera letra en mayuscula
echo ucfirst ($cadena) . '<br>';
//convierte la primera letra en minsucula
echo lcfirst('Hola mucdo') . '<br>';
//convierte a minusculas
echo strtolower('HOLA MUNDO'). '<br>';
//convierte a mayusculas
echo strtoupper('hola mundo') . '<br>';
?>
