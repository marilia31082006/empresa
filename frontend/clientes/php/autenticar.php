<?php
session_start();
include "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM clientes WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();

    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['cliente_id'] = $usuario['id'];
        $_SESSION['cliente_nome'] = $usuario['nome'];

        header("Location: ../servicos.php");
        exit;
    }
}

echo "<script>alert('Email ou senha inválidos'); window.location='../login.php';</script>";
