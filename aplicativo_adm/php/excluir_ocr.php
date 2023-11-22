<?php
// Inclua o arquivo de conexão com o banco de dados
include("../../php/conecta.php");

if (isset($_POST['num_ocorrencia'])) {
    $num_ocorrencia = $_POST['num_ocorrencia'];

    // Evite injeção de SQL usando declarações preparadas
    $sql = "DELETE FROM cadastropac WHERE num_ocorrencia = :num_ocorrencia";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':num_ocorrencia', $num_ocorrencia, PDO::PARAM_INT);

    if ($stmt->execute()) {
        // A exclusão foi bem-sucedida
        echo "ocorrencia excluído com sucesso.";
    } else {
        // Erro na exclusão
        echo "Erro ao excluir a ocorrencia.";
    }
} else {
    echo "num_ocorrencia não fornecido.";
}
?>
