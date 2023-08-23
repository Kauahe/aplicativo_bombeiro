<?php

  session_start();
 
  $codigo = $_POST["codigo"];
  $codigo2 = $_POST["codigo2"];
  $codigo3 = $_POST["codigo3"];
  $codigo4 = $_POST["codigo4"];
  
  include("conecta.php");
  
  $query = "SELECT * FROM Bombeiros_cad.cadastro WHERE codigo = :codigo OR codigo2 = :codigo OR codigo3 = :codigo OR codigo4 = :codigo";
  $statement = $pdo->prepare($query);
  $statement->bindParam(":codigo", $codigo);
  $statement->bindParam(":codigo2", $codigo2);
  $statement->bindParam(":codigo3", $codigo3);
  $statement->bindParam(":codigo4", $codigo4);
  $statement->execute();
  
  $matchingCodes = $statement->fetchAll(PDO::FETCH_ASSOC);
  
  if (count($matchingCodes) == 4) {
      // Redirecionar para a página desejada
      header("Location: localhost/aplicativo_bombeiro/pag_inicial.html");
      exit();
  } else {
      // Exibir mensagem de erro
      echo "Os códigos estão incorretos.";
  }
  ?>