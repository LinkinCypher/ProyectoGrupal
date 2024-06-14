<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $fecha = $_POST['fecha'];
  $descripcion = $_POST['descripcion'];

  $sql = "UPDATE eventos SET nombre = '$nombre', fecha = '$fecha', descripcion = '$descripcion' WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
    echo "Evento actualizado exitosamente.";
  } else {
    echo "Error al actualizar el evento: " . $conn->error;
  }

  $conn->close();
} else {
  echo "Método no permitido.";
}
?>
