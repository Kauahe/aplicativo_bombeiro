

<?php
include("../../php/conecta.php");

$response = array(); // Inicializa um array para armazenar a resposta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os valores do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"]; // O campo "senha" agora contém a senha combinada

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO cadastro (Nome, email, CPF, senha) VALUES (:nome, :email, :cpf, :senha)";
    $stmt = $pdo->prepare($sql);

    // Vincular os valores às variáveis na consulta
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":cpf", $cpf);
    $stmt->bindParam(":senha", $senha);

    if ($stmt->execute()) {
        // Defina a resposta como sucesso
        $response["success"] = true;
        $response["message"] = "Cadastro realizado com sucesso!";
    } else {
        // Defina a resposta como erro
        $response["success"] = false;
        $response["message"] = "Erro ao cadastrar: " . $stmt->errorInfo()[2];
    }

    // Retorne a resposta como JSON
    header("Content-type: application/json");
    echo json_encode($response);
}
?>
   