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
  die(json_encode(["error" => "Conexión fallida"]));
}

$data = json_decode(file_get_contents("php://input"));
$usuario = $data->usuario;
$contrasena = $data->contrasena;

$stmt = $conn->prepare("SELECT tipo_usuario FROM usuarios WHERE u_nombre=? AND contrasenia=?");
$stmt->bind_param("ss", $usuario, $contrasena);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
  echo json_encode([
    "status" => "success",
    "tipo_usuario" => $row["tipo_usuario"]
  ]);
} else {
  echo json_encode(["status" => "error"]);
}

$conn->close();
?>
