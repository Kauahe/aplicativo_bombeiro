<?php
 // Inclua o arquivo de conexão com o banco de dados
 include("../php/conecta.php");
 // Função para listar usuários
 function listarOcorrencias($pdo) {
     $sql = "SELECT num_ocorrencia, nome_pac, data_ocr FROM cadastropac";
     $stmt = $pdo->query($sql);
     if ($stmt->rowCount() > 0) {
         while ($row = $stmt->fetch()) {
             echo "<div class='barra' >";
             echo "<div class='info-usuario'data-id='" . $row["num_ocorrencia"] . "' onclick='redirectToProfile(this)'>";
             echo "<div class='info-id'> " . $row["num_ocorrencia"] . "</div>";
             echo "<div class='info-nome'> " . $row["nome_pac"] . "</div>";
             echo "<div class='info-email'> " . $row["data_ocr"] . "</div>";
             echo "</div>";
             echo "<div class='excluir' data-userid='" . $row["num_ocorrencia"] . "'>Excluir</div>";
             echo "</div>";
         }
     } else {
         echo "Nenhuma ocorrencia encontrada .";
     }
 }
 // Listar usuários
 listarOcorrencias($pdo);
 ?>