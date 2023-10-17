<?php
include("conecta.php")

if($_SERVER["REQUEST_METHOD"] == "POST")
{

   $opcao1=isset($_POST["op1"]) ? "Causado "
   $opcao2=isset($_POST["op2"]) ? 1: 0;
   $opcao3=isset($_POST["op3"]) ? 1: 0;
   $opcao4=isset($_POST["op4"]) ? 1: 0;
   $opcao5=isset($_POST["op5"]) ? 1: 0;
   $opcao6=isset($_POST["op6"]) ? 1: 0;
   $opcao7=isset($_POST["op7"]) ? 1: 0;
   $opcao8=isset($_POST["op8"]) ? 1: 0;
   $opcao9=isset($_POST["op9"]) ? 1: 0;
   $opcao10=isset($_POST["op10"]) ? 1: 0;
   $opcao11=isset($_POST["op11"]) ? 1: 0;
   $opcao12=isset($_POST["op12"]) ? 1: 0;
   $opcao13=isset($_POST["op13"]) ? 1: 0;
   $opcao14=isset($_POST["op14"]) ? 1: 0;
   $opcao15=isset($_POST["op15"]) ? 1: 0;
   $opcao16=isset($_POST["op16"]) ? 1: 0;
   $opcao17=isset($_POST["op17"]) ? 1: 0;
   $opcao18=isset($_POST["op18"]) ? 1: 0;
   $opcao19=isset($_POST["op19"]) ? 1: 0;
   $opcao20=isset($_POST["op20"]) ? 1: 0;
   $opcao21= _POST(["Outros"]);
 
   echo("{\"r\":\"$op1\"}");
  
}
?>