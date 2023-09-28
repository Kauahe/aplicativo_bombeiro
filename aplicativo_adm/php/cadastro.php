<?php
include("../../php/conecta.php");

$response = array(); // Inicializa um array para armazenar a resposta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os valores do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"]; // O campo "senha" agora contém a senha combinada

    // Processar o upload da imagem
    if ($_FILES["imagem"]["error"] == 0) {
        $imagemTmpName = $_FILES["imagem"]["tmp_name"];
        $imagemData = file_get_contents($imagemTmpName); // Lê os dados da imagem como um BLOB

        // Inserir os dados no banco de dados, incluindo os dados da imagem
        $sql = "INSERT INTO cadastro (Nome, email, CPF, senha, imagem_blob) VALUES (:nome, :email, :cpf, :senha, :imagem)";
        $stmt = $pdo->prepare($sql);

        // Vincular os valores às variáveis na consulta
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":cpf", $cpf);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":imagem", $imagemData, PDO::PARAM_LOB); // Use PDO::PARAM_LOB para dados BLOB

       

    // Retorne a resposta como JSON
    header("Content-type: application/json");
    echo json_encode($response);
    exit; // Pare a execução do PHP após enviar a resposta JSON
}
?>