<?php
session_start();

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
  <script src="jquery.js"></script>
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

  <div class="tit"> PÁGINA INICIAL </div>
  <div class="subtit"><b>REGISTRAR OCORRÊNCIA</b> </div><br>

  <div class="fundo">

    <div class="dupla1">
      <a href="cadastro.html">
        <div id="op1" class="<?php echo (isset($_SESSION['ocorrencia_cadastrada_cadastro'])) ? 'opv' : 'op1'; ?>">
          <img class="ajuste" src="img/cadastro1.png" width="70px" margin-left="20px">
          <p><b>CADASTRO <br> DO PACIENTE </b></p>
        </div>
      </a>
      <a href="sinais.sintomas.html">
        <div id="op2" class="<?php echo (isset( $_SESSION['ocorrencia_cadastrada_sinaisSintomas'])) ? 'opv' : 'op1'; ?>">
          <img src="img/paciente.png" width="70px">
          <p><b>SINAIS E <br> SINTOMAS</b></p>
        </div>
      </a>

    </div><br><br><br>

    <div class="dupla1">

      <a href="avaliacao.html">
        <div id="op3" class="<?php echo (isset($_SESSION['ocorrencia_cadastrada_glasgow'])) ? 'opv' : 'op1'; ?>">
          <img class="ajuste" src="img/ft 6.png" width="75px">
          <p><b>AVALIAÇÃO <br> GLASGOW </b></p>
        </div>
      </a>
      <a href="tipoOcr.php">
        <div id="op4" class="<?php echo (isset($_SESSION['ocorrencia_cadastrada_tipoOcr'])) ? 'opv' : 'op1'; ?>">
          <img src="img/ft 4.png" width="70px">
          <p><b>TIPO DE <br> OCORRÊNCIA</b></p>
        </div>
      </a>

    </div>
    <br><br><br>
    <div class="dupla1">

      <a href="sinaisvitais.html">
        <div id="op2" class="<?php echo (isset($_SESSION['ocorrencia_cadastrada_vitais'])) ? 'opv' : 'op1'; ?>">
          <img src="img/ft 5.png" width="70px">
          <p><b>SINAIS <br> VITAIS</b></p>
        </div>
      </a>
      <a href="problemas.html">
        <div id="op6" class="<?php echo (isset($_SESSION['ocorrencia_cadastrada_problemas'])) ? 'opv' : 'op1'; ?>">
          <img src="img/ft 3.png" width="70px">
          <p><b>PROBLEMAS <br> SUSPEITOS</b></p>
        </div>
      </a>
    </div>

    <br><br><br>
    <div class="dupla1">
      <div id="op7" class="<?php echo (isset($_SESSION['ocorrencia_cadastrada_cond'])) ? 'opv' : 'op1'; ?>">
        <a href="formaCond.html"> <img src="img/ft 2.png" width="70px"><br>
          <p1><b>FORMA DE <BR> CONDUÇÃO</b></p1>
      </div></a>
      <a href="traumaAdulto.html">
        <div id="op8" class="<?php echo (isset($_SESSION['ocorrencia_cadastrada_trauma'])) ? 'opv' : 'op1'; ?>">
          <img src="img/ft 1.png" width="70px">
          <p><b>LOCALIZAÇÃO <br> DOS TRAUMAS</b> </p>
        </div>
      </a>
        
      </div>
    </div>
    <br><br><br>
<div class="dupla1">
        <a href="procedimentos.html">
          <div id="op2" class="<?php echo (isset($_SESSION['ocorrencia_cadastrada_procedimentos'])) ? 'opv' : 'op1'; ?>">
            <img src="img/paciente.png" width="70px">
            <p><b>PROCEDIMENTOS <br> EFETUADOS</b></p>
          </div>
        </a>

        <a href="anamnese.html">
          <div id="op2" class="<?php echo (isset($_SESSION['ocorrencia_cadastrada_anamnese'])) ? 'opv' : 'op1'; ?>">
            <img src="img/anamnese.png" width="70px">
            <p><b>ANAMNESE DA <br> EMERGÊNCIA</b></p>
          </div>
        </a>
  </div>   <br> <br> <br>
        <div class="dupla1">
        <a href="gestacional.html">
          <div id="op4" class="<?php echo (isset($_SESSION['ocorrencia_cadastrada_gestacional'])) ? 'opv' : 'op1'; ?>">
            <img src="img/gestacional.png" width="70px">
            <p><b>ANAMNESE <br> GESTACIONAL</b></p>
          </div>
        </a>

        <a href="avaCinematica.html">
          <div id="op4" class="<?php echo (isset($_SESSION['ocorrencia_cadastrada_cinematica'])) ? 'opv' : 'op1'; ?>">
            <img src="img/cinematica.png" width="70px">
            <p><b>AVALIAÇÃO <br> CINEMÁTICA</b></p>
          </div>
        </a>
      </div>
    </div>
      </div> <br><br><br>
      <div class="dupla1">
        <a href="materiais1.html">
          <div id="op6" class="<?php echo (isset($_SESSION['ocorrencia_cadastrada_materiais'])) ? 'opv' : 'op1'; ?>">
            <img src="img/ft 3.png" width="70px">
            <p><b>MATERIAIS <br> UTILIZADOS</b></p>
          </div>
        </a>

        <a href="termos.html">
          <div id="op6" class="<?php echo (isset($_SESSION['ocorrencia_cadastrada_termos'])) ? 'opv' : 'op1'; ?>">
            <img src="img/recusaa.png" width="70px">
            <p><b>TERMO DE <br> RECUSA</b></p>
          </div>
        </a>
      </div>

  </div>
  <<div class="btt">
    <button id="comprar" onclick="Comprar()" class="confirmaPAG">
        <b>
            <span id="confirm">CONFIRMAR</span>
        </b>
        <img class="img_ok" id="img_ok" src="img/correto.pgn">
    </button>
</div>
</body>
</html>
<script>
    let comprar = document.getElementById('comprar'); // Define the variable 'comprar'

    function Comprar() {
        $("#comprar").animate({ height: "20px" }, 1000);
        $("#confirm").animate({ opacity: "0" }, 500);
        $("#comprar").animate({ width: "280px", borderRadius: "50px" }, 1000, Imagem);
        $("#comprar").animate({ height: "60px", width: "60px", borderRadius: "30px" }, 700);
        comprar.style.backgroundSize = "100%";
        comprar.style.borderColor = "white";
    }

    function Imagem() {
        $("#img_ok").animate({ opacity: "1" }, 1000, Sair);
    }

    function Sair() {
        window.open("index.html", "_self");
    }
</script>