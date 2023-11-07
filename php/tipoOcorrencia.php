<?php
include("conecta.php");
session_start();
$_SESSION["v"]= "v";
   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
   $opcao1=isset($_POST["opcao1"])  ? "Causado por animais " : "-";
   $opcao2=isset($_POST["opcao2"])  ? "Com meio de transporte" : "-";
   $opcao3=isset($_POST["opcao3"])  ? "Desmoronamento/Deslizamento" : "-";
   $opcao4=isset($_POST["opcao4"]) ? "Emergência médica" : "-";
   $opcao5=isset($_POST["opcao5"])  ? "Queda de altura 2M" : "-";
   $opcao6=isset($_POST["opcao6"])? "Tentativa de suicídio" : "-";
   $opcao7=isset($_POST["opcao7"])  ? "Queda própria altura " : "-";
   $opcao8=isset($_POST["opcao8"]) ? "Afogamento " : "-";
   $opcao9=isset($_POST["opcao9"]) ?  "Agressão " : "-";
   $opcao10=isset($_POST["opcao10"]) ? "Atropelamento " : "-";
   $opcao11=isset($_POST["opcao11"])  ? "Choque elétrico" : "-";
   $opcao12=isset($_POST["opcao12"])  ? "Desabamento " : "-";
   $opcao13=isset($_POST["opcao13"])  ? "Doméstico " : "-";
   $opcao14=isset($_POST["opcao14"]) ? "Esportivo " : "-";
   $opcao15=isset($_POST["opcao15"]) ? "Intoxicação " : "-";
   $opcao16=isset($_POST["opcao16"]) ? "Queda de bicicleta" : "-";
   $opcao17=isset($_POST["opcao17"])? "Queda de moto " : "-";
   $opcao18=isset($_POST["opcao18"]) ? "Queda nível <2m" : "-";
   $opcao19=isset($_POST["opcao19"]) ? "Trabalho " : "-";
   $opcao20=isset($_POST["opcao20"]) ? "Transferência " : "-";
   
   $sql = "INSERT INTO tipoocr VALUES (:id, :num_ocorrencia, :op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :op10, :op11, :op12, :op13, :op14, :op15, :op16, :op17, :op18, :op19, :op20 )";
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