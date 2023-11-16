<?php
include("conecta.php");
session_start();
$_SESSION["v6"]= "v";
   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
   $opcao1=isset($_POST["opcao1"]) ? "Manta Aluminizada" : "-";
   $qntd1 = $_POST["qntd1"];
   $opcao2=isset($_POST["opcao2"]) ? " Pás do DEA" : "-";
   $qntd2 = $_POST["qntd2"];
   $opcao3=isset($_POST["opcao3"]) ? "Sonda de Aspiração" : "-";
   $qntd3 = $_POST["qntd3"];
   $opcao4=isset($_POST["opcao4"]) ? "Soro Fisiológico" : "-";
   $qntd4 = $_POST["qntd4"];
   $opcao5=isset($_POST["opcao5"]) ? "Talas TAP" : "-";
   $opcao6=isset($_POST["opcao6"]) ? "P" : "-";
   $opcao7=isset($_POST["opcao7"]) ? "G" : "-";
   $qntd5 = $_POST["qntd5"];
   $Outros = $_POST["Outros"];

   $sql = "INSERT INTO materiais2 VALUES (:id, :num_ocorrencia, :op1, :qntd1, :op2, :qntd2, :op3, :qntd3, :op4, :qntd4, :op5, :op6, :op7, :qntd5, :Outros)";
   $stmt = $pdo->prepare($sql);
   $n=null;
    $stmt->bindParam(':id', $n);
    $stmt->bindParam(':num_ocorrencia', $num_ocorrencia);
    $stmt->bindParam(':op1', $opcao1);
    $stmt->bindParam(':qntd1', $qntd1);
    $stmt->bindParam(':op2', $opcao2);
    $stmt->bindParam(':qntd2', $qntd2);
    $stmt->bindParam(':op3', $opcao3);
    $stmt->bindParam(':qntd3', $qntd3);
    $stmt->bindParam(':op4', $opcao4);
    $stmt->bindParam(':qntd4', $qntd4);
    $stmt->bindParam(':op5', $opcao5);
    $stmt->bindParam(':op6', $opcao6);
    $stmt->bindParam(':op7', $opcao7);
    $stmt->bindParam(':qntd5', $qntd5);
    $stmt->bindParam(':Outros', $Outros);
$stmt->execute();

header("Location:../pag_inicial.php");
?>