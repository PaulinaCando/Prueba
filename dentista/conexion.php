<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basededatos="dentista";

$enlace=mysqli_connect($servidor, $usuario,$clave,$basededatos);
if(!$enlace){
echo "Error en la conexion con el servidor";

}


?>