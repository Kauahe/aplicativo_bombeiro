<?php
include("../../php/conecta.php");

$response = array(); // Inicializa um array para armazenar a resposta

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Recupere os valores do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"]; // O campo "senha" agora contém a senha combinada

    // Processar o upload da imagem
    if (isset($_FILES["imagem"])) {
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

            if ($stmt->execute()) {
                // Defina a resposta como sucesso
                $response["success"] = true;
                $response["message"] = "Cadastro realizado com sucesso!";
                var_dump($response);
            } else {
                // Defina a resposta como erro e exiba informações de erro
                $response["success"] = false;
                $response["message"] = "Erro ao cadastrar: " . $stmt->errorInfo()[2];
            }
        } else {
            // Trate o erro no envio de imagem
            $response["success"] = false;
            $response["message"] = "Erro ao enviar a imagem: " . $_FILES["imagem"]["error"];
        }
    } else {
        // O campo "foto" não foi definido no formulário
        $response["success"] = false;
        $response["message"] = "O campo de imagem não foi definido no formulário.";
    }
    header("Location:../adm.php");
    // Retorne a resposta como JSON
    //header("Content-type: application/json");
    //echo json_encode($response);
}
?>