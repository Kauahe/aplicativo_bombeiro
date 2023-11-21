<?php
include("conecta.php");
session_start();
$_SESSION["v12"]= "v";
   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
    $opcao1 = isset($_POST["opcao1"]) ? "sim" : "";
    $opcao2 = isset($_POST["opcao2"]) ? "não" : "";
    $opcao3 = isset($_POST["opcao3"]) ? "sim" : "";
    $opcao4 = isset($_POST["opcao4"]) ? "não" : "";
    $opcao5 = isset($_POST["opcao5"]) ? "sim" : "";
    $opcao6 = isset($_POST["opcao6"]) ? "não" : "";
    $opcao7 = isset($_POST["opcao7"]) ? "sim" : "";
    $opcao8 = isset($_POST["opcao8"]) ? "não" : "";
    $opcao9 = isset($_POST["opcao9"]) ? "sim" : "";
    $opcao10 = isset($_POST["opcao10"]) ? "não" : "";
    $opcao11 = isset($_POST["opcao11"]) ? "sim" : "";
    $opcao12 = isset($_POST["opcao12"]) ? "não" : "";
    $opcao13 = isset($_POST["opcao13"]) ? "sim" : "";
    $opcao14 = isset($_POST["opcao14"]) ? "não" : "";

    $sql = "INSERT INTO avacinema VALUES (:id, :num_ocorrencia, :op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :op10, :op11, :op12, :op13, :op14)";
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
    
    if ($stmt->execute()) {
        $_SESSION["ocorrencia_cadastrada_cinematica"] = true;
        echo '<script>alert("Cadastro realizado com sucesso!"); window.location.href="../pag_inicial.php";</script>';
        
    } else {
        // Defina a resposta como erro e exiba informações de erro
        echo '<script>alert("Erro ao cadastrar: ' . $stmt->errorInfo()[2] . '");</script>';
    }
?>