<?php
    include("conecta.php");
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $codigo = $_POST["codigo"];
    $codigo2 = $_POST["codigo2"];
    $codigo3 = $_POST["codigo3"];
    $codigo4 = $_POST["codigo4"];
    $cpf =$_POST["cpf"];

    if(isset($_POST["inserir"])) {
        $comando = $pdo->prepare("INSERT INTO cadastro (nome, email, CPF, codigo, codigo2, codigo3, codigo4) VALUES('$nome', '$email','$cpf','$codigo','$codigo2','$codigo3','$codigo4')");

        $resultado = $comando->execute();
        header("Location: login.html"); 
   