<?php
include("conecta.php");
session_start();
$_SESSION["v"]= "v";
   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
   $opcao1=isset($_POST["opcao1"])  ? "Deitada " : "-";
   $opcao2=isset($_POST["opcao2"])  ? "Semi-deitada" : "-";
   $opcao3=isset($_POST["opcao3"])  ? "Sentada" : "-";
   $opcao4=isset($_POST["opcao4"]) ? "Critico" : "-";
   $opcao5=isset($_POST["opcao5"])  ? "Instável" : "-";
   $opcao6=isset($_POST["opcao6"])? "Pontencialmente instável" : "-";
   $opcao7=isset($_POST["opcao7"])  ? "Estável " : "-";
   $opcao8=isset($_POST["opcao8"]) ? "Parto emergencial " : "-";
   $opcao9=isset($_POST["opcao9"]) ?  "Gestante " : "-";
   $opcao10=isset($_POST["opcao10"]) ? "Hemor.excessiva " : "-";
   $opcao11 = $_POST["opcao11"];
   $opcao12 = $_POST["opcao12"];
   $opcao13 = $_POST["opcao13"];
   $opcao14 = $_POST["opcao14"];
   $opcao15 = $_POST["opcao15"];
   $opcao16 = $_POST["opcao16"];
   
   
   $sql = "INSERT INTO formaCond VALUES (:id, :num_ocorrencia, :op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :op10, :op11, :op12, :op13, :op14, :op15, :op16)";
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
    $stmt->bindParam(':op11', $opcao11);
    $stmt->bindParam(':op12', $opcao12);
    $stmt->bindParam(':op13', $opcao13);
    $stmt->bindParam(':op14', $opcao14);
    $stmt->bindParam(':op15', $opcao15);
    $stmt->bindParam(':op16', $opcao16);
   
  
    $stmt->execute();
    
    header("Location:../pag_inicial.php");

?>