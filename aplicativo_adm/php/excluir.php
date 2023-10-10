
<?php
    include("conecta.php");
    $id=$_GET['id'];
    $comando = $pdo->prepare("DELETE FROM id where id=\"$id\" ");
    $resultado = $comando->execute();
?>