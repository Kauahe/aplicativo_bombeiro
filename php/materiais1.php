<?php
include("conecta.php");
session_start();
$_SESSION["v6"]= "v";
   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
   $opcao1=isset($_POST["opcao1"]) ? "Ataduras" : "-";
   $opcao2=isset($_POST["opcao2"]) ? "8" : "-";
   $opcao3=isset($_POST["opcao3"]) ? "12" : "-";
   $opcao4=isset($_POST["opcao4"]) ? "20" : "-";
   $qntd1 = $_POST["qntd1"];
   $opcao5=isset($_POST["opcao5"]) ? "Cateter tipo óculos" : "-";
   $qntd2 = $_POST["qntd2"];
   $opcao6=isset($_POST["opcao6"]) ? "Compressa comum" : "-";
   $qntd3 = $_POST["qntd3"];
   $opcao7=isset($_POST["opcao7"]) ? "Kit's" : "-";
   $opcao8=isset($_POST["opcao8"]) ? "H" : "-";
   $opcao9=isset($_POST["opcao9"]) ? "P" : "-";
   $opcao10=isset($_POST["opcao10"]) ? "Q" : "-";
   $qntd4 = $_POST["qntd4"];
   $opcao11=isset($_POST["opcao11"]) ? "Luvas descartáveis (pares)" : "-";
   $qntd5 = $_POST["qntd5"];
   $opcao12=isset($_POST["opcao12"]) ? "Máscara descartável" : "-";
   $qntd6 = $_POST["qntd6"];

   $sql = "INSERT INTO materiais1 VALUES (:id, :num_ocorrencia, :op1, :op2, :op3, :op4, :qntd1, :op5, :qntd2, :op6, :qntd3, :op7, :op8, :op9, :op10, :qntd4, :op11, :qntd5, :op12, :qntd6)";
   $stmt = $pdo->prepare($sql);
   $n=null;
    $stmt->bindParam(':id', $n);
    $stmt->bindParam(':num_ocorrencia', $num_ocorrencia);
    $stmt->bindParam(':op1', $opcao1);
    $stmt->bindParam(':op2', $opcao2);
    $stmt->bindParam(':op3', $opcao3);
    $stmt->bindParam(':op4', $opcao4);
    $stmt->bindParam(':qntd1', $qntd1);
    $stmt->bindParam(':op5', $opcao5);
    $stmt->bindParam(':qntd2', $qntd2);
    $stmt->bindParam(':op6', $opcao6);
    $stmt->bindParam(':qntd3', $qntd3);
    $stmt->bindParam(':op7', $opcao7);
    $stmt->bindParam(':op8', $opcao8);
    $stmt->bindParam(':op9', $opcao9);
    $stmt->bindParam(':op10', $opcao10);
    $stmt->bindParam(':qntd4', $qntd4);
    $stmt->bindParam(':op11', $opcao11);
    $stmt->bindParam(':qntd5', $qntd5);
    $stmt->bindParam(':op12', $opcao12);
    $stmt->bindParam(':qntd6', $qntd6);

    $stmt->execute();

header("Location:../materiais2.html");
?>