<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];

  $sql = "DELETE FROM eventos WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
    echo "Evento eliminado exitosamente.";
  } else {
    echo "Error al eliminar el evento: " . $conn->error;
  }

  $conn->close();
} else {
  echo "Método no permitido.";
}
?>
