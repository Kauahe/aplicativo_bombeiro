<?php
include("conecta.php");
session_start();
$_SESSION["v6"]= "v";
   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
   $opcao1=isset($_POST["opcao1"]) ? "Base do estabiliza" : "-";
   $opcao2=isset($_POST["opcao2"]) ? "Colar" : "-";
   $opcao3=isset($_POST["opcao3"]) ? "N" : "-";
   $qntd1 = $_POST["qntd1"];
   $opcao4=isset($_POST["opcao4"]) ? "PP" : "-";
   $qntd2 = $_POST["qntd2"];
   $opcao5=isset($_POST["opcao5"]) ? "P" : "-";
   $qntd3 = $_POST["qntd3"];
   $opcao6=isset($_POST["opcao6"]) ? "M" : "-";
   $qntd3 = $_POST["qntd4"];
   $Outros = $_POST["Outros"];


   $sql = "INSERT INTO materiais3 VALUES (:id, :num_ocorrencia, :op1, :qntd1, :op2, :op3, :op4, :op5, :op6, :op7, :qntd2, :op8, :qntd3, :op9, :op10, :op11, :op12, :qntd4, :op13, :qntd5)";
   $stmt = $pdo->prepare($sql);
   $n = null;
   $stmt->bindParam(':id', $n);
   $stmt->bindParam(':num_ocorrencia', $num_ocorrencia);
   $stmt->bindParam(':op1', $opcao1);
   $stmt->bindParam(':qntd1', $qntd1);
   $stmt->bindParam(':op2', $opcao2);
   $stmt->bindParam(':op3', $opcao3);
   $stmt->bindParam(':op4', $opcao4);
   $stmt->bindParam(':op5', $opcao5);
   $stmt->bindParam(':op6', $opcao6);
   $stmt->bindParam(':op7', $opcao7);
   $stmt->bindParam(':qntd2', $qntd2);
   $stmt->bindParam(':op8', $opcao8);
   $stmt->bindParam(':qntd3', $qntd3);
   $stmt->bindParam(':op9', $opcao9);
   $stmt->bindParam(':op10', $opcao10);
   $stmt->bindParam(':op11', $opcao11);
   $stmt->bindParam(':op12', $opcao12);
   $stmt->bindParam(':qntd4', $qntd4);
   $stmt->bindParam(':op13', $opcao13);
   $stmt->bindParam(':qntd5', $qntd5);
   $stmt->execute();
   
$stmt->execute();

header("Location:../materiais4.html");
?>