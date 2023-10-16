<?php
// Inclua o arquivo de conexão com o banco de dados
include("../../php/conecta.php");

// Função para listar usuários
function listarUsuarios($pdo) {
    $sql = "SELECT id, nome, email FROM cadastro";
    $stmt = $pdo->query($sql);

    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch()) {
            echo "<div class='barra' >";
            echo "<div class='info-usuario'data-id='" . $row["id"] . "' onclick='redirectToProfile(this)'>";
            echo "<div class='info-id'> " . $row["id"] . "</div>";
            echo "<div class='info-nome'> " . $row["nome"] . "</div>";
            echo "<div class='info-email'> " . $row["email"] . "</div>";
            echo "</div>";
            echo "<div class='excluir' data-userid='" . $row["id"] . "'>Excluir</div>";
            echo "</div>";
        }
    } else {
        echo "Nenhum usuário encontrado.";
    }
}

// Listar usuários
listarUsuarios($pdo);
?>