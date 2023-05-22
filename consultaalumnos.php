<?php
       include("conexion.php");
       $result = mysqli_query($conexion, "SELECT * FROM nombre");

echo 
    "
    <table width= \"100\" border=\"1\">
    <th> FORMUNARIO PARA CONSULTAR</th>
         <tr>
              <td><b><center>N U M E R O  D E  C O N T R O L</center></b></td>
              <td><b><center>NOMBRE</center></b></td>
        </tr>
    ";
while($consulta = mysqli_fetch_array($result)){

    echo
    "
    <tr>
        <td>".$consulta['control']." </td>
        <td>".$consulta['nombre']." </td>
    </tr>
        ";
}    

echo "</table>"
?>