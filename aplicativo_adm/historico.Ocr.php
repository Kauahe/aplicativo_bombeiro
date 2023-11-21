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
 $opcao56 =$linhas["opcao56"];
 $opcao57 =$linhas["opcao57"];

  
}
 // Consulta para a tabela "problemas_suspeitos"
 $comando = $pdo->prepare("SELECT * FROM problemas WHERE nrOcorrencia='$numOcorrencia'");
 $resultado = $comando->execute();

 while ($linhas = $comando->fetch()) {
        $opf1=$linhas["opcao1"]; 
        $opf2=$linhas["opcao2"] ; 
        $opf3 =$linhas["opcao3"]  ;
        $opf4 =$linhas["opcao4"] ;
        $opf5 =$linhas["opcao5"] ;
        $opf6 =$linhas["opcao6"] ;
        $opf7 =$linhas["opcao7"]  ;
        $opf8 =$linhas["opcao8"];
        $opf9 =$linhas["opcao9"];
        $opf10 =$linhas["opcao10"];
        $Outros = $linhas["Outros"];
       
     // ... (seu código para exibir dados da tabela "problemas_suspeitos")
 }

 // Consulta para a tabela "glasgow_menor_5_anos"
 $comando = $pdo->prepare("SELECT * FROM maior5 WHERE nrOcorrencia='$numOcorrencia'");
 $resultado = $comando->execute();

 while ($linhas = $comando->fetch()) {
 
        $opl1=$linhas["opcao1"]; 
        $opl2=$linhas["opcao2"] ; 
        $opl3 =$linhas["opcao3"]  ;
        $opl4 =$linhas["opcao4"] ;
        $opl5 =$linhas["opcao5"] ;
        $opl6 =$linhas["opcao6"] ;
        $opl7 =$linhas["opcao7"]  ;
        $opl8 =$linhas["opcao8"];
        $opl9 =$linhas["opcao9"];
        $opl10 =$linhas["opcao10"];
        $opl11 =$linhas["opcao11"];
        $opl12 =$linhas["opcao12"];
        $opl13 =$linhas["opcao13"];
        $opl14 =$linhas["opcao14"];
        $opl15 =$linhas["opcao15"];
     // ... (seu código para exibir dados da tabela "glasgow_menor_5_anos")
 }
 $comando = $pdo->prepare("SELECT * FROM menor5 WHERE nrOcorrencia='$numOcorrencia'");
 $resultado = $comando->execute();

 while ($linhas = $comando->fetch()) {
    $opm1=$linhas["opcao1"]; 
    $opm2=$linhas["opcao2"] ; 
    $opm3 =$linhas["opcao3"]  ;
    $opm4 =$linhas["opcao4"] ;
    $opm5 =$linhas["opcao5"] ;
    $opm6 =$linhas["opcao6"] ;
    $opm7 =$linhas["opcao7"]  ;
    $opm8 =$linhas["opcao8"];
    $opm9 =$linhas["opcao9"];
    $opm10 =$linhas["opcao10"];
    $opm11 =$linhas["opcao11"];
    $opm12 =$linhas["opcao12"];
    $opm13 =$linhas["opcao13"];
    $opm14 =$linhas["opcao14"];
    $opm15 =$linhas["opcao15"];
     // ... (seu código para exibir dados da tabela "glasgow_menor_5_anos")
 }

 

 // Consulta para a tabela "sinais_vitais"
 $comando = $pdo->prepare("SELECT * FROM sinaisvitais WHERE nrOcorrencia='$numOcorrencia'");
 $resultado = $comando->execute();
 $opj1 ="";
 $opj2 ="";
 $opj3 ="";
 $opj4 ="";
 $opj5 ="";
 $opj6 ="";
 $opj7 ="";
 $opj8 ="";
 while ($linhas = $comando->fetch()) {
    $opj1=$linhas["opcao1"]; 
    $opj2=$linhas["opcao2"] ; 
    $opj3 =$linhas["opcao3"]  ;
    $opj4 =$linhas["opcao4"] ;
    $opj5 =$linhas["opcao5"] ;
    $opj6 =$linhas["opcao6"] ;
    $opj7 =$linhas["opcao7"]  ;
    $opj8 =$linhas["opcao8"];
     // ... (seu código para exibir dados da tabela "sinais_vitais")
 }

 // Consulta para a tabela "forma_conducao"
 $comando = $pdo->prepare("SELECT * FROM formacond WHERE nrOcorrencia='$numOcorrencia'");
 $resultado = $comando->execute();

 while ($linhas = $comando->fetch()) {
     // ... (seu código para exibir dados da tabela "forma_conducao")
 }

 // Consulta para a tabela "localizacao_traumas"
 $comando = $pdo->prepare("SELECT * FROM traumaadulto WHERE nrOcorrencia='$numOcorrencia'");
 $resultado = $comando->execute();

 while ($linhas = $comando->fetch()) {
    $local1 = $linhas['local1'];
    $local2 = $linhas['local2'];
    $local3 = $linhas['local3'];
    $local4 = $linhas['local4'];

    $lado1 = $linhas['lado1'];
    $lado2 = $linhas['lado2'];
    $lado3 = $linhas['lado3'];
    $lado4 = $linhas['lado4'];

    $face1 = $linhas['face1'];
    $face2 = $linhas['face2'];
    $face3 = $linhas['face3'];
    $face4 = $linhas['face4'];

    $opi1 = $linhas['opcao1'];
    $opi2 = $linhas['opcao2'];
    $opi3 = $linhas['opcao3'];
    $opi4 = $linhas['opcao4'];

     // ... (seu código para exibir dados da tabela "localizacao_traumas")
 }
 $comando = $pdo->prepare("SELECT * FROM anamnese WHERE nrOcorrencia='$numOcorrencia'");
 $resultado = $comando->execute();

 while ($linhas = $comando->fetch()) {
     // ... (seu código para exibir dados da tabela "localizacao_traumas")
 }

$comando = $pdo->prepare("SELECT * FROM tipoocr WHERE nrOcorrencia='$numOcorrencia'");
$resultado = $comando->execute();

while ($linhas = $comando->fetch()) {
    $opk1=$linhas["opcao1"]; 
    $opk2=$linhas["opcao2"] ; 
    $opk3 =$linhas["opcao3"]  ;
    $opk4 =$linhas["opcao4"] ;
    $opk5 =$linhas["opcao5"] ;
    $opk6 =$linhas["opcao6"] ;
    $opk7 =$linhas["opcao7"]  ;
    $opk8 =$linhas["opcao8"];
    $opk9 =$linhas["opcao9"];
    $opk10 =$linhas["opcao10"];
    $opk11 =$linhas["opcao11"];
    $opk12 =$linhas["opcao12"];
    $opk13 =$linhas["opcao13"];
    $opk14 =$linhas["opcao14"];
    $opk15 =$linhas["opcao15"];
    $opk16 =$linhas["opcao16"];
    $opk17 =$linhas["opcao17"];
    $opk18 =$linhas["opcao18"];
    $opk19 =$linhas["opcao19"];
    $opk20 =$linhas["opcao20"];
   


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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
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
            <input type="text" name="nome_pac" value="<?php if ($nome==""){}else echo $nome ?>" id="nome_pac" class="text">
            <button class="alterar" onclick="alterarInformacao('nome_pac')">⚙️</button>

            <BR><BR><div class="minitexto">IDADE DO PACIENTE:</div>
            <input type="number"   value="<?php if ($idade==""){}else echo $idade ?>" id="idade_pac" name="idade_pac" class="text" readonly>
            <button class="alterar"onclick="alterarInformacao('idade_pac')">⚙️</button><BR><BR>
        </div>
            <div class="div2"><BR>
                <div class="minitexto">RG/CPF:</div>
                <input max="14" class="text"  value="<?php if ($cpf==""){}else echo $cpf ?>" type="text" id="cpf" name="cpf" onkeyup="ValidarCPF()" ;>
                <button class="alterar"onclick="alterarInformacao('cpf')">⚙️</button>
                <BR><BR>

                <div class="minitexto">FONE:</div>
                <input max="14" class="text" type="text" id="telefone_pac"  value="<?php if ($telefone==""){}else echo $telefone ?>" name="telefone_pac"
                    onkeyup="ValidarTelefone()" ;><button class="alterar" onclick="alterarInformacao('telefone_pac')">⚙️</button>
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
                  
                    <div class="borda2">  
                    <?php for ($i = 1; $i <= 57; $i++) {
                            $opcao = "opcao$i";
                            
                            if (!empty($$opcao)) {
                                echo "- ". $$opcao. "<br><hr class='linha-separadora'>";
                            }
                        } ?>
                                                
               </div>
                </div>
                <div class="collum">
                    <div class="preto2">INFORMAÇÕES SOBRE TIPO DE OCORRÊNCIA</div>
                    <div class="borda2">
                    <?php for ($i = 1; $i <= 20; $i++) {
                            $opk = "opk$i";
                            
                            if (!empty($$opk)) {
                                echo "- ".$$opk. "<br><hr class='linha-separadora'>";
                            }
                        } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="collum">
                    <div class="preto2">INFORMAÇÕES SOBRE GLASGOW MENOR DE 5 ANOS</div>
                    <div class="borda2">
               
                    <?php for ($i = 1; $i <= 16; $i++) {
                            $opm = "opm$i";
                            
                            if (!empty($$opm)) {
                                echo "- ".$$opm. "<br><hr class='linha-separadora'>";
                            }
                        } ?>
                    </div>
                </div>
                <div class="collum">
                    <div class="preto2">INFORMAÇÕES SOBRE GLASGOW MAIOR DE 5 ANOS</div>
                    <div class="borda2">
                        
                    <?php for ($i = 1; $i <= 16; $i++) {
                            $opl = "opl$i";
                            
                            if (!empty($$opl)) {
                                echo "- ". $$opl. "<br><hr class='linha-separadora'>";
                            }
                        } ?>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="collum">
                    <div class="preto2">INFORMAÇÕES SOBRE SINAIS VITAIS</div>
                    <div class="borda2">
                    PRESSÃO ARTERIAL:&nbsp;
                   <?php if($opj1 == ""){}else echo($opj1); ?>X<?php if($opj2 == ""){}else echo($opj2); ?>&nbsp;MMHG<br>
                   <hr class="linha-separadora">
                   PULSO:&nbsp;
                   <?php if($opj3 == ""){}else echo($opj3); ?>-B.C.P.M<br>
                   <hr class="linha-separadora">
                   RESPIRAÇÃO:&nbsp;
                   <?php if($opj4 == ""){}else echo($opj4); ?>-M.R.M<br>
                   <hr class="linha-separadora">
                   SATURAÇÃO:&nbsp;
                   <?php if($opj5 == ""){}else echo($opj5); ?>%<br>
                   <hr class="linha-separadora">
                   TEMPERATURA:&nbsp;
                   <?php if($opj6== ""){}else echo($opj6); ?>°C<br>
                   <hr class="linha-separadora">
                   PERFUSÃO:&nbsp;
                   <?php if($opj7== ""){}else echo($opj7); ?>
                   <?php if($opj8== ""){}else echo($opj8); ?>
                   <hr class="linha-separadora">

                    </div>
                </div>
                <div class="collum">
                    <div class="preto2">INFORMAÇÕES SOBRE PROBLEMAS SUSPEITOS</div>
                    <div class="borda2">
                    <?php for ($i = 1; $i <= 57; $i++) {
                            $opf = "opf$i";
                            
                            if (!empty($$opf)) {
                                echo "- ".$$opf. "<br><hr class='linha-separadora'>";
                            }
                        } ?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="collum">
                    <div class="preto2">INFORMAÇÕES SOBRE FORMA DE CONDUÇÃO</div>
                    <div class="borda2"></div>
                </div>
                <div class="collum">
                    <div class="preto2">INFORMAÇÕES SOBRE LOCALIZAÇÃO DOS TRAUMAS </div>
                    <div class="borda3">
                        <div class="separador">
                            <h3>LOCAL<h3>
                            <hr class="linha-separadora">
                    <?php for ($i = 1; $i <= 4; $i++) {
                            $local = "local$i";
                            
                            if (!empty($$local)) {
                                echo $$local. "<br><hr class='linha-separadora'>";
                            }
                        } ?>
                        </div>
                        <hr class="linha-separadora">
                        <div class="separador">
                        <h3>Lado<h3>
                        <hr class="linha-separadora">
                        <?php for ($i = 1; $i <= 4; $i++) {
                            $lado = "lado$i";
                            
                            if (!empty($$lado)) {
                                echo $$lado. "<br><hr class='linha-separadora'>";
                            }
                        } ?> 
                         </div>
                         <hr class="linha-separadora">
                        <div class="separador">
                        <h3>FACE<h3>
                        <hr class="linha-separadora">
                        <?php for ($i = 1; $i <= 4; $i++) {
                            $face = "face$i";
                            
                            if (!empty($$face)) {
                                echo $$face. "<br><hr class='linha-separadora'>";
                            }
                        } ?>
                         </div>
                         <hr class="linha-separadora">
                        <div class="separador">
                        <h3>TIPO DE TRAUMA<h3>
                        <hr class="linha-separadora">
                        <?php for ($i = 1; $i <= 4; $i++) {
                            $opi = "opi$i";
                            
                            if (!empty($$opi)) {
                                echo $$opi. "<br><hr class='linha-separadora'>";
                            }
                        } ?> </div>
                        <hr class="linha-separadora">

                    </div>
                </div>
            </div>
</body>

<script>
        function alterarInformacao(campo) {
            var novoValor = prompt("Informe o novo valor para " + campo + ":");
            if (novoValor !== null) {
                // Aqui você pode enviar a requisição AJAX para atualizar o valor no banco de dados
                // Exemplo utilizando jQuery:
                $.ajax({
                    type: 'POST',
                    url: 'atualizar_valor.php', // Substitua pelo nome do seu arquivo PHP que atualiza os dados no banco
                    data: {
                        campo: campo,
                        novoValor: novoValor,
                        numOcorrencia: '<?php echo $numOcorrencia; ?>'
                    },
                    success: function (response) {
                        // Aqui você pode tratar a resposta da requisição, se necessário
                        console.log(response);
                        // Recarregue a página ou atualize apenas os elementos que foram alterados
                        location.reload();
                    },
                    error: function (error) {
                        console.error(error);
                    }
                });
            }
        }
    </script>

</html>