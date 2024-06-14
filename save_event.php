<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
  $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
  $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';

  // Verificar si los datos se reciben correctamente
  if (!empty($nombre) && !empty($fecha) && !empty($descripcion)) {
    echo "Datos recibidos: Nombre = $nombre, Fecha = $fecha, Descripción = $descripcion<br>";
  } else {
    echo "Datos no recibidos correctamente.<br>";
    echo "Por favor complete todos los campos.<br>";
    exit();
  }

  $sql = "INSERT INTO eventos (nombre, fecha, descripcion) VALUES ('$nombre', '$fecha', '$descripcion')";

  if ($conn->query($sql) === TRUE) {
    echo "Nuevo evento creado exitosamente.<br>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
} else {
  echo "Método no permitido.<br>";
}
?>
