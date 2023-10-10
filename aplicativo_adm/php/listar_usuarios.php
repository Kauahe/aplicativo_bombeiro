<?php
include("../../php/conecta.php");

$usuarios = array(); // Inicializa um array para armazenar os usuários

// Consulta SQL para buscar os usuários
$sql = "SELECT Nome, email, CPF FROM cadastro";
$result = $pdo->query($sql);

if ($result) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $usuarios[] = $row;
    }
}

// Retorne a lista de usuários como JSON
header("Content-type: application/json");
echo json_encode($usuarios);
?>