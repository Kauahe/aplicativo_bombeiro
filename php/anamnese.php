<?php
include("conecta.php");
session_start();
$_SESSION["v4"]= "v";
   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
   $opcao1 = $_POST["opcao1"];
   $opcao2=isset($_POST["opcao2"])  ? "Sim" : "-";
   $opcao3=isset($_POST["opcao3"])  ? "Não" : "-";
   $opcao4 = $_POST["opcao4"];
   $opcao5=isset($_POST["opcao5"])  ? "Sim" : "-";
   $opcao6=isset($_POST["opcao6"])? "Não" : "-";
   $opcao7 = $_POST["opcao7"];
   $opcao8=isset($_POST["opcao8"]) ? "Sim " : "-";
   $opcao9=isset($_POST["opcao9"]) ?  "Não " : "-";
   $opcao10 = $_POST["opcao10"];
   $opcao11=isset($_POST["opcao11"])  ? "Sim" : "-";
   $opcao12=isset($_POST["opcao12"])  ? "Não " : "-";
   $opcao13 = $_POST["opcao13"];
   $opcao14=isset($_POST["opcao14"]) ? "Sim " : "-";
   $opcao15=isset($_POST["opcao15"]) ? "Não " : "-";
   $opcao16 = $_POST["opcao16"];
  
   
   $sql = "INSERT INTO anamnese VALUES (:id, :num_ocorrencia, :op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :op10, :op11, :op12, :op13, :op14, :op15, :op16)";
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
    $stmt->bindParam(':op17', $opcao17);
    $stmt->bindParam(':op18', $opcao18);
    $stmt->bindParam(':op19', $opcao19);
    $stmt->bindParam(':op20', $opcao20);
    
  
    $stmt->execute();
    
    header("Location:../pag_inicial.php");

?>