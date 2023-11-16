<?php
session_start();
$v1 = "";
$v2 = "";
$v3 = "";
$v4 = "";
$v5 = "";
$v6 = "";
$v7 = "";
$v8 = "";

// Verifique se a variável de sessão 'v' está definida
if (isset($_SESSION['v1'])) {
  $v1 = $_SESSION['v1'];
}
if (isset($_SESSION['v2'])) {
  $v2 = $_SESSION['v2'];
}
if (isset($_SESSION['v3'])) {
  $v3 = $_SESSION['v3'];
}
if (isset($_SESSION['v4'])) {
  $v4 = $_SESSION['v4'];
}
if (isset($_SESSION['v5'])) {
  $v5 = $_SESSION['v5'];
}
if (isset($_SESSION['v6'])) {
  $v6 = $_SESSION['v6'];
}
if (isset($_SESSION['v7'])) {
  $v7 = $_SESSION['v7'];
}
if (isset($_SESSION['v8'])) {
  $v8 = $_SESSION['v8'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/pag_inicial.css">
  <title>INÍCIO</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
</head>

<body>

  <header>
    <div class="imagem">
      <img src="img/logosembrilho.png" width="50px" height="49px">
    </div>
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
  <div class="subtit"><b>escolha como deseja começar:</b> </div><br>

  <div class="fundo">

    <div class="dupla1">
      <a href="cadastro.html">
        <div id="op1" class="<?php
        if ($v1 == 'v') {
          echo ("opv");
        } else {
          echo ("op1");
        }
        ?>">
          <img class="ajuste" src="img/cadastro1.png" width="70px" margin-left="20px">
          <p><b>CADASTRO <br> DO PACIENTE </b></p>
        </div>
      </a>
      <a href="sinais.sintomas.html">
        <div id="op2" class="<?php
        if ($v2 == 'v') {
          echo ("opv");
        } else {
          echo ("op2");
        }
        ?>">
          <img src="img/paciente.png" width="70px">
          <p><b>SINAIS E <br> SINTOMAS</b></p>
        </div>
      </a>
      <div class="espaco">
        <a href="procedimentos.html">
          <div id="op2" class="<?php
          if ($v2 == 'v') {
            echo ("opv");
          } else {
            echo ("op2");
          }
          ?>">
            <img src="img/paciente.png" width="70px">
            <p><b>PROCEDOMENTOS <br> EFETUADOS</b></p>
          </div>
        </a>


        <a href="anamnese.html">
          <div id="op2" class="<?php
          if ($v2 == 'v') {
            echo ("opv");
          } else {
            echo ("op2");
          }
          ?>">
            <img src="img/anamnese.png" width="70px">
            <p><b>ANAMNESE DA <br> EMERGÊNCIA</b></p>
          </div>
        </a>
      </div>

    </div><br><br><br>

    <div class="dupla1">

      <a href="avaliacao.html">
        <div id="op3" class="<?php
        if ($v3 == 'v') {
          echo ("opv");
        } else {
          echo ("op2");
        }
        ?>">
          <img class="ajuste" src="img/ft 6.png" width="75px">
          <p><b>AVALIAÇÃO <br> GLASGOW </b></p>
        </div>
      </a>
      <a href="tipoOcr.php">
        <div id="op4" class="<?php
        if ($v4 == 'v') {
          echo ("opv");
        } else {
          echo ("op2");
        }
        ?>">
          <img src="img/ft 4.png" width="70px">
          <p><b>TIPO DE <br> OCORRÊNCIA</b></p>
        </div>
      </a>
      <div class="espaco">
        <a href="gestacional.html">
          <div id="op4" class="<?php
          if ($v4 == 'v') {
            echo ("opv");
          } else {
            echo ("op2");
          }
          ?>">
            <img src="img/gestacional.png" width="70px">
            <p><b>ANAMNESE <br> GESTACIONAL</b></p>
          </div>
        </a>

        <a href="avaCinematica.html">
          <div id="op4" class="<?php
          if ($v4 == 'v') {
            echo ("opv");
          } else {
            echo ("op2");
          }
          ?>">
            <img src="img/cinematica.png" width="70px">
            <p><b>AVALIAÇÃO <br> CINEMÁTICA</b></p>
          </div>
        </a>
      </div>
    </div>
    <br><br><br>


    <div class="dupla1">

      <a href="sinaisvitais.html">
        <div id="op2" class="<?php
        if ($v5 == 'v') {
          echo ("opv");
        } else {
          echo ("op2");
        }
        ?>">
          <img src="img/ft 5.png" width="70px">
          <p><b>SINAIS <br> VITAIS</b></p>
        </div>
      </a>
      <a href="problemas.html">
        <div id="op6" class="<?php
        if ($v6 == 'v') {
          echo ("opv");
        } else {
          echo ("op2");
        }
        ?>">
          <img src="img/ft 3.png" width="70px">
          <p><b>PROBLEMAS <br> SUSPEITOS</b></p>
        </div>
      </a>
      <div class="espaco">
        <a href="materiais1.html">
          <div id="op6" class="<?php
          if ($v6 == 'v') {
            echo ("opv");
          } else {
            echo ("op2");
          }
          ?>">
            <img src="img/ft 3.png" width="70px">
            <p><b>MATERIAIS <br> UTILIZADOS</b></p>
          </div>
        </a>

        <a href="problemas.html">
          <div id="op6" class="<?php
          if ($v6 == 'v') {
            echo ("opv");
          } else {
            echo ("op2");
          }
          ?>">
            <img src="img/recusaa.png" width="70px">
            <p><b>TERMO DE <br> RECUSA</b></p>
          </div>
        </a>
      </div>
    </div>


    <br><br><br>
    <div class="dupla9">
      <div id="op7" class="<?php
      if ($v7 == 'v') {
        echo ("opv");
      } else {
        echo ("op2");
      }
      ?>">
        <a href="formaCond.html"> <img src="img/ft 2.png" width="70px"><br>
          <p1><b>FORMA DE <BR> CONDUÇÃO</b></p1>
      </div></a>
      <a href="traumaAdulto.html">
        <div id="op8" class="<?php
        if ($v8 == 'v') {
          echo ("opv");
        } else {
          echo ("op2");
        }
        ?>">
          <img src="img/ft 1.png" width="70px">
          <p><b>LOCALIZAÇÃO <br> DOS TRAUMAS</b> </p>
        </div>
      </a>

      <div class="mensagem">
        Fim da ocorrência!
        
      </div>
      
    </div>
    <br><br><br>




  </div>

</body>

</html>