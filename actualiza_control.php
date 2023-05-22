<?php
       include("conexion.php");
$control = $_POST["control"];
$nuevo_nombre = $_POST['nuevo_nombre']; // Nuevo valor para el nombre
$existe = 0;

if ( $control == "") {
    echo "El nombre actual es un campo obligatorio.";
} elseif ($nuevo_nombre == "") {
    echo "El nuevo nombre es un campo obligatorio.";
} else {
    $resultados = mysqli_query($conexion, "SELECT * FROM nombre WHERE control='$control'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        $existe++;
    }
    if ($existe == 0) {
        echo "El nombre solicitado no existe.";
    } else {
        $_UPDATE_SQL = "UPDATE nombre SET nombre='$nuevo_nombre' WHERE control= '$control'";
        mysqli_query($conexion, $_UPDATE_SQL);

        echo "El registro con el nombre $nombre_actual ha sido actualizado con el nuevo nombre $nuevo_nombre.";
    }
}
header("location:ModificarAlu.php");
?>