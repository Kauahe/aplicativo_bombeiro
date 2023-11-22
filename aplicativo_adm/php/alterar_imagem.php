<?php
include("../../php/conecta.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id']) && isset($_FILES['imagem'])) {
    $userId = $_POST['id'];
    $imagem = file_get_contents($_FILES['imagem']['tmp_name']);

    $sql = "UPDATE cadastro SET imagem_blob = :imagem WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':imagem', $imagem, PDO::PARAM_LOB);
    $stmt->bindParam(':id', $userId, PDO::PARAM_INT);

    if ($stmt->execute()) {
        // Retorna a nova imagem codificada em base64
        $sql = "SELECT imagem_blob FROM cadastro WHERE id = $userId";
        $result = $pdo->query($sql);
        $row = $result->fetch();
        echo base64_encode($row['imagem_blob']);
    } else {
        echo 'Erro ao atualizar a imagem no banco de dados.';
    }
} else {
    echo 'Parâmetros inválidos.';
}

$pdo = null;