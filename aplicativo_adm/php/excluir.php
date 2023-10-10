<?php
include("../../php/conecta.php");

$response = array(); // Inicializa um array para armazenar a resposta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se o ID do usuário foi fornecido no corpo da solicitação
    if (isset($_POST["id"])) {
        $userId = $_POST["id"];

        // Execute a consulta SQL para excluir o usuário com base no ID
        $sql = "DELETE FROM cadastro WHERE ID = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id", $userId);

        if ($stmt->execute()) {
            // Defina a resposta como sucesso
            $response["success"] = true;
            $response["message"] = "Usuário excluído com sucesso!";
        } else {
            // Defina a resposta como erro e exiba informações de erro
            $response["success"] = false;
            $response["message"] = "Erro ao excluir usuário: " . $stmt->errorInfo()[2];
        }
    } else {
        // O ID do usuário não foi fornecido na solicitação
        $response["success"] = false;
        $response["message"] = "ID do usuário não fornecido na solicitação.";
    }

    // Retorne a resposta como JSON
    header("Content-type: application/json");
    echo json_encode($response);
}
?>