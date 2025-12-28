<?php
session_start();
require "conexao.php";

$data = json_decode(file_get_contents("php://input"), true);

$email = $data["email"];
$senha = $data["senha"];

$sql = $pdo->prepare("SELECT * FROM clientes WHERE email = ?");
$sql->execute([$email]);

$user = $sql->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($senha, $user["senha"])) {
    $_SESSION["cliente_id"] = $user["id"];
    $_SESSION["cliente_nome"] = $user["nome"];

    echo json_encode(["status" => true]);
} else {
    echo json_encode(["status" => false, "msg" => "Login inválido"]);
}
