<?php 
function traerProducto(){
$productos = [
['nombre' => 'Papas Fritas','precio' => 100, 'imagen' => 'img/papas-fritas.png'],
['nombre' => 'Ensalada','precio' => 300, 'imagen' => 'img/ensalada.png'],
['nombre' => 'Pizza','precio' => 500, 'imagen' => 'img/pizza.png'],
['nombre' => 'Sandwich','precio' => 300, 'imagen' => 'img/sandwich.png'],
['nombre' => 'Hamgurguesa','precio' => 350, 'imagen' => 'img/hamgurguesa.png'],
['nombre' => 'Galletitas','precio' => 200, 'imagen' => 'img/galletitas.png'],
['nombre' => 'Pancho','precio' => 200, 'imagen' => 'img/pancho.png'],
['nombre' => 'Dona','precio' => 100, 'imagen' => 'img/dona.png'],
];
return($productos);
}
?>