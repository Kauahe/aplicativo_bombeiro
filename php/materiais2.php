<?php
include("conecta.php");
session_start();
$_SESSION["v6"]= "v";
   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
   
   $opcao1=isset($_POST["opcao1"]) ? "Manta Aluminizada" : "-";
   $opcao2=isset($_POST["opcao2"]) ? " Pás do DEA" : "-";
   $opcao3=isset($_POST["opcao3"]) ? "Sonda de Aspiração" : "-";
   $opcao4=isset($_POST["opcao4"]) ? "Soro Fisiológico" : "-";
   $opcao5=isset($_POST["opcao5"]) ? "Talas TAP" : "-";
   $opcao6=isset($_POST["opcao6"]) ? "gestante" : "-";
   $opcao7=isset($_POST["opcao7"]) ? "hemor. excessiva" : "-";
   $opcao8=isset($_POST["opcao8"]) ? "áreo" : "-";
   $opcao9=isset($_POST["opcao9"]) ? "clínico" : "-";
   $opcao10=isset($_POST["opcao10"]) ? "emergencial" : "-";
   $Outros = $_POST["Outros"];

   $sql = "INSERT INTO problemas VALUES (:id, :num_ocorrencia, :op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :op10, :Outros)";
   $stmt = $pdo->prepare($sql);
   $n=null;
    $stmt->bindParam(':id', $n);
    $stmt->bindParam(':num_ocorrencia', $num_ocorrencia);
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