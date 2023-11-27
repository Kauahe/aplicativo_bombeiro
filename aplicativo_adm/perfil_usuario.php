<?php
include("../php/conecta.php");

// ID do usuário recebido na URL
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Consulta para obter informações do usuário com base no ID
    $sql = "SELECT nome, email, cpf, imagem_blob FROM cadastro WHERE id = $userId";
    $result = $pdo->query($sql);

    if ($result->rowCount() > 0) {
        while ($row = $result->fetch()) {
            $nome = $row['nome'];
            $email = $row['email'];
            $cpf = $row['cpf'];
            $imagem_blob = $row['imagem_blob'];
        }
    }
}

$pdo = null; // Feche a conexão PDO

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
</head>

<body>
<div class="fundo-borrado"></div>

    <header>
        <div class="espaco">
            <div class="imagem">
                <img src="../img/logosembrilho.png" width="60px" height="60px">
            </div>
            <div class="row">
                <h1>SOS BOMBEIROS</h1>
                <h2>NÚCLEO DE OPERAÇÕES AÉREAS E RESGATE</h2>
            </div>
            <a href="adm.php"><div class="opcao1"> <b>INÍCIO</b></div></a> 
            <a href="cadastro.html"><div class="opcao2"><b>CADASTRO DE BOMBEIROS</b></div></a>
            <a href="ocorrencia.php"><div class="opcao3"><b>REGISTRO DE OCORRÊNCIAS</b></div></a>
        </div>
    </header>

    <div class="titulo"><b> PERFIL DO BOMBEIRO: 👨🏻‍🚒 </b> </div>
    <div class="caixa">
        <div class="foto">
            <img src="data:image/jpeg;base64,<?php echo base64_encode($imagem_blob); ?>"   class="foto_perfil" width="100%" height="100%" alt="Foto do usuário">
        </div>
        <div class="alterar">
            <div class="alt"  id="alterar" onclick="alterar();"><b>ALTERAR</b></div>
        </div>
    </div>

    <div class="info">
        <div class="nome">
            <div class="tx1"><b>NOME:</b><br><h4><?php echo $nome; ?> </h4><button class="alterar1"onclick="alterarInformacao('nome')">⚙️</button></div>
            <div class="linha1"></div>
            <div class="valor"></div>
        </div>

        <div class="email">
            <div class="tx1"><b>CPF:</b><br><h4><?php echo $cpf; ?> </h4><button class="alterar1"onclick="alterarInformacao('cpf')">⚙️</button></div>
            <div class="linha2  "></div>
            <div class="valor"></div>
        </div>

        <div class="telefone">
            <div class="tx1"><b>EMAIL:</b><br><h4><?php echo $email; ?> </h4><button class="alterar1"onclick="alterarInformacao('email')">⚙️</button></div>
            <div class="linha1"></div>
            <div class="valor"></div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        function alterarImagem() {
            // Aqui você pode abrir um modal ou criar um formulário para o usuário selecionar uma nova imagem
            // Em seguida, envie a imagem para o servidor usando AJAX

            // Exemplo: código para abrir uma janela de seleção de arquivo
            var input = document.createElement('input');
            input.type = 'file';

            input.onchange = function () {
                var file = input.files[0];

                if (file) {
                    var formData = new FormData();
                    formData.append('id', <?php echo $userId; ?>);
                    formData.append('imagem', file);

                    $.ajax({
                        url: 'php/alterar_imagem.php', // Substitua pelo caminho correto do seu script PHP
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            // Atualiza a imagem na página após o sucesso
                            $('.foto_perfil').attr('src', 'data:image/jpeg;base64,' + response);
                            alert('Imagem alterada com sucesso!');
                        },
                        error: function () {
                            alert('Erro ao enviar a imagem.');
                        }
                    });
                }
            };

            input.click();
        }

        // Adicione um listener para o clique no botão de alterar
        $('#alterar').on('click', function () {
            alterarImagem();
        });
    });

        function alterarInformacao(campo) {
            var novoValor = prompt("Informe o novo valor para " + campo + ":");
            if (novoValor !== null) {
                // Aqui você pode enviar a requisição AJAX para atualizar o valor no banco de dados
                // Exemplo utilizando jQuery:
                $.ajax({
                    type: 'POST',
                    url: 'php/atualizar_valor_perfil.php', // Substitua pelo nome do seu arquivo PHP que atualiza os dados no banco
                    data: {
                        campo: campo,
                        novoValor: novoValor,
                        id: '<?php echo $userId; ?>'
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
   
       
    $(document).ready(function () {
        // Função para adicionar ou remover a classe de zoom e exibir/ocultar a div de fundo
        function toggleZoom() {
            $('.foto_perfil').toggleClass('zoomed-in');
            $('.fundo-borrado').toggle();
        }

        // Adiciona um listener para o clique na imagem
        $('.foto_perfil').on('click', function () {
            toggleZoom();
        });

        function alterarImagem() {
            // ... (seu código existente)
        }

        // Adicione um listener para o clique no botão de alterar
        $('#alterar').on('click', function () {
            alterarImagem();
        });
    });

</script>
</html>
