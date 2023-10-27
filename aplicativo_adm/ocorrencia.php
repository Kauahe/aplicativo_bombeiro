<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocorrencias</title>
    <link rel="stylesheet" href="css/ocorrencia.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <div class="espaco">
            <div class="imagem">
                <img src="../img/logosembrilho.png" width="60px" height="60px">
            </div>
            <div class="row">
                <h1>SOS BOMBEIROS</h1>
                <h2>NÚCLEO DE OPERAÇÕES AÉREAS E RESGATE</h2>
            </div>
        </div>
    </header>
    <div class="titulo"><b>OCORRÊNCIAS </b></div>
    <div class="caixa">
        <div class="cdt">
            <div class="add">
            <select id="selectList" name="list">
           
                    <a class="btn"><b>LISTAR POR...</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="../img/32195.png" width="10px" heigth="10px"></a>
                
              
            <option value="opcao1">Opção 1</option>
            <option value="opcao2">Opção 2</option>
            <option value="opcao3">Opção 3</option>
        </select>
               
            </div>
        
        </div>
        <div class="linha"></div>
        <div class="cadastros">
            <?php
            // Inclua o arquivo de conexão com o banco de dados
            include("../php/conecta.php");

            // Função para listar usuários
            function listarOcorrencias($pdo) {
                $sql = "SELECT num_ocorrencia, nome_pac, data_ocr FROM cadastropac";
                $stmt = $pdo->query($sql);

                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch()) {
                        echo "<div class='barra' >";
                        echo "<div class='info-usuario'data-id='" . $row["num_ocorrencia"] . "' onclick='redirectToProfile(this)'>";
                        echo "<div class='info-id'> " . $row["num_ocorrencia"] . "</div>";
                        echo "<div class='info-nome'> " . $row["nome_pac"] . "</div>";
                        echo "<div class='info-email'> " . $row["data_ocr"] . "</div>";
                        echo "</div>";
                        echo "<div class='excluir' data-userid='" . $row["num_ocorrencia"] . "'>Excluir</div>";
                        echo "</div>";
                    }
                } else {
                    echo "Nenhuma ocorrencia encontrada .";
                }
            }

            // Listar usuários
            listarOcorrencias($pdo);
            ?>
        </div>
    </div>
</body>
<script>
$(document).ready(function () {
    $('.cadastro_pac').on('click', '.excluir', function () {
        var userId = $(this).data('userid');
        if (confirm('Tem certeza de que deseja excluir esta ococrrencia?')) {
            $.ajax({
                url: 'php/excluir_ocr.php',
                method: 'POST',
                data: { num_ocorrencia: userId },
                success: function (data) {
                    // Atualize a lista de usuários após a exclusão
                    listarOcorrencias();
                    alert(data); // Exibe uma mensagem com o resultado da exclusão
                }
            });
        }
    });

    // Função para listar usuários novamente após a exclusão
    function listarOcorrencias() {
        $.ajax({
            url: 'php/listar_ocorrencias.php', // Crie um arquivo PHP para listar usuários
            method: 'GET',
            success: function (data) {
                $('.cadastros_pac').html(data); // Atualize a lista de usuários
            }
        });
    }
});
<script>
document.getElementById("showSelect").addEventListener("click", function() {
    var select = document.getElementById("selectList");
    select.style.display = "block";
});
</script>
</script>