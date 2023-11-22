<?php
session_start();

// Lista de variáveis de sessão associadas à página inicial
$variaveisPaginaInicial = array(
    'ocorrencia_cadastrada_cadastro',
    'ocorrencia_cadastrada_sinaisSintomas',
    'ocorrencia_cadastrada_glasgow',
    'ocorrencia_cadastrada_tipoOcr',
    'ocorrencia_cadastrada_vitais',
    'ocorrencia_cadastrada_problemas',
    'ocorrencia_cadastrada_cond',
    'ocorrencia_cadastrada_trauma',
    'ocorrencia_cadastrada_procedimentos',
    'ocorrencia_cadastrada_anamnese',
    'ocorrencia_cadastrada_gestacional',
    'ocorrencia_cadastrada_cinematica',
    'ocorrencia_cadastrada_materiais',
    'ocorrencia_cadastrada_termos'
);

// Finaliza as variáveis de sessão associadas à página inicial
foreach ($variaveisPaginaInicial as $variavel) {
    unset($_SESSION[$variavel]);
}

// Se desejar destruir completamente a sessão, utilize session_destroy()
// session_destroy();

// Redireciona de volta para a página inicial
header("Location: ../index.html");
exit();
?>