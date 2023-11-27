<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os parâmetros necessários foram enviados
    if (isset($_POST['campo'], $_POST['novoValor'], $_POST['id'])) {
        $campo = $_POST['campo'];
        $novoValor = $_POST['novoValor'];
        $userId = $_POST['id'];

        // Faça a conexão com o banco de dados (substitua pelos seus dados de conexão)
        include('../../php/conecta.php');

        // Use prepared statements para evitar SQL injection
        $comando = $pdo->prepare("UPDATE cadastro SET $campo = :novoValor WHERE id = :userId");
        $comando->bindParam(':novoValor', $novoValor);
        $comando->bindParam(':userId', $userId);

        try {
            // Execute a atualização
            $comando->execute();
            echo "Valor atualizado com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao atualizar valor: " . $e->getMessage();
        }
    } else {
        echo "Parâmetros incompletos!";
    }
} else {
    echo "Método de requisição inválido!";
}
?>