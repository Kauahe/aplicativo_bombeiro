<?php
include("conecta.php");
session_start();
$_SESSION["v"]= "v";
   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
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
   $opcao11=isset($_POST["opcao11"]) ? 1: 0;
   $opcao12=isset($_POST["opcao12"]) ? 1: 0;
   $opcao13=isset($_POST["opcao13"]) ? 1: 0;
   $opcao14=isset($_POST["opcao14"]) ? 1: 0;
   $opcao15=isset($_POST["opcao15"]) ? 1: 0;
   $opcao16=isset($_POST["opcao16"]) ? 1: 0;
   $opcao17=isset($_POST["opcao17"]) ? 1: 0;
   $opcao18=isset($_POST["opcao18"]) ? 1: 0;
   $opcao19=isset($_POST["opcao19"]) ? 1: 0;
   $opcao20=isset($_POST["opcao20"]) ? 1: 0;
   $opcao21=isset($_POST["opcao21"]) ? 1: 0;
   
   $sql = "INSERT INTO tipoocr VALUES (:id, :num_ocorrencia, :op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :op10, :op11, :op12, :op13, :op14, :op15, :op16, :op17, :op18, :op19, :op20, :op21  )";
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
    $stmt->bindParam(':op21', $opcao21);
  
    $stmt->execute();
    header("pag_inicial.php")

?>