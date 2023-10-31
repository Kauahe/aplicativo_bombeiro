<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tipoOcr.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <title>Document</title>
</head>
<body>
    <header class="tudo">
      
        <div class="imagem">
            <img src="img/logosembrilho.png" width="50px" height="49px"></div>
            <div class="row">
            <h1>SOS BOMBEIROS</h1>
            <h2>NÚCLEO DE OPERAÇÕES AÉREAS E RESGATE</h2>
    </div>
    </header>

    <form action="" id="form1" method="post">
        <br><div class="tit"><b>TIPO DE OCORRÊNCIA</b></div>
        <div class="subtit"><b>PRÉ-HOSPITALAR</b></div><br>
        <div class="degrade">

        <fieldset class="fild"><br>
            <input class="caixa" type="checkbox" id="op1" name="opcao1"> &nbsp; causado por animais <br> <br>
            <input class="caixa" type="checkbox" id="op2" name="opcao2" > &nbsp; com meio de transporte  <br> <br>
            <input class="caixa" type="checkbox" id="op3" name="opcao3"> &nbsp; desmoronamneto/deslizamento  <br> <br>
            <input class="caixa" type="checkbox" id="op4" name="opcao4"> &nbsp; emergência médica  <br> <br>
            <input class="caixa" type="checkbox" id="op5" name="opcao5"> &nbsp; queda de altura <b>(2M)</b>  <br> <br>
            <input class="caixa" type="checkbox" id="op6" name="opcao6"> &nbsp; tentativa de suicídio <br> <br>
            <input class="caixa" type="checkbox" id="op7" name="opcao7"> &nbsp; queda própria altura <br> <br>
            <input class="caixa" type="checkbox" id="op8" name="opcao8"> &nbsp; afogamento  <br> <br>
            <input class="caixa" type="checkbox" id="op9" name="opcao9"> &nbsp; agressão  <br> <br>
            <input class="caixa" type="checkbox" id="op10" name="opcao10"> &nbsp; atropelamento  <br> <br>
            <input class="caixa" type="checkbox" id="op11" name="opcao11"> &nbsp; choque elétrico <br> <br>
            <input class="caixa" type="checkbox" id="op12" name="opcao12"> &nbsp; desabamento <br> <br>
            <input class="caixa" type="checkbox" id="op13" name="opcao13"> &nbsp; doméstico <br> <br>
            <input class="caixa" type="checkbox" id="op14" name="opcao14"> &nbsp; esportivo  <br> <br>
            <input class="caixa" type="checkbox" id="op15" name="opcao15"> &nbsp; intoxicação <br> <br>
            <input class="caixa" type="checkbox" id="op16" name="opcao16"> &nbsp; queda de bicicleta<br> <br>
            <input class="caixa" type="checkbox" id="op17" name="opcao17"> &nbsp; queda de moto <br> <br>
            <input class="caixa" type="checkbox" id="op18" name="opcao18"> &nbsp; queda de nível <b>(+2M)</b> <br> <br>
            <input class="caixa" type="checkbox" id="op19" name="opcao19"> &nbsp; trabalho <br> <br>
            <input class="caixa" type="checkbox" id="op20" name="opcao20"> &nbsp; com meio de transporte  <br> <br>
            <input class="caixa" type="checkbox" id="op21" name="opcao21"> &nbsp; transferência  <br> <br>
        </fieldset>
    </div>
    <div class="btt">
        <button id="envie" type="button" onclick="Gravar()" class="confirma">
            <b><span class="mm"
        id="confirm">CONFIRMAR
    </button></span></b>
    <!-- <input id="cpf" name="cpf" type="hidden" value="<?php //echo("$cpf"); ?>"> -->
</form>

</body>
<script src="jquery.js"></script>
<script>
    function Gravar()
    {
        var dados= $('#form1').serialize();
        
        
$.ajax
({
    type: "POST",
    url: "php/tipoOcr.php",  // Substitua pelo caminho correto
    data: dados,
    dataType: 'json',
    success: function (resposta)
     {
        alert("Dados gravados com sucesso!")
     },
    error: function (xhr, status, error) {
        $("#mensagem").html("Erro ao cadastrar: " + error);
    }
    });
}

    function Sair()
    {
        window.open("pag_inicial.php","_self"), 2000;
    }
</script>


</html>

   