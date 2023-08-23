<?php

  session_start();
 
  $codigo = $_POST["codigo"];
  $codigo2 = $_POST["codigo2"];
  $codigo3 = $_POST["codigo3"];
  $codigo4 = $_POST["codigo4"];
  
  include("conecta.php");
  
  $query = "SELECT * FROM cadastro WHERE codigo = :codigo and codigo2 = :codigo2 and codigo3 = :codigo3 and codigo4 = :codigo4";
  $statement = $pdo->prepare($query);
  $statement->bindParam(":codigo", $codigo);
  $statement->bindParam(":codigo2", $codigo2);
  $statement->bindParam(":codigo3", $codigo3);
  $statement->bindParam(":codigo4", $codigo4);
  $statement->execute();
  
  $matchingCodes = $statement->fetchAll(PDO::FETCH_ASSOC);
  
  if (count($matchingCodes) > 0) {
      // Redirecionar para a página desejada
      header("Location:../animacao.html");
      exit();
  } else {
      // Exibir mensagem de erro
      echo "Os códigos estão incorretos.";
  }
  ?>