<?php
include("conecta.php");
session_start();

   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
   $opcao1=isset($_POST["opcao1"]) ? "Base do estabiliza" : "";
   $qntd1 = $_POST["qntd1"];
   $opcao2=isset($_POST["opcao2"]) ? "Colar" : "";
   $opcao3=isset($_POST["opcao3"]) ? "N" : "";
   $opcao4=isset($_POST["opcao4"]) ? "PP" : "";
   $opcao5=isset($_POST["opcao5"]) ? "P" : "";
   $opcao6=isset($_POST["opcao6"]) ? "M" : "";
   $opcao7=isset($_POST["opcao7"]) ? "G" : "";
   $qntd2 = $_POST["qntd2"];
   $opcao8=isset($_POST["opcao8"]) ? "Coxins estabiliza" : "";
   $qntd3 = $_POST["qntd3"];
   $opcao9=isset($_POST["opcao9"]) ? "KED" : "";
   $opcao10=isset($_POST["opcao10"]) ? "Adulto" : "";
   $opcao11=isset($_POST["opcao11"]) ? "Criança" : "";
   $opcao12=isset($_POST["opcao12"]) ? "Q" : "";
   $qntd4 = $_POST["qntd4"];
   $opcao13=isset($_POST["opcao13"]) ? "Maca rígida" : "";
   $qntd5 = $_POST["qntd5"];

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
   
   if ($stmt->execute()) {
      // Defina a resposta como sucesso
      echo '<script>alert("Cadastro realizado com sucesso!"); window.location.href="../materiais4.html";</script>';
      $_SESSION["v13"]= "v";
  } else {
      // Defina a resposta como erro e exiba informações de erro
      echo '<script>alert("Erro ao cadastrar: ' . $stmt->errorInfo()[2] . '");</script>';
  }  
?>