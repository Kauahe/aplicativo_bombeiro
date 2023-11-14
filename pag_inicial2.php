<?php
session_start();
$v9="";
$v10="";
$v11="";
$v12="";
$v13="";
$v14="";
$v15="";
$v16="";

// Verifique se a variável de sessão 'v' está definida
if (isset($_SESSION['v9'])) {
    $v9 = $_SESSION['v9']; 
}
if (isset($_SESSION['v10'])) {
  $v10 = $_SESSION['v10'];
}
if (isset($_SESSION['v11'])) {
  $v11 = $_SESSION['v11'];
}
if (isset($_SESSION['v12'])) {
  $v12 = $_SESSION['v12'];
}
if (isset($_SESSION['v13'])) {
  $v13 = $_SESSION['v13'];
}
if (isset($_SESSION['v14'])) {
  $v14 = $_SESSION['v14'];
}
if (isset($_SESSION['v15'])) {
  $v15 = $_SESSION['v15'];
}
if (isset($_SESSION['v16'])) {
  $v16 = $_SESSION['v16'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pag_inicial2.css">
    <title>INÍCIO</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
</head>
<body>
    
    <header>
        <div class="imagem">
            <img src="img/logosembrilho.png" width="50px" height="49px"></div>
            <div class="row">
                <h1>SOS BOMBEIROS</h1>
            </div>
            <div class="row2">
                <h2>NÚCLEO DE OPERAÇÕES AÉREAS E RESGATE</h2>
            </div>     
    </div>
    </header>
    <br><br>
    <div class="tit"> MENU </div>
    <div class="subtit"><b>escolha como  deseja começar:</b> </div><br>
    <div class="dupla1">
        <a href="procedimentos.html">  <div id="op1" 
       
        class="<?php 
          if ($v9 == 'v') {
      echo("opv");
          }
          else{
            echo("op1");
          }
        ?>"
        
        >
            <img class="ajuste" src="img/cadastro1.png" width="70px" margin-left="20px">
            <p><b>PROCEDIMENTOS <br> EFETUADOS </b></p>
        </div></a>
        <a href="anamnese.html"> <div id="op2"class="<?php 
          if ($v10 == 'v') {
      echo("opv");
          }
          else{
            echo("op2");
          }
        ?>">
            <img src="img/anamnese.png" width="60px">
            <p><b>ANAMNESE DA  <br> EMERGÊNCIA</b></p>
        </div></a>
    </div><br><br><br>

    <div class="dupla1">
        <a href="gestacional.html">  <div  id="op3"class="<?php 
          if ($v11 == 'v') {
      echo("opv");
          }
          else{
            echo("op2");
          }
        ?>">
            <img class="ajuste" src="img/gestacional.png" width="80px">
            <p><b>ANAMNESE <br> GESTACIONAL </b></p>
        </div></a>
        <a href="avaCinematica.html"> <div  id="op4"class="<?php 
          if ($v12 == 'v') {
      echo("opv");
          }
          else{
            echo("op2");
          }
        ?>">
            <img src="img/cinematica.png" width="90px">
            <p><b> AVALIAÇÃO<br> CINEMÁTICA</b></p>
        </div></a>
    </div>
    <br><br><br>
    <div class="dupla1">
        <a href="materiais1.html">  <div id="op2" class="<?php 
          if ($v13 == 'v') {
      echo("opv");
          }
          else{
            echo("op2");
          }
        ?>">
            <img src="img/ft 5.png" width="70px">
            <p><b>MATERIAS <br> UTILIZADOS</b></p>
        </div></a>
        <a href=".html"> <div  id="op6"class="<?php 
          if ($v14 == 'v') {
      echo("opv");
          }
          else{
            echo("op2");
          }
        ?>">
            <img src="img/recusaa.png" width="100px">
            <p><b>TERMO DE  <br> RECUSA</b></p>
           
        </div></a>
    </div>
    <br><br><br>
    
           
    </div>
    <br><br><br>
    
        
    
</body>
</html>