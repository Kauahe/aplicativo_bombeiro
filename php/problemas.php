<?php
include("conecta.php");
session_start();
$_SESSION["v"]= "v";
   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
   $opcao0=isset($_POST["opcao0"]) ? 1: 0;
   $opcao1=isset($_POST["opcao1"]) ? 1: 0;
   $opcao2=isset($_POST["opcao2"]) ? 1: 0;
   $opcao3=isset($_POST["opcao3"]) ? 1: 0;
   $opcao4=isset($_POST["opcao4"]) ? 1: 0;
   $opcao5=isset($_POST["opcao5"]) ? 1: 0;
   $opcao6=isset($_POST["opcao6"]) ? 1: 0;
   $opcao7=isset($_POST["opcao7"]) ? 1: 0;
   $opcao8=isset($_POST["opcao8"]) ? 1: 0;
   $opcao9=isset($_POST["opcao9"]) ? 1: 0;
   $opcao10=isset($_POST["opcao10"]) ? 1: 0;
   $Outros = $_POST["Outros"];

   // SQL para inserir os dados na tabela do banco de dados
   $sql = "INSERT INTO problemas VALUES (:id, :num_ocorrencia, :op0, :op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :op10, :Outros)";
   $stmt = $pdo->prepare($sql);
   $n=null;
    $stmt->bindParam(':id', $n);
    $stmt->bindParam(':num_ocorrencia', $num_ocorrencia);
    $stmt->bindParam(':op0', $opcao0);
    $stmt->bindParam(':op1', $opcao1);
    $stmt->bindParam(':op2', $opcao2);
    $stmt->bindParam(':op3', $opcao3);
    $stmt->bindParam(':op4', $opcao4);
    $stmt->bindParam(':op5', $opcao5);
    $stmt->bindParam(':op6', $opcao6);
    $stmt->bindParam(':op7', $opcao7);
    $stmt->bindParam(':op8', $opcao8);
    $stmt->bindParam(':op9', $opcao9);
    $stmt->bindParam(':op10', $opcao10);
$stmt->bindParam(':Outros', $Outros);


$stmt->execute();

header("Location:../pag_inicial.php");
?>