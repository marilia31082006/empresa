<?php
require "../config.php";

$r = $conn->query("SELECT nome, email, telefone FROM clientes ORDER BY id DESC LIMIT 10");

$clientes = [];
while($row = $r->fetch_assoc()){
    $clientes[] = $row;
}

echo json_encode($clientes);
