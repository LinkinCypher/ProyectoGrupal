<?php
include 'config.php';

$sql = "SELECT * FROM eventos ORDER BY fecha DESC";
$result = $conn->query($sql);

$eventos = array();

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $eventos[] = $row;
  }
}

echo json_encode($eventos);

$conn->close();
?>
