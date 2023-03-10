<html>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <center>

    <body>
        
<?php
require_once("conexion.php");
$connection = new mysqli($servername, $username, $password,$dbname);
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "tablasmultiplicar";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada:</h3>" ;
        }

  $consulta= "SELECT * FROM usuariotabla";

 #$consulta = "SELECT * FROM usuariotabla where id='1'";
        $result = mysqli_query($connection,$consulta);
  if(!$result) 
  {
      echo "No se ha podido realizar la consulta";
  }
  echo '<table class="table table-danger table-striped">';
  echo "<tr>";
  echo "<th><p>#</th></p>";
echo "<th><p>Nombre</th></p>";
echo "<th><p>Calificacion</th></p>";
echo "<th><p>Tabla</th></p>";
echo "<th><p>Rango Inicial</th></p>";
echo "<th><p>Rango Final</th></p>";
echo "<th><p>Correo</th></p>";

while ($colum = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td><p>" .$colum ['idUsuario']. "</td></p>";
  echo "<td><p>" .$colum ['nombre']. "</td></p>";
  echo "<td><p>" .$colum ['Calificacion']. "</td></p>";
  echo "<td><p>" .$colum ['tabla']. "</td></p>";
  echo "<td><p>" .$colum ['rangoinicial']. "</td></p>";
  echo "<td><p>" .$colum ['rangofinal']. "</td></p>";
  echo "<td><p>" .$colum ['correo']. "</td></p>";
 echo "</tr>";
}
echo "</table>";


mysqli_close( $connection );
   //echo "Fuera " ;

   echo'<a href="frmInsertar.html"> Insertar</a>';
?>
        
        <input type="submit" class="btn btn-outline-dark"  value="Modificar" >
        <input type="submit" href="index.html" class="btn btn-outline-dark"  value="Borrar" >
</table>
    </body>
</html>