<?php
include "conexao.php";

$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO clientes (nome, email, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nome, $email, $senha);

if ($stmt->execute()) {
    echo "<script>alert('Cadastro realizado com sucesso!'); window.location='../login.php';</script>";
} else {
    echo "<script>alert('Erro: Email já cadastrado!'); window.location='../index.php';</script>";
}

$stmt->close();
$conn->close();
?>
