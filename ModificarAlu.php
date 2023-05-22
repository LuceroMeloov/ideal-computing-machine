<!DOCTYPE html>
<html>
<head>
    <title>Advertencia de ventana emergente</title>
    <script type="text/javascript">
        function confirmarEliminacion() {
            return confirm("Esta seguro de que desea eliminar este elemento?");
        }
    </script>
    <script type="text/javascript">
        function confirmarActualizar() {
            return confirm("Esta seguro de que desea Actualizar este elemento?");
        }
    </script>
</head>
<body>
<?php
include ("conexion.php");
$result= mysqli_query ($conexion, "SELECT * FROM nombre");

echo
"
<table width=\"100%\" border = \"1\">
<th>F O R M U L A R I O P A R A C O N S U L T A</th>
<TR>
<TD><B><CENTER>NUMERO DE CONTROL</CENTER></B></TD>
<TD><B><CENTER>NOMBRE</CENTER></B></TD>
<TD><B><CENTER>Pulse para eliminar</CENTER></B></TD>
<TD><B><CENTER>Pulse para actualizar</CENTER></B></TD>
</TR>

";
while ($consulta = mysqli_fetch_array ($result)){
    echo
    "<TR>
<TD>".$consulta['control']."</TD>
<TD>".$consulta['nombre']."</TD>
<TD><br><form method='POST' action='elimina_control.php' onsubmit='return confirmarEliminacion()'> \n
<input type='hidden' name='control' value='".$consulta['control']."'>
<input type='submit' value='Eliminar Registro'> 

</form>
<td>
    <form method='post' action='actualiza_control.php'onsubmit='return confirmarActualizar()' >
        <input type='hidden' name='control' value='" . $consulta['control'] . "'>
        <input type='text' name='nuevo_nombre' placeholder='Nuevo Nombre'>
        <input type='submit' name='actualizar' value='Actualizar'>
    </form>
</td>

</TR>";
}
echo "</table>"
?>
 

</body>
</html>