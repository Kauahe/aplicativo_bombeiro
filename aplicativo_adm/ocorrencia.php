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
            <div class="butao">
                <div class="add">
                    <select id="selectList" class="selecionar" name="list">
                        <option>Selecionar por..</option>
                        <option value="num_ocorrencia">Numero da ocorrencia</option>
                        <option value="data_ocr">Data</option>
                        <option value="nome_pac">Nome</option>
                    </select>
                </div>
              
            </div>
        </div>
        <div class="linha"></div>
        <div class="cadastros" id="ocorrenciasContainer">
            <!-- O conteúdo será preenchido dinamicamente via AJAX -->
        </div>
    </div>
    <script>
        $(document).ready(function () {
            // Função para listar ocorrências com AJAX
            function listarOcorrenciasAJAX(orderBy) {
                $.ajax({
                    url: 'php/listar_ocorrencias_ajax.php',
                    method: 'GET',
                    data: { orderBy: orderBy },
                    success: function (data) {
                        $('#ocorrenciasContainer').html(data);
                    }
                });
            }

            // Ao alterar a opção no select, chama a função AJAX
            $('#selectList').on('change', function () {
                var orderBy = $(this).val();
                listarOcorrenciasAJAX(orderBy);
            });

            // Chamada inicial para listar ocorrências com a ordenação padrão
            listarOcorrenciasAJAX($('#selectList').val());
        });

        // Adicione o restante do seu código jQuery aqui, incluindo a exclusão de ocorrências.
    </script>
</body>
</html>