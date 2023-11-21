<?php
// Conecte-se ao banco de dados e obtenha os dados do POST
include("conecta.php");
$campo = $_GET['campo'];
$novoValor = $_GET['valor'];

// Use uma declaração preparada para evitar injeção de SQL
$stmt = $pdo->prepare("UPDATE cadastropac SET $campo = :novoValor WHERE num_ocorrencia = :num_ocorrencia"); // Substitua "cadastropac" pelo nome real da sua tabela
$stmt->bindParam(':novoValor', $novoValor);
$stmt->bindParam(':num_ocorrencia', $num_ocorrencia); // Substitua ":num_ocorrencia" pelo campo de identificação real do seu registro
$num_ocorrencia = 1; // Substitua 1 pelo num_ocorrencia real do seu registro

// Execute a declaração preparada

    // Execute a declaração preparada
    if ($stmt->execute()) {
        echo 'success';
    } else {
        throw new Exception('Erro ao executar a declaração preparada.');
    }
catch (Exception $e) {
    echo 'error: ' . $e->getMessage();
}
?>