<html>
    <title>
        Tablas de multiplicar
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <center>

    <body>
            <center>
            
<?php
$numero=$_GET["numero"];
$rango=$_GET["rango"];
$limite=$_GET["limite"];
$nombre=$_GET["nombre"];
$correo=$_GET["correo"];
$calificacion=$_GET["calificacion"];
require_once('conexion.php');
$connection = new mysqli($servername, $username, $password,$dbname);
$sql = "INSERT INTO usuariotabla (nombre,Calificacion,tabla,rangoinicial,rangofinal,correo)
        VALUES ('".$nombre."','".$calificacion."','".$numero."','".$rango."','".$limite."','".$correo."')";
        $resultado = mysqli_query($connection,$sql);
        mysqli_close($connection); 
        header("location:MostrarTabla.php");

?>  
  </center>
</table>
    </body>
</html>