<?php
include 'db.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);

$email = $data['email'];
$senha = $data['senha'];

$stmt = $conn->prepare("SELECT id, nome, senha FROM usuarios WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows == 1){
    $user = $result->fetch_assoc();
    if(password_verify($senha, $user['senha'])){
        session_start();
        $_SESSION['usuario_id'] = $user['id'];
        $_SESSION['usuario_nome'] = $user['nome'];
        echo json_encode(["status"=>true, "msg"=>"Login realizado"]);
    } else {
        echo json_encode(["status"=>false, "msg"=>"Senha incorreta"]);
    }
}else{
    echo json_encode(["status"=>false, "msg"=>"Usuário não encontrado"]);
}
?>
