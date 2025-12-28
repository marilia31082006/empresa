<?php
require "config.php";

$email = $_POST['email'];
$senha = hash('sha256', $_POST['senha']);

$sql = $conn->prepare("SELECT * FROM admins WHERE email = ? AND senha = ?");
$sql->bind_param("ss", $email, $senha);
$sql->execute();

$result = $sql->get_result();

if ($result->num_rows === 1) {
    $admin = $result->fetch_assoc();
    $_SESSION['admin_id'] = $admin['id'];
    $_SESSION['admin_nome'] = $admin['nome'];
    header("Location: dashboard.php");
} else {
    header("Location: index.php?erro=1");
}
