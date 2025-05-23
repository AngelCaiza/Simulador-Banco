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
$ci = $data->ci;
$usuario = $data->usuario;
$contrasena = $data->contrasena;
$tipo_usuario = $data->tipo_usuario;

$stmt = $conn->prepare("INSERT INTO usuarios (ci, u_nombre, contrasenia, tipo_usuario) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $ci, $usuario, $contrasena, $tipo_usuario);

if ($stmt->execute()) {
  echo json_encode(["status" => "ok"]);
} else {
  echo json_encode(["status" => "error", "message" => $stmt->error]);
}

$conn->close();
?>
