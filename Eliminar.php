<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "tablasmultiplicar";

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}

if (isset($_POST['eliminar'])) {
  $id = $_POST['id'];

  $sql = "DELETE FROM usuariotabla WHERE idUsuario = $id";

  if (mysqli_query($conn, $sql)) {
    
  } else {
    echo "Error al eliminar registro: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Eliminar registro por id</title>
</head>
<body>
  <h2>Eliminar registro por id</h2>
  <form method="post">
    <label>Introduce la id del registro a eliminar:</label> <br>
    <input type="text" name="id"><br>
    <input class="btn btn-primary" type="submit" name="eliminar" value="Eliminar">
    <a class="btn btn-primary" href="index.html" role="button">Inicio</a>

  </form>
</body>
</html>