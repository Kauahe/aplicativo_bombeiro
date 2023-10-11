<?php
include("conecta.php");

$response = array(); // Inicializa um array para armazenar a resposta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os valores do formulário
    $cpf = $_POST["cpf"];
    $abertura = $_POST["abertura"];
    $resposta_verbal = $_POST["resposta_verbal"];
    $resposta_motora = $_POST["resposta_motora"];
    $soma_GSC = $_POST["soma_GSC"];
    

    $sql = "INSERT INTO cadastropac (cpf, abertura, resposta_verbal, resposta_motora, soma_GSC) VALUES (:cpf, :abertura, :resposta_verbal, :resposta_motora, :soma_GSC)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':abertura', $abertura);
    $stmt->bindParam(':resposta_verbal', $resposta_verbal);
    $stmt->bindParam(':resposta_motora', $resposta_motora);
    $stmt->bindParam(':soma_GSC', $soma_GSC);

    if ($stmt->execute()) {
        // Defina a resposta como sucesso
        $response["success"] = true;
        $response["message"] = "Dados enviados com sucesso!";
    } else {
        // Defina a resposta como erro e exiba informações de erro
        $response["success"] = false;
        $response["message"] = "Erro ao enviar dados: " . $stmt->errorInfo()[2];
    }

    // Retorne a resposta como JSON
    header("Content-type: application/json");
    echo json_encode($response);
}
?>