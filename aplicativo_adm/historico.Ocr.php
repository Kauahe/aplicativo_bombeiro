<?php
session_start();

if (isset($_GET['num_ocorrencia'])) {
    $numOcorrencia = $_GET['num_ocorrencia'];

include('../php/conecta.php');

$comando = $pdo->prepare("SELECT * FROM cadastropac where num_ocorrencia='$numOcorrencia'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $nome=$linhas ["nome_pac"];
    $data_ocr =$linhas["data_ocr"];
    $nome_hospital =$linhas["nome_hospital"];
    $nome =$linhas["nome_pac"];
    $idade =$linhas["idade_pac"];
    $cpf =$linhas["cpf"];
    $telefone =$linhas["telefone_pac"];
    $nome_acomp =$linhas["nome_acomp"];
    $idade_acomp =$linhas["idade_acomp"];
    $local =$linhas["local_ocr"];
  
}
$comando = $pdo->prepare("SELECT * FROM sinais_sintomas where nrOcorrencia='$numOcorrencia'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

 $opcao1 =$linhas["opcao1"]; 
 $opcao2 =$linhas["opcao2"]; 
 $opcao3 =$linhas["opcao3"]; 
 $opcao4 =$linhas["opcao4"]; 
 $opcao5 =$linhas["opcao5"]; 
 $opcao6 =$linhas["opcao6"]; 
 $opcao7 =$linhas["opcao7"]; 
 $opcao8 =$linhas["opcao8"]; 
 $opcao9 =$linhas["opcao9"]; 
 $opcao10 =$linhas["opcao10"];
 $opcao11 =$linhas["opcao11"];
 $opcao12 =$linhas["opcao12"];
 $opcao13 =$linhas["opcao13"];
 $opcao14 =$linhas["opcao14"];
 $opcao15 =$linhas["opcao15"];
 $opcao16 =$linhas["opcao16"];
 $opcao17 =$linhas["opcao17"];
 $opcao18 =$linhas["opcao18"];
 $opcao19 =$linhas["opcao19"];
 $opcao20 =$linhas["opcao20"];
 $opcao21 =$linhas["opcao21"];
 $opcao22 =$linhas["opcao22"];
 $opcao23 =$linhas["opcao23"];
 $opcao24 =$linhas["opcao24"];
 $opcao25 =$linhas["opcao25"];
 $opcao26 =$linhas["opcao26"];
 $opcao27 =$linhas["opcao27"];
 $opcao28 =$linhas["opcao28"];
 $opcao29 =$linhas["opcao29"];
 $opcao30 =$linhas["opcao30"];
 $opcao31 =$linhas["opcao31"];
 $opcao32 =$linhas["opcao32"];
 $opcao33 =$linhas["opcao33"];
 $opcao34 =$linhas["opcao34"];
 $opcao35 =$linhas["opcao35"];
 $opcao36 =$linhas["opcao36"];
 $opcao37 =$linhas["opcao37"];
 $opcao38 =$linhas["opcao38"];
 $opcao39 =$linhas["opcao39"];
 $opcao40 =$linhas["opcao40"];
 $opcao41 =$linhas["opcao41"];
 $opcao42 =$linhas["opcao42"];
 $opcao43 =$linhas["opcao43"];
 $opcao44 =$linhas["opcao44"];
 $opcao45 =$linhas["opcao45"];
 $opcao46 =$linhas["opcao46"];
 $opcao47 =$linhas["opcao47"];
 $opcao48 =$linhas["opcao48"];
 $opcao49 =$linhas["opcao49"];
 $opcao50 =$linhas["opcao50"];
 $opcao51 =$linhas["opcao51"];
 $opcao52 =$linhas["opcao52"];
 $opcao53 =$linhas["opcao53"];
 $opcao54 =$linhas["opcao54"];
 $opcao55 =$linhas["opcao55"];
 $opcao56 =$linhas["opcao56"];;
 $opcao57 =$linhas["opcao57"];

  
}

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO Do BOMBEIRO</title>
    <link rel="stylesheet" href="css/historico.Ocr.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
</head>

<body>

<header>
        <div class="imagem">
            <img src="../img/logosembrilho.png" width="60px" height="60px">
        </div>
       <div class="titulo"></div>
        <a href="adm.php">
            <div class="opcao1"> <b>VOLTAR</b></div>
        </a>
    </header>
    <div class="preto">INFORMAÇÕES PESSOAIS DO PACIENTE</div>
    <div class="borda">
    <div class="div1"><BR>
            <div class="minitexto">NOME DO PACIENTE:</div> 
            <input type="text" name="nome_pac" value="<?php if ($nome==""){}else echo $nome ?>" class="text"><button class="alterar">⚙️</button>

            <BR><BR><div class="minitexto">IDADE DO PACIENTE:</div>
            <input type="number"   value="<?php if ($idade==""){}else echo $idade ?>" name="idade_pac" class="text" readonly><button class="alterar2">⚙️</button><BR><BR>
        </div>
            <div class="div2"><BR>
                <div class="minitexto">RG/CPF:</div>
                <input max="14" class="text"  value="<?php if ($cpf==""){}else echo $cpf ?>" type="text" id="cpf" name="cpf" onkeyup="ValidarCPF()" ;><button class="alterar">⚙️</button>
                <BR><BR>

                <div class="minitexto">FONE:</div>
                <input max="14" class="text" type="text" id="telefone_pac"  value="<?php if ($telefone==""){}else echo $telefone ?>" name="telefone_pac"
                    onkeyup="ValidarTelefone()" ;><button class="alterar">⚙️</button>
                <BR>
                <BR </div>
            </div>
            <div class="div3"><BR>
                <div class="minitexto">NOME DO HOSPITAL::</div>
                <input type="text" name="nome_hospital"  value="<?php if ($nome_hospital==""){}else echo $nome_hospital ?>" class="text"> <BR><BR>

                    <div class="minitexto">DATA DO INCIDENTE:</div>
                    <input type="date"  value="<?php if ($data_ocr==""){}else echo $data_ocr ?>" name="data_ocr" class="data"><BR><BR>
                <BR>
                <BR </div>
        </div>
    </div>
            <div class="row">
                <div class="collum">
                    <div class="preto2">INFORMAÇÕES SOBRE SINAIS E SINTOMAS</div>
                  
                    <div class="borda2">  <?php
                    
                 
                    
                    
                    
                    ?> </div>
                </div>
                <div class="collum">
                    <div class="preto2">INFORMAÇÕES SOBRE TIPO DE OCORRÊNCIA</div>
                    <div class="borda2"></div>
                </div>
            </div>
            <div class="row">
                <div class="collum">
                    <div class="preto2">INFORMAÇÕES SOBRE GLASGOW MENOR DE 5 ANOS</div>
                    <div class="borda2"></div>
                </div>
                <div class="collum">
                    <div class="preto2">INFORMAÇÕES SOBRE GLASGOW MAIOR DE 5 ANOS</div>
                    <div class="borda2"></div>
                </div>
            </div>
            <div class="row">
                <div class="collum">
                    <div class="preto2">INFORMAÇÕES SOBRE SINAIS VITAIS</div>
                    <div class="borda2"></div>
                </div>
                <div class="collum">
                    <div class="preto2">INFORMAÇÕES SOBRE PROBLEMAS SUSPEITOS</div>
                    <div class="borda2"></div>
                </div>
            </div>
            <div class="row">
                <div class="collum">
                    <div class="preto2">INFORMAÇÕES SOBRE FORMA DE CONDUÇÃO</div>
                    <div class="borda2"></div>
                </div>
                <div class="collum">
                    <div class="preto2">INFORMAÇÕES SOBRE LOCALIZAÇÃO DOS TRAUMAS </div>
                    <div class="borda3"></div>
                </div>
            </div>
</body>

</html>