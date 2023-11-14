<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adm</title>
    <link rel="stylesheet" href="css/adm.css">
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
            <a href="adm.php"><div class="opcao1"> <b>INÍCIO</b></div></a> 
            <a href="cadastro.html"><div class="opcao2"><b>CADASTRO DE BOMBEIROS</b></div></a>
            <a href="ocorrencia.php"><div class="opcao3"><b>REGISTRO DE OCORRÊNCIAS</b></div></a>
        </div>
    </header>
    <div class="titulo"><b>BOMBEIROS CADASTROS:</b></div>
    <div class="caixa">
        <div class="cdt">
            <div class="add">
                <form>
                    <a href="cadastro.html" class="btn"><b>+ ADICIONAR INTEGRANTE</b></a>
                </form>
               
            </div>
            <img src="..img/lupa.png" class="lupa">
            <div class="marge">
            <select class="select" name="listar" name="ordenacao" id="ordenacao">
            <option value="opcao1">ID</option>
            <option value="opcao2">Nome</option>
            <option value="opcao3">Data</option><select> <!--adicione a função de listar por ordem alfabetica ou id aqui-->
         </div>
        </div>
        <div class="linha"></div>
        <div class="cadastros">
           <?php
            // Inclua o arquivo de conexão com o banco de dados
            include("../php/conecta.php");

            // Função para listar usuários
            function listarUsuarios($pdo) {
                $sql = "SELECT id, nome, email FROM cadastro";
                $stmt = $pdo->query($sql);

                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch()) {
                        echo "<div class='barra' >";
                        echo "<div class='info-usuario'data-id='" . $row["id"] . "' onclick='redirectToProfile(this)'>";
                        echo "<div class='info-id'> " . $row["id"] . "</div>";
                        echo "<div class='info-nome'> " . $row["nome"] . "</div>";
                        echo "<div class='info-email'> " . $row["email"] . "</div>";
                        echo "</div>";
                        echo "<div class='excluir' data-userid='" . $row["id"] . "'>Excluir</div>";
                        echo "</div>";
                    }
                } else {
                    echo "Nenhum usuário encontrado.";
                }
            }

            // Listar usuários
            listarUsuarios($pdo);
            ?>
        </div>
    </div>
</body>
<script>
$(document).ready(function () {
    // Função para listar usuários
    function listarUsuarios(ordenacao) {
        $.ajax({
            url: 'php/listar_usuarios.php',
            method: 'GET',
            data: { ordenacao: ordenacao },
            success: function (data) {
                $('.cadastros').html(data);
            }
        });
    }

    $('.cadastros').on('click', '.excluir', function () {
        var userId = $(this).data('userid');
        if (confirm('Tem certeza de que deseja excluir este usuário?')) {
            $.ajax({
                url: 'php/excluir.php',
                method: 'POST',
                data: { id: userId },
                success: function (data) {
                    // Atualize a lista de usuários após a exclusão
                    listarUsuarios($('#ordenacao').val());
                    alert(data); // Exibe uma mensagem com o resultado da exclusão
                }
            });
        }
    });

    // Quando o valor selecionado no <select> muda, chame a função de ordenação
    $('#ordenacao').on('change', function () {
        listarUsuarios($(this).val());
    });

    // Chame a função listarUsuarios com a ordenação padrão
    listarUsuarios($('#ordenacao').val());
});

function redirectToProfile(element) {
    const userId = element.getAttribute('data-id');
    if (userId) {
        window.location.href = 'perfil_usuario.php?id=' + userId;
    }
}
</script>



