<?php
include("conecta.php");
session_start();

$num_ocorrencia=  $_SESSION["nrOcorrencia"];
$local1 = $_POST['local1'];
$local2 = $_POST['local2'];
$local3 = $_POST['local3'];
$local4 = $_POST['local4'];

$lado1 = $_POST['lado1'];
$lado2 = $_POST['lado2'];
$lado3 = $_POST['lado3'];
$lado4 = $_POST['lado4'];

$face1 = $_POST['face1'];
$face2 = $_POST['face2'];
$face3 = $_POST['face3'];
$face4 = $_POST['face4'];

$opcao1 = $_POST['opcao1'];
$opcao2 = $_POST['opcao2'];
$opcao3 = $_POST['opcao3'];
$opcao4 = $_POST['opcao4'];


$sql = "INSERT INTO traumaAdulto ( nrOcorrencia, local1, local2, local3, local4, lado1, lado2, lado3, lado4, face1, face2, face3, face4, opcao1, opcao2, opcao3, opcao4) 
        VALUES (:num_ocorrencia, :local1, :local2, :local3, :local4, :lado1, :lado2, :lado3, :lado4, :face1, :face2, :face3, :face4, :opcao1, :opcao2, :opcao3, :opcao4)";

// Prepara a consulta
$consulta = $pdo->prepare($sql);

// Define os parâmetros
$consulta->bindParam(':num_ocorrencia', $num_ocorrencia);
$consulta->bindParam(':local1', $local1);
$consulta->bindParam(':local2', $local2);
$consulta->bindParam(':local3', $local3);
$consulta->bindParam(':local4', $local4);
$consulta->bindParam(':lado1', $lado1);
$consulta->bindParam(':lado2', $lado2);
$consulta->bindParam(':lado3', $lado3);
$consulta->bindParam(':lado4', $lado4);
$consulta->bindParam(':face1', $face1);
$consulta->bindParam(':face2', $face2);
$consulta->bindParam(':face3', $face3);
$consulta->bindParam(':face4', $face4);
$consulta->bindParam(':opcao1', $opcao1);
$consulta->bindParam(':opcao2', $opcao2);
$consulta->bindParam(':opcao3', $opcao3);
$consulta->bindParam(':opcao4', $opcao4);

// Executa a consulta
$executado = $consulta->execute();

// Verifica se a consulta foi executada com sucesso
if ($executado) {
    $_SESSION["ocorrencia_cadastrada_trauma"] = true;
    header("Location:../pag_inicial.php"); // Redireciona para a página inicial após o sucesso
} else {
    echo "Erro ao inserir registro.";
    print_r($pdo->errorInfo()); // Exibe informações sobre o erro, se houver.
}
?>
