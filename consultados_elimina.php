<?php
    include("conexion.php");
    $resultados = mysqli_query($conexion, "SELECT * FROM nombre");

echo
" <table width=\"100%\" border=\"1\">
<th> FORMULARIO PARA CONSULTAR</th>
   <tr>
      <td><b><center>NUMERO DE CONTROL</center></b></td>
      <td><b><center>NOMBRE</center></b></td>
      <td><b><center>PULSA PARA ELIMINAR</center></b></td>
      <td><b><center>PULSA PARA ACTUALIZAR</center></b></td>


    </tr>";

    while($consulta =mysqli_fetch_array($resultados)){
        echo
        "
        <tr>
           <td> ".$consulta['control']."</td>
           <td> ".$consulta['nombre']."</td>

           <td> <BR><form method='post' action='elimina_control.php'> \n
           <input type='hidden' name='control' value='".$consulta['control']."'>
           <input type='submit' value='Eliminar Registro'>
           </form></td>

           <td> <BR><form method='post' action='elimina_control.php'> \n
           <input type='hidden' name='control' value='".$consulta['control']."'>
           <input type='submit' value='Actualizar Registro'>
           </form></td>
        </tr>
        ";
    }

    echo "</table>";

    
?>
