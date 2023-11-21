<?php
include("conecta.php");
session_start();

   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
   $opcao1=isset($_POST["opcao1"])  ? "Espontânea" : "";
   $opcao2=isset($_POST["opcao2"])  ? "Comando Verbal" : "";
   $opcao3=isset($_POST["opcao3"])  ? "Estímulo doloroso" : "";
   $opcao4=isset($_POST["opcao4"]) ? "Nenhuma" : "";
   $opcao5=isset($_POST["opcao5"])  ? "Orientado" : "";
   $opcao6=isset($_POST["opcao6"])? "Confuso" : "";
   $opcao7=isset($_POST["opcao7"])  ? "Palavras inapropriadas" : "";
   $opcao8=isset($_POST["opcao8"]) ? "Palavras incompreensíveis" : "";
   $opcao9=isset($_POST["opcao9"]) ?  "Nenhuma " : "";
   $opcao10=isset($_POST["opcao10"]) ? "Obedece comandos " : "";
   $opcao11=isset($_POST["opcao11"])  ? "Localiza dor" : "";
   $opcao12=isset($_POST["opcao12"])  ? "Movimento de retirada " : "";
   $opcao13=isset($_POST["opcao13"])  ? "Flexão anormal" : "";
   $opcao14=isset($_POST["opcao14"]) ? "Extensão anormal " : "";
   $opcao15=isset($_POST["opcao15"]) ? "Nenhuma" : "";
   $opcao16=$_POST["opcao16"];
   
   $sql = "INSERT INTO maior5 VALUES (:id, :num_ocorrencia, :op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :op10, :op11, :op12, :op13, :op14, :op15, :op16 )";
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
    
  
    if ($stmt->execute()) {
        // Defina a resposta como sucesso
        echo '<script>alert("Cadastro realizado com sucesso!"); window.location.href="../pag_inicial.php";</script>';
        $_SESSION["ocorrencia_cadastrada_glasgow"] = true;
    } else {
        // Defina a resposta como erro e exiba informações de erro
        echo '<script>alert("Erro ao cadastrar: ' . $stmt->errorInfo()[2] . '");</script>';
    }
?>