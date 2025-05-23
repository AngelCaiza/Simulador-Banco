<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Headers: Content-Type");

$host = "localhost";
$db = "mybanco";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die(json_encode(["status" => "error", "message" => "Conexión fallida"]));
}

$data = json_decode(file_get_contents("php://input"));
if (!$data || !isset($data->ci) || !isset($data->clave)) {
  echo json_encode(["status" => "error", "message" => "Datos incompletos"]);
  exit;
}

$ci = $data->ci;
$clave = $data->clave;

$stmt = $conn->prepare("SELECT * FROM socios WHERE ci=? AND clave=?");
$stmt->bind_param("ss", $ci, $clave);
$stmt->execute();
$result = $stmt->get_result();

if ($result->fetch_assoc()) {
  echo json_encode(["status" => "ok", "mostrarFormulario" => true]);
} else {
  echo json_encode(["status" => "error", "mostrarFormulario" => false]);
}

$conn->close();
?>
