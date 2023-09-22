<?php
session_start();

// Obtenha a senha do campo "senha"
$senha = $_POST["senha"];

include("conecta.php");

$query = "SELECT * FROM cadastro WHERE senha = :senha";
$statement = $pdo->prepare($query);
$statement->bindParam(":senha", $senha);
$statement->execute();

$matchingCodes = $statement->fetchAll(PDO::FETCH_ASSOC);

if (count($matchingCodes) > 0) {
    // Redirecionar para a página desejada
    header("Location:../animacao.html");
    exit();
} else {
    // Exibir mensagem de erro
    echo "Os códigos estão incorretos.";
}
?>