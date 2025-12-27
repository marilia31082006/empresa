<?php
include 'db.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);

$nome = $data['nome'];
$email = $data['email'];
$senha = password_hash($data['senha'], PASSWORD_DEFAULT);

// Verifica se o email já existe
$stmt = $conn->prepare("SELECT id FROM usuarios WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if($stmt->num_rows > 0){
    echo json_encode(["status"=>false, "msg"=>"Email já cadastrado"]);
    exit;
}

// Insere o usuário
$stmt = $conn->prepare("INSERT INTO usuarios (nome,email,senha) VALUES (?,?,?)");
$stmt->bind_param("sss", $nome, $email, $senha);

if($stmt->execute()){
    echo json_encode(["status"=>true, "msg"=>"Cadastro realizado com sucesso"]);
}else{
    echo json_encode(["status"=>false, "msg"=>"Erro no cadastro"]);
}
?>
