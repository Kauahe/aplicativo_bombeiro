<?php
include("conecta.php");

$response = array(); // Inicializa um array para armazenar a resposta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os valores do formulário
    $data_ocr = $_POST["data_ocr"];
    $nome_hospital = $_POST["nome_hospital"];
    $nome_pac = $_POST["nome_pac"];
    $idade_pac = $_POST["idade_pac"];
    $cpf = $_POST["cpf"];
    $telefone_pac = $_POST["telefone_pac"];
    $nome_acomp = $_POST["nome_acomp"];
    $idade_acomp = $_POST["idade_acomp"];
    $local_ocr = $_POST["local_ocr"];

    // Prepara a consulta SQL para inserção
    $sql = "INSERT INTO cadastropac (data_ocr, nome_hospital, nome_pac, idade_pac, cpf, telefone_pac, nome_acomp, idade_acomp, local_ocr) VALUES (:data_ocr, :nome_hospital, :nome_pac, :idade_pac, :cpf, :telefone_pac, :nome_acomp, :idade_acomp, :local_ocr)";
    $stmt = $pdo->prepare($sql);

    // Bind dos parâmetros
    $stmt->bindParam(':data_ocr', $data_ocr);
    $stmt->bindParam(':nome_hospital', $nome_hospital);
    $stmt->bindParam(':nome_pac', $nome_pac);
    $stmt->bindParam(':idade_pac', $idade_pac);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':telefone_pac', $telefone_pac);
    $stmt->bindParam(':nome_acomp', $nome_acomp);
    $stmt->bindParam(':idade_acomp', $idade_acomp);
    $stmt->bindParam(':local_ocr', $local_ocr);

    if ($stmt->execute()) {
        // Defina a resposta como sucesso
        $response["success"] = true;
        $response["message"] = "Cadastro realizado com sucesso!";
    } else {
        // Defina a resposta como erro e exiba informações de erro
        $response["success"] = false;
        $response["message"] = "Erro ao cadastrar: " . $stmt->errorInfo()[2];
    }

    // Retorne a resposta como JSON
    header("Content-type: application/json");
    echo json_encode($response);
}
?>