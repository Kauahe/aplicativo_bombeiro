<!-- listar_ocorrencias_ajax.php -->
<?php
include("../../php/conecta.php");

// Verifica se a opção de ordenação foi recebida
$orderBy = isset($_GET['orderBy']) ? $_GET['orderBy'] : 'num_ocorrencia';

// Evita injeção SQL, permitindo apenas opções válidas
$allowedOptions = ['num_ocorrencia', 'data_ocr', 'nome_pac'];
if (!in_array($orderBy, $allowedOptions)) {
    $orderBy = 'num_ocorrencia';
}

// Chama a função para listar ocorrências
listarOcorrencias($pdo, $orderBy);

function listarOcorrencias($pdo, $orderBy) {
    $sql = "SELECT num_ocorrencia, nome_pac, data_ocr FROM cadastropac";
    if ($orderBy) {
        $sql .= " ORDER BY $orderBy";
    }
    $stmt = $pdo->query($sql);

    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch()) {
            echo "<div class='barra'>";
            echo "<div class='info-usuario' data-id='" . $row["num_ocorrencia"] . "' onclick='redirectToProfile(this)'>";
            echo "<div class='info-id'> " . $row["num_ocorrencia"] . "</div>";
            echo "<div class='info-nome'> " . $row["nome_pac"] . "</div>";
            echo "<div class='info-email'> " . $row["data_ocr"] . "</div>";
            echo "</div>";
            echo "<div class='excluir' data-userid='" . $row["num_ocorrencia"] . "'>Excluir</div>";
            echo "</div>";
        }
    } else {
        echo "Nenhuma ocorrência encontrada.";
    }
}