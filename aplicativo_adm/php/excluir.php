<?php
// Inclua o arquivo de conexão com o banco de dados
include("../../php/conecta.php");

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Evite injeção de SQL usando declarações preparadas
    $sql = "DELETE FROM cadastro WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        // A exclusão foi bem-sucedida
        echo "Usuário excluído com sucesso.";
    } else {
        // Erro na exclusão
        echo "Erro ao excluir o usuário.";
    }
} else {
    echo "ID do usuário não fornecido.";
}
?>
