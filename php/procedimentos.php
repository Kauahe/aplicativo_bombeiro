<?php
include("conecta.php");
session_start();

   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
    $opcao1 = isset($_POST["opcao1"]) ? "Aspiração" : "";
    $opcao2 = isset($_POST["opcao2"]) ? "Avaliação inicial" : "";
    $opcao3 = isset($_POST["opcao3"]) ? "Avaliação dirigida" : "";
    $opcao4 = isset($_POST["opcao4"]) ? "Avaliação continuada" : "";
    $opcao5 = isset($_POST["opcao5"]) ? "Chave de Rautek" : "";
    $opcao6 = isset($_POST["opcao6"]) ? "Cânula de Guedel" : "";
    $opcao7 = isset($_POST["opcao7"]) ? "Desobstrução de V.A" : "";
    $opcao8 = isset($_POST["opcao8"]) ? "Emprego do D.E.A" : "";
    $opcao9 = isset($_POST["opcao9"]) ? "Limpeza de ferimento" : "";
    $opcao10 = isset($_POST["opcao10"]) ? "Curativos" : "";
    $opcao11 = isset($_POST["opcao11"]) ? "Compressivo" : "";
    $opcao13 = isset($_POST["opcao12"]) ? "Encravamento" : "";
    $opcao14 = isset($_POST["opcao13"]) ? "Ocular" : "";
    $opcao15 = isset($_POST["opcao14"]) ? "Queimadura" : "";
    $opcao16 = isset($_POST["opcao15"]) ? "Simples" : "";
    $opcao17 = isset($_POST["opcao16"]) ? "3 pontas" : "";
    $opcao18 = isset($_POST["opcao17"]) ? "Imobilizações" : "";
    $opcao19 = isset($_POST["opcao18"]) ? "Membro inferior (D)" : "";
    $opcao20 = isset($_POST["opcao19"]) ? "Membro inferior (E)" : "";
    $opcao21 = isset($_POST["opcao20"]) ? "Membro superior (D)" : "";
    $opcao22 = isset($_POST["opcao21"]) ? "Membro superior (E)" : "";
    $opcao23 = isset($_POST["opcao22"]) ? "Quadril" : "";
    $opcao24 = isset($_POST["opcao23"]) ? "Cervical" : "";
    $opcao25 = isset($_POST["opcao24"]) ? "Maca sobre rodas" : "";
    $opcao26 = isset($_POST["opcao25"]) ? "Maca rígida" : "";
    $opcao27 = isset($_POST["opcao26"]) ? "Ponte" : "";
    $opcao28 = isset($_POST["opcao27"]) ? "Retirado capacete" : "";
    $opcao29 = isset($_POST["opcao28"]) ? "R.C.P" : "";
    $opcao30 = isset($_POST["opcao29"]) ? "Rolamento 90°" : "";
    $opcao31 = isset($_POST["opcao30"]) ? "Rolamento 180°" : "";
    $opcao32 = isset($_POST["opcao31"]) ? "Tomada decisão" : "";
    $opcao33 = isset($_POST["opcao32"]) ? "Tomada choque" : "";
    $opcao34 = isset($_POST["opcao33"]) ? "Uso de cânula" : "";
    $opcao35 = isset($_POST["opcao34"]) ? "Uso colar" : "";
    $opcao36 = isset($_POST["opcao35"]) ? "Uso KED" : "";
    $opcao37 = isset($_POST["opcao36"]) ? "Uso TTF" : "";
    $opcao38 = isset($_POST["opcao37"]) ? "Ventilação suporte" : "";
    $opcao39 = isset($_POST["opcao38"]) ? "Oxigenioterapia LPM" : "";
    $opcao40 = isset($_POST["opcao39"]) ? "Reanimador LPM" : "";
    $opcao41 = isset($_POST["opcao40"]) ? "Meios auxiliares" : "";
    $opcao42 = isset($_POST["opcao41"]) ? "Celesc" : "";
    $opcao43 = isset($_POST["opcao42"]) ? "Def. Civil" : "";
    $opcao44 = isset($_POST["opcao43"]) ? "Samu" : "";
    $opcao45 = isset($_POST["opcao44"]) ? "USA" : "";
    $opcao46 = isset($_POST["opcao45"]) ? "USB" : "";
    $opcao47 = isset($_POST["opcao46"]) ? "CIT" : "";
    $opcao48 = isset($_POST["opcao47"]) ? "Polícia" : "";
    $opcao49 = isset($_POST["opcao48"]) ? "Civil" : "";
    $opcao50 = isset($_POST["opcao49"]) ? "Militar" : "";
    $opcao51 = isset($_POST["opcao50"]) ? "PRE" : "";
    $opcao52 = isset($_POST["opcao51"]) ? "PRF" : "";

    $sql = "INSERT INTO procedimentos VALUES (:id, :num_ocorrencia, :op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :op10, :op11, :op12, :op13, :op14, :op15, :op16, :op17, :op18, :op19, :op20, :op21, :op22, :op23, :op24, :op25, :op26, :op27, :op28, :op29, :op30, :op31, :op32, :op33, :op34, :op35, :op36, :op37, :op38, :op39, :op40, :op41, :op42, :op43, :op44, :op45, :op46, :op47, :op48, :op49, :op50, :op51)";
    $stmt = $pdo->prepare($sql);
    $n=null;
     $stmt->bindParam(':id', $n);
     $stmt->bindParam(':num_ocorrencia', $num_ocorrencia);
     $stmt->bindParam(':op1', $opcao1);
     $stmt->bindParam(':op2', $opcao2);
     $stmt->bindParam(':op3', $opcao3);
     $stmt->bindParam(':op4', $opcao4);
     $stmt->bindParam(':op5', $opcao5);
     $stmt->bindParam(':op6', $opcao6);
     $stmt->bindParam(':op7', $opcao7);
     $stmt->bindParam(':op8', $opcao8);
     $stmt->bindParam(':op9', $opcao9);
     $stmt->bindParam(':op10', $opcao10);
     $stmt->bindParam(':op11', $opcao11);
     $stmt->bindParam(':op12', $opcao12);
     $stmt->bindParam(':op13', $opcao13);
     $stmt->bindParam(':op14', $opcao14);
     $stmt->bindParam(':op15', $opcao15);
     $stmt->bindParam(':op16', $opcao16);
     $stmt->bindParam(':op17', $opcao17);
     $stmt->bindParam(':op18', $opcao18);
     $stmt->bindParam(':op19', $opcao19);
     $stmt->bindParam(':op20', $opcao20);
     $stmt->bindParam(':op21', $opcao21);
     $stmt->bindParam(':op21', $opcao21);
     $stmt->bindParam(':op22', $opcao22);
     $stmt->bindParam(':op23', $opcao23);
     $stmt->bindParam(':op24', $opcao24);
     $stmt->bindParam(':op25', $opcao25);
     $stmt->bindParam(':op26', $opcao26);
     $stmt->bindParam(':op27', $opcao27);
     $stmt->bindParam(':op28', $opcao28);
     $stmt->bindParam(':op29', $opcao29);
     $stmt->bindParam(':op30', $opcao30);
     $stmt->bindParam(':op31', $opcao31);
     $stmt->bindParam(':op32', $opcao32);
     $stmt->bindParam(':op33', $opcao33);
     $stmt->bindParam(':op34', $opcao34);
     $stmt->bindParam(':op35', $opcao35);
     $stmt->bindParam(':op36', $opcao36);
     $stmt->bindParam(':op37', $opcao37);
     $stmt->bindParam(':op38', $opcao38);
     $stmt->bindParam(':op39', $opcao39);
     $stmt->bindParam(':op40', $opcao40);
     $stmt->bindParam(':op41', $opcao41);
     $stmt->bindParam(':op42', $opcao42);
     $stmt->bindParam(':op43', $opcao43);
     $stmt->bindParam(':op44', $opcao44);
     $stmt->bindParam(':op45', $opcao45);
     $stmt->bindParam(':op46', $opcao46);
     $stmt->bindParam(':op47', $opcao47);
     $stmt->bindParam(':op48', $opcao48);
     $stmt->bindParam(':op49', $opcao49);
     $stmt->bindParam(':op50', $opcao50);
     $stmt->bindParam(':op51', $opcao51);

 
     if ($stmt->execute()) {
        // Defina a resposta como sucesso
        echo '<script>alert("Cadastro realizado com sucesso!");</script>';
        $_SESSION["ocorrencia_cadastrada_procedimentos"] = true;
        
        // Redirecione para a página inicial
        header("Location: ../pag_inicial.php");
        exit(); // Certifique-se de sair após o redirecionamento
    } else {
        // Defina a resposta como erro e exiba informações de erro
        $errorInfo = $stmt->errorInfo();
        echo '<script>alert("Erro ao cadastrar: ' . $errorInfo[2] . '");</script>';
    }
?>