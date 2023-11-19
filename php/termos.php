<?php
include("conecta.php");
session_start();
   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
   $opcao1=$_POST["opcao1"];
   $opcao2=$_POST["opcao2"];
   $opcao3=$_POST["opcao3"];
   $opcao4=$_POST["opcao4"];
   
   $sql = "INSERT INTO termos VALUES (:id, :num_ocorrencia, :op1, :op2, :op3, :op4)";
    $stmt = $pdo->prepare($sql);
   $n=null;
    $stmt->bindParam(':id', $n);
    $stmt->bindParam(':num_ocorrencia', $num_ocorrencia);
    $stmt->bindParam(':op1', $opcao1);
    $stmt->bindParam(':op2', $opcao2);
    $stmt->bindParam(':op3', $opcao3);
    $stmt->bindParam(':op4', $opcao4);
  
    $stmt->execute();   
    header("Location: ../");

?>