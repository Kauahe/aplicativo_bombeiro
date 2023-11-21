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
    // Armazenar o ID do usuário na sessão
   

    // Verificar o valor da coluna "adm"
    if ($matchingCodes[0]["adm"] == 1) {
        // Se o valor for 1, redirecionar para a página de administrador
        header("Location:../aplicativo_adm/adm.php");
    } else {
        $_SESSION["usuario"] = $matchingCodes[0]["id"];
        header("Location:../cadastro.html");
    }

    exit();
} else {
    // Exibir mensagem de erro
    echo "Os códigos estão incorretos.";
}
?>