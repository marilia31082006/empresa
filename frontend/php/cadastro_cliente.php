<?php
require "conexao.php";


$data = json_decode(file_get_contents("php://input"), true);

$nome  = $data["nome"];
$email = $data["email"];
$senha = password_hash($data["senha"], PASSWORD_DEFAULT);

$check = $pdo->prepare("SELECT id FROM clientes WHERE email = ?");
$check->execute([$email]);

if ($check->rowCount() > 0) {
    echo json_encode(["status" => false, "msg" => "Email já cadastrado"]);
    exit;
}

$sql = $pdo->prepare(
  "INSERT INTO clientes (nome, email, senha) VALUES (?, ?, ?)"
);

if ($sql->execute([$nome, $email, $senha])) {
    echo json_encode(["status" => true, "msg" => "Cadastro realizado com sucesso"]);
} else {
    echo json_encode(["status" => false, "msg" => "Erro ao cadastrar"]);
}
