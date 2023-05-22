<?php
$conexion = new mysqli("localhost", "admin", "","bd");
if($conexion){
    echo "Conexion establecida";
}
else{
    echo "Conexion no establecida";
}
?>